﻿@extends('admin.layouts.admin_layouts')
@section('title', 'Property Add')
@section('content')

    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Add property

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Add property </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Color Pickers -->
            <form action="{{ url('/admin/property-insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        @if(session()->has('success'))
                                        <div class="alert alert-success" role="alert">
                                            <div class="container">
                                                <i class="zmdi zmdi-thumb-up"></i>
                                                <strong>Well done!</strong> {{session()->get('success')}}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        @endif
                                        @if(session()->has('error'))
                                        <div class="alert alert-danger" role="alert">
                                            <div class="container">
                                                <i class="zmdi zmdi-block"></i>
                                                <strong>Oh snap!</strong> {{session()->get('error')}}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        @endif
                                        <label> Select property type </label>
                                        <select class="form-control show-tick ms select2" name="property_type"
                                            data-placeholder="Select">
                                            <option value="" selected disabled>Select Property Type</option>
                                            <option>Holiday Home</option>
                                            <option>Co-working</option>
                                            <option>Co-Living</option>
                                            <option>Warehouse</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <!-- Spinners -->
                    <div class="col-lg-8 col-md-12 col-sm-8">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Property images </p>

                                    {{-- <form action="#" id="frmFileUpload2" class="dropzone" method="post"
                                    enctype="multipart/form-data"> --}}
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="property_image[]" type="file" multiple />
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Property features images </p>

                                    {{-- <form action="#" id="frmFileUpload3" class="dropzone" method="post"
                                    enctype="multipart/form-data"> --}}
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3> upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="property_feature_image" type="file" />
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- #END# Color Pickers -->
                <!-- Masked Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6">
                                        <label> Property Name </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Property Name"
                                                name="property_name" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Property location </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Property location"
                                                name="property_location" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> sqft </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="sqft"
                                                name="property_area" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Min investment </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Min investment"
                                                name="property_min_investment" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Gross Entry Yield </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Gross Entry Yield (9.4%)"
                                                name="property_gross_entry" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Target IRR** </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Target IRR** (12.8%)"
                                                name="property_target_irr" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Target Multiple** </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Target Multiple** (1.9x) "
                                                name="property_target_multiple" aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <label> Price </label>
                                        <div class="form-group form-float">
                                            <input type="text" class="form-control" placeholder="Price "
                                                name="property_price" aria-required="true">
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Masked Input -->
                <!-- Multi Select -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Overview </p>
                                    <textarea name="property_overview"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Multi Select -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Tenancy </p>
                                    <textarea name="property_tenancy" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <!-- Spinners -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Lease Start </p>
                                    <textarea name="lease_start"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Spinners -->
                    <!-- Tags Input -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Lock-in End Date </p>
                                    <textarea name="lease_lock"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Lease End Date </p>
                                    <textarea name="lease_end"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Tags Input -->
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Tenant Overview </p>
                                    <textarea name="tenant_overview"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <p class="editor">Tenant Value </p>
                                <div id="add-new-btn" class="btn btn-primary">Add New Tenant
                                </div>
                                <br>
                                <br>
                                <table id="employee-table" class="table table-striped text-center">
                                    <tr>
                                        <th>Title</th>
                                        <th>Value</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="tenant_title[]" placeholder="e.g.(Monthly rent (₹/sqft))"  required class="form-control" value=""></td>
                                        <td><input type="text" name="tenant_value[]" placeholder="e.g(₹ 9.225)" required class="form-control" ></td>
                                    </tr>
                                </table>
                                <table id="mainTable" class="table table-striped">

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
                                            <td>6 months</td>

                                        </tr>


                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">


                                <div class="form-group form-float">
                                    <p class="editor">Property Location </p>
                                    <textarea name="property_details"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">

                                <p class="editor">Location Highlight </p>

                                <div id="add-new-btn1" class="btn btn-primary">Add New Place
                                </div>
                                <br>
                                <br>
                                <table id="place-table" class="table table-striped text-center">
                                    <tr>
                                        <th>Place</th>
                                        <th>Distance</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="place[]" placeholder="e.g(Airport)" required class="form-control" ></td>
                                        <td><input type="text" name="distance[]" placeholder="e.g(8km)" required class="form-control" ></td>
                                    </tr>
                                </table>

                                <table id="mainTable1" class="table table-striped mt-4">

                                    <tbody>
                                        <tr>
                                            <td>Airport </td>
                                            <td>8km </td>

                                        </tr>
                                        <tr>
                                            <td>Highway </td>
                                            <td>12km </td>

                                        </tr>
                                        <tr>
                                            <td>Railway Station </td>
                                            <td>6 6km</td>

                                        </tr>



                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Location Map </p>
                                    <textarea style="width: 100%;" name="location_map"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">


                                <div class="form-group form-float">
                                    <p class="editor">Floor Plans </p>
                                    <textarea name="floor_plans"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <!-- Spinners -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">structure Plans </p>

                                    {{-- <form action="#" id="frmFileUpload" class="dropzone" method="post"
                                    enctype="multipart/form-data"> --}}
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="structure_image" type="file" />
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Spinners -->
                    <!-- Tags Input -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">3D structure Plans </p>

                                    {{-- <form action="#" id="frmFileUpload1" class="dropzone" method="post"
                                    enctype="multipart/form-data"> --}}
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="three_d_structure_image" type="file" multiple />
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Tags Input -->
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">

                                <p class="editor">Price </p>

                                <div id="add-new-btn2" class="btn btn-primary">Add New Price
                                </div>
                                <br>
                                <br>
                                <table id="price-table" class="table table-striped text-center">
                                    <tr>
                                        <th>Price Type</th>
                                        <th>Value</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="price_type[]" placeholder="e.g(Gross Purchase Price)" required class="form-control" ></td>
                                        <td><input type="text" name="price_value[]" placeholder="e.g(₹ 18,78,07,035)" required class="form-control" ></td>
                                    </tr>
                                </table>

                                <table id="mainTable2" class="table table-striped">

                                    <tbody>
                                        <tr>
                                            <td>Gross Purchase Price </td>
                                            <td>₹ 18,78,07,035</td>

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
                                            <td>Legal Fees</td>
                                            <td>₹ 6,50,000</td>

                                        </tr>

                                        <tr>
                                            <td>Reserves</td>
                                            <td>₹ 9,08,754</td>

                                        </tr>

                                        <tr>
                                            <td>Net Purchase Price</td>
                                            <td>₹19,50,00,000</td>

                                        </tr>

                                        <tr>
                                            <td><small>value</small></td>
                                            <td><small>value</small></td>

                                        </tr>

                                        <tr>
                                            <td><small>value</small></td>
                                            <td><small>value</small></td>

                                        </tr>

                                        <tr>
                                            <td><small>value</small></td>
                                            <td><small>value</small></td>

                                        </tr>


                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="body">

                                <p class="editor">Faq </p>
                                <div id="add" onclick=adddiv() class="btn btn-primary">Add New Faq</div>
                                <br>
                                <div class="form-group form-float" id="faq">
                                    <div class="form-group form-float">
                                        <input type="text" required class="form-control" placeholder="Faq title"
                                            name="faq_title[]" aria-required="true">
                                        <textarea required style="width:100%; height: 100px; margin-top: 20px;" name="faq_description[]"></textarea>
                                    </div>
                                </div>

                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <!-- Spinners -->
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">

                            <div class="body">
                                <div class="form-group form-float">
                                    <p class="editor">Resources </p>
                                    <input class="form-control" type="file" id="myfile" name="resource_one">
                                    <input style="margin-top: 10px;" class="form-control" type="file" id="myfiles"
                                        name="resource_two">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Spinners -->
                    <!-- Tags Input -->
                    <!-- #END# Tags Input -->
                </div>
                <input type="submit" class="btn btn-success" value="Submit">
            </form>
        </div>
    </section>

