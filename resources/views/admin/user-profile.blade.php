@extends('admin.layouts.admin_layouts')
@section('title', 'Users Profile')
@section('content')
    <section class="content profile-page">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>User Profile

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">users Profile </a></li>

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
                                <div class="col-lg-1 col-md-1 col-12">
                                    <div class="profile-image float-md-right">
                                        @isset($user['InvestorData']['user_image'])
                                            <img width="150px"
                                                src="{{ asset('/storage/profile/' . $user['InvestorData']['user_image']) }}"
                                                alt="{{$user['InvestorData']['user_image']}}">
                                        @else
                                            <img width="150px" src="{{ asset('client-dashboard/img/avatar/man.jpg') }}"
                                                alt="">
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3 col-12">
                                    <h6 class="mt-2 m-b-0">Name</h6>
                                    <span class="job_post">{{ $user['name'] }}</span>
                                </div>

                                <div class="col-lg-4 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Email</h6>
                                    <span class="job_post">{{ $user['email'] }}</span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Phone</h6>
                                    <span class="job_post">{{ $user['phone'] }}</span>
                                </div>

                            </div>

                            <div class="divider"></div>

                            <div class="row justify-content-md-center">

                                <div class="col-lg-1 col-md-1 col-12" style="visibility: hidden;">

                                </div>

                                <div class="col-lg-4 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Residential status</h6>
                                    <span class="job_post">
                                        @isset($user['InvestorData']['resident_status'])
                                            {{ $user['InvestorData']['resident_status'] }}
                                        @else
                                            NA
                                        @endisset
                                    </span>
                                </div>

                                <div class="col-lg-4 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Location</h6>
                                    <span class="job_post">
                                        @isset($user['InvestorData']['location'])
                                            {{ $user['InvestorData']['location'] }}
                                        @else
                                            NA
                                        @endisset
                                    </span>
                                </div>

                                <div class="col-lg-3 col-md-3 col-6">
                                    <h6 class="mt-2 m-b-0">Occupation</h6>
                                    <span class="job_post">
                                        @isset($user['InvestorData']['occupation'])
                                            {{ $user['InvestorData']['occupation'] }}
                                        @else
                                            NA
                                        @endisset
                                    </span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>





            <div class="row clearfix">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Details</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Invested
                                    Properties</a></li>

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="mypost">

                            <div class="alert alert-success">
                                <strong>Address Details</strong>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-2 col-md-2 col-6">
                                                    <h6 class="mt-2 m-b-0">Country</h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['country'])
                                                            {{ $user['InvestorData']['country'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-6">
                                                    <h6 class="mt-2 m-b-0">Pincode </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['pincode'])
                                                            {{ $user['InvestorData']['pincode'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-6">
                                                    <h6 class="mt-2 m-b-0">Landmark </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['landmark'])
                                                            {{ $user['InvestorData']['landmark'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-6">
                                                    <h6 class="mt-2 m-b-0">City</h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['city'])
                                                            {{ $user['InvestorData']['city'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-2 col-md-2 col-6">
                                                    <h6 class="mt-2 m-b-0">State</h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['state'])
                                                            {{ $user['InvestorData']['state'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
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
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">PAN Number </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['pan_number'])
                                                            {{ $user['InvestorData']['pan_number'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">PAN Name </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['pan_name'])
                                                            {{ $user['InvestorData']['pan_name'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert-success">
                                <strong>PAN Document Images </strong>
                            </div>




                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Front Side of the Document </h6>
                                                    <img width="150" src="{{ asset('/storage/pan/' . $user['InvestorData']['pan_front_image']) }}" alt="{{$user['InvestorData']['pan_front_image']}}"
                                                        class="img-fluid img-thumbnail m-t-30">
                                                    <a href="{{ asset('/storage/pan/' . $user['InvestorData']['pan_front_image']) }}" download="{{$user['InvestorData']['pan_front_image']}}" title="Download"> <i
                                                            class="material-icons">move_to_inbox</i></a>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Back Side of the Document </h6>
                                                    <img width="150" src="{{ asset('/storage/pan/' . $user['InvestorData']['pan_back_image']) }}" alt="{{$user['InvestorData']['pan_back_image']}}"
                                                        class="img-fluid img-thumbnail m-t-30">
                                                    <a href="{{ asset('/storage/pan/' . $user['InvestorData']['pan_back_image']) }}" download="{{$user['InvestorData']['pan_back_image']}}" title="Download"> <i
                                                            class="material-icons">move_to_inbox</i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="alert alert-success">
                                <strong>Bank Account Details </strong>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Account Number </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['account_number'])
                                                            {{ $user['InvestorData']['account_number'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">IFSC Code </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['ifsc_code'])
                                                            {{ $user['InvestorData']['ifsc_code'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Bank Name </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['bank_name'])
                                                            {{ $user['InvestorData']['bank_name'] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>


                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Account Type </h6>
                                                    <span class="job_post">@isset($user['InvestorData']['account_type'])
                                                        {{ $user['InvestorData']['account_type'] }}
                                                    @else
                                                        NA
                                                    @endisset</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-success">
                                <strong>Bank Second Account Details </strong>
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
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert-success">
                                <strong>Cancelled Cheque </strong>
                            </div>


                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Front Side </h6>
                                                    <img width="150" src="{{ asset('/storage/cheque/' . $user['InvestorData']['cheque_front_image']) }}" alt="{{$user['InvestorData']['cheque_front_image']}}"
                                                        class="img-fluid img-thumbnail m-t-30">
                                                    <a href="{{ asset('/storage/cheque/' . $user['InvestorData']['cheque_front_image']) }}" download="{{$user['InvestorData']['cheque_front_image']}}" title="Download"> <i
                                                            class="material-icons">move_to_inbox</i></a>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Back Side </h6>
                                                    <img width="150" src="{{ asset('/storage/cheque/' . $user['InvestorData']['cheque_back_image']) }}" alt="{{$user['InvestorData']['cheque_back_image']}}"
                                                        class="img-fluid img-thumbnail m-t-30">
                                                    <a href="{{ asset('/storage/cheque/' . $user['InvestorData']['cheque_back_image']) }}" download="{{$user['InvestorData']['cheque_back_image']}}" title="Download"> <i
                                                            class="material-icons">move_to_inbox</i></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert-success">
                                <strong>Credit Card </strong>
                            </div>


                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Bank Name </h6>
                                                    <span class="job_post">
                                                        @isset(json_decode($user['InvestorData']['credit_card_bank_name'])[0])
                                                            {{json_decode($user['InvestorData']['credit_card_bank_name'])[0] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Card Number </h6>
                                                    <span class="job_post">
                                                        @isset(json_decode($user['InvestorData']['credit_card_number'])[0])
                                                            {{ json_decode($user['InvestorData']['credit_card_number'])[0] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="alert alert-success">
                                <strong>Credit Card 2 (optional) </strong>
                            </div>


                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Bank Name </h6>
                                                    <span class="job_post">
                                                        @isset(json_decode($user['InvestorData']['credit_card_bank_name'])[1])
                                                            {{json_decode($user['InvestorData']['credit_card_bank_name'])[1] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-6">
                                                    <h6 class="mt-2 m-b-0">Card Number </h6>
                                                    <span class="job_post">
                                                        @isset(json_decode($user['InvestorData']['credit_card_number'])[1])
                                                            {{ json_decode($user['InvestorData']['credit_card_number'])[1] }}
                                                        @else
                                                            NA
                                                        @endisset
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="alert alert-success">
                                <strong>Nominee Details </strong>
                            </div>

                            <div class="row clearfix">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card profile-header">
                                        <div class="body">

                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Name </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['nominee_first_name'])
                                                        {{ $user['InvestorData']['nominee_first_name'] }}
                                                    @else
                                                        NA
                                                    @endisset</span>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Email </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['nominee_email'])
                                                        {{ $user['InvestorData']['nominee_email'] }}
                                                    @else
                                                        NA
                                                    @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Phone </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['nominee_phone'])
                                                        {{ $user['InvestorData']['nominee_phone'] }}
                                                    @else
                                                        NA
                                                    @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-6">
                                                    <h6 class="mt-2 m-b-0">Relationship </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['relationship'])
                                                        {{ $user['InvestorData']['relationship'] }}
                                                    @else
                                                        NA
                                                    @endisset
                                                    </span>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <h6 class="mt-2 m-b-0">Address </h6>
                                                    <span class="job_post">
                                                        @isset($user['InvestorData']['nominee_address'])
                                                        {{ $user['InvestorData']['nominee_address'] }}
                                                    @else
                                                        NA
                                                    @endisset
                                                    </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div role="tabpanel" class="tab-pane" id="timeline">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card">

                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="dashboard-list">

                                                    <table class="manage-table">
                                                        <tbody>
                                                            <tr class="responsive-table">
                                                                <td class="listing-photoo">
                                                                    <img src="../assets/images/image-gallery/1.jpg">
                                                                </td>
                                                                <td class="title-container">
                                                                    <h2><a href="#">Travel To England</a></h2>
                                                                    <h5>SVP ID</h5>
                                                                    <h5><i class="fa fa-map-marker"></i> 123 Kathal St.
                                                                        Tampa City, </h5>

                                                                </td>



                                                                <td class="action">
                                                                    <a href="invested-properties-details.html"><button
                                                                            class="btn btn-primary btn-round">preview</button></a>
                                                                </td>
                                                            </tr>


                                                            <tr class="responsive-table">
                                                                <td class="listing-photoo">
                                                                    <img src="../assets/images/image-gallery/1.jpg">
                                                                </td>
                                                                <td class="title-container">
                                                                    <h2><a href="#">Travel To England</a></h2>
                                                                    <h5>SVP ID</h5>
                                                                    <h5><i class="fa fa-map-marker"></i> 123 Kathal St.
                                                                        Tampa City, </h5>

                                                                </td>



                                                                <td class="action">
                                                                    <a href="invested-properties-details.html"><button
                                                                            class="btn btn-primary btn-round">preview</button></a>
                                                                </td>
                                                            </tr>



                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
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
    <script src="{{ asset('admin/light/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('admin/light/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{ asset('admin/light/assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->

    <script src="{{ asset('admin/light/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
    <script src="{{ asset('admin/light/assets/js/pages/charts/jquery-knob.js') }}"></script>
@endsection
