<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Modules\CpPanel\Entities\CpOtp;

class Login extends Component
{
    public $CpNumber;
    public $verifyotp = false;
    public $otp_number = true;
    public $mobile;
    public $otp;
    public function mount()
    {
        if (old('mobile')) {
            $this->mobile = old('mobile');
        }
        if (old('otp')) {
            $this->otp = old('otp');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }

    public function SendOtp(Request $request)
    {
        $this->validate(
            [
                'mobile' => 'required|digits:10'
            ],
            [
                'mobile.required' => 'Number is required',
                'mobile.digits' => 'Number will be 10 digits',
            ]
        );

        $otp = random_int(1000, 9999);
        $number = $this->mobile;
        $user = User::where('phone', $this->mobile)->first();
        if ($user) {
            CpOtp::updateOrCreate([
                'number' => $number
            ], [
                'number' => $number,
                'otp'    => $otp,
                'otp_validity' => Carbon::now()->addMinutes(10)
            ]);

            $this->verifyotp = true;
            $this->otp_number = false;
            session()->flash('otp_send', "Your otp is " . $otp);
        } else {
            session()->flash('error', "Not valid user");
        }
    }

    public function VerifyOtp()
    {
        $this->validate(
            [
                'otp' => 'required|digits:4',
                'mobile' => 'required|digits:10'
            ],
            [
                'otp.required' => 'Otp is required',
                'otp.digits' => 'Otp will be 4 digits',
                'mobile.required' => 'Number is required',
                'mobile.digits' => 'Number will be 10 digits',
            ]
        );

        $findata = CpOtp::where('number', $this->mobile)->first();
        if ($findata) {
            if ($findata < Carbon::now()) {
                session()->flash('error', "Your OTP has been expired! please try again!");
            } else {
                if ($findata->otp === $this->otp) {
                    $user = User::where('phone',$this->mobile)->first();
                    if($user){
                        Auth::login($user);
                        if(Auth::user()){
                            if(Auth::user()->hasRole('chanel-partner')){
                                return redirect(route('cp-panel.myrefrences'));
                            }else{
                                return redirect(route('logout'));
                            }
                        }
                    }else{
                        session()->flash('error', "Sommething went wrong");
                    }
                } else {
                    session()->flash('error', "Otp not matched");
                }
            }
        } else {
            session()->flash('error', "Not valid");
        }
    }
}
