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
                                                                <td class="pull-left">Harga Paket (Per Jam)</td>
                                                                <td class="pull-right">Rp {{$data->pkg_price_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Overtime (Per Jam)</td>
                                                                <td class="pull-right">Rp {{$data->pkg_overtime_them}}</td>
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
                        <form role="form" action="{{ route('form.pesan2') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                            {{ csrf_field() }}
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Pesanan-Ku</h4></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12  user-detail">
                                                <div class="row">
                                                      <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Pilih Tanggal Pesan</label>
                                                                    <div id="datepicker"name="booking_date"></div>            
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Tanggal Terpilih</label>
                                                                    <input type="text" class="form-control" id="datepicker2" name="booking_date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                </div>          
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            <div class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                                <input type="text" name="pid" value="{{$pid}}" hidden="">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <button type="submit" class="btn btn-orange" style="float: right;">Lanjut</button>
                                </div>
                            </div> 
                        </div><!-- end columns -->
                        </form> 
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection


