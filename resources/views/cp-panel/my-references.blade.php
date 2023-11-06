
@extends('cp-panel.layouts.c-panel-layouts')
@section('title','My References | CP - Panel')




    <!-- Chat-launcher -->
@section('content')

    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>My References

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="breadcrumb-item active">My References</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div style="display: none;" class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="card">

                        <div class="body">
                            <div id="e_area_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;" class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <div id="m_area_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card">

                        <div class="body">
                            <div id="m_area_chart2"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <h5 class="mt-0">Total References</h5>

                                </div>
                                <div>
                                    <h2 class="mb-0">xx</h2>
                                </div>
                            </div>
                            <span id="linecustom1"><canvas
                                    style="display: inline-block; width: 199.75px; height: 35px; vertical-align: top;"
                                    width="199" height="35"></canvas></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <h5 class="mt-0">Clients Matured</h5>

                                </div>
                                <div>
                                    <h2 class="mb-0">xx</h2>
                                </div>
                            </div>
                            <span id="linecustom2"><canvas
                                    style="display: inline-block; width: 199.75px; height: 35px; vertical-align: top;"
                                    width="199" height="35"></canvas></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <h5 class="mt-0">Clients in Process</h5>

                                </div>
                                <div>
                                    <h2 class="mb-0">xx</h2>
                                </div>
                            </div>
                            <span id="linecustom3"><canvas
                                    style="display: inline-block; width: 199.75px; height: 35px; vertical-align: top;"
                                    width="199" height="35"></canvas></span>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row clearfix">

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Performance Graph</strong></h2>
                        </div>
                        <div class="body">
                            <div id="chart-donut" class="c3_chart"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="card">

                        <div class="body">




                            <button type="submit" class="btn btn-primary btn-round"> <a class="text-white"
                                    href="{{url('cp-panel/references-table')}}">References Table</a>

                            </button>

                        </div>
                    </div>
                </div>


            </div>



            <div class="row clearfix">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Graph in Comparission with other Cp's</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp float-right">
                                        <li><a href="javascript:void(0);">Edit</a></li>
                                        <li><a href="javascript:void(0);">Delete</a></li>
                                        <li><a href="javascript:void(0);">Report</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="m_bar_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: none;" class="row clearfix">
                <div class="col-md-6 col-lg-6">
                    <div class="card">

                        <div class="body">
                            <div id="m_line_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card">

                        <div class="body">
                            <div id="m_donut_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script src="{{asset('c-panel/light/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
    <script src="{{asset('c-panel/light/assets/bundles/c3.bundle.js')}}"></script>

    <script src="{{asset('c-panel/light/assets/js/pages/charts/morris.js')}}"></script>
    <script src="{{asset('c-panel/light/assets/js/pages/charts/c3.js')}}"></script>

@endsection
