<?php
if(Session::get('role_name')!="manager")
{
    header("Location: /manager"); /* Redirect browser */
    exit();
}
$emp=App\EmployeeDetail::find(Session::get('emp_id'));
if($emp){
    $branch=App\BranchDetail::find($emp->branch_id);
}
?>
<nav class="navbar navbar-default yamm navbar-fixed-top" id="header"> <div class="color-line">
</div>
<div class="container-fluid">
    <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/manager-dashboard">CareAyush Manager({{$branch->branch_name}})</a></div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="search" style="display: none;">
            <form >
                <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                <span class="search-close"><i class="fa fa-times"></i></span>
            </form>
        </div>
        <ul class="nav navbar-nav navbar-right navbar-top-drops">
           
            <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-user"></i></a>

                <ul class="dropdown-menu dropdown-lg animated flipInX profile">

                    <li><a href="#"><i class="fa fa-code"></i><strong>{{Session::get('emp_name')}}</strong></a></li>
                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="/logout/{{Session::get('emp_id')}}"><i class="fa fa-key"></i>Logout</a></li>

                </ul>
            </li>

            <li><a href="/logout/{{Session::get('emp_id')}}"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>