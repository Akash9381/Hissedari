@extends('frontend.layouts.frontend_layouts')
@section('title', 'Properties Details')
@section('content')
    <div class="details-banner">
        <div class="container-fluid">
            <div class="featured-slider row slide-box-btn slider"
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slide slide-box">
                    <div class="banner-img">
                        <img src="{{ asset('frontend/assets/img/properties/properties-1.jpg') }}" alt="banner"
                            class="img-fluid bp">
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="banner-img">
                        <img src="{{ asset('frontend/assets/img/properties/properties-2.jpg') }}" alt="banner"
                            class="img-fluid bp">
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="banner-img">
                        <img src="{{ asset('frontend/assets/img/properties/properties-3.jpg') }}" alt="banner"
                            class="img-fluid bp">
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="banner-img">
                        <img src="{{ asset('frontend/assets/img/properties/properties-4.jpg') }}" alt="banner"
                            class="img-fluid bp">
                    </div>
                </div>
            </div>
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
                                <h1>Relaxing Apartment</h1>
                            </div>

                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <p><i class="flaticon-pin"></i>123 Kathal St. Tampa City, </p>
                            </div>
                            <div class="pull-right">
                                <p><span> 1,200 sq ft</span></p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">₹ 25 Lakhs</h4>
                            <p>Min Investment</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">9.3%</h4>
                            <p>Gross Entry Yield</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">13.2%</h4>
                            <p>Target IRR*</p>

                        </div>

                        <div class="col-md-3 col-xs-6">
                            <h4 class="text-white">1.9x</h4>
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
                        <p>Hissedari.com is regions first tech enabled fractional ownership investment online platform.
                            It is a venture by “Property Mantra Proptech LLP” which is working at the intersection of
                            real estate and technology. It is created by a group of professionals who all share a common
                            passion for wealth creation and have in-depth experience and understanding of investment and
                            technology needs of real estate market.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="services content-area bg-grea-3 mt-1">
        <div class="container">
            <h3 class="pro-title">Tenancy</h3>
            <h4>Lease Structure</h4>
            <p>The extension will follow the existing lease agreement which has 9 years of lease and 7 years of lock-in
                period remaining. The rental escalation is 5% per annum.</p>

            <div class="row pro-title-box">
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lease Start</h3>
                        <p class="box-date">February 2023</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-info-4">
                        <!-- <i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lock-in End Date </h3>

                        <p class="box-date">January 2030</p>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-info-4">
                        <!--<i class="flaticon-apartment"></i>-->
                        <h3 class="title-box mt-3">Lease End Date</h3>
                        <p class="box-date">March 2032</p>
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
                        <p>The tenant is a leading player in the Indian toy manufacturing sector and also caters to
                            various industries for plastic components. With four manufacturing facilities located in and
                            around Bengaluru, this latest addition to its plants will add to its business and growth.
                            The company is heavily export focused, with over 70% of revenue coming from exports.</p>
                    </div>


                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Monthly rent (₹/sqft)</td>
                                <td>₹ 9.225</td>
                            </tr>

                            <tr>
                                <td>Escalation on base rent </td>
                                <td>5% per annum </td>
                            </tr>

                            <tr>
                                <td>Security Deposit</td>
                                <td>Security Deposit</td>
                            </tr>
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
                        <p>The asset is part of the Avigna Industrial & Logistics Park in Hosur, Tamil Nadu. The asset
                            lies next to a state highway and is well connected by road, rail, and air to Bengaluru,
                            Chennai, and other cities in the region. </p>

                        <p>As a major hub of manufacturing, Hosur is home to a large number of Indian and foreign
                            manufacturers and logistics players such as TVS, Ashok Leyland, HUL, Titan, Capterpillar,
                            Wakefit, DHL etc. </p>
                    </div>


                    <table class="table table-success table-striped">
                        <tbody>
                            <tr>
                                <td>Airport </td>
                                <td>8km </td>
                            </tr>

                            <tr>
                                <td>Highway </td>
                                <td> 12km </td>
                            </tr>

                            <tr>
                                <td>Railway Station </td>
                                <td> 6km</td>
                            </tr>
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
                        <p>The asset, B6, is part of the 3rd phase of the park and currently spans 7,02,828 sqft. The
                            asset includes a mezzanine floor, utility, operations, office, canteen areas, and loading
                            bays. The structure is a Pre-Engineered Building (PEB) built to meet global manufacturing
                            standards. The current opportunity will add an additonal 1,48,935 sqft of leaseable space to
                            this facility. </p>
                        <strong>1,48,935 sqft</strong>
                        <p>Total Opportunity Space</p>

                        <div class="row">
                            <div class="col-6"><img src="{{ asset('frontend/assets/img/floor-plans.png') }}"
                                    alt="floor-plans" class="img-fluid w-100"></div>
                            <div class="col-6"><img src="{{ asset('frontend/assets/img/3d.png') }}" alt="floor-plans"
                                    class="img-fluid w-100">
                            </div>
                        </div>
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
                            <tr>
                                <td>Gross Purchase Price </td>
                                <td> ₹ 18,78,07,035 </td>
                            </tr>

                            <tr>
                                <td>Stamp Duty & Registration </td>
                                <td>0</td>
                            </tr>

                            <tr>
                                <td>Acquisition Fee </td>
                                <td>₹ 56,34,211</td>
                            </tr>
                            <tr>
                                <td>Legal Fees </td>
                                <td>₹ 6,50,000</td>
                            </tr>
                            <tr>
                                <td>Reserves </td>
                                <td>₹ 9,08,754</td>
                            </tr>
                            <tr>
                                <td>Net Purchase Price </td>
                                <td>₹19,50,00,000</td>
                            </tr>
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
                            <div class="accordion-item">
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
                            </div>



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
                                        Investment Memo</td>
                                    <td>
                                        <button class="btn"><i class="fa fa-download"></i> Download</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td> <img src="{{ asset('frontend/assets/img/microsoft-excel.svg') }}" width="20px">
                                        Financial Calculator
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
