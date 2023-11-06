@extends('cp-panel.layouts.c-panel-layouts')
@section('title', 'Profile | CP - Panel')
<!-- Chat-launcher -->
@section('content')


    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> Profile

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> Profile </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-4">
                                    <div class="profile-image float-md-right"> <img width="150px"
                                            src="../assets/images/profile_av.jpg" alt=""> </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-4">
                                    <h6 class="mt-2 m-b-0">Company / Firm Name</h6>
                                    <span class="job_post">{{ $cpdatas->CpData['company_name'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-5 col-md-5 col-4">
                                    <h6 class="mt-2 m-b-0"> Refreral Code </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['referral_code'] ?? '' }}</span>
                                </div>



                            </div>

                            <!--<div class="divider"></div>-->

                            <!--<div class="row justify-content-md-center">
                                   
                                   <div class="col-lg-1 col-md-1 col-12" style="visibility: hidden;">
                                        
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-3 col-6">
                                        <h6 class="mt-2 m-b-0">Residential status</h6>
                                        <span class="job_post">text123</span>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-3 col-6">
                                        <h6 class="mt-2 m-b-0">Location</h6>
                                        <span class="job_post">text123</span>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-3 col-6">
                                        <h6 class="mt-2 m-b-0">Occupation</h6>
                                        <span class="job_post">text123</span>
                                    </div>
                                                                  
                                </div>-->

                        </div>
                    </div>
                </div>

            </div>



            <div class="alert alert-success">
                <strong> Company Details </strong>

            </div>


            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Company / Firm Name </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['company_name'] ?? '' }}</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="alert alert-success">
                <strong> Registered Office Address</strong>

            </div>

            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Location </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['location'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Office/House Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['office_number'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Building Name </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['building_name'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Street/ Area </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['street'] ?? '' }}</span>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> City </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['city'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> State/Province </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['state'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Country </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['country'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Pin Code </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['pincode'] ?? '' }}</span>
                                </div>


                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Landmark </h6>
                                    <span class="job_post">{{ $cpdatas->CpRegisterOffice['landmark'] ?? '' }}</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="alert alert-success">
                <strong> Corporate Office Address </strong>

            </div>


            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Location </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['location'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Office/House Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['office_number'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Building Name </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['building_name'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Street/ Area </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['street'] ?? '' }}</span>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> City </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['city'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> State/Province </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['state'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Country </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['country'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Pin Code </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['pincode'] ?? '' }}</span>
                                </div>


                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Landmark </h6>
                                    <span class="job_post">{{ $cpdatas->CpCorporateOffice['landmark'] ?? '' }}</span>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

            </div>

            <div class="alert alert-success">
                <strong> Contact Details </strong>

            </div>


            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Mobile No </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['mobile_1'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Whtataap No </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['mobile_2'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Landline </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['landline'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Email Id </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['email'] ?? '' }}</span>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Nature of Company </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['nature_of_company'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> Date of Incorporation </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['date_of_incorporation'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> RERA Registration Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['rera_registration_number'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0"> GST Registration Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['gst_registration_number'] ?? '' }}</span>
                                </div>


                            </div>
                            <hr>


                        </div>
                    </div>
                </div>

            </div>

            <div class="alert alert-success">
                <strong> PAN Details </strong>

            </div>


            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6">
                                    <h6 class="mt-2 m-b-0"> Company PAN Details </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['company_pan_deatails'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <h6 class="mt-2 m-b-0"> PAN Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['company_pan_number'] ?? '' }}</span>
                                </div>

                                <div class="col-lg-4 col-md-4 col-6">
                                    <h6 class="mt-2 m-b-0"> Name on PAN Card </h6>
                                    <span class="job_post">{{ $cpdatas->CpData['name_on_pan_card'] ?? '' }}</span>
                                </div>



                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0">Front Side of the Document </h6>
                                    <img width="150" src="assets/img/pan.png" alt=""
                                        class="img-fluid img-thumbnail m-t-30">
                                    <a href="#" title="Download"> <i class="material-icons">move_to_inbox</i></a>
                                </div>

                            </div>





                        </div>
                    </div>
                </div>

            </div>

            <div class="alert alert-success">
                <strong> Document</strong>
            </div>
            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0"> Document Type </h6>
                                    <span class="job_post">{{ $cpdatas->CpDocuments['document_type'] ?? '' }}</span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0"> Document Number </h6>
                                    <span class="job_post">{{ $cpdatas->CpDocuments['document_number'] ?? '' }}</span>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0">Front Side of the Document </h6>
                                    <img width="150" src="assets/img/pan.png" alt=""
                                        class="img-fluid img-thumbnail m-t-30">
                                    <a href="#" title="Download"> <i class="material-icons">move_to_inbox</i></a>
                                </div>

                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0">Back Side of the Document </h6>
                                    <img width="150" src="assets/img/pan.png" alt=""
                                        class="img-fluid img-thumbnail m-t-30">
                                    <a href="#" title="Download"> <i class="material-icons">move_to_inbox</i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="alert alert-success">
                
                <strong> Bank Account Details </strong>
                <a id="add" href="{{route('cp-panel.bank.details')}}" class="btn btn-primary">Add New Bank</a>
            </div>


            <div class="row clearfix">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Account Number </h6>
                                    <span class="job_post">text</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">IFSC Code </h6>
                                    <span class="job_post">text</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Bank Name </h6>
                                    <span class="job_post">text</span>
                                </div>


                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Account Type </h6>
                                    <span class="job_post">text</span>
                                </div>


                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0"> Upload Front Side of the Document </h6>
                                    <img width="150" src="assets/img/img.jpg" alt=""
                                        class="img-fluid img-thumbnail m-t-30">
                                    <a href="#" title="Download"> <i class="material-icons">move_to_inbox</i></a>
                                </div>

                                <div class="col-lg-6 col-md-6 col-6">
                                    <h6 class="mt-2 m-b-0"> Upload Back Side of the Document </h6>
                                    <img width="150" src="assets/img/img.jpg" alt=""
                                        class="img-fluid img-thumbnail m-t-30">
                                    <a href="#" title="Download"> <i class="material-icons">move_to_inbox</i></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
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
@endsection
