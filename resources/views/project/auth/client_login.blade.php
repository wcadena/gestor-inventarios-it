@extends('layouts.auth')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('Client Login') }}</h4>
            <div class="card-header-action">
                <div class="dropdown card-widgets">
                    <a href="{{route('login')}}" class="btn btn-sm btn-secondary">{{__('User Login')}}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.login') }}">
            @csrf
                <div class="form-group">
                    <label for="emailaddress">{{ __('Email Address') }}</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="emailaddress" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('Enter Your Email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <a href="{{ route('password.request') }}" class="text-muted float-right"><small>{{ __('Forgot your password?') }}</small></a>
                    <label for="password">{{ __('Password') }}</label>
                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" id="password" placeholder="{{ __('Enter Your Password') }}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="checkbox-signin">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> {{ __('Log in') }} </button>
                </div>
            </form>
        </div>
    </div>

@endsection
