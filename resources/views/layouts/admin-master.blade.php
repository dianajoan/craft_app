<!DOCTYPE HTML>
<html>
<head>
    <title> @yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="stylesheet" type="text/css" href="{!! asset('backend/css/bootstrap.css') !!}" media="all">
    <!-- Custom Theme files -->
    <link rel="stylesheet" type="text/css" href="{!! asset('backend/css/style.css') !!}" media="all">
    <!--js-->
    <script src="{!! asset('backend/js/jquery-2.1.1.min.js') !!}"></script> 
    <!--icons-css-->
    <link rel="stylesheet" type="text/css" href="{!! asset('backend/css/font-awesome.css') !!}" >
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('frontend/img/favicon.ico') !!}">
    <script src="{!! asset('backend/js/Chart.min.js') !!}"></script> 
    <!--//charts-->
    <!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
    <!-- Chartinator  -->
    <script src="{!! asset('backend/js/chartinator.js') !!}"></script> 
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
        @media only screen and (min-width: 800px) {
            .header-right, .header-left {
                max-height: 42px;
            }
        }
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="{!! asset('backend/js/skycons.js') !!}"></script> 
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            @include('layouts.shared.admin-header')
            @yield('content')
	        @include('layouts.shared.admin-footer')
        </div>
    </div>
	@include('layouts.shared.admin-side')
    <script>
    var toggle = true;
                
    $(".sidebar-icon").click(function() {                
      if (toggle)
      {
        $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
        $("#menu span").css({"position":"absolute"});
      }
      else
      {
        $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
        setTimeout(function() {
          $("#menu span").css({"position":"relative"});
        }, 400);
      }               
                    toggle = !toggle;
                });
    </script>
    <!--scrolling js-->
	<script src="{!! asset('backend/js/jquery.nicescroll.js') !!}"></script> 
	<script src="{!! asset('backend/js/scripts.min.js') !!}"></script> 
	<!--//scrolling js-->
    <script src="{!! asset('backend/js/bootstrap.js') !!}"></script> 
<!-- mother grid end here-->
</body>
</html>                     