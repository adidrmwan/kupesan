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
                                    @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".JPG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".JPEG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".PNG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image2.".jpg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".jpeg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".png")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPEG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".PNG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image3.".jpg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".jpeg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".png")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPEG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".PNG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image4.".jpg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".jpeg")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".png")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPEG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".PNG")))
                                    <img style="height: 250px; width: auto; margin: 0 auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                          </div>
                        
                          <div class="feature-slider-nav">
                            <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".JPG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".JPEG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image.".PNG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image2.".jpg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".jpeg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".png")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPEG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".PNG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image3.".jpg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".jpeg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".png")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPEG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image3.".PNG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image4.".jpg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".jpeg")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".png")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPEG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image4.".PNG")))
                                    <img style="height: 55px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>           
                          </div>
                        </div>
                        <div class="detail-img text-center">
                            
                        </div>
                                
                        <div class="table">
                            <table class="table table-responsive">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left;">Nama Paket</td>
                                        <td style="text-align: right;"><b>{{$data->name}}</b></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Set Paket</td>
                                        <td style="text-align: right;">{{$data->set}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Ukuran</td>
                                        <td style="text-align: right;">{{$data->size}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Biaya Sewa</td>
                                        @if(Auth::check())
                                        <td style="text-align: right;">
                                            @foreach($biayaSewa as $paket)
                                            <p>{{$paket->kebaya_durasi_hari}} Hari / Rp {{number_format($paket->kebaya_biaya_sewa,0,',','.')}}</p>
                                            @endforeach
                                        </td>
                                        @else
                                        <td style="text-align: right;">
                                        <p>Biaya Sewa dapat dilihat jika sudah melakukan login</p>
                                        </td>
                                        @endif
                                        
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Deposit</td>
                                        <td style="text-align: right;">Rp {{number_format($data->deposit, 0,',','.')}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Dry Clean Cost</td>
                                        @if($data->price_dryclean == '0')
                                        <td style="text-align: right;">Not Include</td>
                                        @else
                                        <td style="text-align: right;">Rp {{number_format($data->price_dryclean, 0,',','.')}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">Stock</td>
                                        <td style="text-align: right;">{{($data->quantity)}} pcs</td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div><!-- end table-responsive -->
                        @endforeach
                    </div><!-- end side-bar-block -->
                </div><!-- end columns -->                                
            </div><!-- end row -->
        </div><!-- end columns -->                                
    </div><!-- end row -->

</div>