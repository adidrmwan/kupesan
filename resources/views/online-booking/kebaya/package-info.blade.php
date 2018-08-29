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
                                        <td class="pull-left">Biaya Sewa / hari</td>
                                        <td class="pull-right">Rp {{number_format($data->price, 0,',','.')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-left">Deposit</td>
                                        <td class="pull-right">Rp {{number_format(100000, 0,',','.')}}</td>
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