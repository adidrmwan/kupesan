@extends('layouts.app-partner')
@section('title', 'History')
@section('content')
<section class="content">

<div class="row" style="padding: 25px;">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
              <h3 class="title">Booking History</h3>
            </div>
            <div class="content">
              <div class="bd-example bd-example-tabs">
                <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#online" role="tab" aria-controls="home" aria-expanded="true">Online</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#offline" role="tab" aria-controls="profile" aria-expanded="false">Offline</a>
                </nav>
              </div>
              <br>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="online" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
                  <table class="table table-bordered table-striped table-responsive" id="list-package2">
                      <thead>
                          <th>No</th>
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
                          </tr>

                          @endforeach
                      </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="offline" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
                  <table class="table table-bordered table-striped table-responsive" id="list-package">
                      <thead>
                          <th>No</th>
                          <th>Booking Code</th>
                          <th>Package ID</th>
                          <th>Package Name</th>
                          <th>Size</th>
                          <th>Set</th>
                          <th>Quantity</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Name (Customer)</th> 
                          <th>E-mail (Customer)</th> 
                          <th>Phone (Customer)</th> 
                          <th>Total (Rp)</th> 
                      </thead>
                      <tbody>
                        @foreach($booking_offline as $key => $data)
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td>{{$data->kode_booking}}</td>
                          <td>{{$data->package_id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->size}}</td>
                          <td>{{$data->set}}</td>
                          <td>{{$data->quantity}}</td>
                          <td>{{\Carbon\Carbon::parse($data->start_date)->format('d M Y')}}</td>
                          <td>{{\Carbon\Carbon::parse($data->end_date)->format('d M Y')}}</td>
                          <td>{{$data->user_name}}</td> 
                          <td>{{$data->user_nohp}}</td> 
                          <td>{{$data->user_email}}</td> 
                          <td>{{$data->booking_total}}</td> 
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
</section>     
@endsection

@section('script')

@endsection


