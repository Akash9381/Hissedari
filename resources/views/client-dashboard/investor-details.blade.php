
@extends('client-dashboard.layouts.includes')
@section('title','User Invetment Details')

@section('content')

    <div class="dashboard-content">

        <div class="submit-address dashboard-list">
            <div class="tabbing tabbing-box mb-50">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">Personal Information
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                            data-bs-target="#contact" type="button" role="tab"
                            aria-controls="contact" aria-selected="false">Address Details
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pandetails-tab" data-bs-toggle="tab"
                            data-bs-target="#pandetails" type="button" role="tab"
                            aria-controls="pandetails" aria-selected="false">PAN Details

                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="bankdetails-tab" data-bs-toggle="tab"
                            data-bs-target="#bankdetails" type="button" role="tab"
                            aria-controls="bankdetails" aria-selected="false">Bank Details

                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nomineedetails-tab" data-bs-toggle="tab"
                            data-bs-target="#nomineedetails" type="button" role="tab"
                            aria-controls="nomineedetails" aria-selected="false">Nominee Details

                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="row">
                                <div class="col-lg-2 col-md-2">
                                    <!-- Edit profile photo -->
                                    <div class="edit-profile-photo">
                                        <img src="{{asset('client-dashboard/img/avatar/avatar-6.jpg')}}" alt="profile-photo"
                                            class="img-fluid">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload clip-home">
                                                <span><i class="fa fa-upload"></i></span>
                                                <input type="file" class="upload">
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
                                        <form method="GET">
                                            <h4 class="bg-grea-3">Personal Information</h4>
                                            <div class="row pad-20">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group title">
                                                        <label for="inputname1" class="form-label"> First
                                                            Name</label>
                                                        <input type="text" name="name"
                                                            class="form-control" id=""
                                                            placeholder="Name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group title">
                                                        <label for="inputname1" class="form-label"> Last
                                                            Name</label>
                                                        <input type="text" name="name"
                                                            class="form-control" id=""
                                                            placeholder=" Last Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="form-group email">
                                                        <label for="inputEmail1"
                                                            class="form-label">Email</label>
                                                        <input type="email" name="email"
                                                            class="form-control" id=""
                                                            placeholder="Email">
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row pad-20">

                                                <div class="col-lg-3 col-md-3 col-sm-12">
                                                    <div class="form-group phone">
                                                        <label for="inputphone1"
                                                            class="form-label">Phone</label>
                                                        <input type="text" name="phone"
                                                            class="form-control" id=""
                                                            placeholder="Phone">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Residential status</label>
                                                        <select class="selectpicker search-fields"
                                                            name="for-sale">
                                                            <option>Resident</option>
                                                            <option>Non-Resident</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-12">
                                                    <div class="form-group propertytitle">
                                                        <label for="inputpropertytitle1"
                                                            class="form-label">Location</label>
                                                        <input type="text" name="propertytitle"
                                                            class="form-control" id=""
                                                            placeholder="Location">
                                                    </div>
                                                </div>


                                                <div class="col-lg-3 col-md-3 col-sm-12">
                                                    <div class="form-group propertytitle">
                                                        <label for="inputpropertytitle1"
                                                            class="form-label">Occupation</label>
                                                        <input type="text" name="propertytitle"
                                                            class="form-control" id=""
                                                            placeholder="Occupation">

                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                    <button type="submit" class="btn-6 mt-20">Save and
                                                        Continue
                                                    </button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel"
                        aria-labelledby="contact-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample3">
                            <div class="accordion-item">
                                <form method="GET">
                                    <h4 class="bg-grea-3">Address Details</h4>

                                    <div class="row pad-20">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group title">

                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="selectpicker search-fields"
                                                        name="for-sale">
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                    </select>
                                                </div>


                                            </div>
                                        </div>


                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputPincode" class="form-label"> Pincode
                                                </label>
                                                <input type="text" name="Pincode" class="form-control"
                                                    id="" placeholder="Pincode">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputlandmark" class="form-label"> Landmark

                                                </label>
                                                <input type="text" name="Landmark"
                                                    class="form-control" id=""
                                                    placeholder="Landmark">


                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="selectpicker search-fields"
                                                    name="for-sale">
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

                                                <select class="selectpicker search-fields"
                                                    name="for-sale">
                                                    <option>Resident</option>
                                                    <option>Non-Resident</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--<div class="col-lg-6 col-md-12 col-sm-12">
                    <button type="submit" class="btn-6">Save and Continue
                        </button>
                </div>-->
                                    </div>


                                </form>

                                <form method="GET">
                                    <h4 class="bg-grea-3">Document Type</h4>
                                    <div class="row pad-20">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio1"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label"
                                                    for="customRadio1">Passport</label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio2"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio2">Aadhaar
                                                    Card
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio3"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio3">Voter
                                                    ID Card
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio4"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio4">Driving
                                                    Licence
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row pad-20">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputDocumentNumber" class="form-label">
                                                    Document Number
                                                </label>
                                                <input type="text" name="DocumentNumber"
                                                    class="form-control" id=""
                                                    placeholder="DocumentNumber">

                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <h4 class="bg-grea-3">Upload Front Side of the Document </h4>

                                <div class="row pad-20">
                                    <div class="col-lg-12">
                                        <div id="myDropZone"
                                            class="dropzone dropzone-design dz-clickable">
                                            <div class="dz-default dz-message"><span> Drop files here to
                                                    upload</span></div>

                                        </div>
                                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf
                                            file formats
                                        </small>

                                    </div>
                                </div>

                                <h4 class="bg-grea-3">Upload Back Side of the Document </h4>

                                <div class="row pad-20">
                                    <div class="col-lg-12">
                                        <div id="myDropZone"
                                            class="dropzone dropzone-design dz-clickable">
                                            <div class="dz-default dz-message"> <span> Drop files here to
                                                    upload</span></div>
                                        </div>
                                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf
                                            file formats
                                        </small>

                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <button type="submit" class="btn-6 mt-20">Save and Continue
                                        </button>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="pandetails" role="tabpanel"
                        aria-labelledby="pandetails-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample4">
                            <div class="accordion-item">
                                <form method="GET">
                                    <h4 class="bg-grea-3">Provide your PAN Details below </h4>
                                    <div class="row pad-20">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputPANNumber" class="form-label"> PAN
                                                    Number*
                                                </label>
                                                <input type="text" name="PANNumber"
                                                    class="form-control" id=""
                                                    placeholder="Enter PAN Number" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputPANName" class="form-label"> PAN Name*
                                                </label>
                                                <input type="text" name="PANName" class="form-control"
                                                    id="" placeholder="Enter Name on PAN Card"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <h4 class="bg-grea-3">Upload Front Side of the Document </h4>

                                <div class="row pad-20">
                                    <div class="col-lg-12">
                                        <div id="myDropZone"
                                            class="dropzone dropzone-design dz-clickable">
                                            <div class="dz-default dz-message"> <span> Drop files here to
                                                    upload</span></div>
                                        </div>
                                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf
                                            file formats
                                        </small>

                                    </div>


                                </div>

                                <h4 class="bg-grea-3">Upload Back Side of the Document </h4>

                                <div class="row pad-20">
                                    <div class="col-lg-12">
                                        <div id="myDropZone"
                                            class="dropzone dropzone-design dz-clickable">
                                            <div class="dz-default dz-message"> <span> Drop files here to
                                                    upload</span></div>
                                        </div>
                                        <small class="text-black-50">Please upload jpg, jpeg, png or pdf
                                            file formats
                                        </small>

                                    </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <button type="submit" class="btn-6 mt-20">Save and Continue
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>





                    <div class="tab-pane fade" id="bankdetails" role="tabpanel"
                        aria-labelledby="bankdetails-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample5">
                            <div class="accordion-item">
                                <form method="GET">
                                    <h4 class="bg-grea-3">Provide your Bank Account Details Below </h4>

                                    <div class="row pad-20">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputacountnumber" class="form-label"> Account
                                                    Number

                                                </label>
                                                <input type="text" name="acountnumber"
                                                    class="form-control" id=""
                                                    placeholder="Enter Your Bank A/C Number Here
                                        "
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputifsccode" class="form-label"> IFSC Code

                                                </label>
                                                <input type="text" name="ifsccode"
                                                    class="form-control" id=""
                                                    placeholder="Enter IFSC Code here
                                        "
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputbankname" class="form-label"> Bank Name
                                                </label>
                                                <input type="text" name="bankname"
                                                    class="form-control" id=""
                                                    placeholder="Enter Your Bank Name Here
                                        "
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form method="GET">
                                    <h4 class="bg-grea-3">Account Type </h4>

                                    <div class="row pad-20">


                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio5"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio5">Saving
                                                    Account

                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" id="customRadio6"
                                                    name="customRadio" class="form-check-input">
                                                <label class="form-check-label" for="customRadio6">Current
                                                    Account

                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="bg-grea-3">Upload Cancelled Cheque ( <small>Upload Front
                                            Side of the Document
                                        </small> ) </h4>

                                    <div class="row pad-20">
                                        <div class="col-lg-12">
                                            <div id="myDropZone"
                                                class="dropzone dropzone-design dz-clickable">
                                                <div class="dz-default dz-message"> <span> Drop files here
                                                        to upload</span></div>
                                            </div>
                                            <small class="text-black-50">Please upload jpg, jpeg, png or
                                                pdf file formats
                                            </small>

                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <button type="submit" class="btn-6 mt-20">Add Second Account
                                            </button>
                                        </div>
                                    </div>


                                </form>



                                <form method="GET">
                                    <h4 class="bg-grea-3">Credit Card </h4>
                                    <div class="row pad-20">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputacountnumber" class="form-label"> Bank
                                                    Name


                                                </label>
                                                <input type="text" name="acountnumber"
                                                    class="form-control" id=""
                                                    placeholder="Enter Your Bank Name
                                        "
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="Card Number" class="form-label"> Card Number

                                                </label>
                                                <input type="text" name="Card Number"
                                                    class="form-control" id=""
                                                    placeholder="xxxxxxx123
                                        "
                                                    required>
                                            </div>
                                        </div>


                                    </div>
                                </form>



                                <form method="GET">
                                    <h4 class="bg-grea-3">Credit Card 2 (optional) </h4>
                                    <div class="row pad-20">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputacountnumber" class="form-label"> Bank
                                                    Name


                                                </label>
                                                <input type="text" name="acountnumber"
                                                    class="form-control" id=""
                                                    placeholder="Enter Your Bank Name
                                        "
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="Card Number" class="form-label"> Card Number

                                                </label>
                                                <input type="text" name="Card Number"
                                                    class="form-control" id=""
                                                    placeholder="xxxxxxx123
                                        "
                                                    required>
                                            </div>
                                        </div>


                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="nomineedetails" role="tabpanel"
                        aria-labelledby="nomineedetails-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample6">
                            <div class="accordion-item">
                                <form method="GET">
                                    <h4 class="bg-grea-3">Personal Information</h4>
                                    <div class="row pad-20">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputname1" class="form-label"> First
                                                    Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="" placeholder="Name">
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group title">
                                                <label for="inputname1" class="form-label"> Last
                                                    Name</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="" placeholder=" Last Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group email">
                                                <label for="inputEmail1" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="" placeholder="Email">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row pad-20">

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group phone">
                                                <label for="inputphone1" class="form-label">Phone</label>
                                                <input type="text" name="phone" class="form-control"
                                                    id="" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <label>Relationship
                                                </label>

                                                <select class="selectpicker search-fields"
                                                    name="for-sale">
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
                                                <label for="inputpropertytitle1"
                                                    class="form-label">Address</label>
                                                <input type="text" name="propertytitle"
                                                    class="form-control" id=""
                                                    placeholder="Address">
                                            </div>
                                        </div>





                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <button type="submit" class="btn-6 mt-20">Save and Continue
                                            </button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
