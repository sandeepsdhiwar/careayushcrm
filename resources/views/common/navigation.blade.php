<?php 
$ad = DB::select('select l.role_id, l.emp_id, l.login_name, l.login_id, r.role_name, e.emp_name, e.emp_contact, e.profile_pic  from login_detail l JOIN role_detail r ON l.role_id = r.id JOIN emp_detail e ON l.emp_id = e.id where l.id = ?', [Session::get('admin_id')]);
if($ad){
    foreach ($ad as $allad) {
        # code...
    }
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
        <a class="navbar-brand" href="/dashboard">CareAyush</a></div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="search" style="display: none;">
            <form >
                <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                <span class="search-close"><i class="fa fa-times"></i></span>
            </form>
        </div>
        <ul class="nav navbar-nav navbar-right navbar-top-drops">
           
            <li class="dropdown">
                <a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown" style="font-size: 15px;"><img src="https://img.icons8.com/ios/20/000000/microsoft-admin.png"> Master <span class="fa arrow"></span></a>
                <ul class="dropdown-menu dropdown-lg animated flipInX profile">
                    <li><a href="/branch"> Branch Detail</a></li>
                    <li><a href="/designation"> Designation Detail</a></li>
                    <li><a href="/document-type"> Document Type</a></li>
                    <li><a href="/service-type"> Service Type</a></li>
                    <li><a href="/month-detail"> Month Detail</a></li>
                    <li><a href="/year-detail"> Year Detail</a></li>
                    <li><a href="/role-detail"> Role Detail</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-user"></i></a>

                <ul class="dropdown-menu dropdown-lg animated flipInX profile">

                    <li><a href="#"><i class="fa fa-code"></i><strong>{{$allad->emp_name}}</strong></a></li>
                    <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                    <li><a href="/logout/{{Session::get('admin_id')}}"><i class="fa fa-key"></i>Logout</a></li>

                </ul>
            </li>

            <li><a href="/logout/{{Session::get('admin_id')}}"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->
</nav>