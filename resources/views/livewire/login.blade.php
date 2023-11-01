<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="content">
        @if ($otp_number)
            <div class="input-group">
                <input type="number" name="mobile" wire:model="mobile" class="form-control"
                    placeholder="Mobile No /Email id">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
            </div>
            @error('mobile')
                <span style="color: #E7515A">{{ $message }}</span>
            @enderror
            <div class="footer text-center">
                <button type="button" wire:click="SendOtp"
                    class="btn btn-primary btn-round  btn-block waves-effect waves-light">Send
                    Otp</button>
            </div>
            <a href="{{route('cp-panel.register')}}" class="text-light">Registration</a>
        @endif
        @if ($verifyotp)
            <div class="input-group">
                <input type="number" name="otp" wire:model="otp" class="form-control" placeholder="Enter OTP">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-email"></i>
                </span>
            </div>
            @if (session()->has('otp_send'))
                <span style="color: #50cd89">{{ session('otp_send') }}</span>
            @endif
            @if (session()->has('error'))
                <span style="color: #50cd89">{{ session('error') }}</span>
            @endif
            @error('otp')
                <span style="color: #E7515A">{{ $message }}</span>
            @enderror
            <div class="footer text-center">
                <button type="button" wire:click="VerifyOtp"
                    class="btn btn-primary btn-round  btn-block waves-effect waves-light">Verify
                    Otp</button>
            </div>
        @endif
    </div>


</div>
