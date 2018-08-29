@extends('layouts.app-partner')
@section('title', 'History')
@section('content')
<section class="content">
<div class="container-fluid " style="padding: 25px;">
  <div class="row">
    <div class="col-md-12">
      <div class="card" >
        <div class="header">
          <h3 class="title">Booking History</h3>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="bd-example bd-example-tabs">
                <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#daftarBooking" role="tab" aria-controls="home" aria-expanded="true">Done</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#jadwalBooking" role="tab" aria-controls="profile" aria-expanded="false">Canceled</a>
                </nav>
              </div>
            </div>
          </div>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade active show" id="daftarBooking" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
              <br>  
              <table class="table table-bordered table-striped table-responsive table-condensed" id="list-package3">
                <thead>
                  <th>No</th>
                  <th>Kode Booking</th>
                  <th>Nama Paket</th>
                  <th>Tipe Paket</th>
                  <th>Tanggal</th>
                  <th>Jadwal</th>
                  <th>Name (Customer)</th> 
                  <th>Phone (Customer)</th> 
                  <th>Total (Rp)</th> 
                  <th>Status</th>
                </thead>
                <tbody>
                  @foreach($booking as $key => $data)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$data->kode_booking}}</td>
                    <td>{{$data->pkg_name_them}}</td>
                    <td>{{$data->pkg_category_them}}</td>
                    <td>{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                    <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00</td>
                    <td>{{$data->booking_user_name}}</td> 
                    <td>{{$data->booking_user_nohp}}</td> 
                    <td>Rp {{number_format($data->booking_total, 0, ',', '.')}}</td> 
                    @if($data->booking_status == 'done')
                    <td><h5><span class="badge badge-pill badge-success">Done</span></h5></td> 
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="jadwalBooking" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
              <br>
              <table class="table table-bordered table-striped table-responsive table-condensed" id="list-package3">
                <thead>
                  <th>No</th>
                  <th>Kode Booking</th>
                  <th>Nama Paket</th>
                  <th>Tipe Paket</th>
                  <th>Tanggal</th>
                  <th>Jadwal</th>
                  <th>Name (Customer)</th> 
                  <th>Phone (Customer)</th> 
                  <th>Total (Rp)</th> 
                  <th>Status</th>
                </thead>
                <tbody>
                  @foreach($booking_cancelled as $key => $data)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$data->kode_booking}}</td>
                    <td>{{$data->pkg_name_them}}</td>
                    <td>{{$data->pkg_category_them}}</td>
                    <td>{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                    <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00</td>
                    <td>{{$data->booking_user_name}}</td> 
                    <td>{{$data->booking_user_nohp}}</td> 
                    <td>Rp {{number_format($data->booking_total, 0, ',', '.')}}</td> 
                    @if($data->booking_status == 'cancelled_by_partner')
                    <td><h5><span class="badge badge-pill badge-danger">Canceled</span></h5></td> 
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>   
    </div>
  </div>
</div>

</section>     
@endsection





