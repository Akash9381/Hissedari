<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/bootstrap-submenu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('client-dashboard/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('client-dashboard/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('client-dashboard/fonts/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/boxes-component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/boxes-core.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/initial.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('client-dashboard/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('client-dashboard/img/favicon.png')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('client-dashboard/css/ie10-viewport-bug-workaround.css')}}">
    <script src="{{asset('client-dashboard/js/ie-emulation-modes-warning.js')}}"></script>

</head>

<body>

    @include('frontend.layouts.header')

    <div class="dashboard submit-property">
        <div class="container-fluid ">
            <div class="row">
                @include('client-dashboard.layouts.sidebar')
                @include('client-dashboard.layouts.header')
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Dashboard end -->

    <!-- Full Page Search -->


    <script src="{{asset('client-dashboard/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/bootstrap-submenu.js')}}"></script>
    <script src="{{asset('client-dashboard/js/rangeslider.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('client-dashboard/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.scrollUp.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/leaflet.js')}}"></script>
    <script src="{{asset('client-dashboard/js/leaflet-providers.js')}}"></script>
    <script src="{{asset('client-dashboard/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('client-dashboard/js/dropzone.js')}}"></script>
    <script src="{{asset('client-dashboard/js/slick.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.filterizr.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('client-dashboard/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('client-dashboard/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('client-dashboard/js/boxes-component.js')}}"></script>
    <script src="{{asset('client-dashboard/js/boxes-core.js')}}"></script>
    <script src="{{asset('client-dashboard/js/maps.js')}}"></script>
    <script src="{{asset('client-dashboard/js/app.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('client-dashboard/js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
    <script src="{{asset('client-dashboard/js/ie10-viewport-bug-workaround.js')}}"></script>
    @yield('js')
</body>

</html>
