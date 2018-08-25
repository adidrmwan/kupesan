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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    
    <!-- Bootstrap Stylesheet -->   
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/bootstrap.min.css') }} ">
    
    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/font-awesome.min.css') }} ">
        
    <!-- Custom Stylesheets --> 
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/style.css') }} ">
    <link rel="stylesheet" id="cpswitch" href="{{ URL::asset ('dist/css/orange.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/responsive.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/material-design-iconic-font.min.css') }} ">

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/owl.theme.css') }} ">
    
    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/flexslider.css') }} " type="text/css" />
    
    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/datepicker.css') }} ">
    <link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.structure.css ') }}" rel="stylesheet"/>
    <link href=" {{ URL::asset('partners/css/jquery-ui.theme.css ') }}" rel="stylesheet"/>
    
    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/magnific-popup.css') }} ">
    
    <!-- Color Panel -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/jquery.colorpanel.css') }} ">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/slick-theme.css') }}">

    <style type="text/css">

      .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
      }

      .img-hover:hover .overlay {
        bottom: 0;
        height: 100%;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
      }
      .center-fa { 
          background-color:none;
          text-align:center;
          vertical-align:middle;
          display:table-cell;
      }
      .fa-asterisk {
          vertical-align:middle;
      }
    </style>
</head>
<body id="main-homepage">
  <div class="loader"></div>   
  <div class="header-absolute">
    @include('layouts.nav')
  </div>   

  @include('layouts.sidebar')

  @yield('content')

  <!-- Scripts -->
  <!-- Scripts -->
  <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
  <script src="{{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
  <script src="{{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
  <script src="{{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>
  <script src="{{ URL::asset('dist/js/slick.min.js') }} "></script>
  <script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
  <!-- <script src="{{ URL::asset('dist/js/multiselect.js') }} "></script> -->
  <script src="{{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>
  <script src="{{ URL::asset('dist/js/custom-navigation.js') }} "></script>
  <script src="{{ URL::asset('dist/js/custom-flex.js') }} "></script>
  <script src="{{ URL::asset('dist/js/custom-owl.js') }} "></script>
  <script src="{{ URL::asset('dist/js/custom-slick.js') }} "></script>
  <!-- <script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script> -->
  <!-- <script src="{{ URL::asset('dist/js/custom-video.js') }} "></script> -->
  <script src="{{ URL::asset('dist/js/popup-ad.js') }} "></script>
  <script src=" {{ URL::asset('dist/js/custom-gallery.js') }} "></script>
  <!-- Scripts -->
  <script src="{{ URL::asset('js/app.js') }}"></script>

  <!-- pesan (jangan diubah) -->
  <!-- Scripts -->
  <script src="{{ URL::asset('js/app.js') }}"></script>

  <script src=" {{ URL::asset('partners/js/jquery-ui.js') }} " type="text/javascript"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
  <script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

</body>
</html>