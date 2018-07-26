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
                                                    <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" /> 
                                                </div><!-- end detail-img -->
                                                        
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pull-left">Nama Studio</td>
                                                                <td class="pull-right">{{$partner->pr_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Nama Paket</td>
                                                                <td class="pull-right">{{$data->pkg_name_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Paket / Jam</td>
                                                                <td class="pull-right">Rp {{$data->pkg_price_them}}</td>
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
                                                
                                                <div class="personal-info">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Mulai</label>    
                                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="booking_start_time" required="">
                                                                    <option selected value="">Pilih Jam Mulai</option>
                                                                        @foreach($jam_mulai as $data)
                                                                        @if($bookingcheck->num_hour_1 == '1' && $data->num_hour == '1')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_1) && $data->num_hour == '1')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_2 == '1' && $data->num_hour == '2')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_2) && $data->num_hour == '2')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_3 == '1' && $data->num_hour == '3')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_3) && $data->num_hour == '3')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_4 == '1' && $data->num_hour == '4')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_4) && $data->num_hour == '4')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_5 == '1' && $data->num_hour == '5')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_5) && $data->num_hour == '5')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_6 == '1' && $data->num_hour == '6')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_6) && $data->num_hour == '6')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_7 == '1' && $data->num_hour == '7')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_7) && $data->num_hour == '7')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_8 == '1' && $data->num_hour == '8')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_8) && $data->num_hour == '8')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_9 == '1' && $data->num_hour == '9')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_9) && $data->num_hour == '9')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_10 == '1' && $data->num_hour == '10')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_10) && $data->num_hour == '10')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_11 == '1' && $data->num_hour == '11')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_11) && $data->num_hour == '11')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_12 == '1' && $data->num_hour == '12')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_12) && $data->num_hour == '12')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_13 == '1' && $data->num_hour == '13')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_13) && $data->num_hour == '13')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_14 == '1' && $data->num_hour == '14')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_14) && $data->num_hour == '14')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_15 == '1' && $data->num_hour == '15')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_15) && $data->num_hour == '15')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_16 == '1' && $data->num_hour == '16')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_16) && $data->num_hour == '16')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_17 == '1' && $data->num_hour == '17')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_17) && $data->num_hour == '17')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_18 == '1' && $data->num_hour == '18')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_18) && $data->num_hour == '18')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_19 == '1' && $data->num_hour == '19')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_19) && $data->num_hour == '19')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_20 == '1' && $data->num_hour == '20')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_20) && $data->num_hour == '20')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_21 == '1' && $data->num_hour == '21')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_21) && $data->num_hour == '21')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_22 == '1' && $data->num_hour == '22')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_22) && $data->num_hour == '22')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_23 == '1' && $data->num_hour == '23')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_23) && $data->num_hour == '23')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_24 == '1' && $data->num_hour == '24')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_24) && $data->num_hour == '24')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @endforeach 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Selesai</label>    
                                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="booking_end_time" required="">
                                                                    <option selected value="">Pilih Jam Selesai</option>
                                                                    @foreach($jam_selesai as $data)
                                                                        @if($bookingcheck->num_hour_1 == '1' && $data->num_hour == '1')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_1) && $data->num_hour == '1')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_2 == '1' && $data->num_hour == '2')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_2) && $data->num_hour == '2')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_3 == '1' && $data->num_hour == '3')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_3) && $data->num_hour == '3')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_4 == '1' && $data->num_hour == '4')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_4) && $data->num_hour == '4')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_5 == '1' && $data->num_hour == '5')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_5) && $data->num_hour == '5')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_6 == '1' && $data->num_hour == '6')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_6) && $data->num_hour == '6')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_7 == '1' && $data->num_hour == '7')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_7) && $data->num_hour == '7')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_8 == '1' && $data->num_hour == '8')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_8) && $data->num_hour == '8')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_9 == '1' && $data->num_hour == '9')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_9) && $data->num_hour == '9')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_10 == '1' && $data->num_hour == '10')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_10) && $data->num_hour == '10')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_11 == '1' && $data->num_hour == '11')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_11) && $data->num_hour == '11')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_12 == '1' && $data->num_hour == '12')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_12) && $data->num_hour == '12')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_13 == '1' && $data->num_hour == '13')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_13) && $data->num_hour == '13')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_14 == '1' && $data->num_hour == '14')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_14) && $data->num_hour == '14')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_15 == '1' && $data->num_hour == '15')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_15) && $data->num_hour == '15')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_16 == '1' && $data->num_hour == '16')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_16) && $data->num_hour == '16')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_17 == '1' && $data->num_hour == '17')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_17) && $data->num_hour == '17')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_18 == '1' && $data->num_hour == '18')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_18) && $data->num_hour == '18')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_19 == '1' && $data->num_hour == '19')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_19) && $data->num_hour == '19')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_20 == '1' && $data->num_hour == '20')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_20) && $data->num_hour == '20')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_21 == '1' && $data->num_hour == '21')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_21) && $data->num_hour == '21')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_22 == '1' && $data->num_hour == '22')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_22) && $data->num_hour == '22')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_23 == '1' && $data->num_hour == '23')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_23) && $data->num_hour == '23')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @if($bookingcheck->num_hour_24 == '1' && $data->num_hour == '24')
                                                                        <option value="{{$data->num_hour}}" disabled>{{$data->num_hour}}:00</option>
                                                                        @elseif(empty($bookingcheck->num_hour_24) && $data->num_hour == '24')
                                                                        <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                        @endif
                                                                        @endforeach 
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Kapasitas Orang</label>
                                                                <input type="text" class="form-control" placeholder="Kapasitas orang" name="booking_capacities" required="">
                                                            </div>
                                                        </div><!-- end columns -->
                                                        <input type="text" name="pid" value="{{$pid}}" hidden="">
                                                        <input type="text" name="prc" value="{{$prc}}" hidden="">
                                                        <input type="text" name="pname" value="{{$pname}}" hidden="">
                                                        <input type="text" name="bdte" value="{{$bdte}}" hidden="">
                                                    </div><!-- end row -->                                                                                                 
                                                </div><!-- end personal-info -->
                                                          
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

