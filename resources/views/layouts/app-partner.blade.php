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

    <!-- File Input -->
    <link href=" {{ URL::asset('partners/css/fileinput.min.css ') }}" rel="stylesheet" />
    <link href=" {{ URL::asset('partners/css/fileinput-rtl.min.css ') }}" rel="stylesheet" />

    <!-- DataTables -->
  <link href="{{ URL::asset('partners/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Animation library for notifications   -->
    <link href=" {{ URL::asset('partners/css/animate.min.css ') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=" {{ URL::asset('partners/css/light-bootstrap-dashboard.css?v=1.4.0 ') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" {{ URL::asset('partners/css/demo.css" rel="stylesheet ') }}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" />

    <!-- Font Awesome & Icon -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href=" {{ URL::asset('partners/css/pe-icon-7-stroke.css ') }}" rel="stylesheet" />

    <!-- Full Calendar -->
    <link href=" {{ URL::asset('superadmin/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('superadmin/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{ URL::asset('superadmin/bower_components/moment/moment.js')}}"></script>
    <!-- modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ URL::asset('partners/js/bootstrap.min.js')}}"></script>
    
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>
<body>

    @include('partner.layouts.sidebar')

    <div class="main-panel">

    @include('partner.layouts.nav')

    @yield('content')

    </div>
    <!-- Scripts -->

    <!--   Core JS Files   -->
    <script src="{{ URL::asset('partners/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>

    <!--  Pagination -->
    <script src="{{ URL::asset('partners/js/pagination.js') }}"></script>

    <!-- DataTables -->
    <script src="{{URL::asset('partners/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('partners/js/dataTables.bootstrap.min.js')}}"></script>

    <!--  File Input Plugin    -->
    <script src=" {{ URL::asset('partners/js/plugins/purify.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/fileinput.min.js') }} "></script>
    <script src=" {{ URL::asset('partners/js/theme.min.js') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src=" {{ URL::asset('partners/js/light-bootstrap-dashboard.js?v=1.4.0') }} "></script>

    <!--  Notifications Plugin    -->
    <script src=" {{ URL::asset('partners/js/bootstrap-notify.js') }} "></script>
    
    <!-- Date Time Picker -->
    <script src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    
    <!-- Full Calendar -->
    
    <script src="{{ URL::asset('partners/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#list-package').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#list-package2').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#list-package3').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#list-package4').DataTable();
        } );
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#booking-schedule').DataTable();
        } );
    </script>


    <script>
        $("#file-0a").fileinput({
                theme: 'fa',
                'allowedFileExtensions': ['jpg', 'png']
        });
    </script>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
    @yield('script') 

</body>
</html>
