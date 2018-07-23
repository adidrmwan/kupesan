@extends('layouts.app')
@section('title', 'Studio Foto')
@section('content')
@foreach($detail as $data)
<section class="page-cover section-padding" id="cover-hotel-detail" style="margin-top: 4.5%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">{{$data->pr_name}}</h1>
                <ul class="breadcrumb">
                    <li class="active">{{$data->pr_addr}}, {{$data->pr_kel}}, {{$data->pr_kec}}, {{$data->pr_area}}, {{$data->pr_postal_code}}</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<section id="studio" class="section-padding">
            <!-- <div class="container"> -->
                <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class=" luxury-img luxury-room-imgs">
                                        <div class="row">
                                            @foreach($album as $listalbum)
                                            @if(!empty($listalbum->album_img_1))
                                            <div class="col-xs-6 col-sm-6 luxury-room-block ">
                                                <a href="../dist/images/studio-foto.png" title="image-1" class="with-caption gallery image-link">
                                                <img style="width: 500px; height: auto;" class="img-responsive" src="{{ asset('album/'.$listalbum->album_img_1.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                                </a>
                                            </div>
                                            @else
                                            @endif
                                            @if(!empty($listalbum->album_img_2))
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-2" class="with-caption gallery image-link">
                                                <img style="width: 500px; height: auto;" class="img-responsive" src="{{ asset('album/'.$listalbum->album_img_2.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                                </a>
                                            </div>
                                            @else
                                            @endif
                                            @if(!empty($listalbum->album_img_3))
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-3" class="with-caption gallery image-link">
                                                <img style="width: 500px; height: auto;" class="img-responsive" src="{{ asset('album/'.$listalbum->album_img_3.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                                </a>
                                            </div>
                                            @else
                                            @endif
                                            @if(!empty($listalbum->album_img_4))
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-4" class="with-caption gallery image-link">
                                                <img style="width: 500px; height: auto;" class="img-responsive" src="{{ asset('album/'.$listalbum->album_img_4.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                                </a>
                                            </div>
                                            @else
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="page-heading white-heading">
                                            <h3>Feature / Amenities / Rules</h3>
                                    </div>
                                    <div class="row">
                                      @foreach($fasilitas as $listfasil)
                                      @if(!empty($listfasil->wifi))  
                                      <div class="col-xs-4 col-md-4">
                                        <div >
                                          <span ><i class="zmdi zmdi-wifi-alt zmdi-hc-5x mdc-text-red-700"></i></span>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->toilet))
                                      <div class="col-xs-4 col-md-4">
                                        <div >
                                          <span><i class="zmdi zmdi-male-female zmdi-hc-5x mdc-text-red-700"></i></span>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->parkir))
                                      <div class="col-xs-4 col-md-4">
                                        <div >
                                          <span><i class="zmdi zmdi-directions-car zmdi-hc-5x mdc-text-red-700"></i></span> 
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->rganti))
                                      <div class="col-xs-4 col-md-4">
                                        <div >
                                          <span><i class="zmdi zmdi-directions-car zmdi-hc-5x mdc-text-red-700"></i></span> 
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->ac))
                                      <div class="col-xs-4 col-md-4">
                                        <div >
                                          <span><i class="zmdi zmdi-directions-car zmdi-hc-5x mdc-text-red-700"></i></span> 
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-8 col-md-8">
                          <section id="thematic-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Thematic Set</h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-thematic-offers">
                                              @foreach($thematic as $listthem)
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$listthem->pkg_img_them.'.jpg')  }}" alt= "Package Image" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">{{$listthem->pkg_name_them}}</li>
                                                              </ul>
                                                          </div><!-- end main-mask -->
                                                      </div><!-- end offer-img -->
                                                      
                                                      <div class="main-info hotel-info">
                                                          <div class="arrow">
                                                            <form role="form" action="{{route('partner.delete.pkg')}}" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                              <input type="text" name="id" value="{{$listthem->id}}" hidden="">
                                                              <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;>
                                                                <a href="#" style="color: white; text-decoration: none;">PESAN </a>
                                                            </button>
                                                            </form>
                                                            
                                                          </div><!-- end arrow -->

                                                          <div class="main-title hotel-title">
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_price_them}} / Jam (Jam Pertama)</p>
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_overtime_them}} / Overtime</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              @endforeach
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->
                          </section><!-- end hotel-offers -->
                          <section id="alacarte-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Ala Carte </h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-alacarte-offers">    @foreach($alacarte as $listthem)
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$listthem->pkg_img_them.'.jpg')  }}" alt= "Package Image" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">{{$listthem->pkg_name_them}}</li>
                                                              </ul>
                                                          </div><!-- end main-mask -->
                                                      </div><!-- end offer-img -->
                                                      
                                                      <div class="main-info hotel-info">
                                                          <div class="arrow">
                                                            <button class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;>
                                                                <a href="#" style="color: white; text-decoration: none;">PESAN </a>
                                                            </button>
                                                          </div><!-- end arrow -->

                                                          <div class="main-title hotel-title">
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_price_them}} / Jam (Jam Pertama)</p>
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_overtime_them}} / Overtime</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              @endforeach
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->

                          </section><!-- end hotel-offers -->
                          <section id="special-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Special Studio</h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-special-offers">
                                              @foreach($special as $listthem)
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$listthem->pkg_img_them.'.jpg')  }}" alt= "Package Image" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">{{$listthem->pkg_name_them}}</li>
                                                              </ul>
                                                          </div><!-- end main-mask -->
                                                      </div><!-- end offer-img -->
                                                      
                                                      <div class="main-info hotel-info">
                                                          <div class="arrow">
                                                            <button class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;>
                                                                <a href="#" style="color: white; text-decoration: none;">PESAN </a>
                                                            </button>
                                                          </div><!-- end arrow -->

                                                          <div class="main-title hotel-title">
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_price_them}} / Jam (Jam Pertama)</p>
                                                              <p><span>Rp</span>&nbsp;&nbsp;{{$listthem->pkg_overtime_them}} / Overtime</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              @endforeach
                                              
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->
                          </section><!-- end hotel-offers -->
                        </div>

          </div><!-- end row -->
      <!-- </div> -->
  </section><!-- end luxury-rooms -->
@endforeach
@include('layouts.footer')
@endsection
