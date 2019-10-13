@extends('layouts.base')

@section('title', 'Register')

@section('content')

<!-- main -->
<div class="w3layouts-main"> 
  <div class="bg-layer">
    <h1>{{ __('Register') }}</h1>
    <div class="header-main">
      <div class="main-icon">
        <span class="fa fa-eercast"></span>
      </div>
      <div class="header-left-bottom">
        <form method="post" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
          @csrf 
          <div class="icon1">
            <span class="fa fa-user" {{ $errors->has('name') ? ' is-invalid' : '' }}></span>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Names" required/>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

          </div>
          <div class="icon1">
            <span class="fa fa-user" {{ $errors->has('email') ? ' is-invalid' : '' }}></span>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required />

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

          </div>
          <div class="icon1">
            <span class="fa fa-lock" {{ $errors->has('password') ? ' is-invalid' : '' }}></span>
            <input type="password" name="password" placeholder="Password" required=""/>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>
          <div class="icon1">
            <span class="fa fa-lock" {{ $errors->has('password') ? ' is-invalid' : '' }}></span>
            <input type="password" name="password_confirmation" placeholder="Password" required=""/>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

          </div>
          <div class="login-check">
             <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> I agree to the terms of service</label>
          </div>
          <div class="bottom">
            <button class="btn">Register</button>
          </div>
          <div class="links">
            <p class="right"><a href="{{ route('login') }}">Already user? Login</a></p>
            <div class="clear"></div>
          </div>
        </form> 
      </div>
    </div>
    
    <!-- copyright -->
    <div class="copyright">
      <p>© 2019 {{ config('app.name') }} . All rights reserved | Design by <a href="https://dianajoan.github.io/" target="_blank">Diana Joanita</a></p>
    </div>
    <!-- //copyright --> 
  </div>
</div>  
<!-- //main -->

@endsection