@extends('frontend.layouts.frontend_layouts')
@section('title', 'Properties Details')
@section('content')


<div class="banner" id="banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item items-bg active" data-bs-interval="3000">
                <!-- <img class="d-block  w-100 h-100" src="img/banner/commercial-building.jpg" alt="banner">-->
                <img src="{{url('Property-Images/'.$property->property_feature_image)}}" class="img-fluid" alt="...">

            </div>
            @foreach(json_decode($property->property_image) as $image)
            <div class="carousel-item items-bg" data-bs-interval="3000">
                <img src="{{url('Property-Images/'.$image)}}" class="img-fluid" alt="...">

            </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</div>

<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class=" banner-detail properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class=" col-lg-12 col-md-12">
                <div class="heading-properties-3">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h1>{{$property->property_name}}</h1>
                        </div>

                    </div>
                    <div class="clearfix">
                        <div class="pull-left">
                            <p><i class="flaticon-pin"></i>{{$property->property_location ?? 'NA'}}</p>
                        </div>
                        <div class="pull-right">
                            <p><span>{{$property->property_area ?? 'NA'}} sq ft</span></p>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <h4 class="text-white">₹ {{$property->property_min_investment ?? 'NA'}}</h4>
                        <p>Min Investment</p>

                    </div>

                    <div class="col-md-3 col-xs-6">
                        <h4 class="text-white">{{$property->property_gross_entry ?? 'NA'}}</h4>
                        <p>Gross Entry Yield</p>

                    </div>

                    <div class="col-md-3 col-xs-6">
                        <h4 class="text-white">{{$property->property_target_irr ?? 'NA'}}</h4>
                        <p>Target IRR*</p>

                    </div>

                    <div class="col-md-3 col-xs-6">
                        <h4 class="text-white">{{$property->property_target_multiple ?? 'NA'}}</h4>
                        <p>Target Multiple*</p>

                    </div>

                </div>

                <div class="row mt-40">
                    <div class="col-sm-6 dec">
                        <div class="col det">
                            ₹ 16,00,00,000 <small>Funded of ₹19,50,000</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Properties details page end -->




<div class="our-team comon-slick  content-area bg-grea-5 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>Overview </h3>
                    {!! $property->property_overview !!}
                </div>
            </div>

        </div>
    </div>
</div>


<div class="services content-area bg-grea-3 mt-1">
    <div class="container">
        <h3 class="pro-title">Tenancy</h3>
        {!! $property->property_tenancy!!}

        <div class="row pro-title-box">
            <div class="col-md-4">
                <div class="service-info-4">
                    <!--<i class="flaticon-apartment"></i>-->
                    <h3 class="title-box mt-3">Lease Start</h3>
                    <p class="box-date">{{$property->lease_start ?? "NA"}}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-info-4">
                    <!-- <i class="flaticon-apartment"></i>-->
                    <h3 class="title-box mt-3">Lock-in End Date </h3>

                    <p class="box-date">{{$property->lease_lock ?? "NA"}}</p>


                </div>
            </div>
            <div class="col-md-4">
                <div class="service-info-4">
                    <!--<i class="flaticon-apartment"></i>-->
                    <h3 class="title-box mt-3">Lease End Date</h3>
                    <p class="box-date">{{$property->lease_end ?? "NA"}}</p>
                </div>
            </div>



        </div>

    </div>

</div>

<div class="our-team comon-slick  content-area bg-grea-5 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>Tenant Overview </h3>
                    {!! $property->tenant_overview!!}
                </div>


                <table class="table table-striped">
                    <tbody>
                        @foreach (json_decode($property->tenant_title) as $key => $tenant_title)
                        <tr>
                            <td>{{$tenant_title}}</td>
                            <td>{{json_decode($property->tenant_value)[$key]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</div>





<div class="our-team comon-slick  content-area  bg-grea-3 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>Property Location </h3>
                    {!! $property->property_details!!}
                </div>
                <table class="table table-success table-striped">
                    <tbody>
                        @foreach (json_decode($property->place) as $key => $place)
                        <tr>
                            <td>{{$place}}</td>
                            <td>{{json_decode($property->distance)[$key]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</div>



<div class="our-team comon-slick  content-area bg-grea-5 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>Floor Plans</h3>
                    {!! $property->floor_plans !!}
                    <strong>{{$property->property_area}} sqft</strong>
                    <p>Total Opportunity Space</p>

                    <div class="row">
                        <div class="col-6"><img src="{{url('Property-Images/'.$property->structure_image)}}" alt="floor-plans" class="img-fluid w-100">
                        </div>
                        <div class="col-6"><img src="{{url('Property-Images/'.$property->three_d_structure_image)}}" alt="floor-plans" class="img-fluid w-100"></div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>



<div class="our-team comon-slick  content-area  bg-grea-3 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>Price </h3>

                </div>


                <table class="table table-success table-striped">
                    <tbody>
                        @foreach (json_decode($property->price_type) as $key => $price_type)
                        <tr>
                            <td>{{$price_type}}</td>
                            <td>{{json_decode($property->price_value)[$key]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </div>
    </div>
</div>


<div class="our-team comon-slick  content-area bg-grea-5 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3>FaQ</h3>
                    <div class="faq-accordion accordion accordion-flush faq-accordion" id="accordionFlushExample">
                        @foreach (json_decode($property->faq_title) as $key => $faq_title)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne-{{$key}}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{$faq_title}}
                                </button>
                            </h2>
                            <div id="flush-collapseOne-{{$key}}" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="p-text">
                                        {{json_decode($property->faq_description)[$key]}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    When will the monthly payouts commence for investors?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="p-text">
                                        Monthly payouts for investors will commence one month after asset
                                        registration.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    What are the growth prospects for Hosur?

                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="p-text">
                                        Hosur is an established hub for manufacturing &amp; warehousing given its
                                        proximity to Bangalore and the highway connectivity. The area continues to
                                        see major growth as evidenced by the recent announcement of several major
                                        projects such as Tata Electronics’s manufacturing plant, Ola Electric, Delta
                                        Electronics, Ether Energy, etc.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What measures have been taken to ensure the project is completed on time?

                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="p-text">
                                        Our partner Avigna provides us with regular updates on the progress of the
                                        developments at the site. Our expert asset management also conducts regular
                                        property inspections to keep track of progress.
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

<div class="banner-detail properties-details-page content-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-sm-6 border-r">
                <div class=" resources">
                    <h3>Resources</h3>
                    <h5>Request to Resources</h5>

                    <table class="table table-success table-striped mt-4">
                        <tbody>
                            <tr>
                                <td> <img src="img/pdfIcon.svg" width="20px"> Investment Memo</td>
                                <td>
                                    <button class="btn"><i class="fa fa-download"></i> Download</button>
                                </td>
                            </tr>

                            <tr>
                                <td> <img src="img/microsoft-excel.svg" width="20px"> Financial Calculator
                                </td>
                                <td><button class="btn"><i class="fa fa-download"></i> Download</button> </td>
                            </tr>





                        </tbody>
                    </table>


                </div>
            </div>


        </div>
    </div>
</div>
@endsection
