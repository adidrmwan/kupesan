@extends('layouts.master-studio')
@section('title', 'Paket List')
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
        </div>
    </div>
</section>
       
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
                            <form role="form" action="{{ route('search.fotostudio') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
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
                                                <input type="number" class="form-control" placeholder="Max Price" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="max_price" value="100000" required>
                                            </div> 
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 style="margin-bottom: 20px;">Filter Tipe Paket</h3>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group" >
                                                <select  class="form-control" name="" required>
                                                    <option selected value="">Pilih Tema</option>
                                                    <option value=""></option>
                                                </select>
                                            </div>             
                                        </div>    
                                    </div>
                                    <hr>
                                    <div style="margin-top: 10px;" class="padding-price">
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="tag_id" value="{{$tag_id}}" hidden="">
                                            <button type="submit" class="btn btn-default" style="width: 100%;">Filter</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div><!-- end side-bar-block -->
                    </div>
                </div><!-- end columns --> 
                
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
	

                    @foreach($allThemes as $data)
                    <div class="col-sm-6 col-md-4">
                        <div class="main-block flight-block">
                                <div class="frame">
                                    <div class="img-hover">
                                        <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">

                                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                                <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
                                        </a>
                                    </div>
                                    <div class="img-hover">
                                        <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                                <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;"/>
                                        </a>
                                    </div>
                                    <div class="img-hover">
                                        <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                                <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
                                                @endif
                                        </a>
                                    </div><!-- end flight-img -->
                                    <div class = "details">
                                        <h1>Lorem</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
                                    </div>
                                </div>
                                
                                
                                <div class="flight-info">
                                    <div class="flight-title" style="text-align: center;">
                                        <h3>{{$data->partner_name}}</h3>
                                    </div><!-- end flight-title -->
                                    
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">{{$data->pkg_name_them}}</li><br>
                                        <li >Rp {{$data->pkg_price_them}} / Jam</li><br>
                                        <!-- <li >Rp {{$data->pkg_overtime_them}} / Overtime</li><br> -->
                                        <li>
                                            <a href="{{route('check.auth', ['package_id' => $data->id])}}">
                                                <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Pesan</span>
                                                </button>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="{{route('check.auth', ['package_id' => $data->id])}}">
                                                <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">View More</span>
                                                </button>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div><!-- end flight-info -->
                            
                        </div><!-- end flight-block -->
                    </div><!-- end columns -->
                    @endforeach

            </div><!-- end row -->
    	</div><!-- end container -->
    </div>
</div>
</section>
@include('layouts.footer')
@endsection