<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title') - {{ config('app.name') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

@include('layouts.shared.styles')

</head>
<body>

<div class="super_container">

    <!-- Header -->

    @include('layouts.shared.header')
    @include('layouts.shared.notification')

    <!-- Menu -->

    @include('layouts.shared.menu')
    
    <!-- Sidebar -->

    @include('layouts.shared.sidebar')

    @yield('content')

    <!-- Footer -->

    @include('layouts.shared.footer')

</div>

@include('layouts.shared.scripts')

</body>
</html>