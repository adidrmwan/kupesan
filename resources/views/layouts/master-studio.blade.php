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
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/material-design-iconic-font.min.css') }} ">
        
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
    <link rel="stylesheet" href="{{ URL::asset ('dist/css/material-design-color-palette.min.css') }} ">

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

.owl-prev {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938188/left-arrow_rlxamy.png') left center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  left: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
}
 
.owl-next {
  background: url('https://res.cloudinary.com/milairagny/image/upload/v1487938220/right-arrow_zwe9sf.png') right center no-repeat;
  height: 54px;
  position: absolute;
  top: 50%;
  width: 27px;
  z-index: 1000;
  right: 2%;
  cursor: pointer;
  color: transparent;
  margin-top: -27px;
}
 
.owl-prev:hover,
.owl-next:hover {
  opacity: 0.5;
}
 
 
/* Owl Carousel */
 
 
/* Popup Text */
 
.white-popup-block {
  background: #FFF;
  padding: 20px 30px;
  text-align: left;
  max-width: 650px;
  margin: 40px auto;
  position: relative;
}
 
.popuptext {
  display: table;
}
.popuptext p {
  margin-bottom: 10px;
}
.popuptext span {
  font-weight: bold;
  float: right;
}
/* Popup Text */
 
/* Icon CSS */
.item {
  position: relative;
}
.item i {
  display: none;
  font-size: 4rem;
  color: #FFF;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  text-align: center;
  text-decoration: none;
}
.item a {
  display: block;
  width: 100%;
}
.item a:hover:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 1;
}
.item a:hover i {
  display: block;
  z-index: 2;
}
/* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
  padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
  top: 0;
  bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
  padding: 0;
}
.frame .details {
  width: 95%;
  height: 53%;  
  padding: 4% 4%;
  position: absolute;
  content: "";
  top: 28%;
  left: 50%;
  transform: translate(-50%, -50%) rotateY(90deg);
  transform-origin: 50%;
  background: rgba(255,255,255,0.9);  
  opacity: 0.5;
  transition: all 0.4s ease-in;
  
}
.frame:hover .details {
  transform: translate(-50%, -50%) rotateY(0deg);
  opacity: 1;
}

.input-group-addon {
    width:1px;
    background-color: white;
    text-align:left;
}

</style>

</head>
<body id="main-homepage">

       <div class="loader"></div>
       <!--======== SEARCH-OVERLAY =========-->       
        <div class="header-absolute">
          @include('layouts.nav')
        </div>   

        @include('layouts.sidebar')

        @yield('content')

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
    <script src=" {{ URL::asset('dist/js/jquery.colorpanel.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery-ui.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>
     <script src=" {{ URL::asset('dist/js/owl.carousel2.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/bootstrap.min.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-navigation.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-price-slider.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-flex.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-owl.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-gallery.js') }} "></script>

<script type="text/javascript">

$('.owl-carousel').owlCarousel({
  autoplay: true,
  autoplayHoverPause: true,
  loop: true,
  margin: 20,
  responsiveClass: true,
  nav: true,
  loop: true,
  responsive: {
    0: {
      items: 1
    },
    568: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
})
$(document).ready(function() {
  $('.popup-text').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',
    callbacks: {
      beforeOpen: function() {
        if ($(window).width() < 700) {
          this.st.focus = false;
        } else {
          this.st.focus = '#name';
        }
      }
    }
  });
});
</script>

<script type="text/javascript">
  $(document).ready(function() {

    $('.image-popup-vertical-fit').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-img-mobile',
      image: {
        verticalFit: true
      }
      
    });

    $('.image-popup-fit-width').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      image: {
        verticalFit: false
      }
    });

    $('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
        verticalFit: true
      },
      zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
      }
    });

  });
</script>

    @yield('script')
</body>
</html>
