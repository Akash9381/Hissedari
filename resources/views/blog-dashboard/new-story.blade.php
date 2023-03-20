@extends('blog-dashboard.layouts.blog-layouts')
@section('title', 'New Story')
@section('content')
    <div class="container-fluid">
        <!-- Color Pickers -->
        @isset($blog)
        <form action="{{ url('user/create-story/'.$blog['id']) }}" method="POST" enctype="multipart/form-data">
        @else
        <form action="{{ url('user/create-story') }}" method="POST" enctype="multipart/form-data">

        @endisset
            @csrf
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 story">
                                    <h1>Write a Blog</h1>
                                </div>
                                <div class="col-sm-12 col-md-6 write">
                                    <button type="submit" class="btn btn-primary btn-round float-right"><a
                                            class="text-white">Publish</a></button>
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
                            <div class="form-group form-float">
                                <p class="editor">Title </p>
                                <div class="form-group form-float">
                                    <input type="text"
                                        @isset($blog)
                                    value="{{ $blog['title'] ?? '' }}"
                                    @endisset
                                        class="form-control" placeholder="Title" name="title" required=""
                                        aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <textarea name="editor1"> @isset($blog)
{{ $blog['description'] ?? '' }}
@endisset </textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <p class="editor">Blog features images </p>
                                <div id="frmFileUpload3" class="dropzone dz-clickable">
                                    <input type="file" name="image">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3> upload.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </section>

@endsection
