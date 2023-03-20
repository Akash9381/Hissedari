@extends('client-dashboard.layouts.includes')
@section('title', 'User Invetment Details')

@section('content')


<form method="POST" enctype="multipart/form-data" action="{{ url('user/details') }}">
    @csrf
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            <div class="container">
                <i class="zmdi zmdi-thumb-up"></i>
                <strong>Well done!</strong> {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                    </span>
                </button>
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <div class="container">
                <i class="zmdi zmdi-block"></i>
                <strong>Oh snap!</strong> {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                    </span>
                </button>
            </div>
        </div>
    @endif
        <div class="dashboard-content">
            <div class="submit-address dashboard-list">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <!-- Edit profile photo -->
                        <div class="edit-profile-photo">
                            <img src="{{ asset('client-dashboard/img/avatar/man.jpg') }}" alt="profile-photo"
                                class="img-fluid">
                            <div class="change-photo-btn">
                                <div class="photoUpload clip-home">
                                    <span><i class="fa fa-upload"></i></span>
                                    <input type="file" name="user_image" class="upload">
                                </div>
                            </div>
                        </div>
                        <div class="pad-20 mt-20">
                            <div class="blog-tags">
                                <a href="#">Referral Code </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10">
                        <div class="accordion-item">
                            <h4 class="bg-grea-3">Personal Information</h4>
                            <div class="row pad-20">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group title">
                                        <label for="inputname1" class="form-label"> Full Name</label>
                                        <input type="text" name="fullname" value="{{auth()->user()->name}}" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group email">
                                        <label for="inputEmail1" class="form-label">Email</label>
                                        <input type="email" readonly name="email" value="{{auth()->user()->email}}" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                            </div>


                            <div class="row pad-20">

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group phone">
                                        <label for="inputphone1" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Residential status</label>
                                        <select class="selectpicker search-fields" name="resident_status">
                                            <option>Resident</option>
                                            <option>Non-Resident</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group propertytitle">
                                        <label for="inputpropertytitle1" class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control" placeholder="Location">
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group propertytitle">
                                        <label for="inputpropertytitle1" class="form-label">Occupation</label>
                                        <input type="text" name="occupation" class="form-control"
                                            placeholder="Occupation">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit-address dashboard-list">
                <h4 class="bg-grea-3">Address Details</h4>

                <div class="row pad-20">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group title">

                            <div class="form-group">
                                <label>Country</label>
                                <select class="selectpicker search-fields" name="country">
                                    <option>India</option>
                                    <option>Usa</option>
                                </select>
                            </div>


                        </div>
                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group title">
                            <label for="inputPincode" class="form-label"> Pincode </label>
                            <input type="text" name="pincode" class="form-control" placeholder="Pincode">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group title">
                            <label for="inputlandmark" class="form-label"> Landmark </label>
                            <input type="text" id="inputlandmark" name="landmark" class="form-control"
                                placeholder="Landmark">


                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group">
                            <label>City</label>
                            <select class="selectpicker search-fields" name="city">
                                <option>Chandigarh</option>
                                <option>zirakpur</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row pad-20">

                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>State/Province</label>

                            <select class="selectpicker search-fields" name="state">
                                <option>Resident</option>
                                <option>Non-Resident</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row pad-20">
                    <h6 class="text-success">Document Type</h6>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio1" value="Passport" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio1">Passport</label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" value="Aadhaar" id="customRadio2" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio2">Aadhaar Card
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio3" value="Voter" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio3">Voter ID Card
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio4" value="Driving" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio4">Driving Licence
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row pad-20">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group title">
                            <label for="inputDocumentNumber" class="form-label"> Document Number
                            </label>
                            <input type="text" name="document_number" class="form-control"
                                placeholder="DocumentNumber">
                        </div>
                    </div>
                </div>

                <div class="row pad-20">
                    <div class="col-lg-12">
                        <input type="file" name="document_front_image">
                        {{-- <div id="myDropZone" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"><span> Upload Front Side of the Document </span> </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats </small>

                    </div>
                </div>

                <div class="row pad-20">
                    <div class="col-lg-12">
                        <input type="file" name="document_back_image">
                        {{-- <div id="backside" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"> <span> Upload Back Side of the Document </span> </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats </small>

                    </div>
                </div>
            </div>



            <div class="submit-address dashboard-list">

                <h4 class="bg-grea-3">Provide your PAN Details below </h4>
                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputPANNumber" class="form-label"> PAN Number*
                            </label>
                            <input type="text" name="pan_number" id="inputPANNumber" class="form-control"
                                placeholder="Enter PAN Number">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputPANName" class="form-label"> PAN Name*
                            </label>
                            <input type="text" id="inputPANName" name="pan_name" class="form-control"
                                placeholder="Enter Name on PAN Card">
                        </div>
                    </div>
                </div>


                <div class="row pad-20">
                    <div class="col-lg-12">

                        <input type="file" name="pan_front_image">
                        {{-- <div id="myDropZone" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"> <span> Upload Front Side of the Document </span>
                        </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats
                        </small>

                    </div>


                </div>

                <div class="row pad-20">
                    <div class="col-lg-12">
                        <input type="file" name="pan_back_image">
                        {{-- <div id="myDropZone" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"> <span> Upload Back Side of the Document </span>
                        </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats
                        </small>

                    </div>


                </div>

            </div>



            <div class="submit-address dashboard-list">

                <h4 class="bg-grea-3">Provide your Bank Account Details Below </h4>
                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputacountnumber" class="form-label"> Account Number</label>
                            <input type="text" name="account_number" class="form-control"
                                placeholder="Enter Your Bank A/C Number Here">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputifsccode" class="form-label"> IFSC Code

                            </label>
                            <input type="text" name="ifsc_code" class="form-control"
                                placeholder="Enter IFSC Code here">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputbankname" class="form-label"> Bank Name
                            </label>
                            <input type="text" name="bank_name" class="form-control"
                                placeholder="Enter Your Bank Name Here">
                        </div>
                    </div>
                </div>


                <div class="row pad-20">

                    <h6 class="text-success">Account Type </h6>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio5" value="saving" name="account_type"
                                class="form-check-input">
                            <label class="form-check-label" for="customRadio5">Saving Account

                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio6" value="current" name="account_type"
                                class="form-check-input">
                            <label class="form-check-label" for="customRadio6">Current Account </label>
                        </div>
                    </div>
                </div>


                <div class="row pad-20">
                    <div class="col-lg-12">

                        <input type="file" name="cheque_front_image">
                        {{-- <div id="myDropZone" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"> <span> Upload Front Side Cancelled Cheque</span>
                        </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats
                        </small>

                    </div>


                </div>


                <div class="row pad-20">
                    <div class="col-lg-12">
                        <input type="file" name="cheque_back_image">
                        {{-- <div id="myDropZone" class="dropzone dropzone-design dz-clickable">
                        <div class="dz-default dz-message"> <span> Upload Back Side Cancelled Cheque</span>
                        </div>
                    </div> --}}
                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf file formats
                        </small>

                    </div>


                </div>

                <h4 class="bg-grea-3">Credit Card </h4>
                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputacountnumber" class="form-label"> Bank Name </label>
                            <input type="text" name="credit_card_bank_name[]" class="form-control"
                                placeholder="Enter Your Bank Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="Card Number" class="form-label"> Card Number

                            </label>
                            <input type="number" name="credit_card_number[]" class="form-control"
                                placeholder="xxxxxxx123">
                        </div>
                    </div>


                </div>
                <h4 class="bg-grea-3">Credit Card 2 (optional) </h4>

                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputacountnumber" class="form-label"> Bank Name


                            </label>
                            <input type="text" name="credit_card_bank_name[]" class="form-control"
                                placeholder="Enter Your Bank Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="Card Number" class="form-label"> Card Number

                            </label>
                            <input type="text" name="credit_card_number[]" class="form-control"
                                placeholder="xxxxxxx123">
                        </div>
                    </div>
                </div>
            </div>


            <div class="submit-address dashboard-list">

                <h4 class="bg-grea-3">Nominee Details</h4>
                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputname1" class="form-label"> First Name</label>
                            <input type="text" name="nominee_first_name" class="form-control" placeholder="Name">
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputname1" class="form-label"> Last Name</label>
                            <input type="text" name="nominee_last_name" class="form-control"
                                placeholder=" Last Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group email">
                            <label for="inputEmail1" class="form-label">Email</label>
                            <input type="email" name="nominee_email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                </div>


                <div class="row pad-20">

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group phone">
                            <label for="inputphone1" class="form-label">Phone</label>
                            <input type="number" name="nominee_phone" class="form-control" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Relationship
                            </label>

                            <select class="selectpicker search-fields" name="relationship">
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Son</option>
                                <option>Daughter</option>
                                <option>Spouse</option>
                                <option>Brother</option>
                                <option>Sister</option>
                                <option>Grandfather</option>
                                <option>Grandmother</option>
                                <option>Grandson</option>
                                <option>Granddaughter</option>
                                <option>Aunt</option>
                                <option>Uncle</option>
                                <option>Nephew</option>
                                <option>Niece</option>
                                <option>Cousin</option>
                                <option>Father-in-law</option>
                                <option>Mother-in-law</option>
                                <option>Son-in-law</option>
                                <option>Daughter-in-law</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group propertytitle">
                            <label for="inputpropertytitle1" class="form-label">Address</label>
                            <input type="text" name="nominee_address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <button type="submit" class="btn-6 mt-20 float-end">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
