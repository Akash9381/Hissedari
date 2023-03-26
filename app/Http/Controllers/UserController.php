<?php

namespace App\Http\Controllers;

use App\Models\InvertorDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Image;

class UserController extends Controller
{
    public function InsertData(Request $request)
    {
        $array = $request->all();
        try {

            if ($request->hasFile('user_image')) {
                $filenamewithextension = $request->file('user_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('user_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('user_image')->storeAs('public/profile', $filenametostore);
                $featureimagepath = public_path('storage/profile/' . $filenametostore);
                Image::make($featureimagepath)->resize(144, 144)->save($featureimagepath);
                $array['user_image'] = $filenametostore;
            }
            if ($request->hasFile('document_front_image')) {
                $filenamewithextension = $request->file('document_front_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('document_front_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('document_front_image')->storeAs('public/documents', $filenametostore);
                $featureimagepath = public_path('storage/documents/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['document_front_image'] = $filenametostore;
            }
            if ($request->hasFile('document_back_image')) {
                $filenamewithextension = $request->file('document_back_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('document_back_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('document_back_image')->storeAs('public/documents', $filenametostore);
                $featureimagepath = public_path('storage/documents/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['document_back_image'] = $filenametostore;
            }
            if ($request->hasFile('pan_front_image')) {
                $filenamewithextension = $request->file('pan_front_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('pan_front_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('pan_front_image')->storeAs('public/pan', $filenametostore);
                $featureimagepath = public_path('storage/pan/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['pan_front_image'] = $filenametostore;
            }
            if ($request->hasFile('pan_back_image')) {
                $filenamewithextension = $request->file('pan_back_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('pan_back_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('pan_back_image')->storeAs('public/pan', $filenametostore);
                $featureimagepath = public_path('storage/pan/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['pan_back_image'] = $filenametostore;
            }
            if ($request->hasFile('cheque_front_image')) {
                $filenamewithextension = $request->file('cheque_front_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('cheque_front_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('cheque_front_image')->storeAs('public/cheque', $filenametostore);
                $featureimagepath = public_path('storage/cheque/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['cheque_front_image'] = $filenametostore;
            }
            if ($request->hasFile('cheque_back_image')) {
                $filenamewithextension = $request->file('cheque_back_image')->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                $extension = $request->file('cheque_back_image')->getClientOriginalExtension();
                $filenametostore = $filename . '_' . time() . '.' . $extension;
                $request->file('cheque_back_image')->storeAs('public/cheque', $filenametostore);
                $featureimagepath = public_path('storage/cheque/' . $filenametostore);
                Image::make($featureimagepath)->resize(400, 162)->save($featureimagepath);
                $array['cheque_back_image'] = $filenametostore;
            }

            $array['credit_card_bank_name'] = json_encode($array['credit_card_bank_name']);
            $array['credit_card_number'] = json_encode($array['credit_card_number']);

            $array['user_id'] = auth()->user()->id;
            $array['email'] = auth()->user()->email;

            $userdata = InvertorDetail::create($array);
            return back()->with('success', 'Data update successfully');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function Profile()
    {
        $user = User::with('InvestorData')->where('id',auth()->user()->id)->first();
        return view('client-dashboard.profile',compact('user'));
    }

    public function BankAccount(){
        $user = User::with('InvestorData')->where('id',auth()->user()->id)->first();
        return view('client-dashboard.linked-payment-account',compact('user'));
    }

    public function InverstorDetails(){
        $user = User::with('InvestorData')->where('id',auth()->user()->id)->first();
        return view('client-dashboard.investor-details',compact('user'));
    }

    public function ForgotPassword(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT ? back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);
    }

    public function UpdatePassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('success', __($status))
        : back()->withErrors(['email' => [__($status)]]);
    }
}
