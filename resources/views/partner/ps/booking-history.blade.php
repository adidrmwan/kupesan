@extends('layouts.app-partner')

@section('content')
<section class="content">

<div class="row" style="padding: 25px;">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
              <h3 class="title">Booking History</h3>
            </div>
            <div class="content">
                <table class="table table-bordered table-striped " id="list-package">
                    <thead>
                        <th>No</th>
                        <th>Booking Code</th>
                        <th>Package Type</th>
                        <th>Package Name</th>
                        <th>Date</th>
                        <th>Duration</th>
                        <th>Booking Details</th>
                        <th>Finished</th>
                    </thead>
                    <tbody>
                        @foreach($booking as $key => $data)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$data->kode_booking}}</td>
                            @if($data->pkg_category_them = 'Thematic_Set')
                            <td>Thematic Set</td>
                            @elseif($data->pkg_category_them = 'Special_Studio')
                            <td>Special Studio</td>
                            @elseif($data->pkg_category_them = 'Ala_Carte')
                            <td>>Room (Ala Carte)</td>
                            @endif
                            <td>{{$data->pkg_name_them}}</td>
                            <td>{{\Carbon\Carbon::parse($data->booking_start_date)->format('d M Y')}}</td>
                            <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                            <td>
                              <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#show_history{{$data->booking_id}}" contenteditable="false">Show All Details</button>
                            </td>
                            <!-- <td>
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                
                                  <input type="text" name="id" value="" hidden="">
                                  <button type="submit" class="btn btn-danger pull-right">Cancel</button>
                                </form>
                            </td> -->   
                            <td>
                              <div class="modal fade" id="show_history{{$data->booking_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Booking Details</h4>
                                            <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-bordered">
                                            <tbody>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Nama Pemesan</th>
                                                <td>{{$data->booking_user_name}}</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">No HP</th>
                                                <td>{{$data->booking_user_nohp}}</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Email</th>
                                                <td>{{$data->booking_user_email}}</td>
                                              </tr>
                                              <tr>
                                                <th colspan="2"></th>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Nama Studio</th>
                                                <td>{{$data->partner_name}}</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Tipe Paket</th>
                                                @if($data->pkg_category_them = 'Thematic_Set')
                                                <td>Thematic Set</td>
                                                @elseif($data->pkg_category_them = 'Special_Studio')
                                                <td>Special Studio</td>
                                                @elseif($data->pkg_category_them = 'Ala_Carte')
                                                <td>>Room (Ala Carte)</td>
                                                @endif
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Nama Paket</th>
                                                <td>{{$data->pkg_name_them}}</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Tanggal</th>
                                                <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Waktu</th>
                                                <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color: #eaeee8;">Jumlah Tamu</th>
                                                <td>{{$data->booking_capacities}} orang</td>
                                              </tr>
                                              <tr style="background-color: #4b75a7; color: white;">
                                                <th>Total</th>
                                                <th>Rp {{$data->booking_total}}</th>
                                              </tr>
                                            </tbody>
                                          </table> 
                                        </div>
                                        <div class="modal-footer">
                                          <h5>Booking ini sudah selesai?<span class="pull-right"></span></h5>
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
</section>     
@endsection

@section('script')

@endsection


