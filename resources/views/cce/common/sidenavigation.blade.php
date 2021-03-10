<?php
if(Session::get('role_name')!="cce")
{
    header("Location: /cce"); /* Redirect browser */
    exit();
}
?>
<section class="page">
    <nav class="navbar-aside navbar-static-side " id="menu">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="active">
                    <a href="/cce-dashboard"><img src="https://img.icons8.com/dotty/20/000000/home.png"> <span class="nav-label">Dashboard </span></a>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Customer </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/branch-customer-detail"> Customer Detail</a></li>
                        <li><a href="/branch-customer-byme"> Customer created by me</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/purchase-order.png" style="width: 20px;"/><span class="nav-label"> Booking </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        
                        <li><a href="/branch-bookings-detail"> Booking Detail</a></li>
                        {{-- <li><a href="/branch-todaybookings-detail"> Today Booking Detail</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/emoji/48/000000/man-office-worker.png" style="width: 20px;"/><span class="nav-label"> Helthworker </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        
                        <li><a href="/ccehealth-worker-detail"> Helthworker Detail</a></li>
                        {{-- <li><a href="/branch-todaybookings-detail"> Today Booking Detail</a></li> --}}
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                
            </ul>

        </div>
    </nav>
