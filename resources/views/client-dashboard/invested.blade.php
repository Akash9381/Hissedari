@extends('client-dashboard.layouts.includes')
@section('title','Invested')
@section('content')
    <div class="dashboard-content">
        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Invested</h4>
            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-12 text-dark">
                            <label class="form-label">Invested Amount</label><br>
                            <label class="form-label">Rs</label>

                            <div class="col-12 text-dark mt-40">
                                <label class="form-label">SPV Details</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Overview</h4>
            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Property Detail</label>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Catogery</label>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Property Type</label>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Location</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Reports</h4>
            <div class="col-lg-12">
                <div class="heading-properties-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-12">
                            <canvas id="chart-line" class="chartjs-render-monitor"></canvas>


                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Term of Investment</label>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Lock-in</label>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group address">
                                <label class="form-label">Current Market Value</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="submit-address dashboard-list">
            <h4 class="bg-grea-3">Contact your Relationship Manager</h4>
            <div class="col-lg-12">
                <div class="heading-properties-2">


                    <div class="team-sidebar mb-4 d-flex">
                        <a class="flex-shrink-0 me-3" href="#">
                            <img src="{{asset('client-dashboard/img/avatar/avatar-1.jpg')}}" alt="testimonial-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a class="text-primary fw-bold" href="#">Carolyn Stone</a>
                            </h5>
                            <ul>
                                <li>
                                    <i class="fa fa-envelope"></i> <a
                                        href="mailto:name@hissedari.com">name@hissedari.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone-square"></i> <a href="tel:+91 0000000000"> +91
                                        0000000000</a>
                                </li>

                                <li>
                                    <i class="fa fa-whatsapp"></i> <a href="tel:+91 0000000000"> +91
                                        0000000000</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
@section('js')
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            var ctx = $("#chart-line");
            var myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Invested", "In Process", ],
                    datasets: [{
                        data: [1200, 1700, ],
                        backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", ]
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
        $(document).ready(function() {
            var ctx = $("#chart-lines");
            var myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Holiday Home", "Commercial", "Co-working", "Co-Living"],
                    datasets: [{
                        data: [1200, 1700, 800, 200],
                        backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)",
                            "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"
                        ]
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
        $(document).ready(function() {
            var ctx = $("#charts-lines");
            var myLineChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Holiday Home", "Commercial", "Co-working", "Co-Living"],
                    datasets: [{
                        data: [1200, 1700, 800, 200],
                        backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)",
                            "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"
                        ]
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
