<!DOCTYPE html>
<html lang="en" >
<head>
	<title>@yield('title') - {{ config('app.name') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="{!! asset('css/home.css') !!}">
	<link rel="shortcut icon" href="{!! asset('img/favicon.ico') !!}">
	<style type="text/css">

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media only screen and (min-width: 800px) {
            #logoSmall {
                display: none;
            }
        }

        @media only screen and (max-width: 800px) {
            #logoSec {
                width: 70%;
            }
            #logoBig {
                display: none;
            }
            #logoSmall {
                font-size: 20px;
            }
            #logoSmall > a {
                width: 150px;
                display: block;
                font-size: 35px;
            }
            .site-footer {
                text-align: center;
            }
            .dropdown .dropdown-content {
	            display: block;
	        }
        }
    </style>
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