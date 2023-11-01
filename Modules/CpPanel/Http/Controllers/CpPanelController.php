<?php

namespace Modules\CpPanel\Http\Controllers;

use App\Exports\CpReferanceExcel;
use App\Exports\MyRefrenceSample;
use App\Imports\MyRefrenceImport;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\CpPanel\Entities\CpCorporateOfficeAddress;
use Modules\CpPanel\Entities\CpDocument;
use Modules\CpPanel\Entities\CpPanel;
use Modules\CpPanel\Entities\CpRegisterOfficeAddress;
use Maatwebsite\Excel\Facades\Excel;
use Modules\CpPanel\Entities\CpReference;
use Image;
use Modules\CpPanel\Entities\CpBankDetail;

class CpPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('cppanel::login');
    }

    public function Profile(){
        $cpdatas = User::where('id',Auth::user()->id)->with('CpData')->with('CpBankDetails')->with('CpDocuments')->with('CpCorporateOffice')->with('CpRegisterOffice')->first();
        return view('cppanel::profile', compact('cpdatas'));        
    }

    public function Sample(){
      $data = Excel::download(new MyRefrenceSample,'reference_table.xlsx');
      return $data;
    }

    public function Export(){
        $data = Excel::download(new CpReferanceExcel,'referance_table.xlsx');
        return $data;
    }

    public function Import(Request $request){
        $cp = CpPanel::where('user_id',Auth::user()->id)->first();        
        $data = Excel::import(new MyRefrenceImport($cp),$request->file('excel'));
        return back()->with('success','Data Import Successfully!');
    }

    public function Reference(){
        $rfrs = CpReference::where('user_id',Auth::user()->id)->get();
        return view('cppanel::references-table',compact('rfrs'));
    }

    public function CpReferance($id = null){
        $referances = CpReference::where('user_id',$id)->paginate(20);
        return view('admin.cp-refrences',compact('referances'));
    }

    public function register()
    {
        return view('cppanel::registration');
    }

    public function CpList(){
        $cpdatas = User::whereHas('roles' , function($q){
            $q->whereName('chanel-partner');
        })->with('CpData')->with('CpRegisterOffice')->paginate(20);
        return view('admin.cp-list',compact('cpdatas'));
    }

    public function CpReferanceDelete($id = null){
        CpReference::where('id', $id)->delete();
        return back()->with('success', 'Data deleted successfuly!');
    }

    public function Summary(){
        $cpdatas = User::where('id',Auth::user()->id)->with('CpData')->with('CpBankDetails')->with('CpDocuments')->with('CpCorporateOffice')->with('CpRegisterOffice')->first();
        return view('cppanel::profile-summary',compact('cpdatas'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'name'          => 'required|min:3',   
                'email'         => 'required|email',   
                'number'        => 'required|digits:10|unique:users,phone', 
                'company_name'  => 'required',  
                'password'      => 'required|min:4|confirmed',   
                'password_confirmation' => 'required|min:4',   
            ]
        );
        try{
            $data = new User();
            $data->name = $request['name'];
            $data->email = $request['email'];
            $data->phone = $request['number'];
            $data->password = Hash::make($request['name']);
            $data->save();
            $data->assignRole(['chanel-partner','user']);
            $cp = new CpPanel();
            $cp->user_id        = $data->id;
            $cp->referral_code  = "CP".substr(number_format(time() * rand(),0,'',''),0,6);
            $cp->company_name   = $request->company_name;
            $cp->status         = 'no';
            $cp->save();
            return back()->with('success','Chanel partner register successfully! Please login');            
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }   

    public function Delete($id = null){
        try{
            CpReference::where('id',$id)->delete();
            return back()->with('success','Data deleted successfully!');
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('cppanel::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('cppanel::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function SummaryUpdate(Request $request)
    {
        $auth_id = Auth::user()->id;
        $array = $request->all();
        try{
            if ($request->hasFile('pan_card_photo')) {
                $filenamewithextension = $request->file('pan_card_photo')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                $extension = $request->file('pan_card_photo')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('pan_card_photo')->storeAs('public/pan_card/', $filenametostore);
                
                $featureimagepath = public_path('storage/pan_card/' . $filenametostore);
                $array['pan_card_photo'] = $filenametostore;
            }else{
                $pan_photo = CpPanel::where('user_id',$auth_id)->select('pan_card_photo')->first();
                $array['pan_card_photo'] = $pan_photo['pan_card_photo'];
            };

            if ($request->hasFile('profile')) {
                $filenamewithextension = $request->file('profile')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                $extension = $request->file('profile')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('profile')->storeAs('public/profile/', $filenametostore);
                
                $featureimagepath = public_path('storage/profile/' . $filenametostore);
                $array['profile'] = $filenametostore;
            }else{
                $pan_photo = CpPanel::where('user_id',$auth_id)->select('profile')->first();
                $array['profile'] = $pan_photo['profile'];
            };


            CpPanel::updateOrCreate([
                'user_id' => $auth_id,
            ],[
                'user_id'                   => $auth_id,                
                'mobile_1'                  => $request['mobile_1'],
                'mobile_2'                  => $request['mobile_2'],
                'landline'                  => $request['landline'],
                'email'                     => $request['email'],
                'nature_of_company'         => $request['nature_of_company'],
                'date_of_incorporation'     => $request['date_of_incorporation'],
                'rera_registration_number'  => $request['rera_registration_number'],
                'gst_registration_number'   => $request['gst_registration_number'],
                'company_pan_deatails'      => $request['company_pan_deatails'],
                'company_pan_number'        => $request['company_pan_number'],
                'name_on_pan_card'          => $request['name_on_pan_card'],
                'pan_card_photo'            => $array['pan_card_photo'],
                'profile'                   => $array['profile']
            ]);

            if ($request->hasFile('document_front_side')) {
                $filenamewithextension = $request->file('document_front_side')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                $extension = $request->file('document_front_side')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('document_front_side')->storeAs('public/document_front_side/', $filenametostore);
                
                $featureimagepath = public_path('storage/document_front_side/' . $filenametostore);
                $array['document_front_side'] = $filenametostore;
            }else{
                $pan_photo = CpDocument::where('user_id',$auth_id)->select('document_front_side')->first();
                $array['document_front_side'] = $pan_photo['document_front_side'];
            };

            if ($request->hasFile('document_back_side')) {
                $filenamewithextension = $request->file('document_back_side')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
                $extension = $request->file('document_back_side')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('document_back_side')->storeAs('public/document_back_side/', $filenametostore);
                
                $featureimagepath = public_path('storage/document_back_side/' . $filenametostore);
                $array['document_back_side'] = $filenametostore;
            }else{
                $pan_photo = CpDocument::where('user_id',$auth_id)->select('document_back_side')->first();
                $array['document_back_side'] = $pan_photo['document_back_side'];
            };

            CpDocument::updateOrCreate([
                'user_id' => $auth_id
            ],[
                'user_id'                   => $auth_id,
                'document_type'             => $request['document_type'],
                'document_number'           => $request['document_number'],
                'document_front_side'       => $array['document_front_side'],
                'document_back_side'        => $array['document_back_side'],
            ]);

            CpRegisterOfficeAddress::updateOrCreate([
                'user_id' => $auth_id
            ],[
                'user_id'                   => $auth_id,
                'location'                  => $request['register_location'],
                'office_number'             => $request['register_office_number'],
                'building_name'             => $request['register_building_name'],
                'street'                    => $request['register_street'],
                'country'                   => $request['register_country'],
                'state'                     => $request['register_state'],
                'city'                      => $request['register_city'],
                'pincode'                   => $request['register_pincode'],
                'landmark'                  => $request['register_landmark'],
            ]);

            CpCorporateOfficeAddress::updateOrCreate([
                'user_id' => $auth_id
            ],[
                'user_id'                   => $auth_id,
                'location'                  => $request['corporate_location'],
                'office_number'             => $request['corporate_office_number'],
                'building_name'             => $request['corporate_building_name'],
                'street'                    => $request['corporate_street'],
                'country'                   => $request['corporate_country'],
                'state'                     => $request['corporate_state'],
                'city'                      => $request['corporate_city'],
                'pincode'                   => $request['corporate_pincode'],
                'landmark'                  => $request['corporate_landmark'],
            ]);

            return back()->with('success','Profile Sumary Updated Successfully');

        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function Bank(){
        return view('cppanel::bank');
    }

    public function BankSave(Request $request){

        $auth_id = Auth::user()->id;
        foreach($request->account_number as $key => $account_number){

            // if ($request->hasFile('cancel_cheque_image')) {
            //     $filenamewithextension = $request->file('cancel_cheque_image')->getClientOriginalName();
            //     $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                
            //     $extension = $request->file('cancel_cheque_image')->getClientOriginalExtension();
            //     $filenametostore = $filename . '_' . time() . '.' . $extension;
            //     $request->file('cancel_cheque_image')->storeAs('public/cancel_cheque_image/', $filenametostore);
                
            //     $featureimagepath = public_path('storage/cancel_cheque_image/' . $filenametostore);
            //     $request[$key]['cancel_cheque_image'] = $filenametostore;
            // }
            CpBankDetail::create([
                'user_id'                   => $auth_id,
                'account_number'            => $account_number,
                'ifsc_code'                 => $request['ifsc_code'][$key],
                'bank_name'                 => $request['bank_name'][$key],
                'account_type'              => $request['account_type'][$key],
            ]);
        }
        return back()->with('success','Bank details update successfully!');
    }
}
