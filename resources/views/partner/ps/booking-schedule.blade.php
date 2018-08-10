@extends('layouts.app-partner')
@section('title', 'Schedule')
@section('content')
<section class="content">
  <div class="bd-example bd-example-tabs">

    </ul>
      <nav class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#daftarBooking" role="tab" aria-controls="home" aria-expanded="true">Booking Schedule</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#jadwalBooking" role="tab" aria-controls="profile" aria-expanded="false">Booking List</a>
      </nav>
  </div>

  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade active show" id="daftarBooking" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
      <div class="container-fluid " style="padding: 25px;">
       <div class="row">
        <div class="col-md-8">
         <div class="card" >
             <div class="header">
              <h3 class="title">Booking Schedule</h3>
             </div>
             <div class="content">
              <div class="row">
                <div class="col-md-12">
                  {!! $calendar->calendar() !!}  
                </div>  
              </div>
             </div>
         </div>
        </div>
       </div>   
      </div>
    </div>

    <div class="tab-pane fade" id="jadwalBooking" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
      <div class="row" style="padding: 25px;">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="header">
                      <h3 class="title">Booking List</h3>
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
                                          <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#ModalCustomer" contenteditable="false">Show All Details</button>                                          
                                        </td>
                                        <td>
                                            <a href="{{route('booking.finished', ['id' => $data->booking_id])}}">
                                              <button type="submit" class="btn btn-success">Yes, done!</button>
                                            </a>
                                        </td>
                                        <!-- <td>
                                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                            
                                              <input type="text" name="id" value="" hidden="">
                                              <button type="submit" class="btn btn-danger pull-right">Cancel</button>
                                            </form>
                                        </td> -->   
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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

</section>     
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}

@endsection

@foreach($booking as $key => $data)
<div class="modal fade" id="ModalCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <a href="{{route('booking.finished', ['id' => $data->booking_id])}}">
                  <button type="submit" class="btn btn-success">Yes, done!</button>
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
@endforeach



