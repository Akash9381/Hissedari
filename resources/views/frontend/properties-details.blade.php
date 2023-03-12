@extends('frontend.layouts.frontend_layouts')
@section('title', 'Properties Details')
@section('content')


    <div class="banner" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                {{-- <div class="carousel-item items-bg active" data-bs-interval="3000">
                    <!-- <img class="d-block  w-100 h-100" src="img/banner/commercial-building.jpg" alt="banner">-->
                    <img src="{{ url('Property-Images/' . $property->property_feature_image) }}" class="img-fluid"
                        alt="{{ $property->property_feature_image }}">
                </div> --}}
                @foreach ($property['PropertyImages'] as $key => $value)
                    <div class="carousel-item items-bg @if ($key == 0) active @endif"
                        data-bs-interval="3000">
                        <img src="{{ asset('/storage/property_image/' . $value['image']) }}" class="img-fluid"
                            alt="{{ $value['image'] }}">

                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
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
                                <h1>{{ $property->property_name }}</h1>
                            </div>

                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <p><i class="flaticon-pin"></i>{{ $property->property_location ?? 'NA' }}</p>
                            </div>
                            <div class="pull-right">
                                <p><span>{{ $property->property_area ?? 'NA' }} sq ft</span></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">₹ {{ $property->property_min_investment ?? 'NA' }}</h4>
                            <p>Min Investment</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">{{ $property->property_gross_entry ?? 'NA' }}</h4>
                            <p>Gross Entry Yield</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">{{ $property->property_target_irr ?? 'NA' }}</h4>
                            <p>Target IRR*</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">{{ $property->property_target_multiple ?? 'NA' }}</h4>
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
            {!! $property->property_tenancy !!}

            <div class="row pro-title-box">
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lease Start</h3>
                        <p class="box-date">{{ $property->lease_start ?? 'NA' }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-info-4">
                        <!-- <i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lock-in End Date </h3>

                        <p class="box-date">{{ $property->lease_lock ?? 'NA' }}</p>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lease End Date</h3>
                        <p class="box-date">{{ $property->lease_end ?? 'NA' }}</p>
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
                        {!! $property->tenant_overview !!}
                    </div>


                    <table class="table table-striped">
                        <tbody>
                            @foreach (json_decode($property->tenant_title) as $key => $tenant_title)
                                <tr>
                                    <td>{{ $tenant_title }}</td>
                                    <td>{{ json_decode($property->tenant_value)[$key] }}</td>
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
                        {!! $property->property_details !!}
                    </div>
                    <table class="table table-success table-striped">
                        <tbody>
                            @foreach (json_decode($property->place) as $key => $place)
                                <tr>
                                    <td>{{ $place }}</td>
                                    <td>{{ json_decode($property->distance)[$key] }}</td>
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
                        <strong>{{ $property->property_area }} sqft</strong>
                        <p>Total Opportunity Space</p>

                        <div class="row">
                            <div class="col-6"><img
                                    src="{{ asset('/storage/property_image/structure_image/' . $property->structure_image) }}"
                                    alt="floor-plans" class="img-fluid w-100">
                            </div>
                            <div class="col-6"><img
                                    src="{{ asset('/storage/property_image/three_d_structure_image/' . $property->three_d_structure_image) }}"
                                    alt="floor-plans" class="img-fluid w-100"></div>
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
                                    <td>{{ $price_type }}</td>
                                    <td>{{ json_decode($property->price_value)[$key] }}</td>
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
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne-{{ $key }}" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            {{ $faq_title }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne-{{ $key }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="p-text">
                                                {{ json_decode($property->faq_description)[$key] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
                                    <td> <img src="{{ asset('frontend/assets/img/pdfIcon.svg') }}" width="20px">
                                        {{ $property->resource_one }}</td>
                                    <td>
                                        <a class="btn" href="{{ asset('/storage/resource_one/' . $property->resource_one) }}"><i
                                                class="fa fa-download"></i> Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <img src="{{ asset('frontend/assets/img/microsoft-excel.svg') }}"
                                            width="20px"> {{ $property->resource_two }}
                                    </td>
                                    <td><a class="btn" href="{{ asset('/storage/resource_two/' . $property->resource_two) }}"><i
                                                class="fa fa-download"></i> Download</a> </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
