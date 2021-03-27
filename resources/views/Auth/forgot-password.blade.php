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
                            <h3>Forgot Password</h3>
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        <form method="post" action="{{ route('password.email') }}">
                            @csrf
                            <p>Forgot your password? No problem. Just enter your email address and we will email you a password reset link.</p>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Email Password Reset Link</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <div class="form-note text-center">Remember your password? <a href="{{ route('login') }}">Login now</a></div>
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
