<?php
if(!Session::get('role_name')=="offe")
{
    header("Location: /offe"); /* Redirect browser */
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
    @include('offe.common.navigation')
    
    @include('offe.common.sidenavigation')

    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>Customer History<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Customer History</li>
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
                                <button class="btn btn-sm btn-primary" onclick="getCreateFormPatient({{$id}})"><i class="fa fa-plus"></i> PATIENT/USER</button><br><br>
                                <a href="/new-booking/{{$id}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> BOOKING</a><br><br>
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
                                <b style="float: left;"><i class="fa fa-medkit"></i> Patient/User Details</b><br><br>
                                <table id="example" class="table table-bordered" style="font-size: 13px;">
                                    <thead>
                                        <tr class="alert alert-info">
                                            <th>S.R.No</th>
                                            <th>Patient/User Name</th>
                                            <th>Contact</th>
                                            <th>Gender/Age</th>
                                            <th>Address/Location</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $x=0;
                                        $pd = App\PatientDetail::where('customer_id',$id)->get();
                                        if($pd)    {
                                            foreach ($pd as $allpd) {
                                                $x=$x+1;
                                                ?>
                                                <tr>
                                                    <td>{{$x}}</td>
                                                    <td>{{$allpd->patient_name}}</td>
                                                    <td>{{$allpd->patient_contact}}</td>
                                                    <td>Gender: {{$allpd->patient_gender}}
                                                        <br>Age: {{$allpd->patient_age}}
                                                    </td>
                                                    <td>{{$allpd->patient_address}}<br>{{$allpd->patient_location}}</td>
                                                    <td>{{$allpd->created_at}}</td>
                                                    <td><button class="btn btn-info btn-sm pull-right" onclick="getEditFormPatient({{$allpd->id}},{{$id}})"><i class="fa fa-pencil"></i></button>
                                                        
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <br>
                                <b style="float: left;"><i class="fa fa-medkit"></i> Booking Details</b><br>
                                <?php
                                $bd=App\BookingDetail::where('customer_id',$id)->orderBy('booking_date','desc')->get();
                                ?>
                                
                                @if($bd)
                                @foreach($bd as $allbd)
                                    <table id="example" class="table table-bordered" style="font-size: 13px;">
                                        <thead>
                                            <tr class="alert alert-info">
                                                <th>Booking Code</th>
                                                <th>Booking Date</th>
                                                <th>Time</th>
                                                 <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php
                                    $stat=App\StatusDetail::find($allbd->status_id);
                                    ?>
                                        <tr class="bg-success">
                                            <td>{{$allbd->booking_code}}</td>
                                            <td>{{$allbd->booking_date}}</td>
                                            <td>{{$allbd->booking_time}}</td>
                                            <td>{{$stat->status_name}}</td>
                                            <td><button class="btn btn-info btn-sm pull-right" onclick="getEditFormBooking({{$allbd->id}})"><i class="fa fa-pencil"></i></button></td>
                                        </tr>
                                        <?php
                                        $sn=App\ServiceNeed::where('booking_id',$allbd->id)->get();
                                        ?>
                                        @if($sn)
                                        <tr>
                                            <th colspan="2"><b>Patient/User Info</b></th><th colspan="2"><b>Requirement/s</b></th><th><b>Action</b></th>
                                        </tr>

                                        @foreach($sn as $allsn)
                                            <tr>
                                            <?php 
                                            $pdd=App\PatientDetail::find($allsn->patient_id);
                                            $st=App\ServiceType::find($allsn->service_type_id);
                                            ?>
                                            <td>
                                                <b>{{$pdd->patient_name}}</b><br>
                                                Gender/Age : {{$pdd->patient_gender}}/{{$pdd->patient_age}}<br>
                                                Service Address : {{$allsn->service_address}}<br>
                                                Service Location : {{$allsn->service_location}}
                                            </td>
                                            <td colspan="3">
                                                Require: {{$st->service_name}}<br>
                                                From - {{$allsn->from_date}} To - {{$allsn->till_date}}<br>
                                                For Session : {{$allsn->service_session}}<br>
                                                For {{$allsn->total_days}} days<br>
                                                Status: {{$allsn->service_status}}
                                            </td>
                                            <td>
                                                <button class="btn btn-info btn-sm pull-right" onclick="getEditServiceNeed({{$allsn->id}})"><i class="fa fa-pencil"></i></button>
                                            </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                          <td colspan="7">
                                              <button class="btn btn-info btn-sm pull-right" onclick="getCreateServiceNeed({{$allbd->id}})"><i class="fa fa-plus"></i> MORE SERVICE</button>
                                          </td>  
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <br><br><br>
                                @endforeach
                                @endif
                                    
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
