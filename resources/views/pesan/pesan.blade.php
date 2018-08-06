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
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pull-left">Nama Studio</td>
                                                                <td class="pull-right">{{$data->partner_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Nama Paket</td>
                                                                <td class="pull-right">{{$data->pkg_name_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Paket</td>
                                                                <td class="pull-right">Rp {{$data->pkg_price_them}} / Jam</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Waktu Tambahan</td>
                                                                <td class="pull-right">Rp {{$data->pkg_overtime_them}} / Jam</td>
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
                            <div class="lg-booking-form-heading">
                                    
                                    <h3>Pesan</h3>
                                </div><!-- end lg-bform-heading -->
                            <div class="panel panel-default" style="margin-top: 35px;">
                                <div class="panel-heading"><h4>Informasi Pesanan-KU</h4></div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 col-md-12  user-detail">
                                            <form role="form" action="{{ route('form.pesan') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                            {{ csrf_field() }}
                                                <div class="row">
                                                  <div class="col-md-5">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Pilih Tanggal Pesan</label>
                                                                <div id="datepicker"></div>            
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Tanggal Terpilih</label>
                                                                <input type="text" class="form-control" id="datepicker2" disabled>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Durasi Paket</label>
                                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                                    <option selected value="">Pilih Durasi Waktu</option>
                                                                    <option value="1">1 Jam</option>
                                                                    <option value="2">2 Jam</option>
                                                                    <option value="3">3 Jam</option>
                                                                    <option value="4">4 Jam</option>
                                                                    <option value="5">5 Jam</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                            </form>              
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <div class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <button type="submit" class="btn btn-orange" style="float: right;">Pesan</button>
                                </div>
                            </div>
                        </form> 
                        </div><!-- end columns -->
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection

