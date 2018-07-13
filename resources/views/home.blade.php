@extends('layouts.app')
@section('title', 'Selamat Datang')
@section('content')


<section class="flexslider-container" id="flexslider-container-6">

    <div class="flexslider slider tour-slider" id="slider-6">
        <ul class="slides">
            
            <li class="item-1 back-size" style="background: linear-gradient(rgba(234, 65, 12, 0.85),rgba(234, 65, 12, 0.85)),url(dist/images/home-bg.png) 50% 65% no-repeat; background-size:600px; height:100%;">
               
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

<section id="best-features" class="banner-padding black-features">
    <div class="container">
        <div class="row">           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-cogs"></i></span>
                    <h3>Change How Things Are</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-expand"></i></span>
                    <h3>Enlarge Every Possibility</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
           
           <div class="col-sm-6 col-md-4">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Offer One Stop Solution</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
           </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->

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
                    <div class="col-sm-6 col-md-6">
                        <div class="main-block cruise-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                    <div class="main-img cruise-img">
                                        <a href="#">
                                            <img src="dist/images/cruise-1.jpg" class="img-responsive" alt="cruise-img"/>
                                            <div class="cruise-mask">
                                                <p>7 Nights, 6 Days</p>
                                            </div><!-- end cruise-mask -->
                                        </a>
                                    </div><!-- end cruise-img -->
                                </div><!-- end columns -->
                                
                                <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                    <div class=" main-info cruise-info">
                                        <div class="main-title cruise-title">
                                            <a href="#">Spain Boat Tour</a>
                                            <p>From: Italy to Spain</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div><!-- end rating -->
                                            
                                            <span class="cruise-price">$950.00</span>
                                        </div><!-- end cruise-title -->
                                    </div><!-- end cruise-info -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->  
                        </div><!-- end cruise-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="main-block cruise-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                    <div class="main-img cruise-img">
                                        <a href="#">
                                            <img src="dist/images/cruise-2.jpg" class="img-responsive" alt="cruise-img"/>
                                            <div class="cruise-mask">
                                                <p>7 Nights, 6 Days</p>
                                            </div><!-- end cruise-mask -->
                                        </a>
                                    </div><!-- end cruise-img -->
                                </div><!-- end columns -->
                                
                                <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                    <div class=" main-info cruise-info">
                                        <div class="main-title cruise-title">
                                            <a href="#">Spain Boat Tour</a>
                                            <p>From: Italy to Spain</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div><!-- end rating -->
                                            
                                            <span class="cruise-price">$950.00</span>
                                        </div><!-- end cruise-title -->
                                    </div><!-- end cruise-info -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->  
                        </div><!-- end cruise-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="main-block cruise-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                    <div class="main-img cruise-img">
                                        <a href="#">
                                            <img src="dist/images/cruise-3.jpg" class="img-responsive" alt="cruise-img"/>
                                            <div class="cruise-mask">
                                                <p>7 Nights, 6 Days</p>
                                            </div><!-- end cruise-mask -->
                                        </a>
                                    </div><!-- end cruise-img -->
                                </div><!-- end columns -->
                                
                                <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                    <div class=" main-info cruise-info">
                                        <div class="main-title cruise-title">
                                            <a href="#">Spain Boat Tour</a>
                                            <p>From: Italy to Spain</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div><!-- end rating -->
                                            
                                            <span class="cruise-price">$950.00</span>
                                        </div><!-- end cruise-title -->
                                    </div><!-- end cruise-info -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->  
                        </div><!-- end cruise-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-sm-6 col-md-6">
                        <div class="main-block cruise-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                    <div class="main-img cruise-img">
                                        <a href="#">
                                            <img src="dist/images/cruise-4.jpg" class="img-responsive" alt="cruise-img"/>
                                            <div class="cruise-mask">
                                                <p>7 Nights, 6 Days</p>
                                            </div><!-- end cruise-mask -->
                                        </a>
                                    </div><!-- end cruise-img -->
                                </div><!-- end columns -->
                                
                                <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                    <div class=" main-info cruise-info">
                                        <div class="main-title cruise-title">
                                            <a href="#">Spain Boat Tour</a>
                                            <p>From: Italy to Spain</p>
                                            <div class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star grey"></i></span>
                                            </div><!-- end rating -->
                                            
                                            <span class="cruise-price">$950.00</span>
                                        </div><!-- end cruise-title -->
                                    </div><!-- end cruise-info -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->  
                        </div><!-- end cruise-block -->
                    </div><!-- end columns -->
                </div><!-- end row -->
                
                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
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
                
                 <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/tour-1.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$568.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="#">China Temple Tour</a>
                                    <p>From: China</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/tour-2.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$745.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="#">African Safari Tour</a>
                                    <p>From: Africa</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/tour-3.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$459.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="#">Paris City Tour</a>
                                    <p>From: Paris</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/tour-4.jpg" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">$745.00<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="#">China Temple Tour</a>
                                    <p>From: China</p>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star grey"></i></span>
                                    </div>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                </div><!-- end owl-tour-offers -->
                
                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
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
                
                    <div class="col-sm-6 col-md-4">
                        <div class="main-block flight-block">
                            <a href="#">
                                <div class="flight-img">
                                    <img src="dist/images/flight-1.jpg" class="img-responsive" alt="flight-img" />
                                </div><!-- end flight-img -->
                                
                                <div class="flight-info">
                                    <div class="flight-title">
                                        <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                    </div><!-- end flight-title -->
                                    
                                    <div class=" flight-timing">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                        </ul>
                                    </div><!-- end flight-timing -->
                                    
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end flight-info -->
                            </a>
                        </div><!-- end flight-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="main-block flight-block">
                            <a href="#">
                                <div class="flight-img">
                                    <img src="dist/images/flight-2.jpg" class="img-responsive" alt="flight-img" />
                                </div><!-- end flight-img -->
                                
                                <div class="flight-info">
                                    <div class="flight-title">
                                        <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                    </div><!-- end flight-title -->
                                    
                                    <div class=" flight-timing">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                        </ul>
                                    </div><!-- end flight-timing -->
                                    
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end flight-info -->
                            </a>
                        </div><!-- end flight-block -->
                    </div><!-- end columns -->
                    
                    <div class="col-sm-6 col-md-4">
                        <div class="main-block flight-block">
                            <a href="#">
                                <div class="flight-img">
                                    <img src="dist/images/flight-3.jpg" class="img-responsive" alt="flight-img" />
                                </div><!-- end flight-img -->
                                
                                <div class="flight-info">
                                    <div class="flight-title">
                                        <h3><span class="flight-destination">Spain</span>|<span class="flight-type">OneWay Flight</span></h3>
                                    </div><!-- end flight-title -->
                                    
                                    <div class=" flight-timing">
                                        <ul class="list-unstyled">
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 02-2017 </span>(8:40 PM)</li>
                                            <li><span><i class="fa fa-plane"></i></span><span class="date">Aug, 03-2017 </span>(8:40 PM)</li>
                                        </ul>
                                    </div><!-- end flight-timing -->
                                    
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">$568.00<span class="pkg">Avg/Person</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end flight-info -->
                            </a>
                        </div><!-- end flight-block -->
                    </div><!-- end columns -->      
                </div><!-- end row -->
                
                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end flight-offers -->


@include('layouts.footer')
@endsection
