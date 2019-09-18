<!DOCTYPE html>
<html lang="en" >
    <head>
          <meta charset="UTF-8">
          <title>{{ config('app.name') }} | Diana Joanita</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="icon" type="image/ico" sizes="16x16" href="{{ asset('img/favicon.ico') }}">
    </head>
    <body>
        <!-- partial:index.partial.html -->
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
                                Home
                        </a>
                    </div>
                    @else
                    <div class="container">
                        <a href="{{ route('login') }}" class="btn btn-5">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-5">
                                Register
                            </a>
                        @endif
                    </div>
                    @endauth
                @endif
            </span>
        </div>
        <h1>Welcome <strong>To The Craft</strong></h1>
        <!-- partial -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>
</html>