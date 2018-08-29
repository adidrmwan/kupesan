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
                <form role="form" action="{{ route('kebaya.step3') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-Ku</h4></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12  user-detail">
                                        <div class="row">
                                            <div class="row">
                                                @if ($message = Session::get('warning'))
                                                    <div class="alert alert-danger">                                                        {{ $message }} <b>Jam Operasional {{$partner->pr_name}}.</b>
                                                    </div>
                                                @elseif ($message = Session::get('not-available'))
                                                    <div class="alert alert-danger">                                                        {{ $message }}
                                                    </div>

                                                @else
                                                    <div class="alert alert-warning">
                                                      Pemesanan hanya dapat dilakukan pada <b>Jam Operasional {{$partner->pr_name}}</b> dari Jam <b>{{$partner->open_hour}}:00 - {{$partner->close_hour}}:00 WIB</b>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Tanggal Mulai</label> 
                                                  <input  class="form-control" id="startDate" name="start_date" data-date-format="yyyy-mm-dd" required="" placeholder="Tanggal Mulai">
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Tanggal Selesai</label> 
                                                  <input  class="form-control" id="endDate" name="end_date" data-date-format="yyyy-mm-dd" placeholder="Tanggal Selesai" />
                                                </div>
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
                        <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                        <input type="text" name="package_id" value="{{$package_id}}" hidden="">
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

@section('script')
<link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
<script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

<script type="text/javascript">
  var array = {!! json_encode($disableDates) !!}
  var trima = []
  for (i = 0; i < array.length; i++ ) {
      trima.push(array[i].substring(10,""))
  }
  $('#startDate').datepicker({
      minDate:1,
      maxDate: "+3M",
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ trima.indexOf(string) == -1 ]
      }
  });
</script>

<script type="text/javascript">
  var array = {!! json_encode($disableDates) !!}
  var trima = []
  for (i = 0; i < array.length; i++ ) {
      trima.push(array[i].substring(10,""))
  }
  $('#endDate').datepicker({
      minDate:1,
      maxDate: "+3M",
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ trima.indexOf(string) == -1 ]
      }
  });
</script>
@endsection


