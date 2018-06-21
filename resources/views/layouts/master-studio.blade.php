<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id - @yield('title')</title>
     <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/jquery-ui.min.css') }} ">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
    <!-- Google Fonts -->   
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/owl.theme.css') }} ">
    
    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/bootstrap.min.css') }} ">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/font-awesome.min.css') }} ">
        
    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/style.css') }} ">
    <link rel="stylesheet" id="cpswitch" href="{{ URL::asset ('dist/css/orange.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/responsive.css') }} ">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/flexslider.css') }} " type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/datepicker.css') }} ">
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href=" {{ URL::asset('dist/css/magnific-popup.css') }} ">
    
    <!-- Color Panel -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/jquery.colorpanel.css') }} ">

<style type="text/css">

.cntr {
  margin: auto;
}

.btn-radio {
  cursor: pointer;
  display: inline-block;
  float: left;
  -webkit-user-select: none;
  user-select: none;
}
.btn-radio:not(:first-child) {
  margin-left: 20px;
}
@media screen and (max-width: 480px) {
  .btn-radio {
    display: block;
    float: none;
  }
  .btn-radio:not(:first-child) {
    margin-left: 0;
    margin-top: 15px;
  }
}
.btn-radio svg {
  fill: none;
  vertical-align: middle;
}
.btn-radio svg circle {
  stroke-width: 2;
  stroke: #C8CCD4;
}
.btn-radio svg path {
  stroke: #008FFF;
}
.btn-radio svg path.inner {
  stroke-width: 6;
  stroke-dasharray: 19;
  stroke-dashoffset: 19;
}
.btn-radio svg path.outer {
  stroke-width: 2;
  stroke-dasharray: 57;
  stroke-dashoffset: 57;
}
.btn-radio input {
  display: none;
}
.btn-radio input:checked + svg path {
  transition: all 0.4s ease;
}
.btn-radio input:checked + svg path.inner {
  stroke-dashoffset: 38;
  transition-delay: 0.3s;
}
.btn-radio input:checked + svg path.outer {
  stroke-dashoffset: 0;
}
.btn-radio span {
  display: inline-block;
  vertical-align: middle;
}

</style>

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
    <script src=" {{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery-ui.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-navigation.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-price-slider.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-flex.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-owl.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-gallery.js') }} "></script>

    @yield('script')
</body>
</html>
