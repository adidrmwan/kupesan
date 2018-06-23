@extends('layouts.master-studio')
@section('title', 'Studio Foto')
@section('content')

<section class="page-cover" id="cover-hotel-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Hotel Detail Right Sidebar</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Hotel Detail Right Sidebar</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<section id="luxury-rooms" class="section-padding">
            <!-- <div class="container"> -->
                <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class=" luxury-img luxury-room-imgs">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="dist/images/luxury-room-1.jpg" title="image-1" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="dist/images/luxury-room-1.jpg" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="dist/images/luxury-room-2.jpg" title="image-2" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="dist/images/luxury-room-2.jpg" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="dist/images/luxury-room-3.jpg" title="image-3" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="dist/images/luxury-room-3.jpg" alt="">
                                                </a>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                                <a href="dist/images/luxury-room-4.jpg" title="image-4" class="with-caption gallery image-link">
                                                <img class="img-responsive" src="dist/images/luxury-room-4.jpg" alt="">
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
                                        <div class="col-sm-6 col-md-4">
                                            <div >
                                                <span ><i class="zmdi zmdi-wifi-alt zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                       <div class="col-sm-6 col-md-4">
                                            <div >
                                                <span><i class="zmdi zmdi-male-female zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                       <div class="col-sm-6 col-md-4">
                                            <div >
                                                <span><i class="zmdi zmdi-camera zmdi-hc-5x mdc-text-red-700"></i></span>
                                            </div><!-- end b-feature-block -->
                                       </div><!-- end columns -->
                                    </div>
                                    <div>
                                        <iframe
                                          width="440"
                                          height="270"
                                          frameborder="0" style="border:0; padding: 30px;"
                                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD49TWjk6gDOPVPYwecyyvXyB8Z_mohRpM
                                            &q=Space+Needle,Seattle+WA" allowfullscreen >
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-8 col-md-8">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 ">
                                    <div class="page-heading white-heading">
                                            <h2>Room (Ala Carte)</h2>
                                    </div>
                                    
                                    <div class="owl-carousel">
                                      <div class="item">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent">
                                    <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-4_tfmpvk.jpg"></a>
                                      </div>
                                      <div class="item">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"></a>
                                      </div>
                                      <div class="item">
                                        <a class="popup-text" href="#1">
                                          <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg">
                                        </a>
                                        <div id="1" class="mfp-hide white-popup-block popup-text">
                                          <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                          <span>- Opal Ingram</span>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg">
                                    </a>
                                      </div>
                                      <div class="item">
                                        <a class="popup-text" href="#2">
                                          <img src="https://res.cloudinary.com/milairagny/image/upload/v1487937862/pexels-photo-91227_lpsizl.jpg">
                                        </a>
                                        <div id="2" class="mfp-hide white-popup-block popup-text">
                                          <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                          <span>- Rick Baleno</span>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 section-padding">
                                        <div class="page-heading white-heading">
                                                <h2>Special Package</h2>
                                        </div>
                                        
                                        <div class="owl-carousel">
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent">
                                        <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-4_tfmpvk.jpg"></a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"></a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-text" href="#1">
                                              <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg">
                                            </a>
                                            <div id="1" class="mfp-hide white-popup-block popup-text">
                                              <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                              <span>- Opal Ingram</span>
                                            </div>
                                          </div>
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg">
                                        </a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-text" href="#2">
                                              <img src="https://res.cloudinary.com/milairagny/image/upload/v1487937862/pexels-photo-91227_lpsizl.jpg">
                                            </a>
                                            <div id="2" class="mfp-hide white-popup-block popup-text">
                                              <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                              <span>- Rick Baleno</span>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                                <div class="col-sm-12 col-md-12 section-padding" style="margin-top: -50px;">
                                        <div class="page-heading white-heading">
                                                <h2>Thematic Set</h2>
                                        </div>
                                        
                                        <div class="owl-carousel">
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent">
                                        <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-4_tfmpvk.jpg"></a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938017/pexels-photo-3_ppz2bb.jpg"></a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-text" href="#1">
                                              <img src="https://res.cloudinary.com/milairagny/image/upload/v1487938016/pexels-photo-2_hstxhf.jpg">
                                            </a>
                                            <div id="1" class="mfp-hide white-popup-block popup-text">
                                              <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                              <span>- Opal Ingram</span>
                                            </div>
                                          </div>
                                          <div class="item">
                                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5SJml0MBhW4?autoplay=1&rel=0&controls=0&showinfo=0&wmode=transparent"><img src="https://res.cloudinary.com/milairagny/image/upload/v1487938123/pexels-photo-5_x69tiz.jpg">
                                        </a>
                                          </div>
                                          <div class="item">
                                            <a class="popup-text" href="#2">
                                              <img src="https://res.cloudinary.com/milairagny/image/upload/v1487937862/pexels-photo-91227_lpsizl.jpg">
                                            </a>
                                            <div id="2" class="mfp-hide white-popup-block popup-text">
                                              <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                              <span>- Rick Baleno</span>
                                            </div>
                                          </div>
                                        </div>
                                </div>
                            </div>

                        </div>
                </div><!-- end row -->
            <!-- </div> -->
        </section><!-- end luxury-rooms -->

@include('layouts.footer')
@endsection
