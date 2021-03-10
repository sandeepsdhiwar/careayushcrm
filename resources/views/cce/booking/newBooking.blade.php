<?php
if(!Session::get('role_name')=="cce")
{
    header("Location: /cce"); /* Redirect browser */
    exit();
}
?>
@extends('layout.app')
@section('title', 'Customer Detail')

@section('style')
<link href="/assets/css/morris-0.4.3.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> 
<style>
.ogcontent{display: none; }
.span{color:red;}
#span{color: red;}
</style>
@section('content')
<div class="preload">
</div>
<div class="ogcontent">
    <div class="splash"><div class="splash-title"><div class="spinner">
        <img src="/assets/images/loading-new.gif" alt=""/>
    </div> </div> </div>
    @include('cce.common.navigation')
    
    @include('cce.common.sidenavigation')

    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>Customer New Booking<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Customer Booking</li>
                        </ol>
                    </div>
                </div>
            </div><!-- end .page title-->
            <?php
            $cd=App\CustomerDetail::find($id);
            ?>
            <div id="HideWhenSearch">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"></h4>
                                <div class="panel-actions">
                                </div>
                                <br>
                            </div>
                            <div class="panel-body" style="overflow-x: scroll;">
                                <i class="fa fa-user"></i> <b>{{$cd->cust_name}}</b><br>
                                <i class="fa fa-phone"></i> {{$cd->cust_contact}}<br>
                                <i class="fa fa-envelope"></i> {{$cd->cust_email}}<br>
                                <i class="fa fa-address-card"></i> {{$cd->cust_address}}<br>
                                <i class="fa fa-map-marker"></i> {{$cd->cust_location}}<br><br>
                                <a class="btn btn-sm btn-primary" href="/view-customer-history/{{$id}}"><i class="fa fa-arrow-left"></i> BACK HISTORY</a><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title"><center><span style="color:red">{{Session::get('msg')}}</span></center></h4>
                                <div class="panel-actions">
                                    
                                </div>
                                <br>
                            </div>
                            <div class="panel-body text-center" style="overflow-x: scroll;">
                                <b style="float: left;"><i class="fa fa-medkit"></i> NEW BOOKING</b><br><br>
                                <form action="/create-new-booking/{{ csrf_token() }}" method="post"  enctype="multipart/form-data" style="z-index:10;">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="ccare_executive" value="{{ Session::get('emp_id') }}">
                                    <input type="hidden" name="branch_id" value="{{Session::get('branch_id')}}">
                                    <input type="hidden" name="customer_id" value="{{$id}}">
                                    <center>
                                        <table class="table table-bordered" style="width:100%;">
                                            <tr>
                                                <td>Patient Name <span id="span">*</span></td>
                                                <td>
                                                    <select class="form-control" required name="patient_id">
                                                        <option value="" selected>Select Patient</option>
                                                        <?php
                                                        $pd=App\PatientDetail::where('customer_id',$id)->get();
                                                        ?>
                                                        @if($pd)
                                                        @foreach($pd as $allpd)
                                                        <option value="{{$allpd->id}}">{{$allpd->patient_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Service Needed <span id="span">*</span></td>
                                                <td>
                                                    <select class="form-control" required name="service_type_id">
                                                        <option value="" selected>Select Service</option>
                                                        <?php
                                                        $st=App\ServiceType::all();
                                                        ?>
                                                        @if($st)
                                                        @foreach($st as $allst)
                                                        <option value="{{$allst->id}}">{{$allst->service_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>From Date <span id="span">*</span></td>
                                                <td><input type="date" name="from_date" id="from_date" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Till Date <span id="span">*</span></td>
                                                <td><input type="date" name="till_date" id="till_date" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Total Day <span id="span">*</span></td>
                                                <td><input type="number" name="total_days" id="cust_location" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Service Session</td>
                                                <td>
                                                    <select name="service_session" class="form-control">
                                                        <option value="" selected>Select Session</option>
                                                        <option value="Single Session">Single Session</option>
                                                        <option value="Day">Day</option>
                                                        <option value="Night">Night</option>
                                                        <option value="24 Hours">24 Hours</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Session Per Day Charge</td>
                                                <td><input type="number" name="session_day_charge" id="session_day_charge" class="form-control"></td>
                                            </tr>
                                             <tr>
                                                <td>Session Charge</td>
                                                <td><input type="number" name="service_charge" id="service_charge" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Service Tax(%)</td>
                                                <td><input type="number" name="service_tax" id="service_tax" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td><input type="number" name="discount_offer" id="discount_offer" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td>Payable Amount</td>
                                                <td><input type="number" name="payable_amount" id="payable_amount" class="form-control"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Location <span id="span">*</span></td>
                                                <td><input type="text" name="service_location" id="service_location" class="form-control" value="{{$cd->cust_location}}"></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><textarea name="service_address" id="service_address" class="form-control">{{$cd->cust_address}}</textarea></td>
                                            </tr>
                                             <tr>
                                                <td>Book Status <span id="span">*</span></td>
                                                <td>
                                                    <select class="form-control" required name="status_id">
                                                        <!-- <option value="" selected>Select Status</option> -->
                                                        <?php
                                                        $sd=App\StatusDetail::all();
                                                        ?>
                                                        @if($st)
                                                        @foreach($sd as $allsd)
                                                        <option value="{{$allsd->id}}">{{$allsd->status_name}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">CREATE</button></td>
                                            </tr>
                                        </table>
                                    </center>
                                </form>
                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>

        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" id="model_content">
            
            </div>
        
        </div>
    </div>

</section>



</div>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src=" https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
<script src="/assets/js/morris_chart/morris.js"></script>
<script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
@section('script')
