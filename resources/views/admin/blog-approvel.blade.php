@extends('admin.layouts.admin_layouts')
@section('title', 'Blog Approvel')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Blog Approval

                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Blog Approval </a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <!-- Color Pickers -->
        @forelse ($blogs as $blog)
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="{{url('admin/blog-preview/'.$blog['id'])}}">{{$blog['title']}}</a> </h3>
                        <button type="submit" class="btn btn-primary btn-round float-right"><a class="text-white"
                                href="{{url('admin/blog-preview/'.$blog['id'])}}">preview</a></button>
                        <ul class="meta p-3">
                            <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                            <li><a href="javascript:void(0);">(111 words)</a></li>
                            <li><a href="javascript:void(0);">admin: {{$blog['UserBlog']['name']}}</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="#">No Blogs Published Yet.</a> </h3>
                    </div>

                </div>
            </div>
        </div>
        @endforelse
        {{$blogs}}
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="#">What is Lorem Ipsum?</a> </h3>
                        <button type="submit" class="btn btn-primary btn-round float-right"><a class="text-white"
                                href="{{url('admin/blog-preview')}}">preview</a></button>
                        <ul class="meta p-3">
                            <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                            <li><a href="javascript:void(0);">(111 words)</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card single_post">
                    <div class="body">
                        <h3 class="m-t-0 m-b-5"><a href="#">What is Lorem Ipsum?</a> </h3>
                        <button type="submit" class="btn btn-primary btn-round float-right"><a class="text-white"
                                href="blog-preview.html">preview</a></button>
                        <ul class="meta p-3">
                            <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                            <li><a href="javascript:void(0);">(111 words)</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <ul class="body pagination pagination-primary">
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
    </ul>


</section>
@endsection
