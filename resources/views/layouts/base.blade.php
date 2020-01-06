<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta-Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Craft website design" />
	<title>{{ config('app.name') }} | @yield('title')</title>

	 <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="{!! asset('style.css') !!}" rel="stylesheet" type="text/css" media="all" />
	<link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="{!! asset('frontend/img/favicon.ico') !!}">
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->
</head>
<body>

	@yield('content')

	</body>
</html>