@endsection
@section('js')
    <!-- Jquery Core Js -->
    <script src="{{ asset('admin/light/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('admin/light/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('admin/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
    <script src="{{ asset('admin/assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{ asset('admin/assets/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script> <!-- Jquery Spinner Plugin Js -->
    <script src="{{ asset('admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js -->


    <script src="{{ asset('admin/assets/plugins/editable-table/mindmup-editabletable.js') }}"></script> <!-- Editable Table Plugin Js -->
    <script src="{{ asset('admin/assets/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->

    <script src="{{ asset('admin/assets/plugins/nouislider/nouislider.js') }}"></script> <!-- noUISlider Plugin Js -->
    <script src="{{ asset('admin/assets/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->

    <script src="{{ asset('admin/light/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('admin/light/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
    <script src="{{ asset('admin/light/assets/js/pages/tables/editable-table.js') }}"></script>

    <script>
        CKEDITOR.replace('property_overview');
    </script>


    <script>
        CKEDITOR.replace('property_tenancy');
    </script>



    <script>
        CKEDITOR.replace('tenant_overview');
    </script>


    <script>
        CKEDITOR.replace('property_details');
    </script>


    <script>
        CKEDITOR.replace('floor_plans');
    </script>

    <script>
        $("#add-new-btn").on("click", function() {
            //calling method to add new row
            addNewRow();
        });
        /* This event will fire on 'Delete Row' button click */

        /* This method will add a new row */
        function addNewRow(event) {
            var rowHtml = '<tr><td><input required type="text" name="tenant_title[]" class="form-control" /></td>' +
                '<td><input type="text" required name="tenant_value[]" class="form-control" /></td>' +
                '<td><i class="fa fa-trash" aria-hidden="true" onclick="deleteRow(this)"></i></td></tr>';
            $("#employee-table").append(rowHtml);
            event.preventDefault()
        }
        /* This method will delete a row */
        function deleteRow(ele) {
            var table = $('#employee-table')[0];
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                $(ele).parent().parent().remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>
    <script>
        $("#add-new-btn1").on("click", function() {
            //calling method to add new row
            addNewRow1();
        });
        /* This event will fire on 'Delete Row' button click */

        /* This method will add a new row */
        function addNewRow1(event) {
            var rowHtml = '<tr><td><input required name="place[]" type="text" class="form-control" /></td>' +
                '<td><input type="text" required name="distance[]" class="form-control" /></td>' +
                '<td><i class="fa fa-trash" aria-hidden="true" onclick="deleteRow1(this)"></i></td></tr>';
            $("#place-table").append(rowHtml);
            event.preventDefault()
        }
        /* This method will delete a row */
        function deleteRow1(ele) {
            var table = $('#place-table')[0];
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                $(ele).parent().parent().remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>
    <script>
        $("#add-new-btn2").on("click", function() {
            //calling method to add new row
            addNewRow2();
        });
        /* This event will fire on 'Delete Row' button click */

        /* This method will add a new row */
        function addNewRow2() {
            var rowHtml = '<tr><td><input required type="text" name="price_type[]" class="form-control" /></td>' +
                '<td><input type="text" required name="price_value[]" class="form-control" /></td>' +
                '<td><i class="fa fa-trash" aria-hidden="true" onclick="deleteRow2(this)"></i></td></tr>';
            $("#price-table").append(rowHtml);
        }
        /* This method will delete a row */
        function deleteRow2(ele) {
            var table = $('#price-table')[0];
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                $(ele).parent().parent().remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }
    </script>
    <script>
        function adddiv() {
            var rowHtml = `<div><button id="btn" onclick=closediv(this)>X</button>
                            <hr>

                            <div class="form-group form-float">
                                <div class="form-group form-float">
                                    <input type="text" required class="form-control" name="faq_title[]" placeholder="Faq title"
                                         aria-required="true">
                                    <textarea required style="width:100%; height: 100px; margin-top: 20px;" name="faq_description[]"></textarea>
                                </div>
                            </div>
                            </div>`;

            $("#faq").append(rowHtml);
        }

        function closediv(e) {
            var par = $(event.target).parent();
            par.remove();
        }
    </script>
@endsection
