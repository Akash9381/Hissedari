<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function SpvId(){
        return view('admin.spv-id');
    }
    public function Users(){
        return view('admin.users');
    }

    public function UsersProfile(){
        return view('admin.user-profile');
    }
}
