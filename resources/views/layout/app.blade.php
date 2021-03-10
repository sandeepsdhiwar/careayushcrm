<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>CareAyush - @yield('title')</title>
        <link rel="shortcut icon" type="image/png" href=""/>
        <!-- Bootstrap -->
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/waves.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/nanoscroller.css">
        <link href="/assets/css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="/assets/css/menu-light.css" type="text/css" rel="stylesheet">
        <link href="/assets/css/style.css" type="text/css" rel="stylesheet">
        <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/app.min.1.css" rel="stylesheet">
        <link href="/assets/css/fullcalendar.min.css" rel="stylesheet">
        <link href="/assets/css/themify-icons.css" rel="stylesheet">
        <link href="/assets/css/color.css" rel="stylesheet">
        <link href="/assets/js/c3/c3.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/9858166603.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    @yield('style')

    </head>
    <body class="fixed-navbar fixed-sidebar">
        @yield('content')


        {{-- <script type="text/javascript" src="/assets/js/jquery.min.js"></script> --}}
        <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/metisMenu.min.js"></script>
        <script src="/assets/js/jquery.nanoscroller.min.js"></script>
        <script src="/assets/js/jquery-jvectormap-1.2.2.min.js"></script>
        <!-- Flot -->
        <script src="/assets/js/flot/jquery.flot.js"></script>
        <script src="/assets/js/flot/jquery.flot.tooltip.min.js"></script>
        <script src="/assets/js/flot/jquery.flot.resize.js"></script>
        <script src="/assets/js/flot/jquery.flot.pie.js"></script>
        <script src="/assets/js/flot/curved-line-chart.js"></script>
        <script src="/assets/js/chartjs/Chart.min.js"></script>
        <script src="/assets/js/pace.min.js"></script>
        <script src="/assets/js/waves.min.js"></script>
        <script src="/assets/js/morris_chart/raphael-2.1.0.min.js"></script>
        <script src="/assets/js/morris_chart/morris.js"></script>
        <script src="/assets/js/jquery.sparkline.min.js"></script>
        <script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>

        <!--        <script src="js/jquery.nanoscroller.min.js"></script>-->
        <script type="text/javascript" src="/assets/js/custom.js"></script>
        <!-- ChartJS-->
        <script src="/assets/js/chartjs/Chart.min.js"></script>

        <!--page js-->
        <script src="/assets/js/moment.min.js"></script>
        <script src="/assets/js/c3/d3.v3.min.js" charset="utf-8"></script>
        <script src="/assets/js/jquery.simpleWeather.min.js"></script>
        <script src="/assets/js/fullcalendar.min.js"></script>
        <script src="/assets/js/c3/c3.min.js"></script>
        
        <script src="/js/whizzact.js"></script>
        <script src="/assets/js/demo.js"></script>
        @yield('script')
        {{-- <script src="/assets/js/index.js"></script> --}}
    </body>
</html>