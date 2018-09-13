@extends('layouts.app-partner')

@section('content')
<section class="content">
    <div class="container-fluid">
        @foreach($booking as $data)
        @if($data->booking_status == 'libur')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{$data->partner_name}}</h4>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Mulai tanggal <em>{{\Carbon\Carbon::parse($data->booking_start_date)->format('d M Y')}}</em> sampai tanggal <em>{{\Carbon\Carbon::parse($data->booking_end_date)->format('d M Y')}}</em></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-8">
               <div class="card">
                    <div class="header">
                        <h3 class="title"><b class="text-uppercase">Booking Code : {{$data->kode_booking}}</b></h3>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-body">
                                        <table class="table table-sm table-hover ">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th colspan="2" style="text-align: center;">Detail Booking</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td colspan="2" style="text-align: center;"><b>{{$package->pkg_name_them}}</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Tanggal</td>
                                                <td style="width: 50%;">{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jadwal</td>
                                                <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                                            </tr>
                                            <tr>
                                                <td>Durasi Paket</td>
                                                <td>{{$data->booking_end_time - $data->booking_start_time}} Jam ({{$data->booking_start_time}}:00 - {{$data->booking_end_time}}:00 WIB)</td>
                                            </tr>
                                            <tr>
                                                <td>Durasi Overtime</td>
                                                <td>2 Jam</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-body">
                                        <table class="table table-sm table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th colspan="2" style="text-align: center;">Customer Details</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td style="width: 10%;"><i class="fa fa-user"></i></td>
                                                <td style="width: 90%;">{{$data->booking_user_name}}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone"></i></td>
                                                <td>{{$data->booking_user_nohp}}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope"></i></td>
                                                <td>{{$data->booking_user_email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="{{ route('order.completed') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                    <small>* Jika pesanan dari customer sudah selesai, klik tombol dibawah ini.</small>
                                    <input type="text" name="booking_id" value="{{$data->booking_id}}" hidden="">
                                    <button type="submit" class="btn btn-block btn-info pull-right" onclick="return confirm('Are you sure want to complete this booking?')">Order Completed</button>
                                    <div class="clearfix"></div> 
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        @endif
        @endforeach  
    </div>
        
</section>
        
@endsection