@extends('client-dashboard.layouts.includes')
@section('title', 'Profile')
@section('content')

<div class="dashboard-content">
    <div class="submit-address dashboard-list">
        <h4 class="bg-grea-3">Personal Information </h4>
        <div class="col-lg-12">
            <div class="heading-properties-2">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            @isset($user['InvestorData']['user_image'])
                            <img src="{{ asset('/storage/profile/' . $user['InvestorData']['user_image']) }}" class="img-fluid" width="80px;">
                            @else
                            <img src="{{ asset('client-dashboard/img/avatar/man.jpg') }}" class="img-fluid" width="80px;">
                            @endisset
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Full Name </label>
                            <p><strong>{{auth()->user()->name}}</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Email </label>
                            <p><strong>{{auth()->user()->email}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Phone</label>
                            <p><strong>{{$user->InvestorData['phone'] ?? "NA"}}</strong></p>
                        </div>

                    </div>


                    <div class="row  mt-4">

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="form-group address">
                                <label class="form-label"></label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="form-group address">
                                <label class="form-label">Residential status</label>
                            <p><strong>{{$user->InvestorData['resident_status'] ?? "NA"}}</strong></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="form-group address">
                                <label class="form-label">Location</label>
                                <p><strong>{{$user->InvestorData['location'] ?? "NA"}}</strong></p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="form-group address">
                                <label class="form-label">Occupation</label>
                                <p><strong>{{$user->InvestorData['occupation'] ?? "NA"}}</strong></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="submit-address dashboard-list">
        <h4 class="bg-grea-3">Address Details </h4>

        <div class="col-lg-12">
            <div class="heading-properties-2">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Country</label>
                            <p><strong>{{$user->InvestorData['country'] ?? "NA"}}</strong></p>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Pincode </label>
                            <p><strong>{{$user->InvestorData['pincode'] ?? "NA"}}</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Landmark </label>
                            <p><strong>{{$user->InvestorData['landmark'] ?? "NA"}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">City</label>
                            <p><strong>{{$user->InvestorData['city'] ?? "NA"}}</strong></p>
                        </div>

                    </div>
                </div>

                <div class="row mt-4">


                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">State/Province</label>
                            <p><strong>{{$user->InvestorData['state'] ?? "NA"}}</strong></p>
                        </div>

                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Document Type</label>
                            <p><strong>{{$user->InvestorData['document'] ?? "NA"}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Document Number </label>
                            <p><strong>{{$user->InvestorData['document_number'] ?? "NA"}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Document Photo </label>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="submit-address dashboard-list">
        <h4 class="bg-grea-3">PAN Card </h4>

        <div class="col-lg-12">
            <div class="heading-properties-2">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">PAN Number</label>
                            <p><strong>{{$user->InvestorData['pan_number'] ?? "NA"}}</strong></p>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">PAN Name</label>
                            <p><strong>{{$user->InvestorData['pan_name'] ?? "NA"}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Document Photo</label>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>


    <div class="submit-address dashboard-list">
        <h4 class="bg-grea-3">Nominee Details </h4>

        <div class="col-lg-12">
            <div class="heading-properties-2">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="form-group address">
                            <label class="form-label">Full Name</label>
                            <p><strong>{{$user->InvestorData['nominee_first_name'] ?? "NA" }} {{ $user->InvestorData['nominee_last_name'] ?? ''}}</strong></p>


                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Email </label>
                            <p><strong>{{$user->InvestorData['nominee_email'] ?? "NA"}}</strong></p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Phone </label>
                            <p><strong>{{$user->InvestorData['nominee_phone'] ?? "NA"}}</strong></p>
                        </div>

                    </div>


                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Relationship </label>
                            <p><strong>{{$user->InvestorData['relationship'] ?? "NA"}}</strong></p>
                        </div>

                    </div>



                </div>

                <div class="row mt-4">

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group address">
                            <label class="form-label">Address </label>
                            <p><strong>{{$user->InvestorData['nominee_address'] ?? "NA"}}</strong></p>


                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-12">
        <button type="submit" class="btn-6 mt-20">Update
        </button>
    </div>



</div>

@endsection
@section('js')

<script type="text/javascript"
src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
<script>
$(document).ready(function () {
    var ctx = $("#chart-line");
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [".", ".",],
            datasets: [{
                data: [1200, 1700,],
                backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)",]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Share Percentage'
            }
        }
    });
});
</script>


<script>
$(document).ready(function () {
    var ctx = $("#chart-lines");
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Holiday Home", "Commercial", "Co-working", "Co-Living"],
            datasets: [{
                data: [1200, 1700, 800, 200],
                backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Weather'
            }
        }
    });
});
</script>

<script>
$(document).ready(function () {
    var ctx = $("#charts-lines");
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Holiday Home", "Commercial", "Co-working", "Co-Living"],
            datasets: [{
                data: [1200, 1700, 800, 200],
                backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Weather'
            }
        }
    });
});
</script>
@endsection
