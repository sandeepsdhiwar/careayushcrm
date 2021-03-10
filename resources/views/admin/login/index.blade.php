<?php
if(Session::get('role_name')!="admin")
{
    header("Location: /admin"); /* Redirect browser */
    exit();
}
?>
@extends('layout.app')
@section('title', 'Login Detail')

@section('style')
<link href="/assets/css/morris-0.4.3.min.css" type="text/css" rel="stylesheet">
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
    @include('admin.common.navigation')
    
    @include('admin.common.sidenavigation')

    <div id="wrapper">
        <div class="content-wrapper container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">
                        <h1>Login Detail<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Login Detail</li>
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
                                <h4 class="panel-title">Login Detail <center><span style="color:red">{{Session::get('msg')}}</span></center></h4>
                                <div class="panel-actions">
                                    <span style="float:right"><button class="btn btn-success btn-sm" title="Create New Login Detail" onclick="getCreateFormLogin({{Session::get('emp_id')}})"><i class="fa fa-plus"></i></button></span>
                                </div>
                                <br>
                            </div>
                            <div class="panel-body text-center">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                        <tr class="alert alert-info">
                                            <th>S.R.No</th>
                                            <th>Emp Name</th>
                                            <th>Branch Name</th>
                                            <th>Desig</th>
                                            <th>Login Name</th>
                                            <th>Role</th>
                                            <th>Login ID</th>
                                            <th>Login Password</th>
                                            <th>isActive</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $x=0;
                                        $log = App\LoginDetail::all();
                                        if($log)    {
                                            foreach ($log as $alllog) {
                                                $emp=App\EmployeeDetail::find($alllog->emp_id);
                                                $desig=App\DesignationDetail::find($emp->desig_id);
                                                $branch=App\BranchDetail::find($emp->branch_id);
                                                $role=App\RoleDetail::find($alllog->role_id);
                                                $x=$x+1;
                                                ?>
                                                <tr>
                                                    <td>{{$x}}</td>
                                                    <td>{{$emp->emp_name}}</td>
                                                    <td>{{$branch->branch_name}}</td>
                                                    <td>{{$desig->desig_name}}</td>
                                                    <td>{{$alllog->login_name}}</td>
                                                    <td>{{$role->role_name}}</td>
                                                    <td>{{$alllog->login_id}}</td>
                                                    <td>{{$alllog->login_password}}</td>
                                                    <td>{{$alllog->is_active}}</td>
                                                    <td><button class="btn btn-info btn-sm" onclick="getEditFormLogin({{$alllog->id}})"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-danger btn-sm" onclick="getDeleteLogin({{$alllog->id}})"><i class="fa fa-trash"></i></button>    
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
    <div id="myModal" class="modal fade" Login="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" id="model_content">
            
            </div>
        
        </div>
    </div>

</section>



</div>
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
<script src="/assets/js/morris_chart/morris.js"></script>
<script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>
@section('script')