<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ config('app.name') }} | @yield('title')</title>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="{!! asset('css/home.css') !!}">
<link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}">
</head>

<body>
	
	@include('layouts.shared.navbar')

	@yield('content')

	@include('layouts.shared.footer')

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script  src="{!! asset('js/script.js') !!}"></script>
	</body>
</html>