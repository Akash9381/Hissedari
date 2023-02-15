@extends('frontend.layouts.frontend_layouts')

@section('title','About')
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1 class="text-white">About Us</h1>

        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About city estate start -->
<div class="our-team comon-slick  content-area bg-grea-5 mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="about-text clearfix">
                    <h3 class="text-center">Who we are </h3>
                    <p>Hissedari.com is regions first tech enabled fractional ownership investment online platform. It is a venture by “Property Mantra Proptech LLP” which is working at the intersection of real estate and technology. It is created by a group of professionals who all share a common passion for wealth creation and have in-depth experience and understanding of investment and technology needs of real estate market.</p>
                    <p class="text-center">Hissedari.com is the most experienced and leading fractional ownership platform in the region that utilizes data-driven insights to help clients make safe and calculated investment choices with the aim of building a stable long-term profitable portfolio to value investors
                    </p>
                    <p class="text-center">Real Estate, the largest investment asset class in India that has created the highest wealth for investors. Traditionally, it was only accessible to ultra HNIs and institutions because it requires large capital investment, specialised investment knowledge, asset management capabilities and understanding of market cycles. But now at Hissedari.com we make it accessible to individual investors in a versatile approach so that you can come together and access these High Potential Real Estate Properties.</p>

                    <p class="text-center">Hissedari.com guides the investors to diversify their portfolio by offering transparent investor-friendly deals and custom product solutions along with a secure digital transaction procedure. We are pioneering our efforts in the field and changing the way India invests in Real Estate. We help investors by providing institutional quality analysis, asset management and liquidity at much lower investment thresholds. </p>

                    <p class="text-center">So, <strong>INVEST WITH US & GROW WITH US!</strong> in a better way that is powered with superior technology.</p>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- About city estate end -->
<div class="counters-2">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-sm-6 border-r">
                <div class="counter-box-2">
                    <!--<i class="flaticon-broker"></i>-->
                    <h5 class="advantage">Explore the hissedari advantage start investments</h5>

                      <p class="badge bg-success text-white">Invest Now</p>

                </div>
            </div>


        </div>
    </div>
</div>

<div class="blog-section comon-slick content-area-14">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-3">
            <!--<p>Best Rent Properties</p>-->
            <a href="#"><h1>Why we're here </h1></a>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="slick row comon-slick-inner" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="item slide-box">
                        <div class="blog-4">
                            <div class="profile-user">
                                <img src="{{asset('frontend/assets/img/avatar/mission.png')}}" alt="user">
                            </div>

                            <div class="body">

                                <h3>
                                    <a href="#">Mission</a>
                                </h3>
                                <p>At Hissedari.com, our aim is to become a world’s largest investor’s tech platform community with the help of new age technology and innovative products which are affordable, accessible, trusted and transparent that our clients wish to experience and acquire.</p>

                            </div>
                        </div>
                    </div>
                    <div class="item slide-box">
                        <div class="blog-4">
                            <div class="profile-user">
                                <img src="{{asset('frontend/assets/img/avatar/Vision.png')}}" alt="user">
                            </div>

                            <div class="body">

                                <h3>
                                    <a href="#">Vision</a>
                                </h3>
                                <p>Our vision is to revolutionize the way people invest in the real estate industry. We envision a future where anyone can easily own their dream property and enhance their investment portfolio.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Our team start -->
<div class="our-team comon-slick content-area mt-2 bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title-3 mt-20">
            <!--<p>Best Rent Properties</p>-->
            <a href="#"><h1>Meet the Team: Behind the Scene! </h1></a>
            <p class="text-dark text-center">A team of passionate and experienced real estate professionals and tech experts who all are committed and share a common passion for wealth creation and have in-depth experience and understanding of investment technology and are dedicated for providing seamless and transparent experience needs of real estate market</p>
        </div>



        <div class="slick row comon-slick-inner mt-30" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>



            <div class="item slide-box">
                <div class="team-1">
                    <div class="team-thumb">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/avatar/man.jpg')}}" alt="agent-2" class="img-fluid">
                        </a>
                        <div class="team-social flex-middle">
                            <div class="team-overlay"></div>
                            <div class="team-social-inner">
                                <a rel="nofollow" href="#" class="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="google">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>
                            <a href="#">Nishant Kumar singh</a>
                        </h4>
                        <!--<p>Support Manager</p>-->
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="team-1">
                    <div class="team-thumb">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/avatar/man.jpg')}}" alt="agent-2" class="img-fluid">
                        </a>
                        <div class="team-social flex-middle">
                            <div class="team-overlay"></div>
                            <div class="team-social-inner">
                                <a rel="nofollow" href="#" class="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="google">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>
                            <a href="#">Sushant Srivastava</a>
                        </h4>

                    </div>
                </div>
            </div>

            <div class="item slide-box">
                <div class="team-1">
                    <div class="team-thumb">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/avatar/man.jpg')}}" alt="agent-2" class="img-fluid">
                        </a>
                        <div class="team-social flex-middle">
                            <div class="team-overlay"></div>
                            <div class="team-social-inner">
                                <a rel="nofollow" href="#" class="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="google">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>
                            <a href="#">Amit Verma</a>
                        </h4>
                       <!-- <p>Creative Director</p>-->
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="team-1">
                    <div class="team-thumb">
                        <a href="#">
                            <img src="{{asset('frontend/assets/img/avatar/girl.jpg')}}" alt="agent-2" class="img-fluid">
                        </a>
                        <div class="team-social flex-middle">
                            <div class="team-overlay"></div>
                            <div class="team-social-inner">
                                <a rel="nofollow" href="#" class="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="google">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a rel="nofollow" href="#" class="linkedin">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-info">
                        <h4>
                            <a href="#">Bhanu Sharma</a>
                        </h4>
                        <!--<p>Web Developer</p>-->
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- Our team end -->



<!-- Counters 2 strat -->
<div class="counters-2">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-6 col-sm-6 border-r">
                <div class="counter-box-2">
                    <!--<i class="flaticon-broker"></i>-->
                    <h5 class="advantage">JOIN OUR TEAM</h5>

                    <h4 class="text-white">Looking for assets that can help succeed in this mission</h4><br>
                   <p class="badge bg-success text-white">CAREER OPPORTUNITIES</p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Counters 2 end -->

<!-- Services start -->

<!-- Services end -->

<!-- Testimonial 4 start -->

<!-- Testimonial 4 end -->

<!-- Partners strat -->

<!-- Partners end -->
@endsection
