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
                <li class="active"><a href="#revenue-chart" data-toggle="tab">Unreview <i class="glyphicon glyphicon-remove-circle"></i></a></li>
                <li><a href="#sales-chart" data-toggle="tab">Confirmed <i class="glyphicon glyphicon-ok-circle"></i></a></li>
              </ul>
              <div class="tab-content no-padding">
                <div class="tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <table id="example1" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Partner</th>
                      <th>Hp Partner</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                      <th>Nama Paket</th>
                      <th>Tipe Paket</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unapprove as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->partner_name}}</td>
                      <td>{{$data->phone_number}}</td>
                      <!-- <td>{{$data->package_id}}</td> -->
                      <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                      <td>{{date('H:i', strtotime($data->booking_start_date))}} - {{date('H:i', strtotime($data->booking_end_date))}} WIB</td>
                      <td>{{$data->pkg_name_them}}</td>
                      <td>{{$data->pkg_category_them}}</td>
                      <td>Rp {{$data->booking_total}}</td>
                      @if($data->booking_status == 'un_approved')
                      <td><span class="label label-danger">On Review</span></td>
                      @endif
                      <td>  
                        <a href="{{route('confirm.bukti', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('approve.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Approve</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <table id="example3" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Booking</th>
                      <th>User ID</th>
                      <!-- <th>Paket ID</th> -->
                      <th>Date</th>
                      <th>Time</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_confirmed as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$data->kode_booking}}</td>
                      <td>{{$data->user_id}}</td>
                      <!-- <td>{{$data->package_id}}</td> -->
                      <td>{{date('d F Y', strtotime($data->booking_at))}}</td>
                      <td>{{date('H:m', strtotime($data->booking_at))}} WIB</td>
                      <td>Rp {{$data->booking_total}}</td>
                      @if($data->booking_status == 'confirmed')
                      <td><span class="label label-success">Confirmed</span></td>
                      @endif
                      <td>

                          <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;" data-toggle="modal" data-target="#show-pemesan"><span style="color: white; text-decoration: none;">Show</span>
                          </button>

                            <div class="modal fade" id="show-pemesan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel"><strong>Detail Pesanan</strong>
                                    <span class="pull-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button></span></h3>
                                  </div>
                                  <div class="modal-body">
                                    <table class="table table-condensed table-bordered table-striped">
                                      <tbody>
                                        <tr>
                                          <th>Nama Pemesan</th>
                                          <td>{{$data->booking_user_name}}</td>
                                        </tr>
                                        <tr>
                                          <th>No HP</th>
                                          <td>{{$data->booking_user_nohp}}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>{{$data->booking_user_email}}</td>
                                        </tr>
                                        <tr>
                                          <th colspan="2"></th>
                                        </tr>
                                        <tr>
                                          <th>Nama Studio</th>
                                          <td>{{$data->partner_name}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tipe Paket</th>
                                          @if($data->pkg_category_them = 'Thematic_Set')
                                          <td>Thematic Set</td>
                                          @elseif($data->pkg_category_them = 'Special_Studio')
                                          <td>Special Studio</td>
                                          @elseif($data->pkg_category_them = 'Ala_Carte')
                                          <td>>Room (Ala Carte)</td>
                                          @endif
                                        </tr>
                                        <tr>
                                          <th>Nama Paket</th>
                                          <td>{{$data->pkg_name_them}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tanggal Pesan</th>
                                          <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                                        </tr>
                                        <tr>
                                          <th>Waktu Pesan</th>
                                          <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                                        </tr>
                                        <tr>
                                          <th>Jumlah Tamu</th>
                                          <td>{{$data->booking_capacities}} orang</td>
                                        </tr>
                                        <tr>
                                          <th>Status Pesanan</th>
                                          @if($data->booking_status == 'confirmed')
                                          <td><span class="label label-success">Transfered</span>&nbsp;<span class="label label-success">Confirmed</span></td>
                                          @endif
                                        </tr>
                                        <tr>
                                          <th>Bukti Pembayaran</th>
                                          <td>
                                            <button type="submit" class="btn btn-primary btn-sm" style=" padding: 3px 15px;" data-toggle="modal" data-target="#show-bukti"><span style="color: white; text-decoration: none;">Show</span></button>
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
                                                    @if(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".jpg")))
                                                    <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.jpg')  }}" alt= "Bukti Transfer" />
                                                    @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".png")))
                                                    <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.png')  }}" alt= "Bukti Transfer" /> 
                                                    @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".jpeg")))
                                                    <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.jpeg')  }}" alt= "Bukti Transfer" /> 
                                                    @endif
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr style="background-color: #4b75a7; color: white;">
                                          <th>Total</th>
                                          <th>Rp {{$data->booking_total}}</th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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