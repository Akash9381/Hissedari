@extends('cp-panel.layouts.c-panel-layouts')
@section('title', 'Bank Details | CP - Panel')

<!-- Chat-launcher -->
@section('content')

    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> CP Bank Details

                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> CP Bank Details </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong>
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <!-- Color Pickers -->
            <!-- Masked Input -->

            <!-- Multi Select -->
            <form method="POST" action="{{ route('cp-panel.bank.details.save') }}" enctype="multipart/form-data">
                @csrf

                <div class="alert alert-success">                    
                    <div id="add" onclick=adddiv() class="btn btn-primary">Add Another Accout</div>
                    <strong>Bank Account Details</strong>
                </div>
                <div class="row clearfix" >
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card" id="faq">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <label> Account Number</label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="account_number[]"
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label> IFSC Code </label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="ifsc_code[]"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Bank Name </label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="bank_name[]"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label> Account Type </label><br>
                                        <select class="form-control show-tick ms select2" required name="account_type[]"
                                            data-placeholder="Select">
                                        <option value="saving">Saving</option>
                                        <option value="current">Current</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Cancelled Cheque </label>

                                        <div class="form-group form-float">
                                            <input type="file" required class="form-control" name="cancel_cheque_image[]"
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Front Side of the Document </label>

                                        <div class="form-group form-float">
                                            <input type="file" required class="form-control" name="front_side[]"
                                                aria-required="true">
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-round"> Updates
                    </button>
                </div>

            </form>
        </div>

        <div style="visibility: hidden;" id="nouislider_basic_example"></div>

        <div style="visibility: hidden;" id="nouislider_range_example"></div>


        </div>
    </section>


@endsection

@section('js')
<script>
    function adddiv() {
        var rowHtml = `<div><button id="btn" onclick=closediv(this)>X</button>
            <div class="card" >
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6">
                                        <label> Account Number</label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="account_number[]"
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label> IFSC Code </label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="ifsc_code[]"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Bank Name </label>
                                        <div class="form-group form-float">
                                            <input type="text" required class="form-control" name="bank_name[]"
                                                aria-required="true">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label> Account Type </label><br>
                                        <select class="form-control show-tick ms select2" name="account_type[]"
                                            data-placeholder="Select">
                                        <option value="saving">Saving</option>
                                        <option value="current">Current</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Cancelled Cheque </label>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="cancel_cheque_image[]"
                                                aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label> Upload Front Side of the Document </label>

                                        <div class="form-group form-float">
                                            <input type="file" class="form-control" name="front_side[]"
                                                aria-required="true">
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        </div>`;

        $("#faq").append(rowHtml);
    }

    function closediv(e) {
        var par = $(event.target).parent();
        par.remove();
    }
</script>
@endsection
