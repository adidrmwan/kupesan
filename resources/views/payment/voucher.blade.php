<!doctype html>
<html lang="en">
    <head>
        <title>kupesan.id | voucher</title>
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
                            <li style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"><i class="fa fa-check" aria-hidden="true" style="margin-left: 13px;"></i></span>
                                    Review
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
                            <li  style="cursor: default;"> 
                                <a style="color:#EA410C">
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
               
@foreach($review as $data)
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
                                    <a class="black-payment">
                                        <span><i class="fa fa-check" aria-hidden="true"></i> 
                                        </span>
                                        Review
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
                                    <a class="orange-payment">
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

                            <section class="innerpage-wrapper">
                                <div id="thank-you" class="section-padding">
                                    <div class="container">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                                                <div class="space-right">
                                                    <div class="thank-you-note">
                                                       @if($data->booking_status == 'paid')
                                                       <h3>Pemesananmu belum dikonfirmasi.</h3>
                                                       @elseif($data->booking_status == 'confirmed')
                                                       <h3>Pemesananmu sudah dikonfirmasi.</h3>
                                                       @endif
                                                       <p>Terima kasih telah melakukan pemesanan melalui kupesan.id.<br>Mohon menunggu konfirmasi voucher pemesanan Anda selama kurang lebih 30 menit. Terimakasih :)</p>
                                                       <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                                        <a href="{{route('index')}}">
                                                            <button type="submit" class="btn btn-orange pull-left" style="float: right;">Selesai</button>
                                                        </a>
                                                        </div> 
                                                   </div><!-- end thank-you-note -->
                                                                              
                                                   
                                                </div><!-- end space-right -->
                                            </div><!-- end columns --> 
                                        </div><!-- end row -->
                                    </div><!-- end container -->
                                </div><!-- end thank-you --> 
                            </section><!-- end innerpage-wrapper -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10" style="margin: 0 auto; float: none; display: block; position: relative;">
                                	<div class="dashboard-content user-profile" > 
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Informasi</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row"> 
                                                        <div class="traveler-info">
                                                            
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <!-- <tr>
                                                                            <td>Kode pesanan:</td>
                                                                            <td></td>
                                                                        </tr> -->
                                                                        <tr>
                                                                            <td>Nama Studio:</td>
                                                                            <td>{{$data->pr_name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Nama pemesan:</td>
                                                                            <td>{{$data->booking_user_name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tanggal pesan:</td>
                                                                            <td>{{ date('d F Y', strtotime($data->booking_date)) }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Jam Mulai:</td>
                                                                            <td>{{$data->booking_start_time}}:00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Jam Selesai:</td>
                                                                            <td>{{$data->booking_end_time}}:00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tipe Paket</td>
                                                                            @if($data->pkg_category_them = 'Thematic_Set')
                                                                            <td>Thematic Set - {{$data->pkg_name_them}}</td>
                                                                            @elseif($data->pkg_category_them = 'Special_Studio')
                                                                            <td>Special Studio - {{$data->pkg_name_them}}</td>
                                                                            @elseif($data->pkg_category_them = 'Ala_Carte')
                                                                            <td>Room (Ala Carte) - {{$data->pkg_name_them}}</td>
                                                                            @endif
                                                                            
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Kapasitas</td>
                                                                            <td>{{$data->booking_capacities}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- end table-responsive -->
                                                       </div><!-- end traveler-info -->
                                                    </div><!-- end row -->
                                                    
                                                </div><!-- end panel-body -->
                                            </div><!-- end panel-detault -->
                                        </div><!-- end columns -->
                                </div>
                            </div>						                                
                    </div><!-- end row -->
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->
        
@endforeach
        <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        
            <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                            <div id="abt-cnt-2-img">
                                <img src="{{ URL::asset('dist/images/logo-navbar.png') }}" class="img-responsive" alt="about-img" />
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
