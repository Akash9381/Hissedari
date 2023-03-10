<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $properties = Property::orderBy('id','desc')->get();
        return view('frontend.index',compact('properties'));
    }
}
