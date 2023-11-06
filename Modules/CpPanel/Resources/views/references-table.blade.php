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
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="zmdi zmdi-home"></i> Home</a></li>
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
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$error}}                                 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endforeach
                        @endif
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> 
                            {{Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
                        <div class="body">
                            <form method="POST" action="{{ route('cp-panel.import') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-9 col-md-9">
                                        <label> Excel / CSV File </label>
                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="excel" required=""
                                                aria-required="true"
                                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                            @error('excel')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <label for=""><a href="{{ route('sample.refrences') }}" class="">
                                                Sample Excel
                                            </a></label>
                                        <div class="form-group form-float">
                                            <button type="submit" class="btn btn-primary btn-round text-light"> Upload
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                        @forelse ($rfrs as $key => $rfr)
                                        <tr>
                                            <td>1</td>
                                            <td>{{$rfr['created_at']}}</td>
                                            <td>{{$rfr['name']}}</td>
                                            <td>{{$rfr['number']}}</td>
                                            <td>{{$rfr['email']}} </td>
                                            <td>
                                                    <a class="btn btn-icon btn-neutral btn-icon-mini" onclick="return confirm('Sure to delete?')" href="{{route('refer.delete',[$rfr['id']])}}"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                            
                                        @empty
                                            <tr>
                                                <td colspan="6">No Referance</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <a type="button" href="{{route('referance.donload.excel')}}" class="btn btn-primary btn-round text-light"> Download Excel
                </a>
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
