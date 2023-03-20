<?php

namespace App\Http\Controllers;

use App\Models\InvertorDetail;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function SpvId(){
        return view('admin.spv-id');
    }
    public function Users(){
        $users = User::with('InvestorData')->whereHas('roles' , function($q){
            $q->whereName('user');
         })->orderBy('id','desc')->get();
        return view('admin.users',compact('users'));
    }

    public function UsersProfile($id=null){
        $user = User::with('InvestorData')->whereHas('roles' , function($q){
            $q->whereName('user');
         })->where('id',$id)->first();
        return view('admin.user-profile',compact('user'));
    }
}
