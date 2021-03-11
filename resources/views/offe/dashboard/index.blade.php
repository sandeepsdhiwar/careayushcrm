<?php
if(!Session::get('role_name')=="offe")
{
    header("Location: /offe"); /* Redirect browser */
    exit();
}
?>
@extends('layout.app')
@section('title', 'OFFE Dashboard')

@section('style')
<link href="/assets/css/morris-0.4.3.min.css" type="text/css" rel="stylesheet">
<style>
.ogcontent{display: none; }
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
                        <h1>Dashboard Office Executive<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- end .page title-->
            <?php 
            $customercount=App\CustomerDetail::where('branch_id',Session::get('branch_id'))->count();//->get();
            $bookingscount=App\PatientDetail::count();
            $helthworkercount=App\HealthWorker::count();
            
            ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>Total Customer:-&nbsp;&nbsp;&nbsp;{{$customercount}}</h4>

                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/ios/40/000000/patient-oxygen-mask.png"></h2>
                                {{-- &nbsp;<h2>{{$count}}</h2> --}}
                            <h2 class="pull-right">
                        </div>
                        <br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger" style="width: 100%;" role="progressbar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">

                            <h4>Total Helthworkers &nbsp;&nbsp;&nbsp;&nbsp;{{$helthworkercount}}</h4>

                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/emoji/48/000000/man-office-worker.png" style="width: 40px;"/>
                            <h2 class="pull-right">
                                
                            </h2>
                        </div><br>
                        <div class="progress progress-sm ">
                            <div class="progress-bar progress-bar-danger p1-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">85% Complete</span> </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                           
                        </div><br>
                        <div class="progress progress-sm">

                            <div class="progress-bar progress-bar-danger p2-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>


                    </div>

                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>Duty Replace</h4>
                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/ios/40/000000/new-job.png"></h2>
                            <h2 class="pull-right">
                                
                            </h2>
                        </div><br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger p1-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>JustDail Data</h4>
                            <h2 class="pull-left">
                                <img src="https://img.apksum.com/7f/com.justdial.search/7.4.0/icon.png" style="width:40px;"></h2>
                            <h2 class="pull-right">
                               
                            </h2>
                        </div><br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger p1-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>Duty Reporting</h4>
                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/ios/40/000000/new-job.png">
                            </h2>
                            <h2 class="pull-right">
                                
                            </h2>
                        </div><br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger p3-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>Payment History</h4>
                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/carbon-copy/40/000000/online-money-transfer.png"/></h2>
                            <h2 class="pull-right">
                            
                            </h2>
                        </div><br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger p1-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-box clearfix height-auto">
                        <div class="pull text-left clearfix">
                            <h4>Report</h4>
                            <h2 class="pull-left">
                                <img src="https://img.icons8.com/doodle/40/000000/business-report.png"/></h2>
                            <h2 class="pull-right">
                            
                            </h2>
                        </div><br>
                        <div class="progress progress-sm">
                            <div class="progress-bar progress-bar-danger p5-bg" style="width: 100%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-card recent-activites">
                        <!-- Start .panel -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Whizz chart</h4>
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <div id="morris-one-line-chart"></div>
                        </div>
                    </div><!-- End .panel --> 
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-card recent-activites">
                        <!-- Start .panel -->
                        <div class="panel-heading">
                            <h4 class="panel-title"> bar chart</h4>
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div><!-- End .panel --> 
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-card recent-activites">
                        <!-- Start .panel -->
                        <div class="panel-heading">
                            <h4 class="panel-title"> Line chart</h4>
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>
                        </div>
                        <div class="panel-body text-center">
                            <div id="morris-line-chart"></div>

                        </div>
                    </div><!-- End .panel --> 
                </div>
            </div>

            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
<script src="/assets/js/morris_chart/morris.js"></script>
<script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>
@section('script')
<script>
$(function(){
	

    //one line chart
    Morris.Line({
        element: 'morris-one-line-chart',
        data: [
            {year: '2008', value: 5},
            {year: '2009', value: 10},
            {year: '2010', value: 8},
            {year: '2011', value: 22},
            {year: '2012', value: 8},
            {year: '2014', value: 10},
            {year: '2015', value: 5}
        ],
        xkey: 'year',
        ykeys: ['value'],
        resize: true,
        lineWidth: 4,
          gridTextColor: '#949ba2',
        labels: ['Total Student'],
        lineColors: ['#149957'],
        pointSize: 5
    });
    //bar charts
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{ y: '2006', a: 60, b: 50 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Male', 'Female'],
        hideHover: 'auto',
        resize: true,
          gridTextColor: '#949ba2',
        barColors: ['#149957', '#3ec280']
        
    });
    //line chart
    Morris.Line({
        element: 'morris-line-chart',
        data: [{ y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75, b: 65 },
            { y: '2008', a: 50, b: 40 },
            { y: '2009', a: 75, b: 65 },
            { y: '2010', a: 50, b: 40 },
            { y: '2011', a: 75, b: 65 },
            { y: '2012', a: 100, b: 90 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Pass Student', 'Fail Student'],
        hideHover: 'auto',
        resize: true,
          gridTextColor: '#949ba2',
        lineColors: ['#3ec280','#149957']
    });
    
});

</script>