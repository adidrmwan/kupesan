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
                          </div>
                        
                          <div class="feature-slider-nav">
                              <div>
                                    @if(File::exists(public_path("img_pkg/".$data->image2.".jpg")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".jpeg")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpeg')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".png")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.png')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPG")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPEG")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPEG')  }}" alt= "Package Image" />
                                    @elseif(File::exists(public_path("img_pkg/".$data->image2.".PNG")))
                                    <img style="height: 75px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.PNG')  }}" alt= "Package Image" />
                                    @endif
                              </div>       
                          </div>
                        </div>
                        <div class="detail-img text-center">
                            
                        </div>
                                
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="pull-left">Nama Paket</td>
                                        <td class="pull-right"><b>{{$data->name}}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Set Paket</td>
                                        <td class="pull-right">{{$data->set}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Ukuran</td>
                                        <td class="pull-right">{{$data->size}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Biaya Sewa</td>
                                        @if(Auth::check())
                                        <td class="pull-right">Rp {{number_format($data->price, 0,',','.')}}</td>
                                        @else
                                        <td class="pull-right">
                                        <p>Biaya Sewa dapat dilihat jika sudah melakukan login</p>
                                        </td>
                                        @endif
                                        
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Deposit</td>
                                        <td class="pull-right">Rp {{number_format($data->deposit, 0,',','.')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Dry Clean Cost</td>
                                        @if($data->price_dryclean == '0')
                                        <td class="pull-right">Not Include</td>
                                        @else
                                        <td class="pull-right">Rp {{number_format($data->price_dryclean, 0,',','.')}}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Stok</td>
                                        <td class="pull-right">{{($data->quantity)}} pcs</td>
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