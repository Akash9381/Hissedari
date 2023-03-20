<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function UserLogin(Request $request){
        $this->Validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->has('remember') ? true : false ;
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
                if(Auth::user()){
                    if(Auth::user()->hasRole('user')){
                        return redirect('user/stories');
                    }
                }
        }else{
            return back()->with('error','The provided credentials do not match our records.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

    public function Register(Request $request){
        try{
            $request->validate([
                'name' => 'required|min:2',
                'email' => 'required|email',
                'phone' => 'required',
                'password' => 'required'
            ]);

            $array = $request->all();
            if(User::where('email',$request['email'])->first()){
                return back()->with('error', 'Email already exist please login first');
            }else{
                $array['password'] = Hash::make($array['password']);

                $user = User::create($array);
                $user->assignRole('user');
                return redirect('login')->with('success','Your registration has been done successfully');

            }
        }catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }
}
