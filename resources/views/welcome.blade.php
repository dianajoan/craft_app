  <!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} | Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{ asset('img/favicon.ico') }}">
</head>
    <body>
        <div class="drop-shadow">
            <div class="glass"></div>
            <span>
                @if (Route::has('login')) 
                    @auth
                    <div class="container">
                        <a href="{{ url('/home') }}" class="btn btn-1">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                                {{ __('Home') }}
                        </a>
                    </div>
                    @else
                    <div class="container">
                        <a href="{{ route('login') }}" class="btn btn-5" style="text-shadow: 1px 1px brown;">
                            {{ __('Login') }}
                        </a>
                        <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('login-form').submit();" class="btn btn-5" style="text-shadow: 1px 1px brown;">
                            {{ __('Guest..') }}
                        </a>

                        <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="email" value="guest@gmail.com">
                            <input type="hidden" name="password" value="dollar">
                            <input type="checkbox" name="checkbox" style="display: none;" checked>
                        </form>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-5" style="text-shadow: 1px 1px brown;">
                                {{ __('Register') }}
                            </a>
                        @endif
                    </div>
                    @endauth
                @endif
            </span>
        </div>
        <h1>Welcome To <strong> {{ config('app.name') }} </strong></h1>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>
</html>