@extends('layouts.app')
@section('title', 'Pesan')
@section('content')
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="booking" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

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
                                                    <table class="table ">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pull-left">Nama Paket</td>
                                                                <td class="pull-right"><b>{{$data->pkg_name_them}}</b></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Paket</td>
                                                                <td class="pull-right">Rp {{$data->pkg_price_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Overtime</td>
                                                                <td class="pull-right">Rp {{$data->pkg_overtime_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Photografer</td>
                                                                <td class="pull-right">Excluded</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Print Size</td>
                                                                <td class="pull-right">4R</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Edited Photo</td>
                                                                <td class="pull-right">10 Photo</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="pull-left">Amenities</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"></td>
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
                        
                        </div><!-- end columns -->
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12  user-detail">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <h4>Untuk melanjutkan pesanan, Anda harus melakukan <b>LOG-IN</b> terlebih dahulu.<br>Jika belum memiliki akun, Anda dapat mendaftar <a href="{{route('register')}}" style="color: #EA410C;"><b>disini.</b></a></h4>
                                                  </div>
                                                </div>
                                                
                                                         
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <div class="lg-booking-form">
                                <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div>
                                <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                                <input type="text" name="package_id" value="{{$pid}}" hidden="">
                                <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <a href="{{route('check.auth', ['package_id' => $pid])}}">
                                        <button type="submit" class="btn btn-orange" style="float: right;"><span style="color: white; text-decoration: none;">Lanjutkan</span>
                                        </button>
                                    </a>
                                </div>
                            </div> 
                        </div>=
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection



