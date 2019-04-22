<html>
	<head>
		<title>Learning DIY Craft</title>
		<link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
        <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
        
	</head>
	<body>

	@include('layouts.shared.navbar')

	@yield('content')

	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{!! asset('js/npm.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.js') !!}"></script>
	<script>
		$(document).ready(function() {
			// This command is used to initialize some elements and make them work properly $.material.init();
		});
	</script>

	</body>
</html>