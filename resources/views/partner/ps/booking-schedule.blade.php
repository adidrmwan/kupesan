@extends('layouts.app-partner')
@section('title', 'Schedule')
@section('content')
<section class="content">
  <div class="bd-example bd-example-tabs">
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
        <div class="col-md-7">
          <div class="card">
            <div class="header">
              <h3 class="title">Booking List</h3>
            </div>
            <div class="content">
                <table class="table table-bordered table-striped " id="list-package">
                    <thead>
                        <th>No</th>
                        <th>Booking Code</th>
                        <!-- <th>Package Type</th> -->
                        <th>Package Name</th>
                        <th>Date</th>
                        <th>Duration</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        @foreach($booking as $key => $data)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$data->kode_booking}}</td>
                            <!-- @if($data->pkg_category_them = 'Thematic_Set')
                            <td>Thematic Set</td>
                            @elseif($data->pkg_category_them = 'Special_Studio')
                            <td>Special Studio</td>
                            @elseif($data->pkg_category_them = 'Ala_Carte')
                            <td>>Room (Ala Carte)</td>
                            @endif -->
                            <td>{{$data->pkg_name_them}}</td>
                            <td>{{\Carbon\Carbon::parse($data->booking_start_date)->format('d M Y')}}</td>
                            <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                            <td>
                                <a href="{{route('booking.schedule', ['show_id' => $data->booking_id])}}">
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                </a>                                       
                            </td>
                            <td>
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                
                                  <input type="text" name="id" value="" hidden="">
                                  <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-close"></i></button>
                                </form>
                            </td>   
                            <td>
                                <a href="{{route('booking.finished', ['id' => $data->booking_id])}}">
                                  <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
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
        <div class="col-md-5">
            <div class="card">
                <div class="header">
                  <h3 class="title">Booking List</h3>
                </div>
                    <div class="content">
                        <table class="table table-bordered table-striped " id="list-package">
                            <thead>
                                <th>No</th>
                                <th>Booking Code</th>
                                <!-- <th>Package Type</th> -->
                                <th>Package Name</th>
                                <th>Date</th>
                                <th>Duration</th>
                                <th colspan="3">Action</th>
                            </thead>
                            <tbody>
                                @foreach($booking as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$data->kode_booking}}</td>
                                    <!-- @if($data->pkg_category_them = 'Thematic_Set')
                                    <td>Thematic Set</td>
                                    @elseif($data->pkg_category_them = 'Special_Studio')
                                    <td>Special Studio</td>
                                    @elseif($data->pkg_category_them = 'Ala_Carte')
                                    <td>>Room (Ala Carte)</td>
                                    @endif -->
                                    <td>{{$data->pkg_name_them}}</td>
                                    <td>{{\Carbon\Carbon::parse($data->booking_start_date)->format('d M Y')}}</td>
                                    <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                                    <td>
                                        <a href="{{route('booking.schedule', ['show_id' => $data->booking_id])}}">
                                          <button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                        </a>                                       
                                    </td>
                                    <td>
                                        <form role="form" action="" method="post" enctype="multipart/form-data">
                                        
                                          <input type="text" name="id" value="" hidden="">
                                          <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-close"></i></button>
                                        </form>
                                    </td>   
                                    <td>
                                        <a href="{{route('booking.finished', ['id' => $data->booking_id])}}">
                                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

</section>     
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}

@endsection




