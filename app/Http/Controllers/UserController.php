<?php

namespace App\Http\Controllers;

use App\Models\InvertorDetail;
use Illuminate\Http\Request;
use Image;

class UserController extends Controller
{
    public function InsertData(Request $request){
        $array = $request->all();
        try{

        if ($request->hasFile('user_image')) {
            $filenamewithextension = $request->file('user_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('user_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('user_image')->storeAs('public/profile', $filenametostore);
            $featureimagepath = public_path('storage/profile/' . $filenametostore);
            Image::make($featureimagepath)->resize(144, 144)->save($featureimagepath);
            $array['user_image'] = $filenametostore;
        }
        if ($request->hasFile('document_front_image')) {
            $filenamewithextension = $request->file('document_front_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('document_front_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('document_front_image')->storeAs('public/documents', $filenametostore);
            $featureimagepath = public_path('storage/documents/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['document_front_image'] = $filenametostore;
        }
        if ($request->hasFile('document_back_image')) {
            $filenamewithextension = $request->file('document_back_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('document_back_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('document_back_image')->storeAs('public/documents', $filenametostore);
            $featureimagepath = public_path('storage/documents/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['document_back_image'] = $filenametostore;
        }
        if ($request->hasFile('pan_front_image')) {
            $filenamewithextension = $request->file('pan_front_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('pan_front_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('pan_front_image')->storeAs('public/pan', $filenametostore);
            $featureimagepath = public_path('storage/pan/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['pan_front_image'] = $filenametostore;
        }
        if ($request->hasFile('pan_back_image')) {
            $filenamewithextension = $request->file('pan_back_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('pan_back_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('pan_back_image')->storeAs('public/pan', $filenametostore);
            $featureimagepath = public_path('storage/pan/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['pan_back_image'] = $filenametostore;
        }
        if ($request->hasFile('cheque_front_image')) {
            $filenamewithextension = $request->file('cheque_front_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('cheque_front_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('cheque_front_image')->storeAs('public/cheque', $filenametostore);
            $featureimagepath = public_path('storage/cheque/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['cheque_front_image'] = $filenametostore;
        }
        if ($request->hasFile('cheque_back_image')) {
            $filenamewithextension = $request->file('cheque_back_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('cheque_back_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('cheque_back_image')->storeAs('public/cheque', $filenametostore);
            $featureimagepath = public_path('storage/cheque/' . $filenametostore);
            Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
            $array['cheque_back_image'] = $filenametostore;
        }

        $array['credit_card_bank_name'] = json_encode($array['credit_card_bank_name']);
        $array['credit_card_number'] = json_encode($array['credit_card_number']);

        $array['user_id'] = auth()->user()->id;
        $array['email'] = auth()->user()->email;

        $userdata = InvertorDetail::create($array);
        return back()->with('success','Data update successfully');

    }catch(\Exception $e){
        return back()->with('error',$e->getMessage());
    }

    }
}
