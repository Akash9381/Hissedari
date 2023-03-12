<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class PropertyController extends Controller
{

    public function index()
    {
        return view('admin.property-add');
    }

    public function store(Request $request)
    {
        $array = $request->all();
        if ($request->hasFile('property_feature_image')) {
            $filenamewithextension = $request->file('property_feature_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('property_feature_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            // $request->file('property_feature_image')->storeAs('public/property_image',$filenametostore);
            $request->file('property_feature_image')->storeAs('public/property_image/feature_image', $filenametostore);

            $featureimagepath = public_path('storage/property_image/feature_image/' . $filenametostore);
            Image::make($featureimagepath)->resize(520, 357)->save($featureimagepath);
            $array['property_feature_image'] = $filenametostore;
        };
        $array['tenant_title']      = json_encode($array['tenant_title']);
        $array['tenant_value']      = json_encode($array['tenant_value']);
        $array['place']             = json_encode($array['place']);
        $array['distance']          = json_encode($array['distance']);
        $array['price_type']        = json_encode($array['price_type']);
        $array['price_value']       = json_encode($array['price_value']);
        $array['faq_title']         = json_encode($array['faq_title']);
        $array['faq_description']   = json_encode($array['faq_description']);
        $array['property_image']    = json_encode($array['property_image']);
        $array['slug']              = Str::slug($request['property_name']);
        if ($request->hasFile('structure_image')) {
            $filenamewithextension = $request->file('structure_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('structure_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('structure_image')->storeAs('public/property_image/structure_image', $filenametostore);

            $featureimagepath = public_path('storage/property_image/structure_image/' . $filenametostore);
            Image::make($featureimagepath)->resize(820, 300)->save($featureimagepath);
            $array['structure_image'] = $filenametostore;
        };

        if ($request->hasFile('three_d_structure_image')) {
            $filenamewithextension = $request->file('three_d_structure_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            $extension = $request->file('three_d_structure_image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('three_d_structure_image')->storeAs('public/property_image/three_d_structure_image', $filenametostore);

            $featureimagepath = public_path('storage/property_image/three_d_structure_image/' . $filenametostore);
            Image::make($featureimagepath)->resize(820, 300)->save($featureimagepath);
            $array['three_d_structure_image'] = $filenametostore;
        };

        if ($request->hasFile('resource_one')) {
            $image      = $request->file('resource_one');
            $filename   = $image->getClientOriginalName();
            $image->move(public_path('/storage/resource_one'), $filename);
            $array['resource_one'] = $filename;
        };

        if ($request->hasFile('resource_two')) {
            $image      = $request->file('resource_two');
            $filename   = $image->getClientOriginalName();
            $image->move(public_path('/storage/resource_two'), $filename);
            $array['resource_two'] = $filename;
        };
        try {
            $property = Property::create($array);
            if ($request->hasFile('property_image')) {
                foreach ($request->file('property_image') as $image) {
                    $filenamewithextension = $image->getClientOriginalName();
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                    $extension = $image->getClientOriginalExtension();
                    $filenametostore = $filename . '_' . time() . '.' . $extension;
                    $image->storeAs('public/property_image', $filenametostore);

                    $featureimagepath = public_path('storage/property_image/' . $filenametostore);
                    Image::make($featureimagepath)->resize(1300, 500)->save($featureimagepath);
                    $data = new PropertyImage;
                    $data->property_id = $property->id;
                    $data->image = $filenametostore;
                    $data->save();
                }
                $array['property_image'] = json_encode($data);
            };
            return back()->with('success', 'New Property Add Successfully.');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function AllProperty()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        return view('frontend.properties', compact('properties'));
    }

    public function PropertyDetails($id = null, $slug = null)
    {
        $property = Property::with('PropertyImages')->where('id', $id)->first();
        if ($property) {
            return view('frontend.properties-details', compact('property'));
        } else {
            return back()->with('error', 'Invalid Property');
        }
    }

    public function ManagePropertyIndex()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        return view('admin.manage-property', compact('properties'));
    }

    public function ApprovalPropertyIndex()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        return view('admin.property-approval', compact('properties'));
    }

    public function EditProperty($id = null)
    {
        $property = Property::with('PropertyImages')->where('id', $id)->first();
        return view('admin.edit-property', compact('property'));
    }

    public function PropertyImageDelete(Request $request)
    {
        try {
            PropertyImage::where('id', $request->id)->delete();
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }

    public function update($id = null, Request $request)
    {
        $property = Property::where('id', $id)->first();
        if ($property) {
            $array = $request->all();
            if ($request->hasFile('property_feature_image')) {
                $filenamewithextension = $request->file('property_feature_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('property_feature_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                // $request->file('property_feature_image')->storeAs('public/property_image',$filenametostore);
                $request->file('property_feature_image')->storeAs('public/property_image/feature_image', $filenametostore);

                $featureimagepath = public_path('storage/property_image/feature_image/' . $filenametostore);
                Image::make($featureimagepath)->resize(520, 357)->save($featureimagepath);
                $array['property_feature_image'] = $filenametostore;
            } else {
                $array['property_feature_image'] = $property->property_feature_image;
            }
            $array['tenant_title']      = json_encode($array['tenant_title']);
            $array['tenant_value']      = json_encode($array['tenant_value']);
            $array['place']             = json_encode($array['place']);
            $array['distance']          = json_encode($array['distance']);
            $array['price_type']        = json_encode($array['price_type']);
            $array['price_value']       = json_encode($array['price_value']);
            $array['faq_title']         = json_encode($array['faq_title']);
            $array['faq_description']   = json_encode($array['faq_description']);
            $array['slug']              = Str::slug($request['property_name']);

            if ($request->hasFile('structure_image')) {
                $filenamewithextension = $request->file('structure_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('structure_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('structure_image')->storeAs('public/property_image/structure_image', $filenametostore);

                $featureimagepath = public_path('storage/property_image/structure_image/' . $filenametostore);
                Image::make($featureimagepath)->resize(820, 300)->save($featureimagepath);
                $array['structure_image'] = $filenametostore;
            } else {
                $array['structure_image'] = $property->structure_image;
            };

            if ($request->hasFile('three_d_structure_image')) {
                $filenamewithextension = $request->file('three_d_structure_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('three_d_structure_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('three_d_structure_image')->storeAs('public/property_image/three_d_structure_image', $filenametostore);

                $featureimagepath = public_path('storage/property_image/three_d_structure_image/' . $filenametostore);
                Image::make($featureimagepath)->resize(820, 300)->save($featureimagepath);
                $array['three_d_structure_image'] = $filenametostore;
            } else {
                $array['three_d_structure_image'] = $property->three_d_structure_image;
            };

            if ($request->hasFile('resource_one')) {
                $image      = $request->file('resource_one');
                $filename   = $image->getClientOriginalName();
                $image->move(public_path('/Property-Images'), $filename);
                $array['resource_one'] = $filename;
            } else {
                $array['resource_one'] = $property->resource_one;
            };

            if ($request->hasFile('resource_two')) {
                $image      = $request->file('resource_two');
                $filename   = $image->getClientOriginalName();
                $image->move(public_path('/Property-Images'), $filename);
                $array['resource_two'] = $filename;
            } else {
                $array['resource_two'] = $property->resource_two;
            };
            try {
                Property::where('id', $id)->update([
                    'property_type' => $array['property_type'],
                    'property_feature_image' => $array['property_feature_image'],
                    'property_name' => $array['property_name'],
                    'property_location' => $array['property_location'],
                    'property_min_investment' => $array['property_min_investment'],
                    'property_gross_entry' => $array['property_gross_entry'],
                    'property_target_irr' => $array['property_target_irr'],
                    'property_target_multiple' => $array['property_target_multiple'],
                    'property_price' => $array['property_price'],
                    'property_overview' => $array['property_overview'],
                    'property_tenancy' => $array['property_tenancy'],
                    'lease_start' => $array['lease_start'],
                    'lease_lock' => $array['lease_lock'],
                    'lease_end' => $array['lease_end'],
                    'tenant_overview' => $array['tenant_overview'],
                    'tenant_title' => $array['tenant_title'],
                    'tenant_value' => $array['tenant_value'],
                    'property_details' => $array['property_details'],
                    'place' => $array['place'],
                    'distance' => $array['distance'],
                    'location_map' => $array['location_map'],
                    'floor_plans' => $array['floor_plans'],
                    'structure_image' => $array['structure_image'],
                    'three_d_structure_image' => $array['three_d_structure_image'],
                    'price_type' => $array['price_type'],
                    'price_value' => $array['price_value'],
                    'faq_title' => $array['faq_title'],
                    'faq_description' => $array['faq_description'],
                    'resource_one' => $array['resource_one'],
                    'resource_two' => $array['resource_two'],

                ]);
                if ($request->hasFile('property_image')) {
                    foreach ($request->file('property_image') as $image) {
                        $filenamewithextension = $image->getClientOriginalName();
                        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                        $extension = $image->getClientOriginalExtension();
                        $filenametostore = $filename . '_' . time() . '.' . $extension;
                        $image->storeAs('public/property_image', $filenametostore);

                        $featureimagepath = public_path('storage/property_image/' . $filenametostore);
                        Image::make($featureimagepath)->resize(1300, 500)->save($featureimagepath);
                        $data = new PropertyImage;
                        $data->property_id = $id;
                        $data->image = $filenametostore;
                        $data->save();
                    }
                    $array['property_image'] = json_encode($data);
                };
                return back()->with('success', 'Property Update Successfully.');
            } catch (\Exception $e) {
                return back()->with('error', $e->getMessage());
            }
        } else {
            return back()->with('error', 'Invalid Proeprty');
        }
    }
}
