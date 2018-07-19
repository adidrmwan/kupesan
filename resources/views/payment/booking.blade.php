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
                            <li class="active" style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 1 </strong>
                                    </span>
                                    Booking
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 2 </strong>
                                    </span>
                                    Review
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 3 </strong>
                                    </span>
                                    Payment
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a>
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 4 </strong>
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
                            <li class="active" style="cursor: default;"> 
                                <a class="orange-payment">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 1 </strong>
                                    </span>
                                    Booking
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a class="black-payment">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 2 </strong>
                                    </span>
                                    Review
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a class="black-payment">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 3 </strong>
                                    </span>
                                    Payment
                                </a> 
                            </li>
                            <li class="" style="cursor: default;"> 
                                <a class="black-payment">
                                    <span class="fa-stack"> 
                                        <span class="fa fa-circle-o fa-stack-2x"></span>
                                            <strong class="fa-stack-1x"> 4 </strong>
                                    </span>
                                    Voucher
                                </a> 
                            </li>                        
                            
                            <li></li>
                        </ul>
                    </div><!-- end navbar collapse -->

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                        	<form class="lg-booking-form">
                                <div class="lg-booking-form-heading">
                                	<span>1</span>
                                	<h3>Personal Information</h3>
                                </div><!-- end lg-bform-heading -->
                                
                                <div class="personal-info">
                                
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" required/>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" required/>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                    
                                    <div class="row">
                                    	<div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control dpd3" required/>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" required/>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" required/>
                                            </div>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" required/>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Permanent Address</label>
                                                <textarea type="text" class="form-control" rows="2"/></textarea>
                                            </div>
                                        </div><!-- end columns -->
                                    </div>   
                                </div><!-- end personal-info -->
                                
                                <div class="lg-booking-form-heading">
                                	<span>2</span>
                                	<h3>Payment Information</h3>
                                </div><!-- end lg-bform-heading -->
                                
                                <div class="payment-tabs">
                                	<ul class="nav nav-tabs">
                                    	<li class="active"><a href="#tab-credit-card" data-toggle="tab"> Via Credit Card</a></li>
                                        <li><a href="#tab-paypal" data-toggle="tab">Via Paypal</a></li>
                                    </ul>
                                    
                                    <div class="tab-content">
                                    	<div id="tab-credit-card" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Card Type</label>
                                                        <select class="form-control">
                                                            <option selected>Select</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Card Number</label>
                                                        <input type="text" class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Card Holder Name</label>
                                                        <input type="text" class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>CVC</label>
                                                        <input type="text" class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                            
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-3">
                                                    <div class="form-group">
                                                        <label>Expiry Month</label>
                                                        <select class="form-control">
                                                            <option selected>Select</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-xs-6 col-sm-3">
                                                    <div class="form-group">
                                                        <label>Expiry Year</label>
                                                        <select class="form-control">
                                                            <option selected>Select</option>
                                                            <option>2018</option>
                                                            <option>2019</option>
                                                            <option>2020</option>
                                                        </select>
                                                        <span><i class="fa fa-angle-down"></i></span>
                                                    </div>
                                                </div><!-- end columns -->  
                                            </div><!-- end row -->
                                            
                                        </div><!-- end tab-credit-card -->
                                        
                                        <div id="tab-paypal" class="tab-pane fade">
                                        	<img src="images/paypal.png" class="img-responsive" alt="paypal" />
                                        	<div class="paypal-text">
                                            	<p><span>Important:</span> You will be redirected to Paypal Website to make the payment process secure and complete.</p>
                                                 <a href="#" class="btn btn-default btn-lightgrey">Checkout via Paypal<span><i class="fa fa-angle-double-right"></i></span></a>
                                            </div><!-- end paypal-text -->
                                            
                                            <div class="clearfix"></div>
                                        </div><!-- end tab-paypal -->
                                        
                                    </div><!-- end tab-content -->
                                </div><!-- end payment-tabs -->
                                            
                                <div class="checkbox">
                                    <label><input type="checkbox"> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                  
                                <button type="submit" class="btn btn-orange">Confirm Booking</button>
                            </form>
                            
                        </div><!-- end columns -->
						
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar right-side-bar">
                        	<div class="row">
                            
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block detail-block style2 text-center">
                                        <div class="detail-img text-center">
                                        	<a href="#"><img src="dist/images/mua.png" class="img-responsive" alt="detail-img"/></a>
                                            <div class="detail-title">
                                                <h4><a href="#">Herta Berlin Hotel</a></h4>
                                            	<p>Scotland</p>
                                            </div><!-- end detail-title -->
                                            
                                            <span class="detail-price"><h4>$120 <span>/ night</span></h4></span>
                                        </div><!-- end detail-img -->
                                        
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                	<tr>
                                                    	<td>Rating</td>
                                                        <td>
                                                            <div class="rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                            </div><!-- end rating -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check In</td>
                                                        <td>20-05-2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check Out</td>
                                                        <td>25-05-2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stay</td>
                                                        <td>4 Nights</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Room Type</td>
                                                        <td>Deluxe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Guests</td>
                                                        <td>3</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax</td>
                                                        <td>$0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Totel Price</td>
                                                        <td>$360</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-6 col-md-12">    
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        
                        </div><!-- end columns -->
                        
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
                    <p>Kupesan merupakan ...</p>
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
