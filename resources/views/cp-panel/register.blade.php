<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RealEstate, Admin, Dashboard, template, UI kit, RealEstate Admin, Bootstrap 4x">
    <meta name="author" content="Thememakker">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>HISSEDARI - Fractional Ownership</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('c-panel/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('c-panel/light/assets/css/main-2.css') }}">
    <link rel="stylesheet" href="{{ asset('c-panel/light/assets/css/authentication.css') }}">
    <link rel="stylesheet" href="{{ asset('c-panel/light/assets/css/color_skins.css') }}">
</head>

<body class="theme-purple authentication sidebar-collapse">
    <!-- Navbar -->

    <!-- End Navbar -->
    <div class="page-header">
        <div class="page-header-image" style="background-image:url({{ asset('c-panel/assets/images/login.jpg') }})">
        </div>
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="card-plain">
                    <form class="form" method="" action="#">
                        <div class="header">
                            <div class="logo-container">
                                <img src="{{ asset('c-panel/light/assets/img/logo.png') }}" alt="">
                            </div>
                            <h5>Register</h5>

                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Full Name">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-account-circle"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Email">
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-email"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Mobile Number">

                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Company / Firm Name">


                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-card-travel"></i>
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="password" placeholder="Password" class="form-control" />
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-group">
                                    <input type="password" placeholder="Confirm Password" class="form-control" />
                                    <span class="input-group-addon">
                                        <i class="zmdi zmdi-lock"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="checkbox">
                            <input id="terms" type="checkbox">
                            <label for="terms">
                                I read and agree to the <a class="text-white" href="javascript:void(0);">terms of
                                    usage</a>
                            </label>
                        </div>
                        <div class="footer text-center">
                            <a href="{{ url('cp-panel/my-references') }}"
                                class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('c-panel/light/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('c-panel/light/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script>
        $(".navbar-toggler").on('click', function() {
            $("html").toggleClass("nav-open");
        });
    </script>
</body>


</html>
