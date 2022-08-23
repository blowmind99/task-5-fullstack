@extends('layout-login.base-login')

@section('content')
<div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
    <div class="w-100">
        <!-- Header -->
        <div class="text-center mb-5">
            <p class="mb-3">
                <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
            </p>
            <h1 class="fw-bold mb-2">
                Sign In
            </h1>
            <p class="fw-medium text-muted">
                Welcome, please login or <a href="{{ route('register') }}">sign up</a> for a new
                account.
            </p>
        </div>
        <!-- END Header -->

        <!-- Sign In Form -->
        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
        <div class="row g-0 justify-content-center">
            <div class="col-sm-8 col-xl-4">
                <form class="js-validation-signin" action="{{ route('dashboard') }}"
                    method="POST">
                    @csrf
                    <div class="mb-4">
                        <input type="text"
                            class="form-control form-control-lg form-control-alt py-3"
                            id="login-username" name="email" type="email" placeholder="{{ __('Email Address') }}">
                    </div>
                    <div class="mb-4">
                        <input type="password"
                            class="form-control form-control-lg form-control-alt py-3"
                            id="login-password" name="password" type="password" placeholder="{{ __('Password') }}">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1"
                                href="{{ route('password.request') }}">
                                Forgot Password?
                            </a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Sign In Form -->
    </div>
</div>
@endsection
