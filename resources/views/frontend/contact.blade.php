@extends('frontend.layouts.frontend_layouts')
@section('title','Contact')
@section('content')
<!-- Contact 2 start -->
<div class="contact-2 content-area-17">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Contact Us</h1>

        </div>
        <form action="#" method="GET" enctype="multipart/form-data">
            <div class="row g-0 contact-innner">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h3 class="mb-20">Send us a Message</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" aria-label="Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group message">
                                    <textarea  class="form-control" name="message" placeholder="Write message" aria-label="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn-6">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3 class="mb-20">Contact Info</h3>
                        <div class="ca-box d-flex mb-30">
                            <i class="flaticon-pin me-3"></i>
                            <div class="detail">
                                <h5>Address</h5>
                                <p>Address: CCC, Zirakpur </p>
                            </div>
                        </div>
                        <div class="ca-box d-flex mb-30">
                            <i class="flaticon-phone me-3"></i>
                            <div class="detail">
                                <h5>Phone Number</h5>
                                <p><a href="tel:
+91 92164 07077 ">
+91 92164 07077 </a></p>

                            </div>
                        </div>
                        <div class="ca-box d-flex mb-30">
                            <i class="flaticon-mail me-3"></i>
                            <div class="detail">
                                <h5>Email Address</h5>
                                <p><a href="mailto:info@hissedari.com">info@hissedari.com</a></p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->

<!-- Google map start -->
<div class="section contact-2-map">
    <div class="map">
        <div id="map" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->
@endsection
