@extends('admin.layouts.admin_layouts')
@section('title', 'Manage Property')
@section('content')
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Manage Property

                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Manage Property </a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Color Pickers -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">
                        <div class="row clearfix">
                            <div class="dashboard-list">

                                <table class="manage-table">
                                    <tbody>
                                        @forelse ( $properties as $property)
                                        <tr class="responsive-table">
                                            <td class="listing-photoo">
                                                <img src="{{url('Property-Images/'.$property->property_feature_image)}}">
                                            </td>
                                            <td class="title-container">
                                                <h2><a href="#">{{$property->property_name}}</a></h2>
                                                <h5><i class="fa fa-map-marker"></i> {{$property->property_location ?? 'NA'}}
                                                </h5>

                                            </td>
                                            <td class="expire-date">
                                                <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select">

                                                    <option>Status</option>
                                                    <option>Open</option>
                                                    <option>Fully Funded</option>
                                                    <option>Resale</option>


                                                </select>
                                            </td>
                                            <td class="action">
                                                <a href="{{url('/admin/edit-property/'.$property->id)}}"><i class="fa fa-pencil"></i> Edit</a>

                                                <a href="#" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        @empty

                                        @endforelse
                                        <tr class="responsive-table">
                                            <td class="listing-photoo">
                                                <img src="{{asset('admin/assets/images/image-gallery/1.jpg')}}">
                                            </td>
                                            <td class="title-container">
                                                <h2><a href="#">Travel To England</a></h2>
                                                <h5><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City,
                                                </h5>

                                            </td>
                                            <td class="expire-date">
                                                <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select">

                                                    <option>Status</option>
                                                    <option>Open</option>
                                                    <option>Fully Funded</option>
                                                    <option>Resale</option>


                                                </select>
                                            </td>
                                            <td class="action">
                                                <a href="#"><i class="fa fa-pencil"></i> Edit</a>

                                                <a href="#" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="responsive-table">
                                            <td class="listing-photoo">
                                                <img src="{{asset('admin/assets/images/image-gallery/1.jpg')}}">
                                            </td>
                                            <td class="title-container">
                                                <h2><a href="#">Travel To England</a></h2>
                                                <h5><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City,
                                                </h5>

                                            </td>
                                            <td class="expire-date">
                                                <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select">

                                                    <option>Status</option>
                                                    <option>Open</option>
                                                    <option>Fully Funded</option>
                                                    <option>Resale</option>


                                                </select>
                                            </td>
                                            <td class="action">
                                                <a href="#"><i class="fa fa-pencil"></i> Edit</a>

                                                <a href="#" class="delete"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>

                                        <tr class="responsive-table">
                                            <td class="listing-photoo">
                                                <img src="{{asset('admin/assets/images/image-gallery/1.jpg')}}">
                                            </td>
                                            <td class="title-container">
                                                <h2><a href="#">Travel To England</a></h2>
                                                <h5><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City,
                                                </h5>

                                            </td>
                                            <td class="expire-date">
                                                <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select">

                                                    <option>Status</option>
                                                    <option>Open</option>
                                                    <option>Fully Funded</option>
                                                    <option>Resale</option>


                                                </select>
                                            </td>
                                            <td class="action">
                                                <a href="#"><i class="fa fa-pencil"></i> Edit</a>

                                                <a href="#" class="delete"><i class="fa fa-trash"></i> Delete</a>
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
