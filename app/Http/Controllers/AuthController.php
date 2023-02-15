<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request){
        $this->Validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $remember = $request->has('remember') ? true : false ;
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
                if(Auth::user()){
                    if(Auth::user()->hasRole('super-admin')){
                        return redirect('admin/property_add');
                    }
                }
        }else{
            return back()->with('error','The provided credentials do not match our records.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
