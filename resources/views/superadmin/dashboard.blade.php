@extends('superadmin.layouts.master-admin')
@section('title', 'Dashboard Admin')
@section('content')

  <section class="content">
      <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$total_booking_paid}} / {{$total_booking}}</h3>

            <p>Total Booking (Sudah Bayar)</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$total_booking_confirmed}} / {{$total_booking}}</h3>

            <p>Total Booking (Sudah dikonfirmasi)</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$total_user}}</h3>

            <p>Total User</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$total_partner}}</h3>

            <p>Total Partner</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Booking List</h3>
          </div>
          <div class="box-body">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#revenue-chart" data-toggle="tab">Cek Ketersediaan <i class="glyphicon glyphicon-remove-circle"></i></a></li>
                <li><a href="#unconfirmed" data-toggle="tab">Sudah Bayar <i class="glyphicon glyphicon-remove-circle"></i></a></li>
                <li><a href="#sales-chart" data-toggle="tab">Confirmed <i class="glyphicon glyphicon-ok-circle"></i></a></li>
              </ul>
              <div class="tab-content no-padding">
                <div class="tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <table id="example1" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Partner</th>
                      <th>No Hp Partner</th>
                      <th>Tanggal Pesan</th>
                      <th>Jadwal Pesan</th>
                      <th>Nama Paket</th>
                      <th>Tipe Paket</th>
                      <th>Total</th>
                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unapprove as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->partner_name}}</td>
                      <td>{{$data->phone_number}}</td>
                      <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                      <td>{{date('H:i', strtotime($data->booking_start_date))}} - {{date('H:i', strtotime($data->booking_end_date))}} WIB</td>
                      <td>{{$data->pkg_name_them}}</td>
                      <td>{{$data->pkg_category_them}}</td>
                      <td>Rp {{number_format($data->booking_total,0,',','.')}}</td>
                     <!--  @if($data->booking_status == 'un_approved')
                      <td><span class="label label-danger">On Review</span></td>
                      @endif -->
                      <td>  
                        <a href="{{route('cancel.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel this booking?')">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('approve.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to aprrove this booking?')">Approve</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="unconfirmed" style="position: relative; height: 300px;">
                  <table id="example3" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemesan</th>
                      <th>No HP Pemesan</th>
                      <th>Tanggal Pesan</th>
                      <th>Jadwal Pesan</th>
                      <th>Total</th>
                      <!-- <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unconfirmed as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->booking_user_name}}</td>
                      <td>{{$data->booking_user_nohp}}</td>
                      <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                      <td>{{date('H:i', strtotime($data->booking_start_date))}} - {{date('H:i', strtotime($data->booking_end_date))}} WIB</td>
                      <td>Rp {{number_format($data->booking_total,0,',','.')}}</td>
                     <!--  @if($data->booking_status == 'paid')
                      <td><span class="label label-success">Sudah Bayar</span></td>
                      @endif -->
                      <td>  
                        <a href="{{route('show.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Show Bukti Pembayaran</span>
                          </button>
                        </a>
                        <a href="{{route('cancel.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel this booking?')">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('confirm.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to confirm this booking?')">Confirm</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <table id="example9" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Booking</th>
                      <th>User ID</th>
                      <!-- <th>Paket ID</th> -->
                      <th>Date</th>
                      <th>Time</th>
                      <th>Total</th>
                      <!-- <th>Status</th> -->
                      <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_confirmed as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td class="text-uppercase">{{$data->kode_booking}}</td>
                      <td>{{$data->user_id}}</td>
                      <!-- <td>{{$data->package_id}}</td> -->
                      <td>{{date('d F Y', strtotime($data->booking_at))}}</td>
                      <td>{{date('H:m', strtotime($data->booking_at))}} WIB</td>
                      <td>Rp {{number_format($data->booking_total,0,',','.')}}</td>
                      <!-- @if($data->booking_status == 'confirmed')
                      <td><span class="label label-success">Confirmed</span></td>
                      @endif -->
                      <td>
                        <a href="{{route('show.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Show Bukti Pembayaran</span>
                          </button>
                        </a>
                      </td>
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