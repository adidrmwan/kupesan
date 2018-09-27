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
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5 content-side">
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
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5><b>Kupesan.id</b> akan mengirim pesanan ke alamat Anda.
                                            <br>Isi alamat dengan lengkap dan jelas.</h5>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Alamat Lengkap</label>
                                          <small>(include: Kelurahan, Kecamatan, Kode Pos, No Rumah)</small>
                                          <textarea class="form-control" required="" name="alamat" style="resize: none; height: 60px;">
                                          </textarea>
                                        </div>
                                      </div>
                                    </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <tr>
                                        <th>Informasi Tambahan</th>
                                    </tr>
                                    @foreach($package as $value)
                                    <tr>
                                        @if(empty($value->description))
                                        <td>Tidak ada informasi tambahan.</td>
                                        @else
                                        <td>{{$value->description}}</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    <div class="lg-booking-form">
                        <input type="text" name="booking_id" value="{{$booking_id}}" hidden="">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-12 col-lg-12"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjut Pilih Jadwal</button>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <table class="table table-bordered" style="text-align: center;">
                        <tr>
                            <th colspan="3">Panduan ukuran</th>
                        </tr>
                        @foreach($pu as $data)
                        <tr>
                            <td style="text-align: left;">{{$data->bagian}}</td>
                            <td style="text-align: right;">{{$data->cm}} cm</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                </form> 
            </div>
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section>

@include('layouts.footer')
@endsection


