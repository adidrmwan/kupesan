@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.fotostudio.cover-partner')   
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                @include('online-booking.fotostudio.package-info')
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">        
                    @foreach($review as $data)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                        <div class="panel-body">
                            <div class="row">
                                
                                <div class="col-sm-12 col-md-12  user-detail">
                                    <h5><b>Detail Pesanan</b></h5>
                                    <ul class="list-unstyled" >
                                        <li></li>
                                        <li>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td >Tanggal</td>
                                                        <td>{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jadwal Pesanan</td>
                                                        <td>
                                                            {{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB 
                                                            <br>
                                                            Paket : {{$data->booking_end_time - $data->booking_start_time}} Jam ({{$data->booking_start_time}}:00 - {{$data->booking_end_time}}:00 WIB) 
                                                            <br>
                                                            @if(!empty($data->booking_overtime))
                                                            Overtime : {{$data->booking_overtime}} Jam
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipe Paket</td>
                                                        <td>{{$data->pkg_category_them}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>         
                                    </ul>
                                    <hr class="style5">
                                    <h5><b>Detail Harga</b></h5>
                                    <ul class="list-unstyled" >
                                        <li></li>
                                        <li>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Paket</td>
                                                        <td>
                                                            <!-- {{$data->booking_end_time - $data->booking_start_time}} Jam 
                                                            <b>:</b>
                                                            Rp {{number_format($data->booking_normal_price, 0, ',', '.')}} -->
                                                        </td>
                                                        <td style="text-align: : right; ">Rp {{number_format($data->total_normal, 0, ',', '.')}}</td>
                                                    </tr>
                                                    @if(!empty($data->booking_overtime))
                                                    <tr>
                                                        <td>Overtime</td>
                                                        <td>{{$data->booking_overtime}} Jam 
                                                            <b>x</b>
                                                            Rp {{number_format($data->booking_overtime_price, 0, ',', '.')}}
                                                        </td>
                                                        <td style="text-align: : right; ">Rp {{number_format($data->total_overtime, 0, ',', '.')}}</td>
                                                    </tr>
                                                    @endif
                                                    <tr>
                                                        <td><b>TOTAL</b></td>
                                                        <td></td>
                                                        <td><b>Rp {{number_format($data->booking_total, 0, ',', '.')}}</b></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>      
                                    </ul>
                                    <div class="alert alert-warning">
                                      <b>Cek Ketersediaan</b> akan dilakukan pada <b>Jam Operasional {{$partner->pr_name}}</b> dari Pukul <b>{{$partner->open_hour}}:00 - {{$partner->close_hour - 1}}:00 WIB</b>
                                    </div>
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                            <input type="text" name="xxx" value="{{$data->total}}" hidden="">
                        </div><!-- end panel-body -->
                    </div>
                    @endforeach

                    <div class="lg-booking-form">
                        <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div>
                        <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                            <form role="form" action="{{ route('form.step5') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                            {{ csrf_field() }}
                                <input type="text" name="bid" value="{{$bid}}" hidden="">
                                <button type="submit" class="btn btn-orange" style="float: right;">Cek Ketersediaan</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div><!-- end container -->         
        </div><!-- end flight-booking -->
    </div>
</section>

@include('layouts.footer')
@endsection



