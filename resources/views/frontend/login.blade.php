<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <title>HISSEDARI - Login Page</title>
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
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/boxes-component.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('frontend/assets/css/boxes-core.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/initial.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('frontend/assets/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="{{asset('frontend/assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 bg-login-ing">
                <div class="informeson">
                    <div class="typing">
                        <h1>About Us</h1>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                    <div class="social-list">
                        {{-- <div class="buttons">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            <a href="#" class="dribbble-bg"><i class="fa fa-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 form-section">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="{{'/'}}">
                            <img src="{{asset('frontend/assets/img/logos/black-logo.png')}}" alt="logo">
                        </a>
                        <h3>Sign Into Your Account</h3>
                        @if (session()->has('error'))
                            <div class="col-sm-12 alert alert-danger">
                                {{session()->get('error')}}
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="col-sm-12 alert alert-success">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        <form action="{{url('user-login')}}" method="POST">
                            @csrf
                            <div class="form-group form-box">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
                            </div>
                            <div class="form-group form-box checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" name="remember" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="{{url('/forgot-password')}}">Forgot Password</a>
                            </div>

                            <div class="form-group">

                               <button class="btn-md btn-theme w-100">Login</button>

                            </div>


                             <div class="google">

                             	<a href="{{'/google'}}"><img width="20px;" src="{{asset('frontend/assets/img/google_icon.svg')}}"> &nbsp; Login With Google</a>

                             </div>

                            <p class="account">Don't have an account?<a href="{{url('/signup')}}"> Register here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/neer-2-html/HTML/main/javascript:void(0);#">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script  src="{{asset('frontend/assets/js/bootstrap-submenu.js')}}"></script>
<script  src="{{asset('frontend/assets/js/rangeslider.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script  src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.easing.1.3.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.scrollUp.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script  src="{{asset('frontend/assets/js/leaflet.js')}}"></script>
<script  src="{{asset('frontend/assets/js/leaflet-providers.js')}}"></script>
<script  src="{{asset('frontend/assets/js/leaflet.markercluster.js')}}"></script>
<script  src="{{asset('frontend/assets/js/dropzone.js')}}"></script>
<script  src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.filterizr.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script  src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
<script  src="{{asset('frontend/assets/js/modernizr.custom.js')}}"></script>
<script  src="{{asset('frontend/assets/js/boxes-component.js')}}"></script>
<script  src="{{asset('frontend/assets/js/boxes-core.js')}}"></script>
<script  src="{{asset('frontend/assets/js/maps.js')}}"></script>
<script  src="{{asset('frontend/assets/js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="{{asset('frontend/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
<!-- Custom javascript -->
<script  src="{{asset('frontend/assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>


</html>
