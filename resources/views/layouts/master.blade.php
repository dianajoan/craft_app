<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> @yield('title') | Diana Joanita</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}" >
	<!-- Bootstrap-CSS -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/css_slider.css') !!}" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}" media="all">
	<!-- Style-CSS -->
	<link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}" >
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Favicon -->
		<link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}">

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	
	@include('layouts.shared.navbar')

	@yield('content')

	@include('layouts.shared.footer')

	
	</body>
</html>