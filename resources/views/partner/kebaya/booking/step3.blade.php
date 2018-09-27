@extends('partner.layouts.app-form')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                  <form role="form" action="{{ route('kebaya.off-booking.step3.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p>
                                  <span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 2</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-primary">Step 3 : Detail Lainnya</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                              <form role="form" action="{{route('submit.item')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                              {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5></h5>
                                        <small><b style="color: red;">*</b> Tersedia <b>{{$quantity2}}</b> kebaya pada tanggal <b>{{ date('d F Y', strtotime($booking->start_date)) }}</b> sampai dengan <b>{{ date('d F Y', strtotime($booking->end_date)) }}</b>.</small>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Kuantitas</label>
                                          <select class="form-control" required="" name="quantity">
                                            <option value="" selected="">Pilih Banyaknya Produk</option>
                                            @for ($i = 1; $i <= $quantity2; $i++) 
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5>Detail Pelanggan</h5>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Nama <b style="color: red;">*</b></label> 
                                          <input type="text" class="form-control" name="user_name" placeholder="Nama Pelanggan" required="">
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label>No HP <b style="color: red;">*</b></label> 
                                          <input type="text" class="form-control" name="user_nohp" placeholder="No Handphone" required="">
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                      <div class="col-md-7">
                                        <div class="form-group">
                                          <label>E-mail</label> <small>(Optional)</small>
                                          <input type="text" class="form-control" name="user_email" placeholder="E-mail">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="col-md-12">
                                    <small>Dengan menekan tombol dibawah, berarti Anda sudah yakin dengan pesanan Anda.</small>
                                    <br>
                                    <input type="text" name="booking_id" value="{{$booking_id}}" hidden="">
                                    <button type="submit" class="btn btn-block btn-info pull-right" onclick="return confirm('Are you sure want to booking this order?')">Cek Ketersediaan</button> 
                                  </div>
                                </div> 
                              </form>  
                            </div>   
                        </div>     
                    </div>
                      
                  </form>
                </div>
            </div>
            <div class="col-md-4">
              @foreach($package as $data)
                @include('partner.kebaya.booking.kebaya-paket')
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


<script>
$(function() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var mmm = mm + 3; 
  var yyyy = today.getFullYear();

  if(dd<10) {
      dd = '0'+dd
  } 

  if(mm<10) {
      mm = '0'+mm
  } 

  today = mm + '/' + dd + '/' + yyyy;
  nextmonth = mmm + '/' + dd + '/' + yyyy;

  var a = moment("08/15/2018");
  var b = moment("08/18/2018");
  var x = moment("08/20/2018");
  var y = moment("08/25/2018");
  
  $('input[name="daterange"]').daterangepicker({
    "minDate": today,
    "maxDate": nextmonth,
    isInvalidDate: function(date) {
            return (date >= a && date <= b) || (date >= x && date <= y);
        }
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

<link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
<script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

@endsection