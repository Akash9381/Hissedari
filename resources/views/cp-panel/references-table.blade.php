@extends('cp-panel.layouts.c-panel-layouts')
@section('title', 'Reference Table | CP - Panel')




<!-- Chat-launcher -->
@section('content')


    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> References Table

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> References Table </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">


            <div class="alert alert-success">
                <strong>Upload References</strong>

            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <div class="row clearfix">


                                <div class="col-lg-12 col-md-6">
                                    <label> Excel / CSV File </label>


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


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Date</th>

                                            <th>Name</th>
                                            <th>Mob Number</th>
                                            <th>Email id</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>20-04-2023</td>
                                            <td>E xxxxxx</td>
                                            <td>Lorem Ipsum is simply</td>
                                            <td>xxxxxxxx </td>
                                            <td>
                                                <button class="btn btn-icon btn-neutral btn-icon-mini"><i
                                                        class="zmdi zmdi-delete"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-round"> Download Excel
                </button>

            </div>


        </div>

        <div style="visibility: hidden;" id="nouislider_basic_example"></div>

        <div style="visibility: hidden;" id="nouislider_range_example"></div>

        </div>
    </section>
@endsection

@section('js')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('c-panel/light/assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('c-panel/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('c-panel/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('c-panel/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('c-panel/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('c-panel/assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>


    <script src="{{ asset('c-panel/light/assets/js/pages/tables/jquery-datatable.js') }}"></script>



@endsection
