@extends('layouts.base')

@section('title', 'Register')

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
                <h2>{{ __('Register') }}</h2>
                <p>Enter your details to Register.</p>
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                    <label>{{ __('Name') }}</label>
                    <div class="input-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <label>{{ __('E-Mail Address') }}</label>
                    <div class="input-group">
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>

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
                    <label>{{ __('Confirm Password') }}</label>
                    <div class="input-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>                       
                        <button class="btn btn-danger btn-block" type="submit">{{ __('Register') }}</button >                
                </form>
                <p class="account">By clicking Register, you agree to our <a href="#">Terms & Conditions!</a></p>
                <p class="account1">Aready have an account? <a href="{{ route('login') }}">Login here</a></p>
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