@extends('frontend.layouts.frontend_layouts')
@section('title', 'Blog')
@section('content')

    <div class="sub-banner">
        <div class="container">
            <div class="breadcrumb-area">
                <h1 class="text-white">Blog</h1>
                <!-- <p class="para">Useful, insightful, and informative articles on CRE Investment tips and trends of Commercial Real Estate.</p>-->

            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <div class="main-title text-center mt-40">
        <a href="{{route('blog.dashboard')}}" class="btn-4 none-btn-992 text-center">post New blog <i class="fa fa-plus"></i></a>

    </div>

    <!-- Blog body start -->
    <div class="blog-body content-area">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-2">
                        <div class="blog-image">
                            @if($blog['image'])
                            <img src="{{asset('storage/blog/feature_image/'.$blog['image']) }}" alt="blog" class="img-fluid bp">
                            @else
                            <img src="{{asset('admin/light/assets/img/img.jpg')}}">
                            @endif
                            <div class="date-box">
                                <span>21</span>Feb 2022
                            </div>

                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">{{$blog['UserBlog']['name']}}</a></strong>
                                    </li>

                                </ul>
                            </div>
                            <h4>
                                <a href="{{url('/blog-details/'.$blog['id'].'/'.$blog['slug'])}}">{{$blog['title']}}</a>
                            </h4>
                            {!!$blog['description']!!}
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12 col-md-12 text-center">
                    <h3>No blogs yet</h3>
                </div>

                @endforelse
                <div class="col-lg-4 col-md-6">
                    <div class="blog-2">
                        <div class="blog-image">
                            <img src="{{asset('frontend/assets/img/blog/blog-2.jpg')}}" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb 2022
                            </div>

                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Karen Paran</a></strong>
                                    </li>

                                </ul>
                            </div>
                            <h4>
                                <a href="{{url('/blog-details')}}">Buying a Best House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-2">
                        <div class="blog-image">
                            <img src="{{asset('frontend/assets/img/blog/blog-1.jpg')}}" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb 2022
                            </div>

                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Maria Blank</a></strong>
                                    </li>


                                </ul>
                            </div>
                            <h4>
                                <a href="#">Find Your Best Real Estate</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-2">
                        <div class="blog-image">
                            <img src="{{asset('frontend/assets/img/blog/blog-3.jpg')}}" alt="blog" class="img-fluid bp">
                            <div class="date-box">
                                <span>21</span>Feb 2022
                            </div>

                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Brandon Miller</a></strong>
                                    </li>


                                </ul>
                            </div>
                            <h4>
                                <a href="#">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                        </div>
                    </div>
                </div>






            </div>
            <!-- Page navigation start -->
            <div class="pagination-box hidden-mb-45 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">Prev</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Blog body end -->
@endsection
