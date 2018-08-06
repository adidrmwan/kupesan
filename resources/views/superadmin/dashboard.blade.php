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
              <h3>150 /</h3>

              <p>Total Booking</p>
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
              <h3>53 /</h3>

              <p>Booking / Day </p>
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
              <h3>44 /</h3>

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
              <h3>65 /</h3>

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

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>User ID</th>
                  <th>Paket ID</th>
                  <th>Nama Pemesan</th>
                  <th>No HP</th>
                  <th>Email</th>
                  <th>Tanggal Pesan</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Harga Satuan</th>
                  <th>Total</th>
                  <th>Status Pemesanan</th>
                  <th>Bukti Pembayaran</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($booking as $data)
                <tr>
                  <td>1</td>
                  <td>{{$data->user_id}}</td>
                  <td>{{$data->package_id}}</td>
                  <td>{{$data->booking_user_name}}</td>
                  <td>{{$data->booking_user_nohp}}</td>
                  <td>{{$data->booking_user_email}}</td>
                  <td>{{$data->booking_date}}</td>
                  <td>{{$data->booking_start_time}}</td>
                  <td>{{$data->booking_end_time}}</td>
                  <td>{{$data->booking_price}}</td>
                  <td>{{$data->booking_total}}</td>
                  <td>{{$data->booking_status}}</td>
                  <td>

                      <button type="submit" class="btn btn-primary" style=" padding: 5px 15px; margin-top: 6px;" data-toggle="modal" data-target="#show-bukti"><span style="color: white; text-decoration: none;">Show</span>
                      </button>

                        <div class="modal fade" id="show-bukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.jpg')  }}" alt= "Bukti Transfer" /> 
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </td>   
                  <td>  
                    <a href="{{route('confirm.bukti', ['id' => $data->booking_id])}}">
                      <button type="submit" class="btn btn-success" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Confirm</span>
                      </button>
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection