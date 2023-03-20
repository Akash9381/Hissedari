@extends('admin.layouts.admin_layouts')
@section('title', 'SPV ID')
@section('content')


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>SPV ID

                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">SPV ID </a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Color Pickers -->

        <!-- #END# Color Pickers -->
        <!-- Masked Input -->

        <!-- #END# Masked Input -->
        <!-- Multi Select -->

        <!-- #END# Multi Select -->



        <!-- Advanced Select2 -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <p> <b>Select property for SVP iD </b> </p>
                                <select class="form-control z-index show-tick" data-live-search="true">
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                </select>
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Select2 -->

        <!-- Advanced Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6">
                                <label> SPV Details </label>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="SVP Name" name="name"
                                        required="" aria-required="true">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label> Category </label>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Category" name="Category"
                                        required="" aria-required="true">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label> Property Type </label>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder="Property Type" name=""
                                        required="" aria-required="true">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <label> location </label>
                                <div class="form-group form-float">
                                    <input type="text" class="form-control" placeholder=" location" name="location"
                                        required="" aria-required="true">
                                </div>
                            </div>
                            <button class="btn btn-raised btn-primary btn-round waves-effect"
                                type="submit">SUBMIT</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Select -->
        <!-- Input Slider -->

        <!-- #END# Input Slider -->
    </div>
</section>
@endsection
