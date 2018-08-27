<!doctype html>
<html lang="en">
    <head>
        <title>kupesan.id | bayar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="dist/images/logo.png" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href=" {{URL::asset('dist/css/bootstrap.min.css ')}}">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href=" {{URL::asset('dist/css/font-awesome.min.css ')}}">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href=" {{URL::asset('dist/css/style.css ')}}">
        <link rel="stylesheet" id="cpswitch" href=" {{URL::asset('dist/css/orange.css ')}}">
        <link rel="stylesheet" href=" {{URL::asset('dist/css/responsive.css ')}}">
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href=" {{URL::asset('dist/css/datepicker.css ')}}">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href=" {{URL::asset('dist/css/jquery.colorpanel.css')}}">
        <style type="text/css">
            hr.style5 {
                background-color: #fff;
                border-top: 2px dashed #8c8b8b;
            }
            hr.style2 {
                border-top: 1px double #8c8b8b;
            }
            #js-clock {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              margin-bottom: 100px;
            }

            .box {
              margin: 0 5px;
              text-align: center;
              text-transform: uppercase;
            }

            .box span {
              display: block;
              background: rgba(255, 255, 255, 0.05);
              font-family: 'Share Tech Mono', monospace;
              margin-bottom: 10px;
            }

            @media (min-width: 768px) {
              .box span {
                width: 90px;
                line-height: 100px;
                font-size: 64px;
              }
            }

            @media (min-width: 480px) and (max-width: 767px) {
              .box span {
                width: 80px;
                line-height: 70px;
                font-size: 48px;
              }
            }

            @media (max-width: 479px) {
              .box {
                font-size: 10px;
              }

              .box span {
                width: 80px;
                line-height: 40px;
                font-size: 36px;
              }
            }
        </style>
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>

        <div class="header-absolute">
            <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent landing-page-navbar" id="mynavbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{route('index')}}" class="navbar-brand navbar-payment">
                            <img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " >
                        </a>
                    </div><!-- end navbar-header -->
                    
                    <div class="collapse navbar-collapse" id="myNavbar1">
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                            <li style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Pesan
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                                <a style="color:#EA410C">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 2 </strong>
                                    </span>
                                    Bayar
                                </a> 
                            </li>                         
                            </li>
                            <li  style="cursor: default;"> 
                                <a >
                                   <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Proses
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                               <a >
                                   <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Selesai
                                </a>
                            
                            <li></li>
                        </ul>
                    </div><!-- end navbar collapse -->
                </div><!-- end container -->
            </nav><!-- end navbar -->
        </div>
               
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="booking" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="navbar-collapse" id="myNavbar2" >
                            <ul class="nav navbar-nav navbar-search-link" style="display: inline-flex;">
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
                                        </span>
                                        Pesan
                                    </a> 
                                </li>
                                <li  style="cursor: default;"> 
                                    <a class="orange-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 2 </strong>
                                        </span>
                                        Bayar
                                    </a> 
                                </li>                    
                                
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
                                        </span>
                                        Proses
                                    </a>  
                                </li>

                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
                                        </span>
                                        Selesai
                                    </a> 
                                </li>
                                <li></li>
                            </ul>
                        </div><!-- end navbar collapse -->

                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            	<div class="dashboard-content user-profile">
                                        <h2 class="dash-content-title">Pembayaran</h2>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Transfer</h4></div>
                                            <div class="panel-body">
                                                <div class="row">                                                    
                                                    <div class="col-sm-12 col-md-12  user-detail">
                                                        <h4><b>Pembayaran dapat dilakukan melalui Bank dibawah ini :</b></h4>
                                                        <hr class="style5">
                                                        <ul class="list-unstyled" >
                                                            <div>
                                                                <li>
                                                                    <span>BCA</span> <p style="float: right;"> 0391012520 a.n Arsya Darmawan</p> 
                                                                </li>
                                                                <hr class="style2">
                                                                <li>
                                                                    <span>BNI</span> <p style="float: right;"> 0391012520 a.n Arsya Darmawan</p> 
                                                                </li>
                                                                <hr class="style2">
                                                                <li>
                                                                    <span>BRI</span> <p style="float: right;"> 0391012520 a.n Arsya Darmawan</p> 
                                                                </li>
                                                                <hr class="style2">
                                                                <li>
                                                                    <span>MANDIRI</span> <p style="float: right;"> 0391012520 a.n Arsya Darmawan</p> 
                                                                </li>
                                                                <hr class="style2">
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default" style="margin-top: 35px;">
                                            <div class="panel-heading"><h4>Masukkan Kupon</h4></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    
                                                    <div class="col-sm-12 col-md-12  user-detail">
                                                        <form class="form-horizontal">
                                                          <div class="col-xs-12 col-sm-12 col-md-8">   
                                                              <div class="form-group">
                                                                <label class="sr-only" for="exampleInputAmount"></label>
                                                                <div class="input-group">
                                                                  <div class="input-group-addon">%</div>
                                                                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Masukkan Kupon">
                                                                </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-xs-12 col-sm-12 col-md-4">
                                                            <button type="submit" class="btn btn-orange" style="color: white;">Tambah</button>
                                                        </div>
                                                        </form>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                            @foreach($review as $data)
                            
                                    </div><!-- end columns -->
                            </div>						
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar right-side-bar">
                                <div class="row">
                                
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="panel panel-default" style="margin-top: 21%;">
                                            <div class="panel-heading"><h4>Batas Pembayaran</h4></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    
                                                    <div class="col-sm-12 col-md-12  user-detail">

                                                        <span style="text-align: center;">
                                                            <h5>Transfer dapat dilakukan sebelum</h5>
                                                            <h4><b>{{ date('d F Y', strtotime($data->booking_at)) }}, {{ date('H:i:s', strtotime($data->booking_at)) }} WIB</b></h4>
                                                            <h5>atau pembayaran Anda otomatis dibatalkan oleh sistem.</h5>
                                                        </span>
                                                        <hr class="style5">

                                                        <div id="js-clock">
                                                          <div class="box" hidden=""><span id="js-clock-days">00</span>Hours</div>
                                                          <div class="box"><span id="js-clock-hours">00</span>Hours</div>
                                                          <div class="box"><span id="js-clock-minutes">00</span>Minutes</div>
                                                          <div class="box"><span id="js-clock-seconds">00</span>Seconds</div>
                                                        </div>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->                                
                                </div><!-- end row -->
                            </div>
                            @endforeach
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar right-side-bar">
                            
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-12 content-side">
                                <form role="form" action="{{ route('form.konfirmasi') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                            {{ csrf_field() }}
                                    <div class="checkbox col-xs-12 col-sm-12 col-md-6 col-lg-4"  >
                                        <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                    </div><!-- end checkbox -->
                                    <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-3"  >
                                        <a href="{{route('dashboard')}}">
                                            <span class="btn btn-orange" style="float: right;">Bayar Nanti</span>
                                        </a>
                                    </div>
                                    <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-3"  >
                                        <button type="submit" class="btn btn-orange" style="float: right;">Konfirmasi Pembayaran</button>
                                        <input type="text" name="bid" value="{{$bid}}" hidden="">
                                    </div>
                                </form>
                            </div>
                             
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->
        
        
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
<div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <div id="abt-cnt-2-img">
                        <img src="{{ URL::asset('dist/images/logo-navbar.png') }}" class="img-responsive" alt="Logo-Kupesan" />
                    </div>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Social Media</h3>
                    <ul class="social-links list-unstyled list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span> &nbsp;&nbsp;&nbsp;&nbsp; Kupesan </a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                        <li><a href="#"><span><i class="fa fa-whatsapp"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; +6282 233-610-702</a></li>

                    </ul>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Log-In</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{route('jadi.mitra')}}">Daftar PARTNER-KU</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-about">
                    <h3 class="footer-heading">About US</h3>
                    <p style="text-align: justify;">Kupesan.id adalah sebuah marketplace online yang ingin membawa perubahan dalam bentuk memudahkan masyarakat untuk mencari persewaan spot foto (dalam atau luar ruangan), persewaan gaun dan kebaya, penyedia jasa fotografer, serta penyedia jasa tata rias (make-up artist).</p>
                    
                </div><!-- end columns -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black" >
        <div class="container" style="color: white;">
            <div class="row" >
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright" >
                    <p>© 2018 <a href="home">Kupesan.id</a> | All rights reserved.</p>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="termsandcondition">Terms & Condition</a></li>
                        <li><a href="privacy">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->
    
    
