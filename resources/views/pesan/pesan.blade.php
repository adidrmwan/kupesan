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
                                                                <td class="pull-left">Nama Studio</td>
                                                                <td class="pull-right">{{$data->partner_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Nama Paket</td>
                                                                <td class="pull-right"><b>{{$data->pkg_name_them}}</b></td>
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
                        <form role="form" action="{{ route('form.pesan') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                            {{ csrf_field() }}
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12  user-detail">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Waktu yang tersedia pada <b style="color: #EA410C;">{{ date('d F Y', strtotime($booking_date)) }}</b></label><b>
                                                                <table class="table table-responsive table-condensed" style="text-align: center;">
                                                                    <tr>
                                                                        @if('1' >= $open && '1' < $close && empty($bookingcheck->num_hour_1))
                                                                        <td class="available">01:00 - 02:00</td>
                                                                        @elseif($bookingcheck->num_hour_1 == '1')
                                                                        <td class="not-available">01:00 - 02:00</td>
                                                                        @else                                                                        @endif
                                                                    </tr>
                                                                    <tr>                                                                        
                                                                        @if('2' >= $open && '2' < $close && empty($bookingcheck->num_hour_2))
                                                                        <td class="available">02:00 - 03:00</td>
                                                                        @elseif($bookingcheck->num_hour_2 == '1')
                                                                        <td class="not-available">02:00 - 03:00</td>
                                                                        @else                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('3' >= $open && '3' < $close && empty($bookingcheck->num_hour_3))
                                                                        <td class="available">03:00 - 04:00</td>
                                                                        @elseif($bookingcheck->num_hour_3 == '1')
                                                                        <td class="not-available">03:00 - 04:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('4' >= $open && '4' < $close && empty($bookingcheck->num_hour_4))
                                                                        <td class="available">04:00 - 05:00</td>
                                                                        @elseif($bookingcheck->num_hour_4 == '1')
                                                                        <td class="not-available">04:00 - 05:00</td>
                                                                        @else                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('5' >= $open && '5' < $close && empty($bookingcheck->num_hour_5))
                                                                        <td class="available">05:00 - 06:00</td>
                                                                        @elseif($bookingcheck->num_hour_5 == '1')
                                                                        <td class="not-available">05:00 - 06:00</td>
                                                                        @else                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('6' >= $open && '6' < $close && empty($bookingcheck->num_hour_6))
                                                                        <td class="available">06:00 - 07:00</td>
                                                                        @elseif($bookingcheck->num_hour_6 == '1')
                                                                        <td class="not-available">06:00 - 07:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('7' >= $open && '7' < $close && empty($bookingcheck->num_hour_7))
                                                                        <td class="available">07:00 - 08:00</td>
                                                                        @elseif($bookingcheck->num_hour_7== '1')
                                                                        <td class="not-available">07:00 - 08:00</td>
                                                                        @else
                                                                        @endif 
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('8' >= $open && '8' < $close && empty($bookingcheck->num_hour_8))
                                                                        <td class="available">08:00 -09:00</td>
                                                                        @elseif($bookingcheck->num_hour_8== '1')
                                                                        <td class="not-available">08:00 -09:00</td>
                                                                        @else                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    </tr>
                                                                    <tr>
                                                                        @if('9' >= $open && '9' < $close && empty($bookingcheck->num_hour_9))
                                                                        <td class="available">09:00 - 10.00</td>
                                                                        @elseif($bookingcheck->num_hour_9 == '1')
                                                                        <td class="not-available">09:00 - 10.00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('10' >= $open && '10' < $close && empty($bookingcheck->num_hour_10))
                                                                        <td class="available">10:00 - 11:00</td>
                                                                        @elseif($bookingcheck->num_hour_10 == '1')
                                                                        <td class="not-available">10:00 - 11:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('11' >= $open && '11' < $close && empty($bookingcheck->num_hour_11))
                                                                        <td class="available">11:00 - 12:00</td>
                                                                        @elseif($bookingcheck->num_hour_11 == '1')
                                                                        <td class="not-available">11:00 - 12:00</td>
                                                                        @else                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('12' >= $open && '12' < $close && empty($bookingcheck->num_hour_12))
                                                                        <td class="available">12:00 - 13:00</td>
                                                                        @elseif($bookingcheck->num_hour_12 == '1')
                                                                        <td class="not-available">12:00 - 13:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('13' >= $open && '13' < $close && empty($bookingcheck->num_hour_13))
                                                                        <td class="available">13:00 - 14:00</td>
                                                                        @elseif($bookingcheck->num_hour_13 == '1')
                                                                        <td class="not-available">13:00 - 14:00</td>
                                                                        @else                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('14' >= $open && '14' < $close && empty($bookingcheck->num_hour_14))
                                                                        <td class="available">14:00 - 15:00</td>
                                                                        @elseif($bookingcheck->num_hour_14 == '1')
                                                                        <td class="not-available">14:00 - 15:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>                                                                       @if('15' >= $open && '15' < $close && empty($bookingcheck->num_hour_15))
                                                                        <td class="available">15:00 - 16:00</td>
                                                                        @elseif($bookingcheck->num_hour_15== '1')
                                                                        <td class="not-available">15:00 - 16:00</td>
                                                                        @else                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('16' >= $open && '16' < $close && empty($bookingcheck->num_hour_16))
                                                                        <td class="available">16:00 - 17:00</td>
                                                                        @elseif($bookingcheck->num_hour_16== '1')
                                                                        <td class="not-available">16:00 - 17:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        @if('17' >= $open && '17' < $close && empty($bookingcheck->num_hour_17))
                                                                        <td class="available">17:00 - 18:00</td>
                                                                        @elseif($bookingcheck->num_hour_17 == '1')
                                                                        <td class="not-available">17:00 - 18:00</td>
                                                                        @else
                                                                        @endif
                                                                    </tr>
                                                                    <tr>
                                                                        @if('18' >= $open && '18' < $close && empty($bookingcheck->num_hour_18))
                                                                        <td class="available">18:00 - 19:00</td>
                                                                        @elseif($bookingcheck->num_hour_18 == '1')
                                                                        <td class="not-available">18:00 - 19:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('19' >= $open && '19' < $close && empty($bookingcheck->num_hour_19))
                                                                        <td class="available">19:00 - 20:00</td>
                                                                        @elseif($bookingcheck->num_hour_19 == '1')
                                                                        <td class="not-available">19:00 - 20:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('20' >= $open && '20' < $close && empty($bookingcheck->num_hour_20))
                                                                        <td class="available">20:00 - 21:00</td>
                                                                        @elseif($bookingcheck->num_hour_20 == '1')
                                                                        <td class="not-available">20:00 - 21:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('21' >= $open && '21' < $close && empty($bookingcheck->num_hour_21))
                                                                        <td class="available">21:00 - 22:00</td>
                                                                        @elseif($bookingcheck->num_hour_21 == '1')
                                                                        <td class="not-available">21:00 - 22:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('22' >= $open && '22' < $close && empty($bookingcheck->num_hour_22))
                                                                        <td class="available">22:00 - 23:00</td>
                                                                        @elseif($bookingcheck->num_hour_22== '1')
                                                                        <td class="not-available">22:00 - 23:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('23' >= $open && '23' < $close && empty($bookingcheck->num_hour_23))
                                                                        <td class="available">23:00 - 24:00</td>
                                                                        @elseif($bookingcheck->num_hour_23== '1')
                                                                        <td class="not-available">23:00 - 24:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        @if('24' >= $open && '24' < $close && empty($bookingcheck->num_hour_24))
                                                                        <td class="available">24:00 - 01:00</td>
                                                                        @elseif($bookingcheck->num_hour_24== '1')
                                                                        <td class="not-available">24:00 - 01:00</td>
                                                                        @else
                                                                        @endif
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3" style="text-align: left;">
                                                                            <div class="col-md-6 col-sm-12" style="padding: 10px;">
                                                                                <span class="available" style="color: #acff7a;">---</span>&nbsp;Available
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-12" style="padding: 10px;">
                                                                                <span class="not-available" style="color: #ea410c;">---</span>&nbsp;Not available
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6" >
                                                    <div class="row">
                                                        <div class="col-md-12" >
                                                            <div class="form-group text-center">

                                                                <label><span style="text-align: center;">Tanggal Terpilih</span></label>
                                                                <input type="text" class="form-control text-center" id="datepicker2" value="{{ date('d F Y', strtotime($booking_date)) }}" disabled="" name="booking_date">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <label>Durasi Paket</label>
                                                                <select class="form-control text-center" name="durasi_paket" id="provinces" required>
                                                                  <option value="" disable="true" class="text-center" selected="true">Pilih Durasi Paket</option>
                                                                    @foreach ($package as $key => $value)
                                                                      <option class="text-center" value="{{$value->pkg_duration_them}},{{$value->id}},{{$booking_date}}">{{ $value->pkg_duration_them }} Jam</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group text-center">
                                                                <label>Jam Mulai</label>
                                                                <select class="form-control text-center" name="jam_mulai" id="regencies" required>
                                                                  <option value="" disable="true" class="text-center" selected="true">Pilih Jam Mulai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group text-center">
                                                                <label>Jam Selesai</label>
                                                                <select class="form-control text-center" name="jam_selesai" id="districts" required>
                                                                  <option value="" disable="true" selected="true">Pilih Jam Selesai</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <label>Jam Terpilih</label>
                                                                <select class="form-control text-center" id="terpilih" disabled="">
                                                                  <option value="" disable="true" selected="true">Jam Terpilih</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <label>Jam Overtime<small> (opsional)</small></label>
                                                                <select class="form-control text-center" name="jam_tambahan" id="villages">
                                                                  <option value="0" disable="true" selected="true">Pilih Jam Tambahan</option>
                                                                  <option value="0">Tidak ada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Jumlah Tamu<small> (per orang)</small></label>
                                                                <input type="number" class="form-control" name="booking_capacities" placeholder="Jumlah Tamu" required="">
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                  </div>
                                                </div>
                                                
                                                         
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <div class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div>
                                <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                                <input type="text" name="pid" value="{{$pid}}" hidden="">
                                <input type="text" name="booking_date" value="{{$booking_date}}" hidden="">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <button type="submit" class="btn btn-orange" style="float: right;">Cek Ketersediaan</button>
                                </div>
                            </div> 
                        </div><!-- end columns -->
                        </form> 
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection



