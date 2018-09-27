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
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#online" role="tab" aria-controls="home" aria-expanded="true">Completed</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#offline" role="tab" aria-controls="profile" aria-expanded="false">Canceled</a>
                </nav>
              </div>
              <br>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="online" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
                  <table class="table table-bordered table-striped table-responsive" id="list-package2">
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
                          <th>Phone (Customer)</th> 
                          <th>Status</th>
                          <th>Total (Rp)</th> 
                      </thead>
                      <tbody>
                        @foreach($booking as $key => $data)
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td class="text-uppercase">{{$data->kode_booking}}</td>
                          <td>{{$data->package_id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->size}}</td>
                          <td>{{$data->set}}</td>
                          <td>{{$data->quantity}}</td>
                          <td>{{\Carbon\Carbon::parse($data->start_date)->format('d M Y')}}</td>
                          <td>{{\Carbon\Carbon::parse($data->end_date)->format('d M Y')}}</td>
                          <td>{{$data->user_name}}</td> 
                          <td>{{$data->user_nohp}}</td> 
                          @if($data->booking_status == 'offline-booking-done')
                          <td><h5><span class="badge badge-pill badge-warning">Off</span></h5></td> 
                          @else
                          <td><h5><span class="badge badge-pill badge-success">One</span></h5></td> 
                          @endif
                          <td>Rp {{number_format($data->booking_total,0),',','.'}}</td> 
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
                          <th>Phone (Customer)</th> 
                          <th>Total (Rp)</th> 
                      </thead>
                      <tbody>
                        @foreach($booking_offline as $key => $data)
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td class="text-uppercase">{{$data->kode_booking}}</td>
                          <td>{{$data->package_id}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->size}}</td>
                          <td>{{$data->set}}</td>
                          <td>{{$data->quantity}}</td>
                          <td>{{\Carbon\Carbon::parse($data->start_date)->format('d M Y')}}</td>
                          <td>{{\Carbon\Carbon::parse($data->end_date)->format('d M Y')}}</td>
                          <td>{{$data->user_name}}</td> 
                          <td>{{$data->user_nohp}}</td> 
                          <td>Rp. {{number_format($data->booking_total,0,',','.')}}</td> 
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


