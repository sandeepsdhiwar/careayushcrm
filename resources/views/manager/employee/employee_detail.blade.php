<?php
if(Session::get('role_name')!="manager")
{
    header("Location: /manager"); /* Redirect browser */
    exit();
}
?>
@extends('layout.app')
@section('title', 'Employee Detail')

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
    @include('manager.common.navigation')
    
    @include('manager.common.sidenavigation')

    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>Employee Detail<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Employee Detail</li>
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
                                <h4 class="panel-title">Employee<center><span style="color:red">{{Session::get('msg')}}</span></center></h4>
                                <div class="panel-actions">
                                    <span style="float:right"><button class="btn btn-success btn-sm" title="Create New Academic Year" onclick="getCreateFormBranchEmployee({{Session::get('emp_id')}})"><i class="fa fa-plus"></i></button></span>
                                </div>
                                <br>
                            </div>
                            <div class="panel-body text-center" style="overflow-x: scroll;">
                                <table id="example" class="table table-bordered" style="font-size: 13px;">
                                    <thead>
                                        <tr class="alert alert-info">
                                            <th>S.R.No</th>
                                            <th>Profile Photo</th>
                                            <th>Branch Name</th>
                                            <th>Designation</th>
                                            <th>Employee Name</th>
                                            <th>Contact Email</th>
                                            <th>Address</th>
                                            <th>Blood Group</th>
                                            <th>Logins</th>
                                            <th>isActive</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $man=App\EmployeeDetail::find(Session::get('emp_id'));
                                        $x=0;
                                        $ed = DB::select("select e.* from emp_detail e join desig_detail d on e.desig_id=d.id where e.branch_id=? and d.desig_name<>? and e.id<>?",[Session::get('branch_id'),'Admin',Session::get('emp_id')]);
                                        if($ed)    {
                                            foreach ($ed as $alled) {
                                                $x=$x+1;
                                                $bd = App\BranchDetail::where('id', $alled->branch_id)->first();
                                                if($bd){
                                                    $dd = App\DesignationDetail::where('id', $alled->desig_id)->first();
                                                    if($dd){
                                                        ?>
                                                        <tr>
                                                            <td>{{$x}}</td>
                                                            <td><img src="/{{$alled->profile_pic}}" alt="{{$alled->emp_name}}" style="width:50px;"></td>
                                                            <td>{{$bd->branch_name}}</td>
                                                            <td>{{$dd->desig_name}}</td>
                                                            <td>{{$alled->emp_name}}</td>
                                                            <td>First: <b>{{$alled->emp_contact}}</b><br>
                                                                Second: <b>{{$alled->alt_contact}}</b><br>
                                                            Email: <b>{{$alled->emp_email}}</b></td>
                                                            <td>{{$alled->emp_address}}</td>
                                                            <td>{{$alled->blood_group}}</td>
                                                            <td>
                                                                <?php
                                                                $ld=App\Logindetail::where('emp_id',$alled->id)->first();
                                                                ?>
                                                                @if($ld)
                                                                Login ID: <b>{{$ld->login_id}}</b><br>
                                                                Password: <b>{{$ld->login_password}}</b><br><br>
                                                                 <button class="btn btn-success btn-sm" title="Create New Academic Year" onclick="getManEditFormLogin({{$alled->id}})"><i class="fa fa-edit"></i></button>
                                                                @else
                                                                No Login Access<br><br>
                                                                <button class="btn btn-success btn-sm" title="Create New Academic Year" onclick="getManCreateFormLogin({{$alled->id}})"><i class="fa fa-plus"></i></button>
                                                                @endif
                                                            </td>
                                                            <td>{{$alled->is_active}}</td>
                                                            <td><button class="btn btn-info btn-sm" onclick="getEditFormBranchEmployee({{$alled->id}})"><i class="fa fa-pencil"></i></button>
                                                                <button class="btn btn-danger btn-sm" onclick="getDeleteBranchEmployee({{$alled->id}})"><i class="fa fa-trash"></i></button>    
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
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
@section('script')
