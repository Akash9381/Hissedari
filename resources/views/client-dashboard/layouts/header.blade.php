<div class="alert alert-light" role="alert">
    <div class="row">

        <div class="col-4"> <a href="{{url('user/profile')}}" title="profile"> <img width="30px;" src="{{asset('client-dashboard/img/Person.ico')}}"> <strong>{{auth()->user()->name}}</strong> </a>
        </div>
        <div class="col-4"> <span class="badge bg-info text-dark"> <i class="fa fa-money"></i> ₹0.00
                L</span> <br> <small>Total Invested
            </small>
        </div>

        <div class="col-4"> <span class="badge bg-info text-dark"> <i class="fa fa-line-chart"></i>
                ₹0.00 L</span> <br> <small>Total Interest
            </small>
        </div>


    </div>
</div>
