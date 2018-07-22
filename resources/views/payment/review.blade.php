<!doctype html>
<html lang="en">
    <head>
        <title>Hotel Booking Right Sidebar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
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
        </style>
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>

        <div class="header-absolute">
            <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent landing-page-navbar" id="mynavbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="home" class="navbar-brand navbar-payment">
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
                            <li style="cursor: default;"> 
                                <a style="color:#EA410C">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 2 </strong>
                                    </span>
                                    Review
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 3 </strong>
                                    </span>
                                    Bayar
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 4 </strong>
                                    </span>
                                    Proses
                                </a> 
                            </li>
                            <li  style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 5 </strong>
                                    </span>
                                    Voucher
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
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
                                        </span>
                                        Pesan
                                    </a> 
                                </li>
                                <li class="active" style="cursor: default;"> 
                                    <a class="orange-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 2 </strong>
                                        </span>
                                        Review
                                    </a> 
                                </li>
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 3 </strong>
                                        </span>
                                        Bayar
                                    </a> 
                                </li>
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 4 </strong>
                                        </span>
                                        Proses
                                    </a> 
                                </li>
                                <li  style="cursor: default;"> 
                                    <a class="black-payment">
                                        <span class="fa-stack"> 
                                            <span class="fa fa-circle-o fa-stack-2x"></span>
                                                <strong class="fa-stack-1x"> 5 </strong>
                                        </span>
                                        Voucher
                                    </a> 
                                </li>                             
                                
                                <li></li>
                            </ul>
                        </div><!-- end navbar collapse -->

                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            	<div class="dashboard-content user-profile">
                                        <h2 class="dash-content-title">Please Review Your Booking</h2>

                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h4>Profile Details</h4></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-3 user-img">
                                                        <img src="../dist/images/mua.png" class="img-responsive" alt="user-img" />
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-sm-8 col-md-9  user-detail">
                                                        <h3><b>Kupesan Studio</b></h3>
                                                        <hr class="style5">
                                                        <ul class="list-unstyled" >
                                                            <div>
                                                                <div class="col-sm-12 col-md-4"><li><span>Tanggal</span> <br>23 Maret 2019</li></div>
                                                                <div class="col-sm-12 col-md-4"><li><span>Jam Mulai</span><br> 19.00</li></div>
                                                                <div class="col-sm-12 col-md-4"><li><span>Jam Selesai</span><br> 21.00</li></div>
                                                            </div>
                                                            <div>
                                                                <div class="col-sm-12 col-md-12" style="margin-bottom: 10px;"><li><span>Nama Pemesan</span> <br>Arsya Darmawan </li></div>
                                                            </div>
                                                        </ul>
                                                        <br>
                                                        <hr class="style5">
                                                        <ul class="list-unstyled">                                                          
                                                            <div>
                                                                <div class="col-sm-12 col-md-12"><li><span>Studio Detail</span></li></div>
                                                                <div class="col-sm-12 col-md-12"><li>Studio Tipe <p style="float: right;">Thematic</p></li>
                                                                </div>
                                                                    <div class="col-sm-12 col-md-12"><li>Orang <p style="float: right;">20 Orang</p></li>
                                                                    </div>
                                                            </div>
                                                        </ul>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->

                                        <div class="panel panel-default" style="margin-top: 35px;">
                                            <div class="panel-heading"><h4>Detail Harga</h4></div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    
                                                    <div class="col-sm-12 col-md-12  user-detail">
                                                        <h3><b>Kupesan Studio</b></h3>
                                                        <hr class="style5">
                                                        <ul class="list-unstyled" >
                                                            <li>
                                                                <span>Studio Room Type Thematic</span>
                                                                <span style="float: right; ">Rp. 300.000</span>
                                                            </li>
                                                            <li>
                                                                <span>Kupesan Fee</span>
                                                                <span style="float: right; ">FREE</span>
                                                            </li>
                                                        </ul>
                                                        <hr class="style5">

                                                        <ul class="list-unstyled" >
                                                            <li>
                                                                <span>TOTAL</span>
                                                                <span style="float: right; ">Rp. 300.00</span>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- end row -->
                                                
                                            </div><!-- end panel-body -->
                                        </div><!-- end panel-detault -->
                                    </div><!-- end columns -->
                            </div>						
                            
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar right-side-bar">
                            
                            </div><!-- end columns -->
                            <div class="col-xs-12 col-sm-6 col-md-7 col-lg-8 content-side">
                                <form class="lg-booking-form">
                                    <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                        <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                    </div><!-- end checkbox -->
                                    <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                        <button type="submit" class="btn btn-orange" style="float: right;">Lanjutkan</button>
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
                        <img src="dist/images/logo-navbar.png" class="img-responsive" alt="about-img" />
                    </div>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Social Media</h3>
                    <ul class="social-links list-unstyled list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span> &nbsp;&nbsp;&nbsp;&nbsp; Kupesan </a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span>&nbsp;&nbsp;&nbsp;&nbsp; Kupesan</a></li>
                    </ul>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{route('jadi.mitra')}}">Daftar Mitra</a></li>
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
                    <p>© 2018 <a href="#">Kupesan.id</a>. All rights reserved.</p>
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->
    
</section><!-- end footer -->

        
        <!-- Page Scripts Starts -->
        <script src="{{URL::asset('dist/js/jquery.min.js')}} "></script>
        <script src="{{URL::asset('dist/js/jquery.colorpanel.js')}} "></script>
        <script src="{{URL::asset('dist/js/bootstrap.min.js')}} "></script>
        <script src="{{URL::asset('dist/js/bootstrap-datepicker.js')}} "></script>
        <script src="{{URL::asset('dist/js/custom-navigation.js')}} "></script>
        <script src="{{URL::asset('dist/js/custom-date-picker.js')}} "></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
