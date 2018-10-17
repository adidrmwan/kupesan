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
                <div class="tab-pane active" id="revenue-chart" class="table-responsive" style="position: relative; height: 300px;">
                  <table id="example1" class="table table-bordered table-striped table-condensed ">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Partner</th>
                      <th>No Hp Partner</th>
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Pengambilan</th>
                      <th>Tanggal Pengembalian</th>
                      <th>ID Paket</th>
                      <th>Nama Paket</th>
                      <th>Tipe Paket</th>
                      <th>Ukuran</th>
                      <th>Kuantitas</th>
                      <th>Harga Paket (Rp)</th>
                      <th>Deposit (Rp)</th>
                      <th>Dryclean (Rp)</th>
                      <th>Biaya Kirim (Rp)</th>
                      <th>Total (Rp)</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unapprove as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->pr_name}}</td>
                      <td>{{$data->phone_number}}</td>
                      <td>{{date('d F Y H:i:s', strtotime($data->updated_at))}}</td>
                      <td>{{date('d F Y', strtotime($data->start_date))}}</td>
                      <td>{{date('d F Y', strtotime($data->end_date))}}</td>
                      <td>{{$data->package_id}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->set}}</td>
                      <td>{{$data->size}}</td>
                      <td>{{$data->quantity}} pcs</td>
                      @include('superadmin.kebaya.detail-harga-kebaya')
                      <!-- @if($data->booking_status == 'un_approved')
                      <td><span class="label label-danger">On Review</span></td>
                      @endif -->
                      <td>  
                        <a href="{{route('kebaya.cancel.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel?')">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('kebaya.approve.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to approve?')">Approve</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="unconfirmed" style="position: relative; height: 300px;">
                  <table id="example3" class="table table-bordered table-striped table-condensed table-responsive">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemesan</th>
                      <th>No HP Pemesan</th>
                      <th>Tanggal Bayar</th>
                      <th>Batas Pembayaran</th>
                      <th>Tanggal Pengambilan</th>
                      <th>Tanggal Pengembalian</th>
                      <th>Harga Paket (Rp)</th>
                      <th>Deposit (Rp)</th>
                      <th>Dryclean (Rp)</th>
                      <th>Biaya Kirim (Rp)</th>
                      <th>Total (Rp)</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unconfirmed as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->user_name}}</td>
                      <td>{{$data->user_nohp}}</td>
                      <td>{{date('d F Y H:i:s', strtotime($data->upload_bukti_at))}}</td>
                      <td>{{date('d F Y H:i:s', strtotime($data->booking_at))}}</td>
                      <td>{{date('d F Y', strtotime($data->start_date))}}</td>
                      <td>{{date('d F Y', strtotime($data->end_date))}}</td>
                      @include('superadmin.kebaya.detail-harga-kebaya')
                      <td>  
                        <a href="{{route('kebaya.show.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Show Bukti Pembayaran</span>
                          </button>
                        </a>
                        <a href="{{route('kebaya.cancel.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel?')">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('kebaya.confirm.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to confirm?')">Confirm</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <table id="example5" class="table table-bordered table-striped table-condensed table-responsive">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Booking</th>
                      <th>User ID</th>
                      <!-- <th>Paket ID</th> -->
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Pengembalian</th>
                      <th>Harga</th>
                      <th>Deposit</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_confirmed as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td class="text-uppercase">{{$data->kode_booking}}</td>
                      <td>{{$data->user_id}}</td>
                      <!-- <td>{{$data->package_id}}</td> -->
                      <td>{{date('d F Y', strtotime($data->start_date))}}</td>
                      <td>{{date('d F Y', strtotime($data->end_date))}}</td>
                      <td>Rp {{number_format($data->booking_total,0,',','.')}}</td>
                      <td>Rp {{number_format($data->deposit,0,',','.')}}</td>
                      <td>Rp {{number_format($data->booking_total + $data->deposit,0,',','.')}}</td>
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