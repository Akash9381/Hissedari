@extends('frontend.layouts.frontend_layouts')
@section('title', 'HISSEDARI - Fractional Ownership')





<!-- Banner start -->

@section('content')

    <div class="banner" id="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-bg active" data-bs-interval="3000">
                    <img class="d-block w-100 h-100" src="{{ asset('frontend/assets/img/banner/commercial-building.jpg') }}"
                        alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                        <div class="carousel-content container align-self-center">
                            <div class="banner-info2">
                                <div class="text-l mt-30">
                                    <h2>Fractional Ownership</h2>
                                    <h3>Re-Defining Real Estate Investments</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item-bg" data-bs-interval="3000">
                    <img class="d-block w-100 h-100" src="{{ asset('frontend/assets/img/banner/holiday-home.jpg') }}"
                        alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                        <div class="carousel-content container align-self-center">
                            <div class="text-l mt-30">
                                <h2>Fractional Ownership</h2>
                                <h3>Re-Defining Real Estate Investments</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item-bg" data-bs-interval="3000">
                    <img class="d-block w-100 h-100" src="{{ asset('frontend/assets/img/banner/office-space.jpg') }}"
                        alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-start">
                        <div class="carousel-content container align-self-center">
                            <div class="text-l mt-30">
                                <h2>Fractional Ownership</h2>
                                <h3>Re-Defining Real Estate Investments</h3>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- Search Section start -->

    </div>






    <!-- Search Section end -->

    <!-- Featured Properties start -->
    <div class="featured-properties content-area-12 bg-grea-5">
        <div class="container">

            <div class="main-title-3">

                <a href="{{ route('property') }}">
                    <h1>Explore investment opportunities</h1>
                </a>
            </div>


            <div class="slick-slider-area">
                <div class="row slick-carousel"
                    data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach ($properties as $property)
                        <div class="slick-slide-item">
                            <div class="property-box-6">
                                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                            <div class="property-photo">
                                                <img src="{{asset('/storage/property_image/feature_image/'.$property->property_feature_image)}}"
                                                    alt="{{$property->property_feature_image}}" class="img-fluid w-100">
                                                <div class="tag">FULLY FUNDED</div>
                                                <h5 class="text-center mt-4">{{$property->property_name}} &nbsp; <a
                                                        href="#"><i title="share" style="color: #538184;"
                                                            class="fa fa-share-square-o"></i></a></h5>

                                                <hr>

                                                <div class="row">

                                                    <div class="col exl-det">{{$property->property_target_irr ?? 'NA'}}</div>
                                                    <div class="col exl-det">Target IRR</div>
                                                    <div class="w-100"></div>

                                                    <div class="col exl-det ">{{$property->property_gross_entry ?? 'NA'}}</div>
                                                    <div class="col exl-det">Gross Entry Yield</div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="back">
                                            <div class="property-inner">
                                                <div class="property-info">
                                                    <h4 class="properties-name">
                                                        <a href="{{url('property/'.$property->id.'/'.$property->slug)}}">{{$property->property_name}}
                                                        </a> &nbsp; <a href="#"><i title="share"
                                                                style="color: #538184;"
                                                                class="fa fa-share-square-o"></i></a>
                                                    </h4>
                                                    <p class="location">
                                                        <a href="{{url('property/'.$property->id.'/'.$property->slug)}}">
                                                            <i class="fa fa-map-marker"></i> {{$property->property_location ?? 'NA'}}
                                                        </a>
                                                    </p>

                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col text-dark">{{$property->property_target_irr ?? 'NA'}}</div>
                                                            <div class="col text-dark">Target IRR</div>
                                                            <div class="w-100"></div>
                                                            <hr>
                                                            <div class="col text-dark">{{$property->property_gross_entry ?? 'NA'}}</div>
                                                            <div class="col text-dark">Gross Entry Yield</div>

                                                            <div class="w-100"></div>
                                                            <hr>
                                                            <div class="col text-dark"> ₹{{$property->property_price ?? 'NA'}}</div>
                                                            <div class="col text-dark">Asset Value</div>

                                                            <div class="w-100"></div>
                                                            <hr>
                                                            <div class="col text-dark">
                                                                <a href="{{url('property/'.$property->id.'/'.$property->slug)}}" class="sign-in"><i
                                                                        class="fa fa-sign-in"></i> View Details </a>
                                                            </div>
                                                            <div class="col text-dark">
                                                                <a href="#" class="sign-in"><i
                                                                        class="fa fa-sign-in"></i> Join Waitlist </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="slick-slide-item">
                        <div class="property-box-6">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="property-photo">
                                            <img src="{{ asset('frontend/assets/img/properties/properties-11.jpg') }}"
                                                alt="photo" class="img-fluid w-100">
                                            <div class="tag">FULLY FUNDED</div>
                                            <h5 class="text-center mt-4">Industrial Opportunity V &nbsp; <a
                                                    href="#"><i title="share" style="color: #538184;"
                                                        class="fa fa-share-square-o"></i></a></h5>

                                            <hr>

                                            <div class="row">

                                                <div class="col exl-det">12.8%</div>
                                                <div class="col exl-det">Target IRR</div>
                                                <div class="w-100"></div>

                                                <div class="col exl-det ">9.4%</div>
                                                <div class="col exl-det">Gross Entry Yield</div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="back">
                                        <div class="property-inner">
                                            <div class="property-info">
                                                <h4 class="properties-name">
                                                    <a href="properties-details.html">Industrial Opportunity V
                                                    </a> &nbsp; <a href="#"><i title="share"
                                                            style="color: #538184;" class="fa fa-share-square-o"></i></a>
                                                </h4>
                                                <p class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i> Zirakpur
                                                    </a>
                                                </p>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-dark">12.8%</div>
                                                        <div class="col text-dark">Target IRR</div>
                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">9.4%</div>
                                                        <div class="col text-dark">Gross Entry Yield</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">₹ 63,50,00,000</div>
                                                        <div class="col text-dark">Asset Value</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">
                                                            <a href="properties-details.html" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> View Details </a>
                                                        </div>
                                                        <div class="col text-dark">
                                                            <a href="#" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> Join Waitlist </a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-6">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="property-photo">
                                            <img src="{{ asset('frontend/assets/img/properties/properties-11.jpg') }}"
                                                alt="photo" class="img-fluid w-100">
                                            <div class="tag">FULLY FUNDED</div>
                                            <h5 class="text-center mt-4">Industrial Opportunity V &nbsp; <a
                                                    href="#"><i title="share" style="color: #538184;"
                                                        class="fa fa-share-square-o"></i></a></h5>

                                            <hr>

                                            <div class="row">

                                                <div class="col exl-det">12.8%</div>
                                                <div class="col exl-det">Target IRR</div>
                                                <div class="w-100"></div>

                                                <div class="col exl-det ">9.4%</div>
                                                <div class="col exl-det">Gross Entry Yield</div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="back">
                                        <div class="property-inner">
                                            <div class="property-info">
                                                <h4 class="properties-name">
                                                    <a href="properties-details.html">Industrial Opportunity V
                                                    </a> &nbsp; <a href="#"><i title="share"
                                                            style="color: #538184;" class="fa fa-share-square-o"></i></a>
                                                </h4>
                                                <p class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i> Zirakpur
                                                    </a>
                                                </p>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-dark">12.8%</div>
                                                        <div class="col text-dark">Target IRR</div>
                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">9.4%</div>
                                                        <div class="col text-dark">Gross Entry Yield</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">₹ 63,50,00,000</div>
                                                        <div class="col text-dark">Asset Value</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">
                                                            <a href="properties-details.html" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> View Details </a>
                                                        </div>
                                                        <div class="col text-dark">
                                                            <a href="#" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> Join Waitlist </a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-6">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="property-photo">
                                            <img src="{{ asset('frontend/assets/img/properties/properties-11.jpg') }}"
                                                alt="photo" class="img-fluid w-100">
                                            <div class="tag">FULLY FUNDED</div>
                                            <h5 class="text-center mt-4">Industrial Opportunity V &nbsp; <a
                                                    href="#"><i title="share" style="color: #538184;"
                                                        class="fa fa-share-square-o"></i></a></h5>

                                            <hr>

                                            <div class="row">

                                                <div class="col exl-det">12.8%</div>
                                                <div class="col exl-det">Target IRR</div>
                                                <div class="w-100"></div>

                                                <div class="col exl-det ">9.4%</div>
                                                <div class="col exl-det">Gross Entry Yield</div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="back">
                                        <div class="property-inner">
                                            <div class="property-info">
                                                <h4 class="properties-name">
                                                    <a href="properties-details.html">Industrial Opportunity V
                                                    </a> &nbsp; <a href="#"><i title="share"
                                                            style="color: #538184;" class="fa fa-share-square-o"></i></a>
                                                </h4>
                                                <p class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i> Zirakpur
                                                    </a>
                                                </p>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-dark">12.8%</div>
                                                        <div class="col text-dark">Target IRR</div>
                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">9.4%</div>
                                                        <div class="col text-dark">Gross Entry Yield</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">₹ 63,50,00,000</div>
                                                        <div class="col text-dark">Asset Value</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">
                                                            <a href="properties-details.html" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> View Details </a>
                                                        </div>
                                                        <div class="col text-dark">
                                                            <a href="#" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> Join Waitlist </a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-6">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="property-photo">
                                            <img src="{{ asset('frontend/assets/img/properties/properties-11.jpg') }}"
                                                alt="photo" class="img-fluid w-100">
                                            <div class="tag">FULLY FUNDED</div>
                                            <h5 class="text-center mt-4">Industrial Opportunity V &nbsp; <a
                                                    href="#"><i title="share" style="color: #538184;"
                                                        class="fa fa-share-square-o"></i></a></h5>

                                            <hr>

                                            <div class="row">

                                                <div class="col exl-det">12.8%</div>
                                                <div class="col exl-det">Target IRR</div>
                                                <div class="w-100"></div>

                                                <div class="col exl-det ">9.4%</div>
                                                <div class="col exl-det">Gross Entry Yield</div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="back">
                                        <div class="property-inner">
                                            <div class="property-info">
                                                <h4 class="properties-name">
                                                    <a href="properties-details.html">Industrial Opportunity V
                                                    </a> &nbsp; <a href="#"><i title="share"
                                                            style="color: #538184;" class="fa fa-share-square-o"></i></a>
                                                </h4>
                                                <p class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i> Zirakpur
                                                    </a>
                                                </p>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-dark">12.8%</div>
                                                        <div class="col text-dark">Target IRR</div>
                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">9.4%</div>
                                                        <div class="col text-dark">Gross Entry Yield</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">₹ 63,50,00,000</div>
                                                        <div class="col text-dark">Asset Value</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">
                                                            <a href="properties-details.html" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> View Details </a>
                                                        </div>
                                                        <div class="col text-dark">
                                                            <a href="#" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> Join Waitlist </a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="property-box-6">
                            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                                <div class="flipper">
                                    <div class="front">
                                        <div class="property-photo">
                                            <img src="{{ asset('frontend/assets/img/properties/properties-11.jpg') }}"
                                                alt="photo" class="img-fluid w-100">
                                            <div class="tag">FULLY FUNDED</div>
                                            <h5 class="text-center mt-4">Industrial Opportunity V &nbsp; <a
                                                    href="#"><i title="share" style="color: #538184;"
                                                        class="fa fa-share-square-o"></i></a></h5>

                                            <hr>

                                            <div class="row">

                                                <div class="col exl-det">12.8%</div>
                                                <div class="col exl-det">Target IRR</div>
                                                <div class="w-100"></div>

                                                <div class="col exl-det ">9.4%</div>
                                                <div class="col exl-det">Gross Entry Yield</div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="back">
                                        <div class="property-inner">
                                            <div class="property-info">
                                                <h4 class="properties-name">
                                                    <a href="properties-details.html">Industrial Opportunity V
                                                    </a> &nbsp; <a href="#"><i title="share"
                                                            style="color: #538184;" class="fa fa-share-square-o"></i></a>
                                                </h4>
                                                <p class="location">
                                                    <a href="properties-details.html">
                                                        <i class="fa fa-map-marker"></i> Zirakpur
                                                    </a>
                                                </p>

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col text-dark">12.8%</div>
                                                        <div class="col text-dark">Target IRR</div>
                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">9.4%</div>
                                                        <div class="col text-dark">Gross Entry Yield</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">₹ 63,50,00,000</div>
                                                        <div class="col text-dark">Asset Value</div>

                                                        <div class="w-100"></div>
                                                        <hr>
                                                        <div class="col text-dark">
                                                            <a href="properties-details.html" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> View Details </a>
                                                        </div>
                                                        <div class="col text-dark">
                                                            <a href="#" class="sign-in"><i
                                                                    class="fa fa-sign-in"></i> Join Waitlist </a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-btn">
                    <div class="slick-prev slick-arrow-buton-2 sab-4">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="slick-next slick-arrow-buton-2 sab-3">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
                <div class="main-title text-center mt-40">
                    <a href="#" class="btn-4 none-btn-992 text-center">Invest Now <i
                            class="fa fa-angle-double-right"></i></a>

                </div>


            </div>
        </div>
    </div>
    <!-- Featured Properties end -->

    <!-- Services start -->
    <div class="services content-area bg-grea-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-3">
                <h1>Benefits of fractional ownership</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3>Flexible Investment Options</h3>
                        <p>You can customize your investment to fit in your budget and needs
                        </p>
                        <!-- <a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!-- <i class="flaticon-apartment"></i>-->
                        <h3>Shared Costs</h3>
                        <p>Cut down on expenses and enjoy luxurious properties at a fraction of the cost
                        </p>
                        <!--<a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3>Access to Exclusive Properties:</h3>
                        <p>Experience the best of luxury real estate without full price tag through our fractional
                            ownership offerings

                        </p>
                        <!--  <a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!-- <i class="flaticon-apartment"></i>-->
                        <h3>Expanded Opportunity To Own: </h3>
                        <p>Diligently selected properties based on location, potential returns and property management
                            for a profitable investment

                        </p>
                        <!-- <a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3>Hassle-Free Ownership</h3>
                        <p>Enjoy the benefits of real estate ownership without the headache of maintenance and upkeep,
                            leaving it all to the experts as Hissedari.com
                        </p>
                        <!--<a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!-- <i class="flaticon-apartment"></i>-->
                        <h3>Profitable Exit</h3>
                        <p>Multiple liquidity options for a profitable exit.
                        </p>
                        <!--<a href="services.html" class="read-more">
                                Read More
                            </a>-->
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Services end -->

    <!-- Popular places section strat -->


    <div class="services services-2 content-area bg-grea-5">
        <div class="container">
            <div class="row">
                <div class="container">

                    <div class="itr_benifits">
                        <div class="left">
                            <div class="main-title-3">
                                <h2>Why to Choose Us</h2>
                            </div>
                            <p class="mt-n4">At Hissedari.com, we are dedicated towards providing our clients with
                                top-notch fractional ownership opportunities and incomparable customer service. With a
                                diverse portfolio of high-quality properties and a team of experienced professionals, we
                                are the go-to choice for anyone looking to invest in fractional ownership. </p>
                        </div>
                        <div class="right">
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/flexibility.png') }}" alt="Flexibility">
                                    <p>flexibility</p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/cost-effective.png') }}"
                                        alt="Cost-effective">
                                    <p> Cost-effective</p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/diverse-property.png') }}"
                                        alt="Diverse property options">
                                    <p>Diverse property options</p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/Professional-management.png') }}"
                                        alt="Professional management">
                                    <p>Professional management</p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/Hassle-free.png') }}"
                                        alt="Hassle-free maintenance">
                                    <p>Hassle-free maintenance</p>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/assets/img/icon/investment-growth.png') }}"
                                        alt="Opportunity for investment growth">
                                    <p>Opportunity for investment growth</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </div>


    <!-- Popular places section end -->

    <!-- Counters strat -->

    <!-- Counters end -->

    <!-- Our team start -->

    <!-- Our team end -->

    <!-- Testimonial 4 start -->




    <div class="testimonial-3 bg-grea-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="testimonial-inner">
                        <!-- Main title -->
                        <div class="main-title-3">
                            <h2>Investors Reviews</h2>
                        </div>

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="testimonial-info">
                                        <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. <i
                                                class="fa fa-quote-right"></i></p>
                                        <img src="{{ asset('frontend/assets/img/avatar/avatar-2.jpg') }}" alt="avator"
                                            class="img-fluid">
                                        <h5>
                                            <a href="#">Anne Brady</a>
                                        </h5>
                                        <h6>Restaurant Owner</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-info">
                                        <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. <i
                                                class="fa fa-quote-right"></i></p>
                                        <img src="{{ asset('frontend/assets/img/avatar/avatar-3.jpg') }}" alt="avator"
                                            class="img-fluid">
                                        <h5>
                                            <a href="#">Carolyn Stone</a>
                                        </h5>
                                        <h6>Web Designer, Uk</h6>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial-info">
                                        <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book. <i
                                                class="fa fa-quote-right"></i></p>
                                        <img src="{{ asset('frontend/assets/img/avatar/avatar-4.jpg') }}" alt="avator"
                                            class="img-fluid">
                                        <h5>
                                            <a href="#">Maikel Alisa</a>
                                        </h5>
                                        <h6>Designer</h6>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="counters-2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-6 col-sm-6 border-r">
                    <div class="counter-box-2">
                        <!--<i class="flaticon-broker"></i>-->
                        <h5 class="advantage">Above all no traffic here because We're leading the Way</h5>


                        <p class="badge bg-success text-white">First In The Region, Proudly! </p>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- Testimonial 4 end -->

    <!-- Blog start -->

    <!-- Blog end -->

    <!-- Intro section start -->

    <!-- Intro section end -->



    <!-- Full Page Search -->

@endsection
