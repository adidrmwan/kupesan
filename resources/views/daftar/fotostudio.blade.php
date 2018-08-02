@extends('layouts.master-studio')
@section('title', 'Studio List')
@section('content')
        
<section class="innerpage-wrapper">
    <div id="search-result-page" class="top-section-padding">
        <div class="container">
<!--             <div class="row">
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
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label><span><i class="fa fa-hashtag"></i></span>Hashtag</label>
                                        <input type="text" class="form-control" placeholder="hashtag"/> 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top: 1%;">
                                    <button class="btn btn-orange">Ganti Pencarian</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                    
            </div> -->
        </div><!-- end container -->
    </div><!-- end search-result-page -->
</section><!-- end innerpage-wrapper -->
       
<section class="innerpage-wrapper">
	<div id="hotel-listing" class="bottom-padding">
        <div class="container">
            <div class="row">        	
                
                <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar" >
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12">            
                        <div class="side-bar-block filter-block ">
                            <h3>Sort Result</h3>
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
                                    </div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xs-12 col-sm-12 col-md-12">            
                        <div class="side-bar-block filter-block ">
                            <h3>Filter Harga</h3>
                            <br>
                            <form>
                                <div class="padding-price">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color: white;">Min Price</label>
                                                <input type="number" class="form-control" placeholder="Min Price" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="min_price" value="10000" required>
                                            </div>        
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label style="color: white;">Max Price</label>
                                                <input type="number" class="form-control" placeholder="Min Price" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="max_price" value="10000" required>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="padding-price filter-block">
                                        <button class="btn btn-default" style="width: 100%;">Filter</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div><!-- end side-bar-block -->
                    </div>
                </div><!-- end columns --> 
                
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
	
                <!-- <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 content-side">
					@foreach($result as $list)
                    <div class="list-block main-block h-list-block">
                    	<div class="list-content">
                    		<div class="main-img list-img h-list-img">
                                <a href="hotel-detail-left-sidebar.html">
                                    <img class="img-responsive" src="{{ asset('logo/'.$list->pr_logo.'.png')  }}" alt= "Logo Mitra" />
                                </a>
                            </div>
                            
                            <div class="list-info h-list-info">
                                <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">{{$list->pr_name}}</a></h3>
                                <p class="block-minor">Price : <b>Rp {{$list->min_price}}</b></p>
                                <form role="form" action="{{route('detail.fotostudio')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <input type="text" name="user_id" value="{{$list->user_id}}" hidden="">
                                    <input type="text" name="booking_date" value="{{$booking_date}}" hidden="">
                                    <button type="submit" class="btn btn-orange btn-lg pull-right">View More</button>
                                </form>
                            </div>
                    	</div>
                    </div>
                    @endforeach
                </div> -->

                <div class="col-sm-6 col-md-4">
                    <div class="main-block flight-block">
                        <a href="#">
                            <div class="main-img">
                                <img src=" {{ URL::asset('dist/images/mua.png')}}" class="img-responsive" />
                            </div><!-- end flight-img -->
                            
                            <div class="flight-info">
                                <div class="flight-title" style="text-align: center;">
                                    <h3>Tema 1 </h3>
                                </div><!-- end flight-title -->
                                
                                <ul class="list-unstyled list-inline offer-price-1">
                                    <li class="price">Rp 568.000 / Jam</li>
                                    <li style="margin-top: 10px;"><button class="btn btn-orange" style="margin: 0 auto; float: none; position: relative; display: block; padding: 10px 30px; " >
                                    <a href="" style="color: white; text-decoration: none;">Pesan </a>
                                </button></li>
                                </ul>
                                
                            </div><!-- end flight-info -->
                        </a>
                    </div><!-- end flight-block -->
                </div><!-- end columns -->


            </div><!-- end row -->
    	</div><!-- end container -->
    </div><!-- end hotel-listing -->
</section><!-- end innerpage-wrapper -->
@include('layouts.footer')
@endsection