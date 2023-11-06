@extends('cp-panel.layouts.c-panel-layouts')
@section('title', 'Profile Summary | CP - Panel')

<!-- Chat-launcher -->
@section('content')

    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> CP Profile Summary

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> CP Profile Summary </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <!-- Color Pickers -->
            <!-- #END# Color Pickers -->
            <!-- Masked Input -->
            <div class="alert alert-success">
                <strong>Company Details</strong>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <h6 class="mt-2 m-b-0">Company / Firm Name</h6>
                                    <span class="job_post">{{ $cpdatas->CpData['company_name'] ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Masked Input -->
            <!-- Multi Select -->
            <form method="POST" action="{{ route('cp-panel.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="alert alert-success">
                    <strong> Registered Office Address </strong>&nbsp;
                    <small class="text-success">(Provide your current correspondance address)</small>

                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <label> Location </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['location'] ?? '' }}"
                                                class="form-control" name="register_location" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Office/House Number </label>
                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpRegisterOffice['office_number'] ?? '' }}"
                                                class="form-control" name="register_office_number" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Building Name </label>

                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpRegisterOffice['building_name'] ?? '' }}"
                                                class="form-control" name="register_building_name" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Street/ Area </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['street'] ?? '' }}"
                                                class="form-control" name="register_street" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label>Country </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['country'] ?? '' }}"
                                                class="form-control" name="register_country" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> State/Province </label>

                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['state'] ?? '' }}"
                                                class="form-control" name="register_state" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> City </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['city'] ?? '' }}"
                                                class="form-control" name="register_city" aria-required="true">
                                        </div>
                                    </div>




                                    <div class="col-lg-4 col-md-6">
                                        <label> Pin Code </label>

                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpRegisterOffice['pincode'] ?? '' }}"
                                                class="form-control" name="register_pincode" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Landmark </label>


                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpRegisterOffice['landmark'] ?? '' }}"
                                                class="form-control" name="register_landmark" aria-required="true">
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Multi Select -->

                <div class="alert alert-success">
                    <strong>Corporate Office Address</strong>
                </div>



                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <label> Location </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control"
                                                value="{{ $cpdatas->CpCorporateOffice['location'] ?? '' }}"
                                                name="corporate_location" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Office/House Number </label>
                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['office_number'] ?? '' }}"
                                                class="form-control" name="corporate_office_number" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Building Name </label>

                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['building_name'] ?? '' }}"
                                                class="form-control" name="corporate_building_name" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Street/ Area </label>
                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['street'] ?? '' }}"
                                                class="form-control" name="corporate_street" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label>Country </label>
                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['country'] ?? '' }}"
                                                class="form-control" name="corporate_country" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> State/Province </label>

                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['state'] ?? '' }}"
                                                class="form-control" name="corporate_state" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> City </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpCorporateOffice['city'] ?? '' }}"
                                                class="form-control" name="corporate_city" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Pin Code </label>

                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['pincode'] ?? '' }}"
                                                class="form-control" name="corporate_pincode" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Landmark </label>


                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpCorporateOffice['landmark'] ?? '' }}"
                                                class="form-control" name="corporate_landmark" aria-required="true">
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Contact Details</strong>

                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <label> M1 </label>
                                        <div class="form-group form-float">
                                            <input value="{{ $cpdatas->CpData['mobile_1'] ?? '' }}" type="text"
                                                class="form-control" name="mobile_1" aria-required="true">CpData
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> M2 </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['mobile_2'] ?? '' }}"
                                                class="form-control" name="mobile_2" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Landline </label>

                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['landline'] ?? '' }}"
                                                class="form-control" name="landline" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Email Id </label>

                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['email'] ?? '' }}"
                                                class="form-control" name="email" aria-required="true">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <label>Nature of Company</label>


                                        <select class="form-control show-tick ms select2" name="nature_of_company"
                                            data-placeholder="Select">
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Proprietorship') selected @endif>Proprietorship
                                            </option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'One Person Company (LLP)') selected @endif> One Person Company
                                                (LLP)</option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Partnership') selected @endif>Partnership</option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Limited Liability Partnership') selected @endif>Limited Liability
                                                Partnership</option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Private Limited Company') selected @endif>Private Limited
                                                Company</option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Public Limited Company') selected @endif>Public Limited Company
                                            </option>
                                            <option @if ($cpdatas->CpData['nature_of_company'] == 'Others') selected @endif>Others</option>
                                        </select>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <label> Date of Incorporation</label>
                                        <div class="form-group form-float">
                                            <input type="date"
                                                value="{{ $cpdatas->CpData['date_of_incorporation'] ?? '' }}"
                                                class="form-control" name="date_of_incorporation" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> RERA Registration Number</label>

                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpData['rera_registration_number'] ?? '' }}"
                                                class="form-control" name="rera_registration_number"
                                                aria-required="true">
                                        </div>
                                    </div>


                                    <div class="col-lg-4 col-md-6">
                                        <label> GST Registration Number</label>


                                        <div class="form-group form-float">
                                            <input type="text"
                                                value="{{ $cpdatas->CpData['gst_registration_number'] ?? '' }}"
                                                class="form-control" name="gst_registration_number" aria-required="true">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="alert alert-success">
                    <strong>PAN Details</strong>
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <label> Company PAN Details </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['company_pan_deatails'] ?? '' }}" class="form-control" name="company_pan_deatails"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> PAN Number </label>
                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['company_pan_number'] ?? '' }}" class="form-control" name="company_pan_number"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Name on PAN Card </label>

                                        <div class="form-group form-float">
                                            <input type="text" value="{{ $cpdatas->CpData['name_on_pan_card'] ?? '' }}" class="form-control" name="name_on_pan_card"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <label> Upload Front Side of the Document </label>
                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="pan_card_photo"
                                                aria-required="true">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="alert alert-success">
                    <strong>Document</strong>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <label>Document Type</label>
                                        <select class="form-control show-tick ms select2" data-placeholder="Select"
                                            name="document_type">
                                            <option
                                            @if (isset($cpdatas->CpDocuments['document_type']))
                                            @if ($cpdatas->CpDocuments['document_type'] == 'Passport') selected @endif
                                            @endif
                                            
                                            >Passport</option>
                                            <option 
                                            @if (isset($cpdatas->CpDocuments['document_type']))
                                            @if ($cpdatas->CpDocuments['document_type'] == 'Aadhaar Card') selected @endif @endif> Aadhaar Card</option>

                                            <option 
                                            @if (isset($cpdatas->CpDocuments['document_type']))
                                            @if ($cpdatas->CpDocuments['document_type'] == 'Voter ID Card') selected @endif @endif>Voter ID Card</option>
                                            <option 
                                            @if (isset($cpdatas->CpDocuments['document_type']))
                                            @if ($cpdatas->CpDocuments['document_type'] == 'Driving Licence') selected @endif @endif>Driving Licence</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Document Number</label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" value="{{ $cpdatas->CpDocuments['document_number'] ?? '' }}" name="document_number"
                                                aria-required="true">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Front Side of the Document </label>
                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="document_front_side"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Back Side of the Document </label>
                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="document_back_side"
                                                aria-required="true">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="alert alert-success">
                    <strong>Bank Account Details</strong>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">


                                    <div class="col-lg-6 col-md-6">
                                        <label> Account Number</label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" name="account_number"
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label> IFSC Code </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" name="ifsc_code"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Bank Name </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" name="bank_name"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label> Account Type </label><br>
                                        <div class="radio inlineblock m-r-25">
                                            <input type="radio" name="account_type" id="radio1" value="saving"
                                                checked="">
                                            <label for="radio1">Saving Account</label>
                                        </div>
                                        <div class="radio inlineblock">
                                            <input type="radio" name="account_type" id="radio2" value="current">
                                            <label for="radio2">Current Account</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Cancelled Cheque </label>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="cancel_cheque_image"
                                                aria-required="true">
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Front Side of the Document </label>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="front_side"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-round"> Add Another Accout
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Profile Pic</strong>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload your latest pic / company Logo</label>
                                        <div class="form-group form-float">
                                            <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" name="profile" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Referral Code</strong>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-6">
                                        <label> Share your refreral Code with all your investors</label>
                                        <div class="form-group form-float">
                                            <input type="text" disabled
                                                value="{{ $cpdatas->CpData['referral_code'] }}" class="form-control"
                                                name="referral_code" aria-required="true">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-round"> Save and Continue
                    </button>
                </div>

            </form>
        </div>







        <div style="visibility: hidden;" id="nouislider_basic_example"></div>

        <div style="visibility: hidden;" id="nouislider_range_example"></div>












































        </div>
    </section>


@endsection

@section('js')




    <script type="text/javascript">
        /* This method will add a new row */
        function addNewRow() {
            var table = document.getElementById("mainTable1");
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length;
            var row = table.insertRow(rowCount);
            for (var i = 0; i < cellCount; i++) {
                var cell = row.insertCell(i);
                if (i < cellCount - 1) {
                    cell.innerHTML = `<td>jj</td><td>jj</td>`;




                }
                //else{
                //          cell.innerHTML = '<input type="button" value="delete" onclick="deleteRow(this)" />';
                //        }
            }
        }
        /* This method will delete a row */
        function deleteRow(ele) {
            var table = document.getElementById('mainTable1');
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                ele.parentNode.parentNode.remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>






    <script>
        CKEDITOR.replace('editor1');
    </script>


    <script>
        CKEDITOR.replace('editor2');
    </script>



    <script>
        CKEDITOR.replace('editor3');
    </script>


    <script>
        CKEDITOR.replace('editor4');
    </script>


    <script>
        CKEDITOR.replace('editor5');
    </script>



@endsection
