
@extends('cp-panel.layouts.c-panel-layouts')
@section('title','Profile Summary | CP - Panel')




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
                                    <span class="job_post">text</span>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Masked Input -->
            <!-- Multi Select -->
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Office/House Number </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Building Name </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Street/ Area </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label> City </label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>Bangalore</option>
                                        <option>Hyderabad</option>
                                        <option>Ahmedabad</option>
                                        <option>Chennai</option>
                                        <option>Kolkata</option>
                                        <option>Surat</option>
                                        <option>Pune</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> State/Province </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label>Country </label>

                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>China</option>
                                        <option> India</option>
                                        <option>United States</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Brazil</option>
                                        <option>Nigeria</option>
                                        <option>Bangladesh</option>
                                        <option>Russia</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Pin Code </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Landmark </label>


                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Office/House Number </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Building Name </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Street/ Area </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label> City </label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>Bangalore</option>
                                        <option>Hyderabad</option>
                                        <option>Ahmedabad</option>
                                        <option>Chennai</option>
                                        <option>Kolkata</option>
                                        <option>Surat</option>
                                        <option>Pune</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> State/Province </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label>Country </label>

                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>China</option>
                                        <option> India</option>
                                        <option>United States</option>
                                        <option>Indonesia</option>
                                        <option>Pakistan</option>
                                        <option>Brazil</option>
                                        <option>Nigeria</option>
                                        <option>Bangladesh</option>
                                        <option>Russia</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Pin Code </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Landmark </label>


                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> M2 </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Landline </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Email Id </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label>Nature of Company</label>


                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Proprietorship</option>
                                        <option> One Person Company (LLP)</option>
                                        <option>Partnership</option>
                                        <option>Limited Liability Partnership</option>
                                        <option>Private Limited Company</option>
                                        <option>Public Limited Company</option>
                                        <option>Others</option>
                                    </select>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label> Date of Incorporation</label>
                                    <div class="form-group form-float">
                                        <input type="date" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> RERA Registration Number</label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <label> GST Registration Number</label>


                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> PAN Number </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Name on PAN Card </label>

                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <label> Upload Front Side of the Document </label>
                                    <div class="form-group form-float">
                                        <input type="file" class="form-control" name="name" required=""
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
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Passport</option>
                                        <option> Aadhaar Card</option>
                                        <option>Voter ID Card</option>
                                        <option>Driving Licence</option>

                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <label> Document Number</label>


                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <label> Upload Front Side of the Document </label>
                                    <div class="form-group form-float">
                                        <input type="file" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <label> Upload Back Side of the Document </label>
                                    <div class="form-group form-float">
                                        <input type="file" class="form-control" name="name" required=""
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>




                                <div class="col-lg-6 col-md-6">
                                    <label> IFSC Code </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <label> Bank Name </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label> Account Type </label><br>
                                    <div class="radio inlineblock m-r-25">
                                        <input type="radio" name="radio1" id="radio1" value="option1"
                                            checked="">
                                        <label for="radio1">Saving Account</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="radio1" id="radio2" value="option2">
                                        <label for="radio2">Current Account</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <label> Upload Cancelled Cheque </label>

                                    <div class="form-group form-float">
                                        <input type="file" class="form-control" name="name" required=""
                                            aria-required="true">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <label> Upload Front Side of the Document </label>

                                    <div class="form-group form-float">
                                        <input type="file" class="form-control" name="name" required=""
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
                                        <input type="file" class="form-control" name="name" required=""
                                            aria-required="true">
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
                                        <input type="text" class="form-control" name="name" required=""
                                            aria-required="true">
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





