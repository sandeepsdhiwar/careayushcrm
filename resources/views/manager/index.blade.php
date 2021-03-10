<!DOCTYPE html>
<html lang="en">    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CareAyush Manager</title>

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
                <div class="account-col text-center">
                    <h1>CareAyush Manager</h1>
                    <h3>Log into your account</h3>
                    <form class="m-t" role="form" action="/getLogin/{{ csrf_token() }}" method="POST">
                        <div class="form-group">
                            <input type="text" name="login_id" class="form-control" placeholder="Login/User ID" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="login_password" class="form-control" placeholder="Passoword" required>
                        </div>
                        <input type="hidden" name="logger_type" value="manager">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary btn-block ">Login</button>
                        <a href="/"><small>Back</small></a>
                        <p>CareAyush Manager &copy; 2021</p>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/pace.min.js"></script>
    </body>
</html>
