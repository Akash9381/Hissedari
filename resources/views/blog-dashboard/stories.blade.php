@extends('blog-dashboard.layouts.blog-layouts')
@section('title', 'User Dashboard')
@section('content')
    <div class="container-fluid">
        <!-- Color Pickers -->



        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">

                        <div class="row">
                            <div class="col-sm-12 col-md-6 story">
                                <h1>Your stories</h1>
                            </div>
                            <div class="col-sm-12 col-md-6 write">
                                <button type="submit" class="btn btn-primary btn-round float-right"><a class="text-white"
                                        href="{{ url('user/new-story') }}">Write a story</a></button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link show active" data-toggle="tab"
                                        href="#home">Drafts</a></li>
                                <li class="nav-item"><a class="nav-link show" data-toggle="tab"
                                        href="#Publishe">Published</a></li>


                                <li class="nav-item"><a class="nav-link show" data-toggle="tab" href="#approve">Approve</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in show active" id="home">
                                    @forelse ($blogs as $blog)
                                        @if ($blog['status'] == 'draft')
                                            <div class="blog">
                                                <h6>{{ $blog->title }}</h6>
                                                {!! $blog->description !!}
                                                <ul class="meta">
                                                    <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                                                    <li><a href="javascript:void(0);">(111 words)</a></li>
                                                    <li class="dropdown"> <a href="javascript:void(0);"
                                                            class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                            aria-haspopup="true" aria-expanded="false"><i
                                                                class="zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="{{url('user/new-story/'.$blog['id'])}}"
                                                                    class=" waves-effect waves-block">Edit
                                                                    Drafts </a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class=" waves-effect waves-block">Delete Drafts </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    @empty
                                        <div>
                                            You have no drafts
                                        </div>
                                    @endforelse

                                    <div class="blog">
                                        <h6>What is Lorem Ipsum?</h6>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s with the release
                                            of Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including versions
                                            of Lorem Ipsum.</p>
                                        <ul class="meta">
                                            <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                                            <li><a href="javascript:void(0);">(111 words)</a></li>
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit
                                                            Drafts </a></li>
                                                    <li><a href="javascript:void(0);"
                                                            class=" waves-effect waves-block">Delete Drafts </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div role="tabpanel" class="tab-pane show" id="Publishe">
                                    @forelse ($blogs as $blog)
                                        @if ($blog['status'] == 'published')
                                            <div class="blog">

                                                <h6>{{ $blog['title'] }}</h6>

                                                {!! $blog['description'] !!}
                                                <ul class="meta">
                                                    <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                                                    <li><a href="javascript:void(0);">(111 words)</a></li>
                                                    <li class="dropdown"> <a href="javascript:void(0);"
                                                            class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                            aria-haspopup="true" aria-expanded="false"><i
                                                                class="zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="{{url('user/new-story/'.$blog['id'])}}"
                                                                    class=" waves-effect waves-block">Edit
                                                                    story </a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class=" waves-effect waves-block">Delete story </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    @empty
                                        <div>You haven't published any public stories yet.</div>
                                    @endforelse
                                    <div class="blog">

                                        <h6>What is Lorem Ipsum?</h6>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                                            since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s with the release
                                            of Letraset sheets containing Lorem Ipsum passages, and more recently
                                            with desktop publishing software like Aldus PageMaker including versions
                                            of Lorem Ipsum.</p>
                                        <ul class="meta">
                                            <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                                            <li><a href="javascript:void(0);">(111 words)</a></li>
                                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);"
                                                            class=" waves-effect waves-block">Edit
                                                            story </a></li>
                                                    <li><a href="javascript:void(0);"
                                                            class=" waves-effect waves-block">Delete story </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane show" id="approve">
                                    @forelse ($blogs as $blog)
                                        @if ($blog['status'] == 'approved')
                                            <div class="blog">

                                                <h6>{{ $blog['title'] }}</h6>

                                                {!! $blog['description'] !!}
                                                <ul class="meta">
                                                    <li><a href="javascript:void(0);">Last edited 33 minutes ago</a></li>
                                                    <li><a href="javascript:void(0);">(111 words)</a></li>
                                                    <li class="dropdown"> <a href="javascript:void(0);"
                                                            class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                            aria-haspopup="true" aria-expanded="false"><i
                                                                class="zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="{{url('user/new-story/'.$blog['id'])}}"
                                                                    class=" waves-effect waves-block">Edit
                                                                    story </a></li>
                                                            <li><a href="javascript:void(0);"
                                                                    class=" waves-effect waves-block">Delete story </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    @empty
                                        <p>You haven't approved any public stories yet.</p>
                                    @endforelse
                                </div>
                            </div>
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


    </div>





    </section>



@endsection
