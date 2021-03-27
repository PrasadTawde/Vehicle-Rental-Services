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
                            <h3>Reset Password</h3>
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group">
                                <input type="text" required="" class="form-control" id="email" name="email" type="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Reset Password</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->

</div>
<!-- END MAIN CONTENT -->

@endsection
