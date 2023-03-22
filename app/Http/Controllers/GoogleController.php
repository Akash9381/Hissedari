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
            } else {
                $saveUser = User::where('email',$user->getEmail())->update([
                    'google_id' => $user->getId(),

                ]);
            }

            Auth::login($saveUser);
            return redirect('user/portfolio-summary');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
