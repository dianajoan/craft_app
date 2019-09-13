<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta-Tags -->
	<meta charset="UTF-8">
	<title>@yield('title') | Crafty</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>

	@yield('content')

	  <script  src="{!! asset('js/script.js') !!}"></script>
	</body>
</html>