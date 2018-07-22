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
                                                <option selected># (Hashtag)</option>
                                                <option>Kupesan</option>
                                                <option>Kupesan</option>
                                                <option>Kupesan</option>
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
                    <h2>Foto Studio </h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                
                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-studio-offers">
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                               
                                <div class="main-title hotel-title">
                                    <a href="">Studio Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="">
                                    <img src="dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">

                                <div class="main-title hotel-title">
                                    <a href="">Studio Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="">
                                    <img src="dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                </a>
                            </div><!-- end offer-img -->
                            
                            <div class="main-info hotel-info">
                                <div class="main-title hotel-title">
                                    <a href="">Studio Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
                    
                </div><!-- end owl-hotel-offers -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->

<section id="fotografer-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Fotografer</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                

                 <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-fotografer-offers">
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/fotografer.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                    
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/fotografer.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                     <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/fotografer.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                     <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                    
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                </div><!-- end owl-tour-offers -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end tour-offers -->

<section id="mua-offers" class="section-padding">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">

                    <h2>MUA</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->
                
                 <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-mua-offers">
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/mua.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                    
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/mua.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                     <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                    <div class="item">
                        <div class="main-block tour-block">
                            <div class="main-img">
                                <a href="#">
                                    <img src="dist/images/mua.png" class="img-responsive" alt="tour-img" />
                                </a>
                            </div><!-- end offer-img -->
                                
                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                     <a href="">Kupesan.id</a>
                                    <p>From: Surabaya</p>
                                    
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
                    
                </div><!-- end owl-tour-offers -->

            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end tour-offers -->


<section id="kebaya-offers" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading">
                            <h2>Kebaya</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="main-block cruise-block">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                            <div class="main-img cruise-img">
                                                <a href="#">
                                                    <img src="dist/images/kebaya.png" class="img-responsive" alt="kebaya-img"/>
                                                    
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="">Kupesan Kebaya</a>
                                                    <p>From: Surabaya</p>

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
                                                    <img src="dist/images/kebaya.png" class="img-responsive" alt="kebaya-img"/>
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="">Kupesan Kebaya</a>
                                                    <p>From: Surabaya</p>
                                                    
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
                                                    <img src="dist/images/kebaya.png" class="img-responsive" alt="kebaya-img"/>
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="">Kupesan Kebaya</a>
                                                    <p>From: Surabaya</p>
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
                                                    <img src="dist/images/kebaya.png" class="img-responsive" alt="kebaya-img"/>
                                                </a>
                                            </div><!-- end cruise-img -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                            <div class=" main-info cruise-info">
                                                <div class="main-title cruise-title">
                                                    <a href="">Kupesan Kebaya</a>
                                                    <p>From: Surabaya</p>
                                                    
                                                </div><!-- end cruise-title -->
                                            </div><!-- end cruise-info -->
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->  
                                </div><!-- end cruise-block -->
                            </div><!-- end columns -->
                        </div><!-- end row -->

                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end cruise-offers -->

<section class="innerpage-wrapper lightgrey-features" id="best-features">
    <div id="about-content-2" class="innerpage-section-padding orange-features">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div id="abt-cnt-2-img">
                        <img src="dist/images/logo-navbar.png" class="img-responsive" alt="about-img" />
                    </div><!-- end abt-cnt-2-img -->
                </div><!-- end columns -->
                
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                    <div id="abt-cnt-2-text">
                        <h2>Bergabunglah Menjadi Mitra Kami</h2>
                        <p>Kami akan menghubungkan anda dengan customer sehingga anda dapat meningkatkan kinerja bisnis anda.</p>
                        <div class="row">
                             <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                                    <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">Jadi Mitra </a>
                             </button>
                        </div><!-- end row -->
                    </div><!-- end abt-cnt-2-text -->
                </div><!-- end columns -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end about-content-2 -->
</section><!-- end innerpage-wrapper -->

<section id="best-features" class="banner-padding-orange orange-features">
    <div class="container">
            <div style="text-align: center; ">
                <h2 style="padding: 50px 0;">Mengapa Memilih Kupesan.id ?</h2>           
            </div>
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

<section class="innerpage-wrapper">
    <div id="contact-us-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-4"> 
                            <div class="contact-block-2">  
                                <span class="border-shape-top"></span>                       
                                <span><i class="fa fa-map-marker"></i></span>
                                <h4>Find us at</h4>
                                <p>Araya Galaxy Bumi Permai 44 Blok 8A4 Tahap 1, Surabaya</p>
                                <span class="border-shape-bot"></span>
                            </div><!-- end contact-block-2 -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-4"> 
                            <div class="contact-block-2">   
                                <span class="border-shape-top"></span>                      
                                <span><i class="fa fa-envelope"></i></span>
                                <h4>Email us at</h4>
                                <p>info@kupesan.id </p>
                                &nbsp;
                                <span class="border-shape-bot"></span>
                            </div><!-- end contact-block-2 -->
                        </div><!-- end columns -->
                        
                        <div class="col-xs-12 col-sm-4"> 
                            <div class="contact-block-2">          
                                <span class="border-shape-top"></span>               
                                <span><i class="fa fa-phone"></i></span>
                                <h4>Call us at</h4>
                                <p>+6282 233-610-702</p>
                                &nbsp;
                                <span class="border-shape-bot"></span>
                            </div><!-- end contact-block-2 -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                    
                    <div id="contact-form-2" class="innerpage-section-padding">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1">
                                <div class="page-heading">
                                    <h2>Contact Us</h2>
                                    <hr class="heading-line" />
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 contact-form-2-text">
                                        
                                     
                                            <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=-7.290330000000001,112.78610000000003&q=Araya%20Galaxy%20Bumi%20Permai%2044%20Blok%208A4%20Tahap%201%2C%20Surabaya+(Your%20Business%20Name)&ie=UTF8&t=&z=13&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            </div><br/>
                                        

                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6">
                                    
                                        <form>
                                            
                                            <div >
                                                <div class="col-xs-12 col-sm-6 margin-form1">
                                                    <div class="form-group">
                                                         <input type="text" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 margin-form2">
                                                    <div class="form-group">
                                                         <input type="email" class="form-control" placeholder="Email"  required/>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                 <input type="text" class="form-control" placeholder="Subject"  required/>
                                            </div>
            
                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                            </div>
                                            
                                            <div class="text-center">
                                                <button class="btn btn-orange">Send</button>
                                            </div>
                                        </form>
                                    
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->   
    </div><!-- end contact-us -->
</section><!-- end innerpage-wrapper -->

@include('layouts.footer')
@endsection
