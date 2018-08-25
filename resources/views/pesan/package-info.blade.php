<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar left-side-bar">
    <div class="row">
    
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="side-bar-block detail-block style2 text-center">
                <div class="col-xs-12 col-sm-6 col-md-12">
                    <div class="side-bar-block detail-block style2 text-center">
                        @foreach($package as $data)
                        <div class="detail-img text-center">
                            @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                            <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                            @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                            <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                            @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                            <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                            @endif
                        </div>
                                
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="pull-left">Nama Paket</td>
                                        <td class="pull-right"><b>{{$data->pkg_name_them}}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Harga Paket</td>
                                        <td class="pull-right">Rp {{number_format($data->pkg_price_them)}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Overtime</td>
                                        <td class="pull-right">Rp {{number_format($data->pkg_overtime_them)}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Photographer</td>
                                        <td class="pull-right">{{($data->pkg_fotografer)}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Print Size</td>
                                        <td class="pull-right">{{($data->pkg_print_size)}} R</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Edited Photo</td>
                                        <td class="pull-right">{{($data->pkg_edited_photo)}} Lembar</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Amenities</td>
                                    </tr>
                                    <tr>
                                        <div class="row">
                                      @foreach($fasilitas as $listfasil)
                                      @if(!empty($listfasil->wifi))  
                                      <div class="col-xs-6 col-md-4">
                                        <div style="text-align: center;" >
                                          <span ><i class="zmdi zmdi-wifi-alt zmdi-hc-5x "></i></span>
                                          <h5 style="text-align: center;">Wifi</h5>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->toilet))
                                      <div class="col-xs-6 col-md-4">
                                        <div style="text-align: center;" >
                                          <span><i class="zmdi zmdi-male-female zmdi-hc-5x "></i></span>
                                          <h5 style="text-align: center;">Toilet</h5>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->parkir))
                                      <div class="col-xs-6 col-md-4">
                                        <div style="text-align: center;">
                                          <span><i class="zmdi zmdi-local-parking zmdi-hc-5x "></i></span> 
                                          <h5 style="text-align: center;">Parkir</h5>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->rganti))
                                      <div class="col-xs-6 col-md-4">
                                        <div style="text-align: center;">
                                          <span ><i class="fa fa-exchange fa-5x fa-fw"></i></span>
                                          <h5 style="text-align: center;">Ruang Ganti</h5>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @if(!empty($listfasil->ac))
                                      <div class="col-xs-6 col-md-4">
                                        <div style="text-align: center;">
                                          <span><i class="fa fa-snowflake-o fa-5x fa-fw"></i></span>
                                           <h5 style="text-align: center;">AC</h5>
                                        </div><!-- end b-feature-block -->
                                      </div><!-- end columns -->
                                      @else
                                      @endif
                                      @endforeach
                                    </div>
                                    </tr>
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