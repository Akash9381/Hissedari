<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RealEstate, Admin, Dashboard, template, UI kit, RealEstate Admin, Bootstrap 4x">
    <meta name="author" content="Thememakker">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('admin/light/favicon.ico')}}" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Morris Chart Css-->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morrisjs/morris.css')}}" />
    <!-- Colorpicker Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/multi-select/css/multi-select.css')}}">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/jquery-spinner/css/bootstrap-spinner.css')}}">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
    <!-- noUISlider Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/nouislider/nouislider.min.css')}}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/select2/select2.css')}}" />

    <!-- Dropzone Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/dropzone/dropzone.css')}}">

    <!--google font-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/light/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/light/assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{asset('admin/light/assets/css/coustam.css')}}">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    @yield('css')


</head>

<body class="theme-purple">
    <!-- Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    @yield('content')

@yield('js')

</body>


</html>

