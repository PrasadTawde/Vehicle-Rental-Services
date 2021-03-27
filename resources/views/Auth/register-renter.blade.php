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
                            <h3>Create an Renter Account</h3>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('register-renter') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" id="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <div class="form-note text-center">Already have an account? <a href="{{ route('login') }}">Log in</a></div>
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
