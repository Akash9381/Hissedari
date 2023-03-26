<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-submenu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/leaflet.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/assets/fonts/bootstrap-icons/bootstrap-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/normalize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/boxes-component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/boxes-core.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/initial.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('frontend/assets/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('frontend/assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->
@include('frontend.layouts.header')
@yield('content')
@include('frontend.layouts.footer')


    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('frontend/assets/js/rangeslider.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.scrollUp.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/leaflet.js')}}"></script>
    <script src="{{asset('frontend/assets/js/leaflet-providers.js')}}"></script>
    <script src="{{asset('frontend/assets/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('frontend/assets/js/dropzone.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.filterizr.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('frontend/assets/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/boxes-component.js')}}"></script>
    <script src="{{asset('frontend/assets/js/boxes-core.js')}}"></script>
    <script src="{{asset('frontend/assets/js/maps.js')}}"></script>
    <script src="{{asset('frontend/assets/js/app.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('frontend/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
    <script src="{{asset('frontend/assets/js/ie10-viewport-bug-workaround.js')}}"></script>



</body>

</html>
