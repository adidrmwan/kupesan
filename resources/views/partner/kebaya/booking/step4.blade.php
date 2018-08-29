@extends('partner.layouts.app-form')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                  <form role="form" action="{{ route('kebaya.off-booking.step4.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p>
                                  <span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 2</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 3</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-primary">Step 4 : Konfirmasi Pesanan</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5>Detail Pesanan</h5>
                                      </div>
                                    </div>
                                    @foreach($detail_pesanan as $data)
                                    <div class="row">
                                      <div class="col-md-12">
                                        <table class="table">
                                          <tr>
                                            <td>Tanggal Pesanan</td>
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
                                        <h5>Harga</h5>
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
                                <div class="row">
                                  <div class="col-md-12">
                                    <small>Dengan menekan tombol dibawah, berarti Anda sudah yakin dengan pesanan Anda.</small>
                                    <br>
                                    <input type="text" name="booking_id" value="{{$booking_id}}" hidden="">
                                    <button type="submit" class="btn btn-block btn-info pull-right">Konfirmasi Pesanan</button> 
                                  </div>
                                </div> 
                            </div>   
                        </div>     
                    </div>
                      
                  </form>
                </div>
            </div>
            <div class="col-md-4">
              @foreach($package as $data)
              <div class="card">
                <div class="row">
                  <div class="col-md-12">
                    <div class="header">
                      <h4 class="title" style="text-align: center;">{{$data->name}}</h4>
                    </div>
                    <div class="content">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                          <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                          @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                          <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                          @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                          <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                          @endif
                        </div>
                        <div class="col-sm-12 col-md-12" style="padding: 25px;">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th>Tipe Kebaya</th>
                                <td style="text-align: right;">{{$data->category}}</td>
                              </tr>
                              <tr>
                                <th>Ukuran</th>
                                <td style="text-align: right;">{{$data->size}}</td>
                              </tr>
                              <tr>
                                <th>Biaya Sewa/hari</th>
                                <td style="text-align: right;">Rp {{number_format($data->price)}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
<script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>


<link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
<script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

@endsection