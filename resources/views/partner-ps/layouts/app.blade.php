<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id - @yield('title')</title>

    <!-- Styles -->

   <!-- Bootstrap core CSS     -->
    <link href=" {{ URL::asset('partners/css/bootstrap.min.css ') }}" rel="stylesheet" />

     <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css" rel="stylesheet" />

    <!-- File Input -->
    <link href=" {{ URL::asset('partners/css/fileinput.min.css ') }}" rel="stylesheet" />
    <link href=" {{ URL::asset('partners/css/fileinput-rtl.min.css ') }}" rel="stylesheet" />


    <!-- Animation library for notifications   -->
    <link href=" {{ URL::asset('partners/css/animate.min.css ') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=" {{ URL::asset('partners/css/light-bootstrap-dashboard.css?v=1.4.0 ') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" {{ URL::asset('partners/css/demo.css" rel="stylesheet ') }}" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href=" {{ URL::asset('partners/css/pe-icon-7-stroke.css ') }}" rel="stylesheet" />
</head>
<body>
    @include('partner-ps.layouts.sidebar')
  
    <div class="main-panel">
        @include('partner-ps.layouts.navbar')

        @yield('content')
    </div>    
    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src=" {{ URL::asset('partners/js/jquery.3.2.1.min.js') }} " type="text/javascript"></script>
    <script src=" {{ URL::asset('partners/js/bootstrap.min.js') }} " type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src=" {{ URL::asset('partners/js/chartist.min.js') }} "></script>

    <!--  Pagination -->
    <script src=" {{ URL::asset('partners/js/pagination.js') }} "></script>

    <!--  File Input Plugin    -->
    <script src=" {{ URL::asset('partners/js/plugins/purify.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/fileinput.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/theme.min.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src=" {{ URL::asset('partners/js/light-bootstrap-dashboard.js?v=1.4.0') }} "></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src=" {{ URL::asset('partners/js/demo.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

        });
    </script>

    <script>
        $("#file-0a").fileinput({
                theme: 'fa',
                'allowedFileExtensions': ['jpg', 'png']
        });
    </script>

    <script type="text/javascript">
        
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>

    <!-- Scripts -->
    <!-- <script src="{{ URL::asset('js/app.js') }}"></script> -->
    @yield('script')

</body>
</html>
