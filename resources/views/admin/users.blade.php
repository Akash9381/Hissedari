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
                        <li class="breadcrumb-item"><a href="{{ '/' }}"><i class="zmdi zmdi-home"></i> Home</a></li>
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
                                        @forelse ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                @isset($user['InvestorData']['user_image'])
                                                    <td><img src="{{ asset('/storage/profile/' . $user['InvestorData']['user_image']) }}"
                                                            class="w30 rounded mr-2" alt="">{{ $user['name'] }}</td>
                                                @else
                                                    <td><img src="{{ asset('client-dashboard/img/avatar/man.jpg') }}"
                                                            class="w30 rounded mr-2" alt="">{{ $user['name'] }}</td>
                                                @endisset
                                                <td>{{ $user['email'] }}</td>
                                                <td>{{ $user['phone'] }}</td>
                                                <td>@isset($user['InvestorData']['city'])
                                                    {{$user['InvestorData']['city']}}
                                                    @else
                                                    NA
                                                @endisset</td>
                                                <td><a href="{{ url('admin/users-profile/'.$user['id']) }}"><i
                                                            class="material-icons">visibility</i> </a></td>

                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">No User Yet</td>
                                        </tr>
                                        @endforelse
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
    <script src="{{ asset('admin/light/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/light/assets/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ asset('admin/light/assets/bundles/datatablescripts.bundle.js') }}"></script>

    <script src="{{ asset('admin/light/assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/light/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
