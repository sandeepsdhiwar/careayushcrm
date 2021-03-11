<?php
if(Session::get('role_name')!="offe")
{
    header("Location: /offe"); /* Redirect browser */
    exit();
}
?>
<section class="page">
    <nav class="navbar-aside navbar-static-side " id="menu">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="active">
                    <a href="/offe-dashboard"><img src="https://img.icons8.com/dotty/20/000000/home.png"> <span class="nav-label">Dashboard </span></a>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Employee </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/branch-employee-detail"> Employee Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Helthworker </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/branch-helthworkeroffe-detail"> HelthWorker Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Customer </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/branch-customeroffe-detail"> Customer Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Bookings </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/branch-bookingoffe-detail"> Bookings Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                
            </ul>

        </div>
    </nav>
