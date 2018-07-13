<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id | @yield('title')</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- RS5.0 Main Stylesheet -->
    <link rel="icon" href="{{ URL::asset('dist/images/logo.png') }}" type="image/x-icon">
        
    <!-- Google Fonts -->   
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/bootstrap.min.css') }} ">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/font-awesome.min.css') }} ">
        
    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/style.css') }} ">
    <link rel="stylesheet" id="cpswitch" href="{{ URL::asset ('dist/css/orange.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/responsive.css') }} ">
    
    <!-- Color Panel -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/jquery.colorpanel.css') }} ">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick-theme.css') }}">

    <style type="text/css">
        body {
  perspective: 100vw;
}

main {
  color: #FFF;
  width: 300px;
  height: 450px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-origin: 25% 50%;
  transform-style: preserve-3d;
  transition: all 1s ease-in-out;
  
  &.flip {
    transform: translate(0, -50%) rotateY(180deg);
  }
}

hgroup {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: #EA410C;
  border: 1px solid #EA410C;
  h2 {
    font-weight: 300;
    line-height: 40px;
    color: #EA410C;
  }
}

form, section {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  text-align: center;
  backface-visibility: hidden;
}

form {
  background-color: #EA410C;
  transform: rotateY(0);
}

section {
  background-color: #5B7383;
  padding: 15px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  transform: rotateY(180deg);
  h2 {
    color: #EA410C;
  }
}

fieldset {
  padding-top: 40px;
  width: 100%;
  height: 260px;
}

input {
  transition: all 0.2s ease-in-out;
  width: 250px;
  height: 30px;
  color: #5B7383;
  font-weight: 600;
  border-bottom: 1px solid rgba(255,255,255,.6);
  margin: 10px;
  &::placeholder {
    color: #FFF;
    font-weight: 300;
    opacity: .7;
    }
  
  &:focus,
  &:valid {
    border-color: white;
  }
}

button {
  width: 250px;
  height: 45px;
  border: 1px solid #FFF;
  border-radius: 25px;
  transition: all 300ms ease-in-out;
}

button:hover {
  background-color: HSLA(0, 0%, 100%, .2);
}
    </style>

</head>
<body id="main-homepage">

       <div class="loader"></div>
       <!--======== SEARCH-OVERLAY =========-->       
        <div class="header-absolute">
            <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent landing-page-navbar" id="mynavbar">
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
                        <a href="#" class="navbar-brand">
                            <img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " style="max-width: 175px;">
                        </a>
                    </div><!-- end navbar-header -->
                    
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                                <li><a href="home">Home</a></li>
                            @guest
                                <li><a href="{{ route('login') }}" >Log in</a></li>
                                <li><a href="{{ route('register') }}" >Daftar</a></li>
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
                                <li>
                                    <button class="btn btn-orange" style="margin-top:5px; padding: 10px 30px; " >Jadi Mitra</button>
                                </li>
                                <li></li>
                                
                            <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>                        -->
                        </ul>
                    </div><!-- end navbar collapse -->
                </div><!-- end container -->
            </nav><!-- end navbar -->
        </div>   

        @include('layouts.sidebar')

        @yield('content')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
    <script src="{{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('dist/js/custom-navigation.js') }} "></script>


    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $('button').click(function(e) {
  e.preventDefault();
  $('main').addClass('flip');
});
    </script>

    @yield('script')
</body>
</html>