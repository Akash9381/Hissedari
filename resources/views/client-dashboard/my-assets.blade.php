@extends('client-dashboard.layouts.includes')
@section('title','My Assets')
@section('content')


    <div class="dashboard-content">

        <a href="{{url('user/invested')}}">
            <div class="submit-address dashboard-list">
                <h4 class="bg-grea-3">Transactions</h4>
                <div class="col-lg-12">
                    <div class="heading-properties-2">
                        <div class="row">
                            <div class="col-6 text-dark">Asset -1</div>
                            <div class="col-6 text-dark">SPV Name </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{url('user/invested')}}">
            <div class="submit-address dashboard-list">

                <div class="col-lg-12">
                    <div class="heading-properties-2">
                        <div class="row">
                            <div class="col-6 text-dark">Asset -1</div>
                            <div class="col-6 text-dark">SPV Name </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>



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
