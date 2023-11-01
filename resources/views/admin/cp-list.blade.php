@extends('admin.layouts.admin_layouts')
@section('title', 'CP List')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>CP
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">CP </a></li>
                    
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">            
            <div class="col-lg-12">
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
                        <div class="table-responsive">
                            <table class="table td_2 table-striped table-hover js-basic-example dataTable vcenter">
                                <thead>
                                    <tr>
                                        <th>CP_ID</th>
                                        <th>Name</th>
                                        <th>Company / Firm Name</th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>References</th>                                        
                                        <th>View</th>                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($cpdatas as $key => $cpdata)
                                    <tr>
                                        <td>{{$key + $cpdatas->firstItem()}}</td>
                                        <td>{{$cpdata['name'] ?? 'NA'}}</td>
                                        <td>{{$cpdata['CpData']['company_name'] ?? 'NA'}}</td>
                                        <td>{{$cpdata['phone'] ?? 'NA'}}</td>
                                        <td>{{$cpdata['CpRegisterOffice']['city'] ?? 'NA'}}</td>
                                        <td>{{$cpdata['CpData']['referral_code'] ?? 'NA'}}</td>
                                        <td><a href="{{route('admin.cp.refrences',$cpdata['id'])}}"><i class="material-icons">visibility</i> </a></td>
                                        
                                    </tr>
                                        
                                    @empty
                                    <tr>
                                        <td colspan="6">No data found</td>
                                    </tr>
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        {{ $cpdatas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
 <!-- Jquery Core Js -->
 <script src="{{ asset('admin/light/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
 <script src="{{ asset('admin/light/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

 <script src="{{ asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script> <!-- Bootstrap Colorpicker Js -->
 <script src="{{ asset('admin/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script> <!-- Input Mask Plugin Js -->
 <script src="{{ asset('admin/assets/plugins/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
 <script src="{{ asset('admin/assets/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script> <!-- Jquery Spinner Plugin Js -->
 <script src="{{ asset('admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script> <!-- Bootstrap Tags Input Plugin Js -->


 <script src="{{ asset('admin/assets/plugins/editable-table/mindmup-editabletable.js') }}"></script> <!-- Editable Table Plugin Js -->
 <script src="{{ asset('admin/assets/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->

 <script src="{{ asset('admin/assets/plugins/nouislider/nouislider.js') }}"></script> <!-- noUISlider Plugin Js -->
 <script src="{{ asset('admin/assets/plugins/select2/select2.min.js') }}"></script> <!-- Select2 Js -->

 <script src="{{ asset('admin/light/assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
 <script src="{{ asset('admin/light/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
 <script src="{{ asset('admin/light/assets/js/pages/tables/editable-table.js') }}"></script>
@endsection
