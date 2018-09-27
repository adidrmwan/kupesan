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
                <form role="form" action="{{ route('kebaya.submit.step2') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12  user-detail">
                                        <div class="row">
                                            <div class="row">
                                                @if ($message = Session::get('warning'))
                                                    <div class="alert alert-danger"> 
                                                      {{ $message }} <b>Jam Operasional {{$partner->pr_name}}</b> dari Jam <b>{{$partner->open_hour}}:00 - {{$partner->close_hour}}:00 WIB</b>
                                                    </div>
                                                @elseif ($message = Session::get('not-available'))
                                                    <div class="alert alert-danger"> 
                                                      {{ $message }}
                                                    </div>

                                                @else
                                                    <div class="alert alert-warning">
                                                      <b>Durasi sewa</b> yaitu 3 hari dari tanggal pesan.
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row">
                                              <div class="col-lg-12">
                                                <div class="form-group">
                                                  <label>Tanggal Pesan</label> 
                                                  <input  class="form-control" id="startDate" name="start_date" data-date-format="yyyy-mm-dd" required="" placeholder="Tanggal Pesan (Pengambilan)">
                                                </div>
                                              </div>
                                              <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Tanggal Pengembalian</label> 
                                                  <input  class="form-control" id="endDate" name="end_date" data-date-format="yyyy-mm-dd" placeholder="Tanggal Pengembalian" />
                                                </div>
                                              </div> -->
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
                        <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                        <input type="text" name="package_id" value="{{$package_id}}" hidden="">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-12 col-lg-12"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjut Pilih Jadwal</button>
                        </div><!-- end checkbox -->
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
      minDate:3,
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
      minDate:3,
      maxDate: "+3M",
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ trima.indexOf(string) == -1 ]
      }
  });
</script>
@endsection


