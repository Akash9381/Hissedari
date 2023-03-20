@extends('admin.layouts.admin_layouts')
@section('title', 'Blog Preview')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Blog Preview

                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog Preview </a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Color Pickers -->
        <div class="row clearfix">
            <div class="col-lg-8 col-md-8 col-sm-8">



                <div class="card single_post">

                    <div class="body p-5">

                        <h3 class="m-t-0 m-b-5"><a href="#">{{$blog['title']}}</a></h3>

                        {!! $blog['description']!!}


                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="body">
                        <div class="form-group form-float">
                            <p class="editor"> features images </p>
                            @if($blog['image'])
                            <img src="{{asset('storage/blog/feature_image/'.$blog['image']) }}">
                            @else
                            <img src="{{asset('admin/light/assets/img/img.jpg')}}">
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>



        <div class="col-lg-3 col-md-3 col-sm-3" style="float: right;">
            <div class="card">

                <div class="body">

                    <div class="row">

                        <div class="col-sm-12 col-md-12 write">
                            <a href="{{url('admin/blog/approved/'.$blog['id'])}}" class="btn btn-success" style="color: white">Approve</a>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>




</section>
@endsection
