@extends('layouts.app-partner')

@section('content')
<section class="content">
    <div class="container-fluid">
        @foreach($booking as $data)
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                    <div class="header">
                        <h3 class="title">Detail Booking</h3>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Boking Code : {{$data->kode_booking}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-body">
                                        <table class="table table-bordered table-condensed">
                                            <tr>
                                                <th colspan="2" style="text-align: center;">Detail Customer</th>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Name</td>
                                                <td style="width: 50%;">{{$data->booking_user_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>{{$data->booking_user_nohp}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>{{$data->booking_user_email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-body">
                                        <table class="table table-bordered table-condensed">
                                            <tr>
                                                <th colspan="2" style="text-align: center;">Detail Order</th>
                                            </tr>
                                            <tr>
                                                <td style="width: 50%;">Package Name</td>
                                                <td style="width: 50%;">{{$data->booking_user_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>{{$data->booking_user_nohp}}</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail</td>
                                                <td>{{$data->booking_user_email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
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