<!doctype html>
<html lang="en">
    <head>
        <title>kupesan.id | Page Not Found</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="{{ URL::asset('dist/images/logo.png') }}" type="image/x-icon">
        
        <!-- Google Fonts -->	
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Bootstrap Stylesheet -->	
        <link rel="stylesheet" href="{{ URL::asset('dist/css/bootstrap.min.css') }}">
        
        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('dist/css/font-awesome.min.css') }} ">
            
        <!-- Custom Stylesheets -->	
        <link rel="stylesheet" href="{{ URL::asset('dist/css/style.css') }} ">
        <link rel="stylesheet" id="cpswitch" href="{{ URL::asset('dist/css/orange.css') }} ">
        <link rel="stylesheet" href="{{ URL::asset('dist/css/responsive.css') }} ">
        
        <!-- Color Panel -->
        <link rel="stylesheet" href="css/jquery.colorpanel.css">
    </head>
    
    
    <body>
    
        <!--====== LOADER =====-->
        <div class="loader"></div>    
        
        <!--======================== ERROR-PAGE-2 =====================-->
        <section id="error-page-2"  class="full-page-body full-page-back">
            <div class="full-page-wrapper">
                <div class="full-page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="full-page-title visible-xs visible-sm">
                                    <img src="{{ asset('/logo/logo-navbar.png') }}" class="img-responsive" />
                                </div><!-- end full-page-title -->
                                        
                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 error-page-2-circle text-center">
                                        <h2 style="color: white;" >500</h2>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 error-page-2-text">
                                        <div class="full-page-title visible-md visible-lg">
                                            <img src="{{ asset('/logo/logo-navbar.png') }}" class="img-responsive" alt="about-img" style="max-width: 376px;" />
                                        </div><!-- end full-page-title -->
                                        
                                        <h2>Something went wrong !</h2>
                                        <p>We are sorry but it appears that the page you are looking for could not be found. We are working on it and we will get it fixed as soon as possible.</p>
                                        <p> You can go back to the Main Page by clicking the button.</p>
                                        <a href="home" class="btn btn-orange">Go Back</a>
                                    </div>
                                </div>
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end container -->
            	</div><!-- end full-page-content -->
            </div><!-- end full-page-wrapper -->
		</section><!-- end error-page-2 -->


        <!-- Page Scripts Starts -->
        <script src=" {{URL::asset('dist/js/jquery.min.js')}} "></script>
        <script src=" {{URL::asset('dist/js/jquery.colorpanel.js')}} "></script>
        <script src=" {{URL::asset('dist/js/bootstrap.min.js')}} "></script>
        <script src=" {{URL::asset('dist/js/custom-navigation.js')}} "></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
