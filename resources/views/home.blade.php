@extends('layouts.app')
@section('title', 'Selamat Datang')
@section('content')


<section class="flexslider-container" id="flexslider-container-6">

    <div class="flexslider slider tour-slider" id="slider-6">
        <ul class="slides">
            
            <li class="item-1 back-size" style="background:url(dist/images/home-bg.png) 50% 65%; background-size:cover; height:100%;">
               <div class="meta" >         
                    <div class="container" style="text-align: center;">
                        <span class="highlight-price highlight-2">Capture the time of your life with</span>
                        <h2>KUPESAN.ID</h2>
                    </div><!-- end container -->  
                </div><!-- end meta -->
            </li><!-- end item-1 -->           
        </ul>
    </div><!-- end slider -->

    <div class="search-tabs" id="search-tabs-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                
                    <ul class="nav nav-tabs center-tabs">
                        <li class="active"><a href="#studio" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Foto Studio</span></a></li>
                        <li><a href="#fotografer" data-toggle="tab"><span><i class="fa fa-camera"></i></span><span class="st-text">Fotografer</span></a></li>
                        <li><a href="#mua" data-toggle="tab"><span><i class="fa fa-certificate"></i></span><span class="st-text">MUA</span></a></li>
                        <li><a href="#kebaya" data-toggle="tab"><span><i class="fa fa-female"></i></span><span class="st-text">Kebaya</span></a></li>
                    </ul>

                    <div class="tab-content">

                        <div id="studio" class="tab-pane in active">
                            <form>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-1">
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">

                                        <div class="form-group left-icon">
                                            <input type="text" class="form-control dpd1" placeholder="Tanggal Foto" >
                                            <i class="fa fa-calendar"></i>
                                        </div><!-- end row -->                              
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                        <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected># (Hastag)</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                                        <button class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->
                                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-1">
                                        
                                    </div>
                                    
                                </div><!-- end row -->
                            </form>
                        </div>
                        
                        <div id="fotografer" class="tab-pane">
                            <form>
                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div>

                        <div id="mua" class="tab-pane">
                            <form>
                                <div class="row">
                                
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                                    </div><!-- end columns -->
                                    
                                </div><!-- end row -->
                            </form>
                        </div>
                        
                        <div id="kebaya" class="tab-pane">
                            <form>
                                <div class="row">
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                                    </div><!-- end columns -->
                                    
                                </div><!-- end columns -->
                            </form>
                        </div>

                    </div><!-- end tab-content -->
                    
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->

</section><!-- end flexslider-container -->

<section id="studio-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Foto Studio Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                
                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/hotel-1.jpg" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->
                                
                                <div class="main-title hotel-title">
                                    <a href="#">Herta Berlin Hotel</a>
                                    <p>From: Scotland</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/hotel-2.jpg" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->
                                
                                <div class="main-title hotel-title">
                                    <a href="#">Roosevelt Hotel</a>
                                    <p>From: Germany</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/hotel-3.jpg" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->
                                
                                <div class="main-title hotel-title">
                                    <a href="#">Hotel Fort De</a>
                                    <p>From: Austria</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/hotel-4.jpg" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->
                                
                                <div class="main-title hotel-title">
                                    <a href="#">Roosevelt Hotel</a>
                                    <p>From: Germany</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                </div><!-- end owl-hotel-offers -->
                
                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->

<section id="cruise-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Fotografer Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                    </div><!-- end columns -->
                    
                </div><!-- end row -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cruise-offers -->

<section id="tour-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>MUA Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                    </div><!-- end columns -->
                    
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end tour-offers -->

<section id="flight-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Kebayas Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                    <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5" style="float: none; margin: 0 auto; display: block; position: relative; text-align: center;">
                                        <h1>Coming Soon</h1>        
                        </div><!-- end columns -->
                    
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end flight-offers -->

<section id="best-features" class="banner-padding black-features">
    <div class="container">
        <div class="row">           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-cogs"></i></span>
                    <h3>Change How Things Are</h3>
                    
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-expand"></i></span>
                    <h3>Enlarge Every Possibility</h3>
                    
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Offer One Stop Solution</h3>
                    
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->


@include('layouts.footer')
@endsection
