@extends('layouts.app-partner')

@section('content')
<section class="content">
    <div class="container-fluid">
        @foreach($booking as $data)
        <div class="row">
            <div class="col-md-8">
               <div class="card">
                    <div class="header">
                        <h3 class="title"><b>Booking Code : {{$data->kode_booking}}</b></h3>
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
                                                <td colspan="2"><b>{{$data->partner_name}} - {{$package->pkg_name_them}} Package</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Tanggal</td>
                                                <td style="width: 50%;">{{\Carbon\Carbon::parse($data->booking_start_date)->format('d M Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Waktu</td>
                                                <td>{{\Carbon\Carbon::parse($data->booking_start_date)->format('H:i')}} - {{\Carbon\Carbon::parse($data->booking_end_date)->format('H:i')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Tambahan</td>
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
                                    <button type="submit" class="btn btn-block btn-info pull-right">Order Completed</button>
                                    <div class="clearfix"></div> 
                                </form>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        @endforeach  
    </div>
        
</section>
        
@endsection