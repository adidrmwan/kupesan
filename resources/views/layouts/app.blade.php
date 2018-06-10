<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kupesan.id - @yield('title')</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- RS5.0 Main Stylesheet -->
    <link  type="text/css" href="{{ URL::asset('dist/css/revolution/settings.css') }}  rel="stylesheet"">
    
    <!-- RS5.0 Layers and Navigation Styles -->
    <link  type="text/css" href="{{ URL::asset('dist/css/revolution/layers.css') }} rel="stylesheet""> 
    <link  type="text/css" href="{{ URL::asset('dist/css/revolution/navigation.css')  }} rel="stylesheet""> 

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('dist/css/style.css') }}" rel="stylesheet">
    
    <!-- Color -->
    <link id="skin" href="{{ URL::asset('dist/skins/default.css') }}" rel="stylesheet">
</head>
<body>
        <div id="loading" class="loading-invisible">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>

        <div class="clearfix"></div>
        
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Type something ann hit enter">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#brand"><img src="{{ URL::asset ('dist/img/brand/logo-black.png') }}" class="logo" alt=""></a>

                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <!-- <li class="active"><a href="#">Home</a></li> -->
                        
                        <ul class="right-link sign-link">
                            <!-- <li><a href="#" class="signin">Sign in</a></li>
                            <li>or</li>
                            <li><a href="#" class="signup">Join now</a></li> -->
                            @guest
                                <li><a href="{{ route('login') }}" class="signin">Login</a></li>
                                <li>or</li>
                                <li><a href="{{ route('register') }}" class="signup">Register</a></li>
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
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')

        <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <h5><span>Our</span> office</h5>
                        <ul class="office-contact">
                            <li>
                                <i class="fa fa-home"></i>
                                <h6>Address :</h6>
                                JL.Kemacentan selatan No.13 Block.Q2 Jakarta Indonesia
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h6>Phone :</h6>
                                (021) 1234 567 890
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h6>Emali :</h6>
                                info@yourdomain.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <h5><span>Latest</span> article</h5>
                        <ul class="recent-post-widget">
                            <li>
                                <a href="#" class="img-thumb"><img src="img/blog/thumbs/thumb01.jpg" class="img-responsive" alt="" /></a>
                                <h6><a href="#">Exerci intellegat te facete urbanitas no est</a></h6>
                                <p>
                                Nostrud disputationi sed in, nam ea altera deserunt.
                                </p>
                            </li>
                            <li>
                                <a href="#" class="img-thumb"><img src="img/blog/thumbs/thumb02.jpg" class="img-responsive" alt="" /></a>
                                <h6><a href="#">Exerci intellegat te facete urbanitas no est</a></h6>
                                <p>
                                Nostrud disputationi sed in, nam ea altera deserunt.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <h5><span>latest</span> tweet</h5>
                        <div class="tweet"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <h5><span>Subscribe</span> newsletter</h5>
                        <!-- Start Subscribe -->
                        <form class="form-subscribe">
                            <input type="text" class="input-subscribe" placeholder="Enter your email address...">
                            <button class="btn btn-fiord btn-3d btn-icon-right icon-divider btn-block" type="button">Subscribe now<i class="fa fa-send"></i></button>
                        </form>
                        <!-- End Subscribe -->
                    </div>
                    <div class="widget">
                        <h5><span>Social</span> network</h5>
                        <a href="#" class="social-network"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-tumblr"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-behance"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-skype"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="social-network"><i class="fa fa-flickr"></i></a>
                    </div>  
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>2017 &copy; Copyright <a href="http://99webpage.com/">99webpage.</a> All images content only for demos is not included in the download package</p>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><a href="#">About 99webpage</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/loading.js') }}"></script>
    <script src="{{ URL::asset('dist/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
    (Load Extensions only on Local File Systems ! 
    The following part can be removed on Server for On Demand Loading) -->  
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/revolution.extension.video.min.js') }}"></script>
    
    <!-- CUSTOM REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ URL::asset('dist/js/revolution/setting/clean-revolution-slider.js') }}"></script>
    
    <!-- bootstrap -->
    <script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
    
    <!-- easing -->
    <script src="{{ URL::asset('dist/js/jquery.easing-1.3.min.js') }}"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('dist/js/ie10-viewport-bug-workaround.js') }}"></script>
    
    <!-- Bootsnavs -->
    <script src="{{ URL::asset('dist/js/bootsnav.js') }}"></script>

    <!-- Custom form -->
    <script src="{{ URL::asset('dist/js/form/jcf.js') }}"></script>
    <script src="{{ URL::asset('dist/js/form/jcf.scrollable.js') }}"></script>
    <script src="{{ URL::asset('dist/js/form/jcf.select.js') }}"></script>
    
    <!-- Custom checkbox and radio -->
    <script src="{{ URL::asset('dist/js/checkator/fm.checkator.jquery.js') }}"></script>
    <script src="{{ URL::asset('dist/js/checkator/setting.js') }}"></script>
    
    <!-- Select language -->
    <script src="{{ URL::asset('dist/js/selectdropdown/jquery.dd.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/selectdropdown/setting.js') }}"></script>

    <!-- google code prettify -->
    <script src="{{ URL::asset('dist/js/google-code-prettify/prettify.js') }}"></script>
    <!-- Custom -->
    <script src="{{ URL::asset('dist/js/custom.js') }}"></script>

    <!-- Theme option-->
    <script src="{{ URL::asset('dist/js/template-option/demosetting.js') }}"></script>

    <!-- datetimepicker -->
    <script src="{{ URL::asset('dist/js/datetimepicker/jquery.datetimepicker.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/datetimepicker/setting.js') }}"></script>
    
    <!-- masonry -->
    <script src="{{ URL::asset('dist/js/masonry/masonry.min.js') }}"></script>   
    <script src="{{ URL::asset('dist/js/masonry/masonry.filter.js') }}"></script>
    <script src="{{ URL::asset('dist/js/masonry/setting.js') }}"></script> 
    
    <!-- PrettyPhoto -->
    <script src="{{ URL::asset('dist/js/prettyPhoto/jquery.prettyPhoto.js') }}"></script>  
    <script src="{{ URL::asset('dist/js/prettyPhoto/setting.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ URL::asset('dist/js/owlcarousel/owl.carousel.min.js') }}"></script>  
    <script src="{{ URL::asset('dist/js/owlcarousel/setting.js') }}"></script>
    
    <!-- Parallax -->
    <script src="{{ URL::asset('dist/js/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ URL::asset('dist/js/parallax/setting.js') }}"></script>
</body>
</html>
