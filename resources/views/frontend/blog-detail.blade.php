@extends('frontend.layouts.frontend_layouts')
@section('title', $blog['title'])
@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1 class="text-white">{{$blog['title']}} </h1>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- About city estate start -->

    <div class="blog-body top-neg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Blog 1 start -->
                    <div class="blog-1 blog-big">
                        <div class="blog-photo">
                            @if($blog['image'])
                            <img src="{{asset('storage/blog/'.$blog['image']) }}" alt="{{$blog['image']}}" class="img-fluid w-100">
                            @else
                            <img src="{{asset('frontend/assets/img/blog/blog-bg.jpg')}}" alt="blog-img" class="img-fluid w-100">
                            @endif
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="#">{{$blog['title']}}</a>
                            </h3>
                            {!!$blog['description']!!}
                            <br>
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog-social-list">
                                        <span>Share</span>
                                        <a href="#" class="facebook-bg">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="twitter-bg">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="google-bg">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="#" class="linkedin-bg">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                        <a href="#" class="pinterest-bg">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Heading 2 -->

                    <!-- Comments start -->

                    <!-- Contact 2 start -->

                </div>
            </div>
        </div>
    </div>

@endsection
