@extends('layouts/layout')

@section('main')

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3></h3>
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                         <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
                         @if (session('status') == 'verification-link-sent')
                            <div style="color: green">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('verification.send') }}">
                            @csrf
                           
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Resend Verification Email</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log out</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->

</div>
<!-- END MAIN CONTENT -->

@endsection
