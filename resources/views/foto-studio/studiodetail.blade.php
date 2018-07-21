@extends('layouts.app')
@section('title', 'Studio Foto')
@section('content')

<section class="page-cover section-padding" id="cover-hotel-detail" style="margin-top: 4.5%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Studio Kupesan</h1>
                <ul class="breadcrumb">
                    <li class="active">Jalan Ambarawa</li>
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
                                            <div class="col-xs-6 col-sm-6 luxury-room-block ">
                                                <a href="../dist/images/studio-foto.png" title="image-1" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="../dist/images/mua.png" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-2" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="../dist/images/studio-foto.png" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-3" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="../dist/images/studio-foto.png" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="../dist/images/studio-foto.png" title="image-4" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="../dist/images/studio-foto.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="page-heading white-heading">
                                            <h3>Feature / Amenities / Rules</h3>
                                    </div>
                                    <div>
                                        <div class="col-xs-4 col-md-4">
                                            <div >
                                                <span ><i class="zmdi zmdi-wifi-alt zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                       <div class="col-xs-4 col-md-4">
                                            <div >
                                                <span><i class="zmdi zmdi-male-female zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                       <div class="col-xs-4 col-md-4">
                                            <div >
                                                <span><i class="zmdi zmdi-camera zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                    </div>
                                    <!-- <div>
                                        <iframe
                                          width="350"
                                          height="270"
                                          frameborder="0" style="border:0; padding: 30px 20px 30px 20px;"
                                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD49TWjk6gDOPVPYwecyyvXyB8Z_mohRpM
                                            &q=Space+Needle,Seattle+WA" allowfullscreen >
                                        </iframe>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-8 col-md-8">
                          <section id="thematic-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Thematic </h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-thematic-offers">
                                              
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <a href="">Studio Kupesan.id</a>
                                                              <p>From: Surabaya</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->
                          </section><!-- end hotel-offers -->
                          <section id="alacarte-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Ala Carte </h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-alacarte-offers">
                                              
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <a href="">Studio Kupesan.id</a>
                                                              <p>From: Surabaya</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->
                          </section><!-- end hotel-offers -->
                          <section id="special-offers" class="">
                                      <div class="col-sm-12">
                                          <div class="page-heading">
                                              <h2>Special </h2>
                                              <hr class="heading-line" />
                                          </div><!-- end page-heading -->
                                          
                                          <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-special-offers">
                                              
                                              <div class="item">
                                                  <div class="main-block hotel-block ">
                                                      <div class="main-img img-hover">
                                                          <a href="#">
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" /> 
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <img src="../dist/images/studio-foto.png" class="img-responsive" alt="hotel-img" />
                                                          </a>
                                                          <div class="main-mask">
                                                            <ul class="list-unstyled list-inline offer-price-1">
                                                                <li class="price">$568.00</li>
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
                                                              <a href="">Studio Kupesan.id</a>
                                                              <p>From: Surabaya</p>
                                                          </div><!-- end hotel-title -->
                                                      </div><!-- end hotel-info -->
                                                  </div><!-- end hotel-block -->
                                              </div><!-- end item -->
                                              
                                          </div><!-- end owl-hotel-offers -->
                                      </div><!-- end columns -->
                          </section><!-- end hotel-offers -->
                        </div>

          </div><!-- end row -->
      <!-- </div> -->
  </section><!-- end luxury-rooms -->

@include('layouts.footer')
@endsection
