<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar left-side-bar">
    <div class="row">
    
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="side-bar-block detail-block style2 text-center">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="side-bar-block detail-block style2 text-center">
                      
                      @foreach($package as $data)
                      <div class="detail-slider" style="padding-bottom: 20px;">
                          <div class="feature-slider">
                              <div>
                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPEG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPEG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".PNG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.PNG')  }}" alt= "Package Image" />
                                @endif
                              </div>
                              <div>
                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpeg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpeg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".png")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.png')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPEG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPEG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".PNG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.PNG')  }}" alt= "Package Image" />
                                @endif
                              </div>

                              <div>
                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpeg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpeg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".png")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.png')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPEG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPEG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".PNG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.PNG')  }}" alt= "Package Image" />
                                @endif
                              </div>
                              <div>
                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpeg")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpeg')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".png")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.png')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPEG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPEG')  }}" alt= "Package Image" />
                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".PNG")))
                                <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.PNG')  }}" alt= "Package Image" />
                                @endif
                              </div>
                          </div>

                          <div class="feature-slider-nav">
                            <div>
                              @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPEG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPEG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".PNG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.PNG')  }}" alt= "Package Image" />
                              @endif
                            </div>
                            <div>
                              @if(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpeg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpeg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".png")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.png')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPEG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPEG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".PNG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.PNG')  }}" alt= "Package Image" />
                              @endif
                            </div> 
                            <div>
                              @if(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpeg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpeg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".png")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.png')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPEG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPEG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".PNG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.PNG')  }}" alt= "Package Image" />
                              @endif
                            </div> 
                            <div>
                              @if(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpeg")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpeg')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".png")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.png')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPEG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPEG')  }}" alt= "Package Image" />
                              @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".PNG")))
                              <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.PNG')  }}" alt= "Package Image" />
                              @endif
                            </div>  
                          </div>      
                      </div>

                        <div class="table">
                            <table class="table table-responsive">
                                <tbody>
                                    <tr>
                                      <td style="text-align: left;">Nama Paket</td>
                                      <td style="text-align: right;"><b>{{$data->pkg_name_them}}</b></td>
                                    </tr>
                                    <tr>
                                      <td style="text-align: left;">Pricelist</td>
                                      @if(Auth::check())
                                      <td style="text-align: right;">
                                        @foreach($durasiPaket as $paket)
                                        <p>{{$paket->durasi_jam}} Jam / Rp {{number_format($paket->durasi_harga,0,',','.')}}</p>
                                        @endforeach
                                      </td>
                                      @else
                                      <td style="text-align: right;">
                                        <p>Pricelist dapat dilihat jika sudah melakukan login</p>
                                      </td>
                                      @endif
                                    </tr>
                                    @if($data->pkg_overtime_them != '0')
                                    <tr>
                                      <td style="text-align: left;">Overtime</td>
                                      @if(Auth::check())
                                      <td style="text-align: right;">Rp {{number_format($data->pkg_overtime_them,0,',','.')}} / Jam</td>
                                      @else
                                      <td style="text-align: right;">
                                        <p>Harga Overtime dapat dilihat jika sudah melakukan login</p>
                                      </td>
                                      @endif
                                    </tr>
                                    @else
                                    <tr>
                                      <td style="text-align: left;">Overtime</td>
                                      <td style="text-align: right;">Tidak tersedia</td>
                                    </tr>
                                    @endif
                                    <tr>
                                      <td style="text-align: left;">Photographer</td>
                                      <td style="text-align: right;">{{($data->pkg_fotografer)}}</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align: left;">Print Size</td>
                                      <td style="text-align: right;">{{($data->pkg_print_size)}} R</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align: left;">Edited Photo</td>
                                      <td style="text-align: right;">{{($data->pkg_edited_photo)}} Lembar</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align: left;">Frame</td>
                                      <td style="text-align: right;">{{($data->pkg_frame)}}</td>
                                    </tr>
                                    <tr>
                                      <td style="text-align: left;">Kapasitas</td>
                                      <td style="text-align: right;">{{($data->pkg_capacity)}} Orang</td>
                                    </tr>
                                    <tr>
                                      <td colspan="2" style="text-align: left;">Amenities</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                              <div class="col-lg-12">
                                @if($fasilitas->wifi == '1')  
                                <div class="col-lg-4">
                                  <span><i class="zmdi zmdi-wifi-alt" ></i></span>
                                  <h6>Wifi</h6>
                                </div>
                                @endif
                                @if($fasilitas->toilet == '1')  
                                <div class="col-lg-4">
                                  <span><i class="zmdi zmdi-male-female"></i></span>
                                  <h6>Toilet</h6>
                                </div>
                                @endif
                                @if($fasilitas->parkir == '1')  
                                <div class="col-lg-4">
                                  <span><i class="zmdi zmdi-local-parking" ></i></span>
                                  <h6>Parkir</h6>
                                </div>
                                @endif
                                @if($fasilitas->rganti == '1')  
                                <div class="col-lg-4">
                                  <span><i class="fa fa-exchange"></i></span>
                                  <h6>Ruang Ganti</h6>
                                </div>
                                @endif
                                @if($fasilitas->ac == '1')  
                                <div class="col-lg-4">
                                  <span><i class="fa fa-snowflake-o fa-1x fa-fw"></i></span>
                                  <h6>AC</h6>
                                </div>
                                @endif
                              </div>
                            </div>
                        </div><!-- end table-responsive -->
                        @endforeach
                    </div><!-- end side-bar-block -->
                </div><!-- end columns -->                                
            </div><!-- end row -->
        </div><!-- end columns -->                                
    </div><!-- end row -->

</div>