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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- RS5.0 Main Stylesheet -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
    <!-- Google Fonts -->   
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/bootstrap.min.css') }} ">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/font-awesome.min.css') }} ">
        
    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/style.css') }} ">
    <link rel="stylesheet" id="cpswitch" href="{{ URL::asset ('dist/css/orange.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/responsive.css') }} ">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.theme.css') }} ">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('ist/css/flexslider.css') }} " type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/datepicker.css') }} ">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/magnific-popup.css') }} ">
    
    <!-- Color Panel -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/jquery.colorpanel.css') }} ">
</head>
<body id="main-homepage">

       <div class="loader"></div>
       <!--======== SEARCH-OVERLAY =========-->       
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <div class="header-search hidden-lg">
                        <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                    </div>
                    <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>
                </div><!-- end navbar-header -->
                
                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right navbar-search-link">
                            <li><a href="home">Home</a></li>
                        @guest
                            <li><a href="{{ route('register') }}" >Register</a></li>
                            <li><a href="{{ route('login') }}" >Login</a></li>
                            <!-- <li><a href="{{ route('register') }}" >Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        @endguest
                        <li></li>
                        <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>                        -->
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->   

        @include('layouts.sidebar')

        @yield('content')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
    <script src="{{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>
    <script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
    <script src="{{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-navigation.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-flex.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-owl.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-video.js') }} "></script>
    <script src="{{ URL::asset('dist/js/popup-ad.js') }} "></script>
</body>
</html>