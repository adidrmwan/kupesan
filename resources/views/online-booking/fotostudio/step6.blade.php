<!doctype html>
<html lang="en">
    <head>
        <title>kupesan.id | Pesan</title>
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
        <link rel="stylesheet" id="cpswitch" href=" {{URL::asset('dist/css/orange.css')}}">
        <link rel="stylesheet" href=" {{URL::asset('dist/css/responsive.css ')}}">
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href=" {{URL::asset('dist/css/datepicker.css ')}}">

        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/owl.carousel.css') }} ">
        <link rel="stylesheet" href="{{ URL::asset('dist/css/owl.theme.css') }} ">

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/flexslider.css') }} " type="text/css" />
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/magnific-popup.css') }} ">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/jquery.colorpanel.css') }} ">

        <!-- Slick Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/slick.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('dist/css/slick-theme.css') }}">

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
                            <li  style="cursor: default;"> 
                                <a style="color:#EA410C">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 1 </strong>
                                    </span>
                                    Pesan
                                </a> 
                            </li>            
                            <li  style="cursor: default;"> 
                                <a >
                                   <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Bayar
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                               <a >
                                   <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Proses
                                </a>
                            </li>
                            <li style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Selesai
                                </a> 
                            </li>
                            
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
                                    <a class="orange-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 1 </strong>
                                        </span>
                                        Pesan
                                    </a> 
                                </li>                    
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
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

                        @include('online-booking.fotostudio.package-info')
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">        
                            @foreach($review as $data)
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4><b>Pesanan-KU</b></h4></div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 col-md-12  user-detail">
                                            <h5><b>Detail Pesanan</b></h5>
                                            <ul class="list-unstyled" >
                                                <li></li>
                                                <li>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td >Tanggal</td>
                                                                <td>{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jadwal Pesanan</td>
                                                                <td>
                                                                    {{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB 
                                                                    <br>
                                                                    Paket : {{$data->booking_end_time - $data->booking_start_time}} Jam ({{$data->booking_start_time}}:00 - {{$data->booking_end_time}}:00 WIB) 
                                                                    <br>
                                                                    @if(!empty($data->booking_overtime))
                                                                    Overtime : {{$data->booking_overtime}} Jam
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tipe Paket</td>
                                                                <td>{{$data->pkg_category_them}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>         
                                            </ul>
                                            <hr class="style5">
                                            <h5><b>Detail Harga</b></h5>
                                            <ul class="list-unstyled" >
                                                <li></li>
                                                <li>
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Paket</td>
                                                                <td>
                                                                    <!-- {{$data->booking_end_time - $data->booking_start_time}} Jam 
                                                                    <b>x</b>
                                                                    Rp {{number_format($data->booking_normal_price, 0, ',', '.')}} -->
                                                                </td>
                                                                <td style="text-align: : right; ">Rp {{number_format($data->booking_normal_price, 0, ',', '.')}}</td>
                                                            </tr>
                                                            @if(!empty($data->booking_overtime))
                                                            <tr>
                                                                <td>Overtime</td>
                                                                <td>{{$data->booking_overtime}} Jam 
                                                                    <b>x</b>
                                                                    Rp {{number_format($data->booking_overtime_price, 0, ',', '.')}}
                                                                </td>
                                                                <td style="text-align: : right; ">Rp {{number_format($data->total_overtime, 0, ',', '.')}}</td>
                                                            </tr>
                                                            @endif
                                                            <tr>
                                                                <td><b>TOTAL</b></td>
                                                                <td></td>
                                                                <td><b>Rp {{number_format($data->booking_total, 0, ',', '.')}}</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>      
                                            </ul>
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    <input type="text" name="xxx" value="{{$data->total}}" hidden="">
                                </div><!-- end panel-body -->
                            </div>
                            @endforeach

                            <div class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div>
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <form role="form" action="{{ route('form.step7') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                    {{ csrf_field() }}
                                        <input type="text" name="bid" value="{{$bid}}" hidden="">
                                        <button type="submit" class="btn btn-orange" style="float: right;">Pesan</button>
                                    </form>
                                </div>
                            </div> 
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
    <script src="{{URL::asset('dist/js/jquery.flexslider.js') }} "></script>
    <script src="{{URL::asset('dist/js/slick.min.js') }} "></script>
    <script src="{{URL::asset('dist/js/bootstrap-datepicker.js')}} "></script>
    <script src="{{URL::asset('dist/js/custom-navigation.js')}} "></script>
    <script src="{{URL::asset('dist/js/custom-date-picker.js')}} "></script>
    <script src="{{URL::asset('dist/js/owl.carousel.min.js') }} "></script>
    <script src="{{URL::asset('dist/js/custom-flex.js') }} "></script>
    <script src="{{URL::asset('dist/js/custom-owl.js') }} "></script>
    <script src="{{URL::asset('dist/js/custom-slick.js') }} "></script>
    
    <script src="{{ URL::asset('dist/js/jquery.flexslider.js') }} "></script>

    <script src="{{ URL::asset('dist/js/jquery.magnific-popup.min.js') }} "></script>
    
    <script src="{{ URL::asset('dist/js/owl.carousel.min.js') }} "></script>

    <script src="{{ URL::asset('dist/js/popup-ad.js') }} "></script>
    <script src=" {{ URL::asset('dist/js/custom-gallery.js') }} "></script>

    <!-- pesan (jangan diubah) -->
    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <script src=" {{ URL::asset('partners/js/jquery-ui.js') }} " type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src=" {{ URL::asset('partners/js/chartist.min.js') }} "></script>

    <!-- DataTables -->
    <script src="{{URL::asset('partners/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('partners/js/dataTables.bootstrap.min.js')}}"></script>


    </body>
</html>
