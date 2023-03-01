@extends('admin.layouts.admin_layouts')
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <label> Select property type </label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Select">
                                        <option></option>
                                        <option>Select</option>
                                        <option>Holiday Home</option>
                                        <option>Co-working</option>
                                        <option>Co-Living</option>
                                        <option>Warehouse</option>

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

                                <form action="#" id="frmFileUpload2" class="dropzone" method="post"
                                    enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">

                        <div class="body">
                            <div class="form-group form-float">
                                <p class="editor">Property features images </p>

                                <form action="#" id="frmFileUpload3" class="dropzone" method="post"
                                    enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3> upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
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
                                            name="name" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Property location </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Property location"
                                            name="location" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> sqft </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="sqft" name="sqft"
                                            required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Min investment </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Min investment"
                                            name="investment" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Gross Entry Yield </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Gross Entry Yield "
                                            name="location" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Target IRR** </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Target IRR** "
                                            name="target" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Target Multiple** </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Target Multiple** "
                                            name="multiple" required="" aria-required="true">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <label> Price </label>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Price " name="Price"
                                            required="" aria-required="true">
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
                                <textarea name="editor1"></textarea>
                            </div>

                            <!--<lable>Overview </lable>
                                 <textarea name="editor1"></textarea>-->
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
                                <textarea name="editor2"></textarea>
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
                                <textarea></textarea>
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
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <div class="form-group form-float">
                                <p class="editor">Lease End Date </p>
                                <textarea></textarea>
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
                                <textarea name="editor3"></textarea>
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
                            <button id="add-new-btn">Add New Tenant
                            </button>
                            <br>
                            <br>
                            <table id="employee-table" class="table table-striped text-center">
                                <tr>
                                    <th>Title</th>
                                    <th>Value</th>
                                    <th></th>
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
                                <textarea name="editor4"></textarea>
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

                            <button id="add-new-btn1">Add New Place
                            </button>
                            <br>
                            <br>
                            <table id="place-table" class="table table-striped text-center">
                                <tr>
                                    <th>Place</th>
                                    <th>Distance</th>
                                    <th></th>
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
                                <textarea style="width: 100%;"></textarea>
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
                                <textarea name="editor5"></textarea>
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

                                <form action="#" id="frmFileUpload" class="dropzone" method="post"
                                    enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
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

                                <form action="#" id="frmFileUpload1" class="dropzone" method="post"
                                    enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                    </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
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

                            <button id="add-new-btn2">Add New Price
                            </button>
                            <br>
                            <br>
                            <table id="price-table" class="table table-striped text-center">
                                <tr>
                                    <th>Price Type</th>
                                    <th>Value</th>
                                    <th></th>
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
                            <button id="add" onclick=adddiv()>Add New Faq</button>
                            <br>
                            <div class="form-group form-float" id="faq">
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Faq title" name="name"
                                        required="" aria-required="true">
                                    <textarea style="width:100%; height: 100px; margin-top: 20px;"></textarea>
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
                                <input class="form-control" type="file" id="myfile" name="myfile">
                                <input style="margin-top: 10px;" class="form-control" type="file" id="myfiles"
                                    name="myfile">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Spinners -->
                <!-- Tags Input -->






                <!-- #END# Tags Input -->
            </div>


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

    <script>
        $("#add-new-btn").on("click", function() {
            //calling method to add new row
            addNewRow();
        });
        /* This event will fire on 'Delete Row' button click */

        /* This method will add a new row */
        function addNewRow() {
            var rowHtml = '<tr><td><input type="text" class="form-control" /></td>' +
                '<td><input type="text" class="form-control" /></td>' +
                '<td><i class="fa fa-trash" aria-hidden="true" onclick="deleteRow(this)"></i></td></tr>';
            $("#employee-table").append(rowHtml);
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
        function addNewRow1() {
            var rowHtml = '<tr><td><input type="text" class="form-control" /></td>' +
                '<td><input type="text" class="form-control" /></td>' +
                '<td><i class="fa fa-trash" aria-hidden="true" onclick="deleteRow1(this)"></i></td></tr>';
            $("#place-table").append(rowHtml);
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
            var rowHtml = '<tr><td><input type="text" class="form-control" /></td>' +
                '<td><input type="text" class="form-control" /></td>' +
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
                                    <input type="text" class="form-control" placeholder="Faq title" name="name"
                                        required="" aria-required="true">
                                    <textarea style="width:100%; height: 100px; margin-top: 20px;"></textarea>
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
