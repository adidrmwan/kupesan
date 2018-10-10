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
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 content-side">
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
                                                @endif
                                            </div>
                                            <div class="row">
                                              <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Pilih Tanggal Penerimaan</label>
                                                        <div id="datepickerkebaya"name="booking_date"></div>            
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="row">
                                                      <div class="col-md-12"> 
                                                        <div class="form-group text-center">
                                                          <label>Tanggal Terpilih</label>
                                                          <input type="text" class="form-control text-center" id="datepickerkebaya2" name="start_date" hidden="">
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
                            <button type="submit" class="btn btn-orange" style="float: right;">Lanjutkan</button>
                        </div><!-- end checkbox -->
                    </div> 
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


