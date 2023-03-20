@extends('admin.layouts.admin_layouts')
@section('title', 'Users')
@section('content')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>users

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">users </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table td_2 table-striped table-hover js-basic-example dataTable vcenter">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>City</th>
                                            <th>Profile</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{asset('admin/assets/images/xs/avatar1.jpg')}}" class="w30 rounded mr-2"
                                                    alt=""> Karen Eilla Boyette</td>
                                            <td>areneboyette@armyspy.com</td>
                                            <td>+91 0000000000</td>
                                            <td>Manchester</td>
                                            <td><a href="{{url('admin/users-profile')}}"><i class="material-icons">visibility</i> </a></td>

                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="../assets/images/xs/avatar2.jpg" class="w30 rounded mr-2"
                                                    alt=""> Walter Devid Moye</td>
                                            <td>areneboyette@armyspy.com</td>
                                            <td>+91 0000000000</td>
                                            <td>Chicago</td>
                                            <td><a href="#"><i class="material-icons">visibility</i> </a></td>

                                        </tr>


                                        <tr>
                                            <td>3</td>
                                            <td><img src="../assets/images/xs/avatar3.jpg" class="w30 rounded mr-2"
                                                    alt=""> Linda Dina Pate</td>
                                            <td>areneboyette@armyspy.com</td>
                                            <td>+91 0000000000</td>
                                            <td>Chicago</td>
                                            <td><a href="#"><i class="material-icons">visibility</i> </a></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script src="{{asset('admin/light/assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/light/assets/bundles/vendorscripts.bundle.js')}}"></script>

    <script src="{{asset('admin/light/assets/bundles/datatablescripts.bundle.js')}}"></script>

    <script src="{{asset('admin/light/assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('admin/light/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
