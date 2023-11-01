
@extends('cp-panel.layouts.c-panel-layouts')
@section('title','Invoice List | CP - Panel')




    <!-- Chat-launcher -->
@section('content')


    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2> Invoice Details
                    
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);"> Invoice Details </a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
         
            
            <div class="alert alert-success">
             <strong>Invoice List</strong>
    
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
                                           <th>Name</th>
                                           <th>Mob Number</th>
                                           <th>SPV Details</th>
                                           <th>Booking Status</th>
                                           <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
    
                                        <tr>
                                           <td>1</td>
                                           <td>20-04-2023</td>
                                           <td>E xxxxxx</td>
                                            <td>Lorem Ipsum is simply</td>
                                            <td>Active</td>
                                            <td>
                                            <a href="{{url('cp-panel/invoice-details')}}">
                                            <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-eye"></i></button>
                                            </a> 
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
            
    
            
            <div style="visibility: hidden;" id="nouislider_basic_example"></div>
    
           <div style="visibility: hidden;"  id="nouislider_range_example"></div>
            
     
            
        </div>
    </section>


@endsection 






