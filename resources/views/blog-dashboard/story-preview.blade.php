@extends('blog-dashboard.layouts.blog-layouts')
@section('title','New Story')
@section('content')
        <div class="container-fluid">
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body">

                            <div class="row">
                                <div class="col-sm-12 col-md-6 story">
                                    <h1> <a href="{{url('user/new-story')}}"><img class="back"
                                                src="{{ asset('blog-dashboard/light/assets/img/icon/back.png')}}"></a> Story Preview </h1>

                                </div>
                                <div class="col-sm-12 col-md-6 write">
                                    <button type="submit" class="btn btn-primary btn-round float-right"><a
                                            class="text-white" href="{{url('user/publish/story/'.$blog['id'])}}">Publish Now</a></button>
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


                            <div class="blog">
                                <h6>{{$blog['title']}}</h6>

                                {!!$blog['description']!!}

                            </div>

                            <!--<lable>Overview </lable>
                         <textarea name="editor1"></textarea>-->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">

                        <div class="body">



                            <p>Publishing to: <strong>Author name</strong></p>





                            <!--<lable>Overview </lable>
                         <textarea name="editor1"></textarea>-->
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </section>

@endsection
