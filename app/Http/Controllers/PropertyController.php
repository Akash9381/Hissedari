<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{

    public function index(){
        return view('admin.property-add');
    }

    public function store(Request $request){
        $array = $request->all();
        if($request->hasFile('property_feature_image')){
            $image = $request->file('property_feature_image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Property-Images'),$filename);
            $array['property_feature_image'] = $filename;
          };

        if($request->hasFile('property_image')){
            foreach($request->file('property_image') as $image){
                $filename = $image->getClientOriginalName();
                $image->move(public_path('/Property-Images'),$filename);
                $data[] = $filename;
            }
            $array['property_image'] = json_encode($data);
        };

        $array['tenant_title'] = json_encode($array['tenant_title']);
        $array['tenant_value'] = json_encode($array['tenant_value']);
        $array['place'] = json_encode($array['place']);
        $array['distance'] = json_encode($array['distance']);
        $array['price_type'] = json_encode($array['price_type']);
        $array['price_value'] = json_encode($array['price_value']);
        $array['faq_title'] = json_encode($array['faq_title']);
        $array['faq_description'] = json_encode($array['faq_description']);
        $array['slug'] = Str::slug($request['property_name']);
        if($request->hasFile('structure_image')){
            $image = $request->file('structure_image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Property-Images'),$filename);
            $array['structure_image'] = $filename;
          };

        if($request->hasFile('three_d_structure_image')){
            $image = $request->file('three_d_structure_image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Property-Images'),$filename);
            $array['three_d_structure_image'] = $filename;
        };

        if($request->hasFile('resource_one')){
            $image = $request->file('resource_one');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Property-Images'),$filename);
            $array['resource_one'] = $filename;
        };

        if($request->hasFile('resource_two')){
            $image = $request->file('resource_two');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/Property-Images'),$filename);
            $array['resource_two'] = $filename;
        };
        try{
            Property::create($array);
            return back()->with('success','New Property Add Successfully.');
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }

    public function AllProperty(){
        $properties = Property::orderBy('id','desc')->get();
        return view('frontend.properties',compact('properties'));
    }

    public function PropertyDetails($id = null, $slug = null){
        $property = Property::where('id' , $id)->first();
        if($property){
            return view('frontend.properties-details',compact('property'));
        }else{
            return back()->with('error','Invalid Property');
        }
    }

}
