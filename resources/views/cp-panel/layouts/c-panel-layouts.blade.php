<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('c-panel/light/favicon.png')}}" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/morrisjs/morris.css')}}" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/multi-select/css/multi-select.css')}}">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/nouislider/nouislider.min.css')}}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/select2/select2.css')}}" />

    <!-- Dropzone Css -->
    <link rel="stylesheet" href="{{asset('c-panel/assets/plugins/dropzone/dropzone.css')}}">

    <!--google font-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('c-panel/light/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('c-panel/light/assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{asset('c-panel/light/assets/css/coustam.css')}}">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



</head>

<body class="theme-purple">
    <!-- Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

@include('cp-panel.layouts.header')
@include('cp-panel.layouts.sidebar')
@yield('content')



     <!-- Jquery Core Js -->
     <script src="{{asset('c-panel/light/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
     <script src="{{asset('c-panel/light/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

     <script src="{{asset('c-panel/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script> <!-- Bootstrap Colorpicker Js -->
     <script src="{{asset('c-panel/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> <!-- Input Mask Plugin Js -->
     <script src="{{asset('c-panel/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
     <script src="{{asset('c-panel/assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script> <!-- Jquery Spinner Plugin Js -->
     <script src="{{asset('c-panel/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script> <!-- Bootstrap Tags Input Plugin Js -->


     <script src="{{asset('c-panel/assets/plugins/editable-table/mindmup-editabletable.js')}}"></script> <!-- Editable Table Plugin Js -->
     <script src="{{asset('c-panel/assets/plugins/dropzone/dropzone.js')}}"></script> <!-- Dropzone Plugin Js -->

     <script src="{{asset('c-panel/assets/plugins/nouislider/nouislider.js')}}"></script> <!-- noUISlider Plugin Js -->
     <script src="{{asset('c-panel/assets/plugins/select2/select2.min.js')}}"></script> <!-- Select2 Js -->

     <script src="{{asset('c-panel/light/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
     <script src="{{asset('c-panel/light/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
     <script src="{{asset('c-panel/light/assets/js/pages/tables/editable-table.js')}}"></script>

@yield('js')

</body>


</html>
