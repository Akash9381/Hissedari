@extends('client-dashboard.layouts.includes')
@section('title', 'Portfolio Summery')
@section('content')


    <div class="dashboard-content">

        <div class="submit-address dashboard-list">
            <div class="tabbing tabbing-box mb-50">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">All Transation

                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Non Rental Asset

                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pandetails-tab" data-bs-toggle="tab" data-bs-target="#pandetails"
                            type="button" role="tab" aria-controls="pandetails" aria-selected="false">Rental Asset


                        </button>
                    </li>



                </ul>
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="row">
                                <div class="col-8">
                                    <canvas id="chart-line" class="chartjs-render-monitor"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--------------------------------------------------------------------->


                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample3">
                            <div class="accordion-item">

                                <div class="row">
                                    <div class="col-8">
                                        <canvas id="chart-lines" class="chartjs-render-monitor"></canvas>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--charts-lines-->

                    <div class="tab-pane fade" id="pandetails" role="tabpanel" aria-labelledby="pandetails-tab">
                        <div class="accordion accordion-flush" id="accordionFlushExample4">
                            <div class="accordion-item">

                                <div class="row">
                                    <div class="col-8">
                                        <canvas id="charts-lines" class="chartjs-render-monitor"></canvas>
                                    </div>

                                </div>

                            </div>
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
                        text: 'All Transation'


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
                        text: 'Non Rental Asset'
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
                        text: 'Rental Asset'
                    }
                }
            });
        });
    </script>

@endsection
