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
                        <h1>Customer Detail<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Customer Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- end .page title-->
            <div id="HideWhenSearch">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-card recent-activites">
                            <!-- Start .panel -->
                            <div class="panel-heading">
                                <h4 class="panel-title">Customer<center><span style="color:red">{{Session::get('msg')}}</span></center></h4>
                                <div class="panel-actions">
                                    <span style="float:right"><button class="btn btn-success btn-sm" title="Create New Academic Year" onclick="getCreateFormBranchCustomer()"><i class="fa fa-plus"></i></button></span>
                                </div>
                                <br>
                            </div>
                            <div class="panel-body text-center" style="overflow-x: scroll;">
                                <table id="example" class="table table-bordered" style="font-size: 13px;">
                                    <thead>
                                        <tr class="alert alert-info">
                                            <th>S.R.No</th>
                                            <th>Customer Name</th>
                                            <th>Contact No</th>
                                            <th>Email Id</th>
                                            <th>Address/Location</th>
                                            <th>History</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $x=0;
                                        $cd = App\CustomerDetail::where('branch_id',Session::get('branch_id'))->get();
                                        if($cd)    {
                                            foreach ($cd as $allcd) {
                                                $x=$x+1;
                                                $emp = App\EmployeeDetail::find($allcd->ccare_executive);
                                                ?>
                                                <tr>
                                                    <td>{{$x}}</td>
                                                    <td>{{$allcd->cust_name}}</td>
                                                    <td>{{$allcd->cust_contact}}</td>
                                                    <td>{{$allcd->cust_email}}</td>
                                                    <td>{{$allcd->cust_address}}<br>{{$allcd->cust_location}}</td>
                                                    <th><a href="/view-customer-history/{{$allcd->id}}"><i class="fa fa-eye"></i> view</a></th>
                                                    <td><button class="btn btn-info btn-sm" onclick="getEditFormBranchCustomer({{$allcd->id}})"><i class="fa fa-pencil"></i></button>
                                                        <!-- <button class="btn btn-danger btn-sm" onclick="getDeleteBranchCustomer({{$allcd->id}})"><i class="fa fa-trash"></i></button> -->    
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
@section('script')
