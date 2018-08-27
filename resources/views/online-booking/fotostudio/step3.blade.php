@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.fotostudio.cover-partner')   
        
<!--===== STEP 3 : PILIH JADWAL ====-->
<section class="innerpage-wrapper">
	<div id="booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                @include('online-booking.fotostudio.package-info')
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
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">01:00 - 02:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '1' < $now_time)
                                                                <td class="not-available">01:00 - 02:00</td>
                                                                @else
                                                                <td class="available">01:00 - 02:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_1 == '1')
                                                                <td class="not-available">01:00 - 02:00</td>
                                                            @else                                                                        @endif
                                                        </tr>
                                                        <tr>                                                                        
                                                            @if('2' >= $open && '2' < $close && empty($bookingcheck->num_hour_2))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">02:00 - 03:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '2' < $now_time)
                                                                <td class="not-available">02:00 - 03:00</td>
                                                                @else
                                                                <td class="available">02:00 - 03:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_2 == '1')
                                                                <td class="not-available">02:00 - 03:00</td>
                                                            @else                                                                        @endif
                                                        </tr>
                                                        <tr>
                                                            @if('3' >= $open && '3' < $close && empty($bookingcheck->num_hour_3))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">03:00 - 04:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '3' < $now_time)
                                                                <td class="not-available">03:00 - 04:00</td>
                                                                @else
                                                                <td class="available">03:00 - 04:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_3 == '1')
                                                                <td class="not-available">03:00 - 04:00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('4' >= $open && '4' < $close && empty($bookingcheck->num_hour_4))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">04:00 - 05:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '4' < $now_time)
                                                                <td class="not-available">04:00 - 05:00</td>
                                                                @else
                                                                <td class="available">04:00 - 05:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_4 == '1')
                                                                <td class="not-available">04:00 - 05:00</td>
                                                            @else                                                                        @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('5' >= $open && '5' < $close && empty($bookingcheck->num_hour_5))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">05:00 - 06:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '5' < $now_time)
                                                                <td class="not-available">05:00 - 06:00</td>
                                                                @else
                                                                <td class="available">05:00 - 06:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_5 == '1')
                                                                <td class="not-available">05:00 - 06:00</td>
                                                            @else                                                                        @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('6' >= $open && '6' < $close && empty($bookingcheck->num_hour_6))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">06:00 - 07:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '6' < $now_time)
                                                                <td class="not-available">06:00 - 07:00</td>
                                                                @else
                                                                <td class="available">06:00 - 07:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_6 == '1')
                                                                <td class="not-available">06:00 - 07:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('7' >= $open && '7' < $close && empty($bookingcheck->num_hour_7))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">07:00 - 08:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '7' < $now_time)
                                                                <td class="not-available">07:00 - 08:00</td>
                                                                @else
                                                                <td class="available">07:00 - 08:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_7== '1')
                                                                <td class="not-available">07:00 - 08:00</td>
                                                            @else
                                                            @endif 
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('8' >= $open && '8' < $close && empty($bookingcheck->num_hour_8))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">08:00 -09:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '8' < $now_time)
                                                                <td class="not-available">08:00 -09:00</td>
                                                                @else
                                                                <td class="available">08:00 -09:00</td>
                                                                @endif
                                                            elseif($bookingcheck->num_hour_8== '1')
                                                                <td class="not-available">08:00 -09:00</td>
                                                            @else                                                                        @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('9' >= $open && '9' < $close && empty($bookingcheck->num_hour_9))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">09:00 - 10.00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '9' < $now_time)
                                                                <td class="not-available">09:00 - 10.00</td>
                                                                @else
                                                                <td class="available">09:00 - 10.00</td>
                                                                @endif                                                            
                                                            @elseif($bookingcheck->num_hour_9 == '1')
                                                                <td class="not-available">09:00 - 10.00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('10' >= $open && '10' < $close && empty($bookingcheck->num_hour_10))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">10:00 - 11:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '10' < $now_time)
                                                                <td class="not-available">10:00 - 11:00</td>
                                                                @else
                                                                <td class="available">10:00 - 11:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_10 == '1')
                                                                <td class="not-available">10:00 - 11:00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('11' >= $open && '11' < $close && empty($bookingcheck->num_hour_11))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">11:00 - 12:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '11' < $now_time)
                                                                <td class="not-available">11:00 - 12:00</td>
                                                                @else
                                                                <td class="available">11:00 - 12:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_11 == '1')
                                                                <td class="not-available">11:00 - 12:00</td>
                                                            @else                                                                        @endif
                                                        </tr>
                                                        <tr>
                                                            @if('12' >= $open && '12' < $close && empty($bookingcheck->num_hour_12))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">12:00 - 13:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '12' < $now_time)
                                                                <td class="not-available">12:00 - 13:00</td>    
                                                                @else
                                                                <td class="available">12:00 - 13:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_12 == '1')
                                                                <td class="not-available">12:00 - 13:00</td>    
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('13' >= $open && '13' < $close && empty($bookingcheck->num_hour_13))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">13:00 - 14:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '13' < $now_time)
                                                                <td class="not-available">13:00 - 14:00</td>
                                                                @else
                                                                <td class="available">13:00 - 14:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_13 == '1')
                                                                <td class="not-available">13:00 - 14:00</td>
                                                            @else                                                                        @endif
                                                        </tr>
                                                        <tr>
                                                            @if('14' >= $open && '14' < $close && empty($bookingcheck->num_hour_14))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">14:00 - 15:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '14' < $now_time)
                                                                <td class="not-available">14:00 - 15:00</td>
                                                                @else
                                                                <td class="available">14:00 - 15:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_14 == '1')
                                                                <td class="not-available">14:00 - 15:00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('15' >= $open && '15' < $close && empty($bookingcheck->num_hour_15))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">15:00 - 16:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '15' < $now_time)
                                                                <td class="not-available">15:00 - 16:00</td>
                                                                @else
                                                                <td class="available">15:00 - 16:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_15== '1')
                                                                <td class="not-available">15:00 - 16:00</td>
                                                            @else                                                                        @endif
                                                        </tr>
                                                        <tr>
                                                            @if('16' >= $open && '16' < $close && empty($bookingcheck->num_hour_16))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">16:00 - 17:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '16' < $now_time)
                                                                <td class="not-available">16:00 - 17:00</td>
                                                                @else
                                                                <td class="available">16:00 - 17:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_16== '1')
                                                                <td class="not-available">16:00 - 17:00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            
                                                            @if('17' >= $open && '17' < $close && empty($bookingcheck->num_hour_17))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">17:00 - 18:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '17' < $now_time)
                                                                <td class="not-available">17:00 - 18:00</td>
                                                                @else
                                                                <td class="available">17:00 - 18:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_17 == '1')
                                                                <td class="not-available">17:00 - 18:00</td>
                                                            @else
                                                            @endif
                                                        </tr>
                                                        <tr>
                                                            @if('18' >= $open && '18' < $close && empty($bookingcheck->num_hour_18))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">18:00 - 19:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '18' < $now_time)
                                                                <td class="not-available">18:00 - 19:00</td>
                                                                @else
                                                                <td class="available">18:00 - 19:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_18 == '1')
                                                                <td class="not-available">18:00 - 19:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('19' >= $open && '19' < $close && empty($bookingcheck->num_hour_19))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">19:00 - 20:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '19' < $now_time)
                                                                <td class="not-available">19:00 - 20:00</td>
                                                                @else
                                                                <td class="available">19:00 - 20:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_19 == '1')
                                                                <td class="not-available">19:00 - 20:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('20' >= $open && '20' < $close && empty($bookingcheck->num_hour_20))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">20:00 - 21:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '20' < $now_time)
                                                                <td class="not-available">20:00 - 21:00</td>
                                                                @else
                                                                <td class="available">20:00 - 21:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_20 == '1')
                                                                <td class="not-available">20:00 - 21:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('21' >= $open && '21' < $close && empty($bookingcheck->num_hour_21))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">21:00 - 22:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '21' < $now_time)
                                                                <td class="not-available">21:00 - 22:00</td>
                                                                @else
                                                                <td class="available">21:00 - 22:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_21 == '1')
                                                                <td class="not-available">21:00 - 22:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('22' >= $open && '22' < $close && empty($bookingcheck->num_hour_22))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">22:00 - 23:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '22' < $now_time)
                                                                <td class="not-available">22:00 - 23:00</td>
                                                                @else
                                                                <td class="available">22:00 - 23:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_22== '1')
                                                                <td class="not-available">22:00 - 23:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('23' >= $open && '23' < $close && empty($bookingcheck->num_hour_23))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">23:00 - 24:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '23' < $now_time)
                                                                <td class="not-available">23:00 - 24:00</td>
                                                                @else
                                                                <td class="available">23:00 - 24:00</td>
                                                                @endif
                                                            @elseif($bookingcheck->num_hour_23== '1')
                                                                <td class="not-available">23:00 - 24:00</td>
                                                            @else
                                                            @endif
                                                            
                                                        </tr>
                                                        <tr>
                                                            @if('24' >= $open && '24' < $close && empty($bookingcheck->num_hour_24))
                                                                @if($date_flag == 'same_date' && $time_flag == 'less')
                                                                <td class="available">24:00 - 01:00</td>
                                                                @elseif($date_flag == 'same_date' && $time_flag == 'more' && '24' < $now_time)
                                                                <td class="not-available">24:00 - 01:00</td>
                                                                @else
                                                                <td class="available">24:00 - 01:00</td>
                                                                @endif
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
                                                    <select class="form-control text-center" name="durasi_paket" id="provinces2" required>
                                                      <option value="" disable="true" class="text-center" selected="true">Pilih Durasi Paket</option>
                                                        @foreach ($durasi as $key => $value)
                                                          <option value="{{$value->durasi}},{{$package_id}},{{$booking_date}}">{{ $value->durasi }} Jam</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label>Jam Mulai</label>
                                                    <select class="form-control text-center" name="jam_mulai" id="regencies2" required>
                                                      <option value="" disable="true" class="text-center" selected="true">Pilih Jam Mulai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <label>Jam Selesai</label>
                                                    <select class="form-control text-center" name="jam_selesai" id="districts2" required>
                                                      <option value="" disable="true" selected="true">Pilih Jam Selesai</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group text-center">
                                                    <label>Jam Overtime<small> (opsional)</small></label>
                                                    <select class="form-control text-center" name="jam_tambahan" id="villages2">
                                                      <option value="0" disable="true" selected="true">Tidak ada</option>
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
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="lg-booking-form">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div>
                        <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                        <input type="text" name="pid" value="{{$pid}}" hidden="">
                        <input type="text" name="booking_date" value="{{$booking_date}}" hidden="">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjutkan</button>
                        </div>
                    </div> 
                </div>
                </form> 
            
        </div>         
    </div>
</section>

@include('layouts.footer')
@endsection



