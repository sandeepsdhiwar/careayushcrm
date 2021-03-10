<?php
if(Session::get('role_name')!="admin")
{
    header("Location: /admin"); /* Redirect browser */
    exit();
}
?>
<section class="page">
    <nav class="navbar-aside navbar-static-side " id="menu">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="active">
                    <a href="/admin-dashboard"><img src="https://img.icons8.com/dotty/20/000000/home.png"> <span class="nav-label">Dashboard </span></a>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/20/000000/men-age-group-5.png"><span class="nav-label"> Employee </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/new-employee"> New Empoyee</a></li>
                        <li><a href="/employee-detail"> Employee Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios/20/000000/doctors-bag.png"/><span class="nav-label"> Health Worker </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="/new-health-worker"> New Health Worker</a></li>
                        <li><a href="/health-worker-detail"> Health Worker Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios/20/000000/gender-neutral-user.png"/><span class="nav-label"> Customer Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> New Customer</a></li>
                        <li><a href="/customer-detail"> Customer Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios/20/000000/patient-oxygen-mask.png"/><span class="nav-label"> Patient Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> New Patient</a></li>
                        <li><a href="#"> Patient Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/dotty/20/000000/attendance-mark.png"/><span class="nav-label"> Attendance Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> New Attendance</a></li>
                        <li><a href="#"> Attendance Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios/20/000000/new-job.png"/><span class="nav-label"> Duty Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> New Duty Asign</a></li>
                        <li><a href="#"> Duty Replace</a></li>
                        <li><a href="#"> Duty Reporting</a></li>
                        <li><a href="#"> Duty Detail</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios/20/000000/ticket.png"/><span class="nav-label"> Booking Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> New Booking</a></li>
                        <li><a href="#"> Old Booking</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/carbon-copy/20/000000/online-money-transfer.png"/><span class="nav-label"> Payment Detail </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#"> Payment History</a></li>
                    </ul>
                </li>
                <li class="nav-heading"><span>Components</span></li>
                
            </ul>

        </div>
    </nav>
