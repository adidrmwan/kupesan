@extends('layouts.app')
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
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                <h3><span class="label label-success">{{$word}}</span></h3>
                @foreach($studio_data as $list)
                    <div class="col-sm-6 col-md-6">
                        <div class="list-block main-block h-list-block">
                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="hotel-detail-left-sidebar.html">
                                        <img class="img-responsive" src="{{ asset('logo/'.$list->pr_logo.'.png')  }}" alt= "Logo Mitra" />
                                    </a>
                                </div><!-- end h-list-img -->
                                
                                <div class="list-info h-list-info">
                                    <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">{{$list->pr_name}}</a></h3>
                                    <br>
                                    <form role="form" action="{{route('detail.fotostudio')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <input type="text" name="user_id" value="{{$list->user_id}}" hidden="">
                                        <button type="submit" class="btn btn-orange btn-lg pull-left">View More</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                @foreach($allThemes as $data)
                    <div class="col-sm-4 col-md-3">
                        <div class="main-block flight-block">
                            <div class="main-img">
                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                        <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                        <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;"/>
                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                        <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
                                        @endif
                            </div>
                            <div class="flight-info">
                                <div class="flight-title" style="text-align: center;">
                                    <h3>{{$data->partner_name}}</h3>
                                </div>
                                <ul class="list-unstyled list-inline offer-price-1">
                                    <li class="price">{{$data->pkg_name_them}}</li>
                                    <li class="price">Rp {{$data->pkg_price_them}} / Jam</li>
                                    <li class="price">Rp {{$data->pkg_overtime_them}} / Overtime</li>
                                    <li class="label label-success"></li>
                                    <li style="margin-top: 10px;">
                                        <a href="{{route('check.auth', ['package_id' => $data->id])}}">
                                            <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Pesan</span>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    	</div>
    </div>
</div>
</section>
@include('layouts.footer')
@endsection