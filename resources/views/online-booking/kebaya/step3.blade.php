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
                                            <h5>Tersedia <b style="color: #EA410C;">{{$quantity2}} stok</b> pada tanggal <b>{{ date('d F Y', strtotime($booking->start_date)) }}</b> sampai dengan <b>{{ date('d F Y', strtotime($booking->end_date)) }}</b>.</h5>
                                          </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                          <div class="col-md-10"> 
                                            <div class="form-group text-center">
                                              <label>Ukuran</label>
                                              <input type="text" class="form-control text-center" placeholder="{{$package2->size}}" disabled="">
                                            </div>
                                          </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                          <div class="col-md-10">
                                            <div class="form-group text-center">
                                              <label>Kuantitas Pesanan</label>
                                              <select class="form-control text-center" required="" name="quantity">
                                                <option value="" selected="">Pilih Banyaknya Barang</option>
                                                @for ($i = 1; $i <= $quantity2; $i++) 
                                                <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                              </select>
                                            </div>
                                          </div>
                                        <div class="col-md-1"></div>
                                    </div>  
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group text-center">
                                          <label>Cara Penerimaan Pesanan</label>
                                        </div>
                                        <div class="panel-group" id="accordion">

  <div class="panel panel-default">
    <div class="panel-heading">
      <h6 style="text-decoration: none; color: black;">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;">
        <i class="fa fa-square-o"></i> Diambil di lokasi Partner-Ku.</a>
      </h6>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center">Anda dapat mengambil pesanan pada lokasi Partner-Ku di:</h6>
            <h5 class="text-center"><b>{{$partner->pr_addr}}, {{$partner->pr_kel}}, {{$kecamatan->name}}, {{$kota->name}}, {{$provinsi->name}}, {{$partner->pr_postal_code}}</b></h5>
            <div class="radio text-center" >
              <label><input type="radio" name="lokasiAmbil" value="partnerku" class="btn" checked><b style="color: #EA410C;">Ya, diambil di lokasi Partner-Ku.</b></label>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h6 style="text-decoration: none;">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration: none;">
        <i class="fa fa-square-o"></i> Dikirim ke lokasi Anda.</a>
      </h6>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <h6 class="text-center">Pesanan akan dikirimkan ke lokasi Anda. Pastikan lokasi Anda benar.
                <br>Terdapat biaya tambahan untuk pengiriman, akan muncul di detail pesanan.
            </h6>
            <div class="radio text-center" >
              <label><input type="radio" name="lokasiAmbil" value="userku" class="btn"><b style="color: #EA410C;">Ya, diambil di lokasi Saya.</b></label>
            </div>
          </div>
        </div> 
          <div class="col-md-12">
            <h4 class="title">Alamat</h4>
          </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Provinsi<small><b style="color: red;"> *</b></small></label>
                        <select class="form-control" name="pr_prov" id="provinces" >
                            <option value="" disable="true" selected="true">Pilih Provinsi</option>
                            @foreach ($provinces as $key => $value)
                            <option value="{{$value->id}}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kota/Kabupaten<small><b style="color: red;"> *</b></small></label>
                        <select class="form-control" name="pr_kota" id="regencies" >
                          <option value="" disable="true" selected="true">Pilih Kota/Kabupaten</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kecamatan<small><b style="color: red;"> *</b></small></label>
                        <select class="form-control" name="pr_kec" id="districts" >
                          <option value="" disable="true" selected="true">Pilih Kecamatan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kelurahan<small><b style="color: red;"> *</b></small></label>
                        <select class="form-control" name="pr_kel" id="villages">
                          <option value="" disable="true" selected="true">Pilih Kelurahan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kode Pos<small><b style="color: red;"> *</b></small></label>
                        <input type="text" class="form-control" placeholder="Kode Pos" name="pr_postal_code" >
                    </div>
                </div>
            </div>
            @if(!empty($partner_prov->name))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <p>{{$partner->pr_kel}}, {{$partner_kec->name}}, {{$partner_kota->name}}, {{$partner_prov->name}}, {{$partner->pr_postal_code}}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat Lengkap<small><b style="color: red;"> *</b></small></label>
                        <textarea class="form-control" placeholder="Tuliskan lokasi tempat penerimaan dengan lengkap." name="pr_addr"  style="resize: none; height: 100px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
      </div>
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
                        <input type="text" name="booking_id" value="{{$booking_id}}" hidden="">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-12 col-lg-12"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjut Pilih Jadwal</button>
                        </div>
                    </div> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="row">
                        <div class="col-lg-12">
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
                </div>
                </form> 
            </div>
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section>

@include('layouts.footer')
@endsection


