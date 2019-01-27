@extends('layouts.simple')
@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url('{{asset('media/photos/photo19@2x.jpg'}}');" id="app">
        <div class="row no-gutters justify-content-center bg-primary-dark-op">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                <!-- Sign In Block -->
                <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                    <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                        <!-- Header -->
                        <div class="mb-2 text-center">
                            <a class="link-fx font-w700 font-size-h1" href="index.html">
                                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                        <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="login-username" name="login-username" placeholder="Username">
                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-circle"></i>
                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password">
                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-asterisk"></i>
                                                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                                <div class="custom-control custom-checkbox custom-control-primary">
                                    <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me" checked>
                                    <label class="custom-control-label" for="login-remember-me">Remember Me</label>
                                </div>
                                <div class="font-w600 font-size-sm py-1">
                                    <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-hero-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                </button>
                            </div>
                        </form>
                        <!-- END Sign In Form -->
                        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>
                    </div>
                    <div class="block-content bg-body">
                        <div class="d-flex justify-content-center text-center push">
                            <a class="item item-circle item-tiny mr-1 bg-default" data-toggle="theme" data-theme="default" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xwork" data-toggle="theme" data-theme="assets/css/themes/xwork.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xmodern" data-toggle="theme" data-theme="assets/css/themes/xmodern.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xeco" data-toggle="theme" data-theme="assets/css/themes/xeco.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xsmooth" data-toggle="theme" data-theme="assets/css/themes/xsmooth.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xinspire" data-toggle="theme" data-theme="assets/css/themes/xinspire.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xdream" data-toggle="theme" data-theme="assets/css/themes/xdream.min.css" href="#"></a>
                            <a class="item item-circle item-tiny mr-1 bg-xpro" data-toggle="theme" data-theme="assets/css/themes/xpro.min.css" href="#"></a>
                            <a class="item item-circle item-tiny bg-xplay" data-toggle="theme" data-theme="assets/css/themes/xplay.min.css" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- END Sign In Block -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->

@endsection
