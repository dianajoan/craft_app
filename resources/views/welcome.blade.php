<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> {{ config('app.name') }} | Diana Joanita</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.ico') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<h1>Welcome <strong>to the Craft</strong></h1>
<div class="auth">
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('login') }}">Login</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
    @endauth

</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>