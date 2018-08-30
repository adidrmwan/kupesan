@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.kebaya.cover-partner')

<!--===== STEP 2 : PILIH TANGGAL BOOKING ====-->

<section class="innerpage-wrapper">
    <div id="booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                @include('online-booking.kebaya.package-info')
                <form role="form" action="{{ route('kebaya.submit.step3') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12  user-detail">
                                        
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5>Tersedia <b>{{$quantity2}}</b> kebaya pada tanggal <b>{{ date('d F Y', strtotime($booking->start_date)) }}</b> sampai dengan <b>{{ date('d F Y', strtotime($booking->end_date)) }}</b>.</h5>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Kuantitas</label>
                                          <select class="form-control" required="" name="quantity">
                                            <option value="" selected="">Pilih Banyaknya Barang</option>
                                            @for ($i = 1; $i <= $quantity2; $i++) 
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                        </div>
                                      </div>
                                    </div>         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <table class="table">
                                    <tr>
                                        <th>Informasi Produk</th>
                                    </tr>
                                    @foreach($package as $data)
                                    <tr>
                                        <td>{{$data->description}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <table class="table table-bordered" style="text-align: center;">
                                    <tr>
                                        <th colspan="3">Panduan ukuran</th>
                                    </tr>
                                    @foreach($pu as $data)
                                    <tr>
                                        <td>{{$data->ukuran}}</td>
                                        <td>{{$data->panjang}} cm</td>
                                        <td>{{$data->lebar}} cm</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    <div class="lg-booking-form">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div><!-- end checkbox -->
                        <input type="text" name="booking_id" value="{{$booking_id}}" hidden="">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjut Pilih Jadwal</button>
                        </div>
                    </div> 
                </div><!-- end columns -->
                </form> 
            </div>
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section>

@include('layouts.footer')
@endsection


