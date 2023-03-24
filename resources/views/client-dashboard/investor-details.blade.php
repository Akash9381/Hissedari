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
                            @isset($user['InvestorData']['user_image'])
                            <img src="{{ asset('/storage/profile/' . $user['InvestorData']['user_image']) }}" alt="profile-photo"
                                class="img-fluid">
                            @else
                            <img src="{{ asset('client-dashboard/img/avatar/man.jpg') }}" alt="profile-photo"
                                class="img-fluid">
                            @endisset
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
                                        <input type="text" value="{{$user['InvestorData']['phone'] ?? ''}}" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Residential status</label>
                                        <select class="selectpicker search-fields" name="resident_status">
                                            <option @if ($user['InvestorData']['resident_status'] == 'Resident' )
                                                selected
                                            @endif>Resident</option>
                                            <option @if ($user['InvestorData']['resident_status'] == 'Non-Resident' )
                                            selected
                                        @endif>Non-Resident</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group propertytitle">
                                        <label for="inputpropertytitle1" class="form-label">Location</label>
                                        <input type="text" name="location" value="{{$user['InvestorData']['location'] ?? ''}}" class="form-control" placeholder="Location">
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group propertytitle">
                                        <label for="inputpropertytitle1" class="form-label">Occupation</label>
                                        <input type="text" name="occupation" value="{{$user['InvestorData']['occupation'] ?? ''}}" class="form-control"
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
                            <input type="text" name="pincode" value="{{$user['InvestorData']['pincode'] ?? ''}}" class="form-control" placeholder="Pincode">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group title">
                            <label for="inputlandmark" class="form-label"> Landmark </label>
                            <input type="text" id="inputlandmark" value="{{$user['InvestorData']['landmark'] ?? ''}}" name="landmark" class="form-control"
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
                            <input type="radio" @if ($user['InvestorData']['document'] == 'Passport')
                                checked
                            @endif id="customRadio1" value="Passport" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio1">Passport</label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio"  @if ($user['InvestorData']['document'] == 'Aadhaar')
                            checked
                        @endif value="Aadhaar" id="customRadio2" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio2">Aadhaar Card
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio3"  @if ($user['InvestorData']['document'] == 'Voter')
                            checked
                        @endif value="Voter" name="document" class="form-check-input">
                            <label class="form-check-label" for="customRadio3">Voter ID Card
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio"  @if ($user['InvestorData']['document'] == 'Driving')
                            checked
                        @endif id="customRadio4" value="Driving" name="document" class="form-check-input">
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
                            <input type="text" value="{{$user['InvestorData']['document_number'] ?? ''}}" name="document_number" class="form-control"
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
                            <input type="text" value="{{$user['InvestorData']['pan_number'] ?? ''}}" name="pan_number" id="inputPANNumber" class="form-control"
                                placeholder="Enter PAN Number">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputPANName" class="form-label"> PAN Name*
                            </label>
                            <input type="text" id="inputPANName" value="{{$user['InvestorData']['pan_name'] ?? ''}}" name="pan_name" class="form-control"
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
                            <input type="text" value="{{$user['InvestorData']['account_number'] ?? ''}}" name="account_number" class="form-control"
                                placeholder="Enter Your Bank A/C Number Here">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputifsccode" class="form-label"> IFSC Code

                            </label>
                            <input type="text" name="ifsc_code" value="{{$user['InvestorData']['ifsc_code'] ?? ''}}" class="form-control"
                                placeholder="Enter IFSC Code here">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputbankname" class="form-label"> Bank Name
                            </label>
                            <input type="text" name="bank_name" value="{{$user['InvestorData']['bank_name'] ?? ''}}" class="form-control"
                                placeholder="Enter Your Bank Name Here">
                        </div>
                    </div>
                </div>


                <div class="row pad-20">

                    <h6 class="text-success">Account Type </h6>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio5" @if ($user['InvestorData']['account_type'] =='saving')
                                checked
                            @endif value="saving" name="account_type"
                                class="form-check-input">
                            <label class="form-check-label" for="customRadio5">Saving Account

                            </label>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="form-check">
                            <input type="radio" id="customRadio6" @if ($user['InvestorData']['account_type'] =='current')
                            checked
                        @endif value="current" name="account_type"
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
                            <input type="text" value="{{json_decode($user['InvestorData']['credit_card_bank_name'])[0] ??'' }}" name="credit_card_bank_name[]" class="form-control"
                                placeholder="Enter Your Bank Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="Card Number" class="form-label"> Card Number

                            </label>
                            <input type="number" name="credit_card_number[]" value="{{ json_decode($user['InvestorData']['credit_card_number'])[0] ?? '' }}" class="form-control"
                                placeholder="xxxxxxx123">
                        </div>
                    </div>


                </div>
                <h4 class="bg-grea-3">Credit Card 2 (optional) </h4>

                <div class="row pad-20">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputacountnumber" class="form-label"> Bank Name </label>
                            <input type="text" name="credit_card_bank_name[]" value="{{json_decode($user['InvestorData']['credit_card_bank_name'])[1] ?? '' }}" class="form-control"
                                placeholder="Enter Your Bank Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="Card Number" class="form-label"> Card Number

                            </label>
                            <input type="text" name="credit_card_number[]" value="{{ json_decode($user['InvestorData']['credit_card_number'])[1] ?? '' }}" class="form-control"
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
                            <input type="text" value="{{ $user['InvestorData']['nominee_first_name'] ?? '' }}" name="nominee_first_name" class="form-control" placeholder="Name">
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group title">
                            <label for="inputname1" class="form-label"> Last Name</label>
                            <input type="text" value="{{ $user['InvestorData']['nominee_last_name'] ?? '' }}" name="nominee_last_name" class="form-control"
                                placeholder=" Last Name">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group email">
                            <label for="inputEmail1" class="form-label">Email</label>
                            <input type="email" name="nominee_email" value="{{ $user['InvestorData']['nominee_email'] ?? ''}}" class="form-control" placeholder="Email">
                        </div>
                    </div>

                </div>


                <div class="row pad-20">

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group phone">
                            <label for="inputphone1" class="form-label">Phone</label>
                            <input type="number" name="nominee_phone" value="{{ $user['InvestorData']['nominee_phone'] ?? ''}}" class="form-control" placeholder="Phone">
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Relationship
                            </label>

                            <select class="selectpicker search-fields" name="relationship">
                                <option @if ( $user['InvestorData']['relationship'] == 'Father')
                                    selected
                                @endif>Father</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Mother' )
                                selected
                            @endif>Mother</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Son' )
                                selected
                            @endif>Son</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Daughter' )
                                selected
                            @endif>Daughter</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Spouse')
                                selected
                            @endif>Spouse</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Brother' )
                                selected
                            @endif>Brother</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Sister' )
                                selected
                            @endif>Sister</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Grandfather' )
                                selected
                            @endif>Grandfather</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Grandmother' )
                                selected
                            @endif>Grandmother</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Grandson' )
                                selected
                            @endif>Grandson</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Granddaughter' )
                                selected
                            @endif>Granddaughter</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Aunt' )
                                selected
                            @endif>Aunt</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Uncle' )
                                selected
                            @endif>Uncle</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Nephew' )
                                selected
                            @endif>Nephew</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Niece' )
                                selected
                            @endif>Niece</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Cousin' )
                                selected
                            @endif>Cousin</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Father-in-law' )
                                selected
                            @endif>Father-in-law</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Mother-in-law' )
                                selected
                            @endif>Mother-in-law</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Son-in-law' )
                                selected
                            @endif>Son-in-law</option>
                                <option @if ( $user['InvestorData']['relationship'] == 'Daughter-in-law' )
                                selected
                            @endif>Daughter-in-law</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group propertytitle">
                            <label for="inputpropertytitle1" class="form-label">Address</label>
                            <input type="text" value="{{ $user['InvestorData']['nominee_address'] ?? '' }}" name="nominee_address" class="form-control" placeholder="Address">
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
