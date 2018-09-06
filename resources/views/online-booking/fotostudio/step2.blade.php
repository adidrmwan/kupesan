@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.fotostudio.cover-partner')

<!--===== STEP 2 : PILIH TANGGAL BOOKING ====-->

<section class="innerpage-wrapper">
    <div id="booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                @include('online-booking.fotostudio.package-info')
                <form role="form" action="{{ route('form.pesan2') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12  user-detail">
                                        <div class="row">
                                            <div class="row">
                                                @if ($message = Session::get('warning'))
                                                    <div class="alert alert-danger">                                                        {{ $message }} <b>Jam Operasional {{$partner->pr_name}}</b> dari Jam <b>{{$partner->open_hour}}:00 - {{$partner->close_hour}}:00 WIB</b>
                                                    </div>
                                                @elseif ($message = Session::get('not-available'))
                                                    <div class="alert alert-danger">                                                        {{ $message }}
                                                    </div>

                                                @else
                                                    <div class="alert alert-warning">
                                                      Pemesanan hanya dapat dilakukan pada <b>Jam Operasional {{$partner->pr_name}}</b> dari Jam <b>{{$partner->open_hour}}:00 - {{$partner->close_hour - 1}}:00 WIB</b>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Pilih Tanggal Pesan</label>
                                                        <div id="datepicker"name="booking_date"></div>            
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Tanggal Terpilih</label>
                                                        <input type="text" class="form-control" id="datepicker2" name="booking_date">
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
                                        <th>Syarat dan Ketentuan</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <ul>
                                                <li>Maximum capacity 7 people.</li>
                                                <li>Damage property and equipment will be charge.</li>
                                                <li>Please be punctual, be on time, Respects other people booking as well.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <div class="lg-booking-form">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div><!-- end checkbox -->
                        <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                        <input type="text" name="pid" value="{{$pid}}" hidden="">
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



