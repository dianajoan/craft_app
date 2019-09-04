@extends('layouts.base')

@section('title', 'Login')

@section('content')

<div class="signupform">
    <div class="container">
        <!-- main content -->
        <div class="agile_info">
            <div class="w3l_form">
                <div class="left_grid_info">
                    <h1>Manage Your Business Account</h1>
                    <p>Simply create your crafty profile.</p>
                    <img src="{!! asset('images/image.jpg') !!}" alt="" />
                </div>
            </div>
            <div class="w3_info">
                <h2>{{ __('Login') }}</h2>
                <p>Enter your details to login.</p>
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <label>{{ __('E-Mail Address') }}</label>
                    <div class="input-group">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <label>{{ __('Password') }}</label>
                    <div class="input-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div> 
                    <div class="login-check">
                         <label class="checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" checked="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i> </i> {{ __('Remember Me') }}</label>
                    </div>                      
                        <button class="btn btn-danger btn-block" type="submit">{{ __('Login') }}</button >
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>                
                </form>
                <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
                <p class="account1">Dont have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
        <!-- //main content -->
    </div>
    <!-- footer -->
    <div class="footer">
        <p>&copy; 2019 Learning DIY Craft. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">Diana Joanita Nakyazze</a></p>
    </div>
    <!-- footer -->
</div>

@endsection