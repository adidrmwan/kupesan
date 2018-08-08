@extends('layouts.app-partner')
@section('title', 'Schedule')
@section('content')
<section class="content">
  <div class="bd-example bd-example-tabs">
    <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#daftarBooking" role="tab" aria-controls="pills-home" aria-expanded="true">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#jadwalBooking" role="tab" aria-controls="pills-profile" aria-expanded="true">Profile</a>
    </li>

    </ul> -->
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
                                    <th>Kode Booking</th>
                                    <th>Tipe Paket</th>
                                    <th>Nama Paket</th>
                                    <th>Tanggal Pesan</th>
                                    <th>Waktu Pesan</th>
                                    <th>Customer Details</th>
                                    <th>Edit</th>
                                    <!-- <th>Cancel</th> -->
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
                                        </td>
                                        <td>
                                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                              <input type="text" name="id" value="" hidden="">
                                              <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                            </form>
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

