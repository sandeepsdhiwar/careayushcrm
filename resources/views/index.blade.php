<!DOCTYPE html>
<html lang="en">    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CareAyush CRM</title>

        <!-- Bootstrap -->
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/waves.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/nanoscroller.css">
        <!--        <link rel="stylesheet" href="css/nanoscroller.css">-->
        <link href="/assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/themify-icons.css" rel="stylesheet">
        <link href="/assets/css/color.css" rel="stylesheet">
    </head>
    <body class="account">
        <div class="container">
            <div class="row">
                <div class="account-col text-center" style="width:50%">
                    <h1>CAREAYUSH CRM</h1>
                    <h3>LOGIN AS</h3>
                    <br><br>
                    <table class="table table-bordered" style="font-size: 20px;">
                        <tr>
                            <td><a href="{{url('/admin')}}">ADMIN</a></td>
                            <td><a href="{{url('/manager')}}">MANAGER</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('/offe')}}">BACK-OFFICE</a></td>
                            <td><a href="{{url('/cce')}}">CUSTOMER-CARE</a></td>
                        </tr>
                    </table>
                    <br><br>
                    <p>CAREAYUSH &copy; 2021</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/pace.min.js"></script>
    </body>
</html>
