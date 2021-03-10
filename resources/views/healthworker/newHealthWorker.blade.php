<?php
if(!Session::get('role_name')=="admin")
{
    header("Location: /admin"); /* Redirect browser */
    exit();
}
?>
@extends('layout.app')
@section('title', 'Health Worker Detail')

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
                        <h1>New Health Worker<small></small></h1>
                        <ol class="breadcrumb">
                            <li><a href="/dashboard"><i class="fa fa-home"></i></a></li>
                            <li class="active">Health Worker Detail</li>
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
                                <h4 class="panel-title">Create New Health Worker<center><span style="color:red">{{Session::get('msg')}}</span></center></h4>
                                <div class="panel-actions">
                                    <span style="float:right"><a href="/health-worker-detail"><button class="btn btn-success btn-sm" title="Create New Academic Year"><i class="fa fa-eye"></i></button></a></span>
                                </div>
                                <br>
                            </div>
                            <div class="panel-body text-center">
                                <form action="/create_health_worker/{{ csrf_token() }}" method="post" enctype="multipart/form-data" style="z-index:10;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <table class="table table-bordered" style="width: 80%;">
                                        <tr>
                                            <td>Health Care Name <span class="span">*</span></td>
                                            <td><input type="text" name="hw_name" id="hw_name" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Gender <span class="span">*</span></td>
                                            <td><select name="hw_gender" id="hw_gender" class="form-control" required>
                                                <option value="">select</option>    
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select></td>
                                        </tr>
                                        <tr>
                                            <td>Contact <span class="span">*</span></td>
                                            <td><input type="text" name="hw_contact" maxlength="10" minlength="10" id="hw_contact" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Email ID</td>
                                            <td><input type="email" name="hw_email" id="hw_email" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Blood Group</td>
                                            <td><select name="blood_group" id="blood_group" class="form-control">
                                                <option value="">Select</option>    
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select></td>
                                        </tr>
                                        <tr>
                                            <td>Location</td>
                                            <td><input class="form-control" type="text" name="hw_location" id="hw_location"></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><textarea name="hw_address" id="hw_address" class="form-control"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Profile Photo</td>
                                            <td><input type="file" name="profile_pic" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button type="submit" class="btn btn-success" style="float: right">SAVE</button></td>
                                        </tr>
                                    </table>
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
<script src="/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
<script src="/assets/js/morris_chart/morris.js"></script>
<script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>
@section('script')