</section><!-- end footer -->

        

<script src="{{URL::asset('dist/js/jquery.min.js')}} "></script>
<script src="{{URL::asset('dist/js/jquery.colorpanel.js')}} "></script>
<script src="{{URL::asset('dist/js/bootstrap.min.js')}} "></script>
<script src="{{URL::asset('dist/js/bootstrap-datepicker.js')}} "></script>
<script src="{{URL::asset('dist/js/custom-navigation.js')}} "></script>
<script src="{{URL::asset('dist/js/custom-date-picker.js')}} "></script>

<script type="text/javascript">
(function() {
  var deadline = {!! json_encode($deadline) !!};

  function pad(num, size) {
      var s = "0" + num;
      return s.substr(s.length-size);
  }

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date()),
        seconds = Math.floor((t / 1000) % 60),
        minutes = Math.floor((t / 1000 / 60) % 60),
        hours = Math.floor((t / (1000 * 60 * 60)) % 24),
        days = Math.floor(t / (1000 * 60 * 60 * 24));

    return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
    };
  }

  function clock(id, endtime) {
    var days = document.getElementById(id + '-days')
        hours = document.getElementById(id + '-hours'),
        minutes = document.getElementById(id + '-minutes'),
        seconds = document.getElementById(id + '-seconds');

    var timeinterval = setInterval(function() {
      var t = getTimeRemaining(endtime);

      if (t.total <= 0){
        clearInterval(timeinterval);
      } else {
  days.innerHTML = pad(t.days, 2);
  hours.innerHTML = pad(t.hours, 2);
  minutes.innerHTML = pad(t.minutes, 2);
  seconds.innerHTML = pad(t.seconds, 2);
  }
    }, 600);
  }

  clock('js-clock', deadline);
})();
        </script>

<script type="text/javascript">
            function CountDown(duration, display) {
            if (!isNaN(duration)) {
                var timer = duration, minutes, seconds;
                
              var interVal=  setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    $(display).html("<b>" + minutes + "m : " + seconds + "s" + "</b>");
                    if (--timer < 0) {
                        timer = duration;
                       SubmitFunction();
                       $('#display').empty();
                       clearInterval(interVal)
                    }
                    },600);
            }
        }
        
        function SubmitFunction(){
       $('form').submit();
        
        }
    
         CountDown(300,$('#display'));
</script>
    </body>
</html>
