<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function LoginWithGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function GoogleResponse(){
        try {
            $user = Socialite::driver('google')->user();
            $is_user = User::where('email',$user->getEmail())->first();
            if (!$is_user) {
                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId()
                ],
                [
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                ]);
                $saveUser->assignRole('user');
            } else {
                $saveUser = User::where('email',$user->getEmail())->update([
                    'google_id' => $user->getId(),

                ]);
            }
            $newuser = User::where('id',$saveUser->id)->first();
            Auth::loginUsingId($newuser->id);
            return redirect('user/portfolio-summary');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
