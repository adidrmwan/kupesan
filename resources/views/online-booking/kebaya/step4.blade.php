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
                <form role="form" action="{{ route('kebaya.submit.step4') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12  user-detail">
                                        
                                    <div class="row">
                                      <div class="col-md-12">
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-12">
                                        @foreach($detail_pesanan as $data)
                                        <div class="row">
                                              <div class="col-md-12">
                                                <h5><b>Detail Pemesanan</b></h5>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <table class="table">
                                                  <tr>
                                                    <td>Tanggal Pesan</td>
                                                    <td>{{ date('d F Y', strtotime($data->start_date)) }}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Tanggal Pengembalian</td>
                                                    <td>{{ date('d F Y', strtotime($data->end_date)) }}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Tipe Paket</td>
                                                    <td>{{$data->category_name}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Set Paket</td>
                                                    <td>{{$data->set}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Ukuran</td>
                                                    <td>{{$data->size}}</td>
                                                  </tr>
                                                </table>
                                              </div>
                                            </div>


                                            <div class="row">
                                              <div class="col-md-12">
                                                <h5><b>Harga</b></h5>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <table class="table">
                                                  <tr>
                                                    <td>Harga Paket</td>
                                                    <td>Rp. {{number_format($data->booking_total, 0, ',', '.')}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Deposit <b style="color: red;">*</b></td>
                                                    <td>Rp. {{number_format($deposit, 0, ',', '.')}}</td>
                                                  </tr>
                                                  <tr>
                                                    <th>Total</th>
                                                    <th>Rp. {{number_format($data->booking_total + $deposit, 0, ',', '.')}}</th>
                                                  </tr>
                                                </table>
                                              </div>
                                            </div>
                                            @endforeach
                                      </div>
                                    </div>         
                                    </div>
                                </div>
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
                            <button type="submit" class="btn btn-orange" style="float: right;">Cek Ketersediaan</button>
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


