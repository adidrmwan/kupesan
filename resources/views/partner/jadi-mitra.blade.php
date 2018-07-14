@extends('layouts.app')
@section('title', 'Jadi Mitra')
@section('content')

<section class="innerpage-wrapper">
        	<div id="about-content-2" class="innerpage-section-padding">
        		<div class="container">
        			<div class="row">
                        
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        	<div id="abt-cnt-2-img">
                            	<img src=" {{URL::asset('dist/images/logo.png')}} " class="img-responsive" alt="about-img" />
                            </div><!-- end abt-cnt-2-img -->
                        </div><!-- end columns -->
                        
                    	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        	<div id="abt-cnt-2-text">
                                <h2>Jadilah Bagian dari kami</h2>
                                 <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                                        <a href="{{route('mitra.daftar')}}" style="color: white; text-decoration: none;">Daftar Mitra </a>
                                </button>
                                
                            </div><!-- end abt-cnt-2-text -->
                        </div><!-- end columns -->
                        
                    </div><!-- end row -->
        		</div><!-- end container -->
        	</div><!-- end about-content-2 -->
            
            <div id="why-us" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="page-heading innerpage-heading">
                                <h2>Why Choose Us</h2>
                                <hr class="heading-line" />
                            </div><!-- end page-heading -->
                            
                            <div class="row">
                            
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" id="why-us-tabs">
                            
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tb-happy-client" data-toggle="tab"><span><i class="fa fa-smile-o"></i></span>Happy Clients</a></li>
                                        <li><a href="#tb-satisfaction" data-toggle="tab"><span><i class="fa fa-thumbs-o-up"></i></span>Satisfaction</a></li>
                                        <li><a href="#tb-daily-tours" data-toggle="tab"><span><i class="fa fa-plane"></i></span>Daily Tours</a></li>
                                    </ul><!-- end nav-tabs -->
                                    
                                    <div class="tab-content">
                                        
                                        <div id="tb-happy-client" class="tab-pane fade in active">
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.  Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper.</p>
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per. Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>											
                                        </div><!-- end tb-happy-client -->
                                        
                                        <div id="tb-satisfaction" class="tab-pane fade">
                                            <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                            <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>											
                                        </div><!-- end tb-satisfaction -->
                                        
                                        <div id="tb-daily-tours" class="tab-pane fade">
                                            <p> Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si. Ad duo fugit aeque fabulas, pro an eros perpetua ullamcorper. Iuvaret detraxit disputando vel ea, ut virtute per.</p>
                                            <p>Lorem ipsum dolor si Iuvaret detraxit disputando velr.Lorem ipsum dolor si.Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, an eros perpetua ullamcorper.</p>
                                            <a href="#">Discover More<span><i class="fa fa-angle-double-right"></i></span></a>											
                                        </div><!-- end b-daily-tours -->
                                        
                                    </div><!-- end tab-content -->
                                </div><!-- end columns -->
                               
                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" id="progress-bars">
                                
                                    <div class="bar">
                                        <h4>Satisfied Clients</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span>90%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Packages</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width:86%"><span>86%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Accomodation</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"><span>75%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                    <div class="bar">
                                        <h4>Price Guarantee</h4>
                                        <div class="progress">
                                            <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width:83%"><span>83%</span></div>
                                        </div><!-- end progress -->
                                    </div><!-- end bar -->
                                
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-12"  id="company-logos">
                                	<div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                            <h3>We Have Investor Relations.</h3>
                                            <p>Don't take our words for granted. See what all this hipe about.</p>
                                        </div><!-- end columns -->
                                        
                                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                            <div class="row">
                                                <div class="owl-carousel owl-theme" id="owl-company-logo">
                                                    <div class="col-xs-12">
                                                        <div class="item">
                                                            <div class="company-img">
                                                                <img src="images/company-1.png" alt="logo" />
                                                            </div><!-- company-img -->
                                                        </div><!-- item -->
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12">                       
                                                        <div class="item">
                                                            <div class="company-img">
                                                                <img src="images/company-2.png" alt="logo" />
                                                            </div><!-- company-img -->
                                                        </div><!-- item -->
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12">
                                                        <div class="item">
                                                            <div class="company-img">
                                                                <img src="images/company-3.png" alt="logo" />
                                                            </div><!-- company-img -->
                                                        </div><!-- item -->
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12">
                                                        <div class="item">
                                                            <div class="company-img">
                                                                <img src="images/company-4.png" alt="logo" />
                                                            </div><!-- company-img -->
                                                        </div><!-- item -->
                                                    </div><!-- end columns -->
                                                    
                                                    <div class="col-xs-12">
                                                        <div class="item">
                                                            <div class="company-img">
                                                                <img src="images/company-5.png" alt="logo" />
                                                            </div><!-- company-img -->
                                                        </div><!-- item -->
                                                    </div><!-- end columns -->
                                                    
                                                </div><!-- owl-company -->
                                            </div><!-- end row -->
                                        
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                        		</div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end columns -->
                   </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end why-us -->
            
        </section><!-- end innerpage-wrapper -->

@include('layouts.footer')
@endsection
