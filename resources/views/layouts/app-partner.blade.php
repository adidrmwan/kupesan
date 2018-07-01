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

    <div class="sidebar" data-color="red" data-image=" {{URL::asset('partners/img/sidebar-4.jpg') }} ">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Adventure Studio
                </a>
            </div>

            <ul class="nav">
                <li >
                    <a href="homepartner">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="userpartner">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="pe-7s-photo"> </i> <p> Photo Package &nbsp;&nbsp; <b> <span class="pe-7s-angle-down-circle"></span> </b>  </p> 
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li style="margin-left: 35px;">
                            <a href="addpackagepartner">
                                <i class="pe-7s-plus"></i>
                                <p> Add photo package </p>
                            </a>
                        </li>
                        <li style="margin-left: 35px;">
                            <a href="editpackagepartner">
                                <i class="pe-7s-note2"></i>
                                <p> Edit photo package </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="schedulepartner">
                        <i class="pe-7s-note2"></i>
                        <p>Schedule</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">

        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kupesan</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
                                    <p class="hidden-lg hidden-md">
                                        5 Notifications
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

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
