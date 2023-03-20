<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('blog-dashboard/light/favicon.png') }}" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/morrisjs/morris.css') }}" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet"
        href="{{ asset('blog-dashboard/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/multi-select/css/multi-select.css') }}">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/jquery-spinner/css/bootstrap-spinner.css') }}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet"
        href="{{ asset('blog-dashboard/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet"
        href="{{ asset('blog-dashboard/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/nouislider/nouislider.min.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/select2/select2.css') }}" />

    <!-- Dropzone Css -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/assets/plugins/dropzone/dropzone.css') }}">

    <!--google font-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('blog-dashboard/light/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('blog-dashboard/light/assets/css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('blog-dashboard/light/assets/css/coustam.css') }}">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



</head>

<body class="theme-purple">
    <!-- Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>



    @include('blog-dashboard.layouts.header')
    @yield('content')



    <!-- Jquery Core Js -->
    <script src="{{ asset('blog-dashboard/light/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('blog-dashboard/light/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('blog-dashboard/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script> <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js -->


    <script src="{{ asset('blog-dashboard/assets/plugins/editable-table/mindmup-editabletable.js') }}"></script> <!-- Editable Table Plugin Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->

    <script src="{{ asset('blog-dashboard/assets/plugins/nouislider/nouislider.js') }}"></script> <!-- noUISlider Plugin Js -->
    <script src="{{ asset('blog-dashboard/assets/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->

    <script src="{{ asset('blog-dashboard/light/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('blog-dashboard/light/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
    <script src="{{ asset('blog-dashboard/light/assets/js/pages/tables/editable-table.js') }}"></script>



    <script>
        CKEDITOR.replace('editor1');
    </script>


</body>


</html>
