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
        </div>
    </div>
</section>
       
<section class="innerpage-wrapper">
	<div id="hotel-listing" class="bottom-padding">
        <div class="container">
            
            <div class="col-sm-12 col-md-12 col-lg-12 content-side">
                <h3><span class="label label-success">{{$word}}</span></h3>
                @if(!empty($cek_studio_data))
                <h5>Search by <b>Studio</b></h5>
                @endif
                @foreach($studio_data as $list)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="main-block hotel-block section-padding">
                          <div class="main-img img-hover">
                            @if(File::exists(public_path("logo/".$list->pr_logo.".jpg")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.jpg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; " />
                            @elseif(File::exists(public_path("logo/".$list->pr_logo.".png")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.png')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; border-radius: 25%;" />
                            @elseif(File::exists(public_path("logo/".$list->pr_logo.".jpeg")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.jpeg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; border-radius: 25%;" />
                            @elseif(File::exists(public_path("logo/".$list->pr_logo.".JPG")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.JPG')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; " />
                            @elseif(File::exists(public_path("logo/".$list->pr_logo.".PNG")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.PNG')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; border-radius: 25%;" />
                            @elseif(File::exists(public_path("logo/".$list->pr_logo.".JPEG")))
                            <img src="{{ asset('logo/'.$list->pr_logo.'.JPEG')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative; border-radius: 25%;" />
                            @else
                            <img src="{{ asset('dist/images/studio-foto.png')}}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; height: 150px; width: auto; float: none; display: block;position: relative;" />
                            @endif
                          </div>
                          
                          <div class="main-info hotel-info">
                              <div class="main-title hotel-title">
                                  <p style="text-align: center; padding: 10px;"><b>{{$list->pr_name}}</b></p>
                                  <p style="text-align: center; padding-bottom: 10px;">SURABAYA</p>
                                  
                                  <a href="{{route('detail.fotostudio', ['id' => $list->user_id])}}" style="text-align: center;">
                                        <input type="text" name="id" value="{{$list->user_id}}" hidden="">
                                        <button type="submit" class="btn btn-orange btn-lg" style="float: none;margin: 0 auto; position: relative; display: flex;">View More</button>
                                  </a>
                                
                              </div>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-11 content-side">
                @if(empty($cek_paket) && empty($cek_tag))
                @else
                <h5>Search by <b>Package</b></h5>
                @endif
                @foreach($allThemes as $data)
                <div class="col-sm-12 col-md-12 col-lg-3">
                    @include('search-result.fotostudio.paket')
                </div>
                @endforeach
                @foreach($allThemes2 as $data)
                <div class="col-sm-12 col-md-12 col-lg-3">
                    @include('search-result.fotostudio.paket')
                </div>
                @endforeach
            </div>
    	</div>
    </div>
</div>
</section>
@include('layouts.footer')
@endsection