@extends('layouts.master-studio')
@section('title', 'Studio List')
@section('content')

<section class="page-cover" id="cover-hotel-grid-list" style="margin-top: 4.5%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h1 class="page-title">Studio List</h1>
                <h5> By kupesan.id</h5>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
        
<section class="innerpage-wrapper">
    <div id="search-result-page" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                    <div class="page-search-form">
                        <h2>Studio <span>Foto <i class="fa fa-building"></i></span></h2>
                        
                        <form class="pg-search-form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label><span><i class="fa fa-calendar"></i></span>Tanggal Foto</label>
                                         <input type="text" class="form-control dpd1" placeholder="Tanggal Foto" name="tanggal_pesan">
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label><span><i class="fa fa-hashtag"></i></span>Hashtag</label>
                                        <input type="text" class="form-control" placeholder="hashtag"/> 
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top: 1%;">
                                    <button class="btn btn-orange">Ganti Pencarian</button>
                                </div>
                            </div><!-- end row -->

                        </form>
                         
                    </div><!-- end page-search-form -->
                </div>                    
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-result-page -->
</section><!-- end innerpage-wrapper -->
       
<section class="innerpage-wrapper">
	<div id="hotel-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">        	
                
                <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar" >
                    <div class="col-xs-12 col-sm-12 col-md-12">            
                        <div class="side-bar-block filter-block ">
                            <h3>Sort Result</h3>
                            <h5 style="color: white;">Sorting results by your options</h5>
                            
                            <div class="panels-group padding-price">
                                
                                <div class="panel panel-default">
                                   
                                    <div class="panel-body text-left">
                                    	<div class="col-md-6">
                                           <label for="rdo-1" class="btn-radio">
										      <input type="radio" id="rdo-1" name="radio-grp">
										      <svg width="20px" height="20px" viewBox="0 0 20 20">
										        <circle cx="10" cy="10" r="9"></circle>
										        <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
										        <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
										      </svg>
										      <span>Highest Price</span>
										    </label>
									    </div>
									    <div class="col-md-6">
										    <label for="rdo-2" class="btn-radio">
										      <input type="radio" id="rdo-2" name="radio-grp">
										      <svg width="20px" height="20px" viewBox="0 0 20 20">
										        <circle cx="10" cy="10" r="9"></circle>
										        <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
										        <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
										      </svg>
										      <span>Lowest Price</span>
										    </label>
									    </div>
                                    </div><!-- end panel-collapse -->
                                    <div class="panel-body text-left">
                                        <div class="col-md-6">
                                           <label for="rdo-3" class="btn-radio">
                                              <input type="radio" id="rdo-3" name="radio-grp">
                                              <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                              </svg>
                                              <span>A - Z</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="rdo-4" class="btn-radio">
                                              <input type="radio" id="rdo-4" name="radio-grp">
                                              <svg width="20px" height="20px" viewBox="0 0 20 20">
                                                <circle cx="10" cy="10" r="9"></circle>
                                                <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                                                <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                                              </svg>
                                              <span>Z - A</span>
                                            </label>
                                        </div>
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->    
                                
                            </div><!-- end panel-group -->
                        </div><!-- end side-bar-block -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">            
                        <div class="side-bar-block filter-block ">
                            <h3>Filter Result</h3>
                            <h5 style="color: white;">Showing results based on categories</h5>
                            
                            <div class="price-slider padding-price">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div><!-- end price-slider -->
                        </div><!-- end side-bar-block -->
                    </div>
                </div><!-- end columns --> 
                
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
	
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 content-side">
					@foreach($result as $list)
                    <div class="list-block main-block h-list-block">
                    	<div class="list-content">
                    		<div class="main-img list-img h-list-img">
                                <a href="hotel-detail-left-sidebar.html">
                                    <img class="img-responsive" src="{{ asset('logo/'.$list->pr_logo.'.png')  }}" alt= "Logo Mitra" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price"><span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end h-list-img -->
                            
                            <div class="list-info h-list-info">
                                <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">{{$list->pr_name}}</a></h3>
                                <p class="block-minor">From: Scotland</p>
                                <a href="hotel-detail-left-sidebar.html" class="btn btn-orange btn-lg">View More</a>
                             </div><!-- end h-list-info -->
                    	</div><!-- end list-content -->
                    </div><!-- end h-list-block -->
                    @endforeach

                    <div class="pages">
                        <ol class="pagination">
                            <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                        </ol>
                    </div><!-- end pages -->
                </div><!-- end columns -->

            </div><!-- end row -->
    	</div><!-- end container -->
    </div><!-- end hotel-listing -->
</section><!-- end innerpage-wrapper -->
@include('layouts.footer')
@endsection