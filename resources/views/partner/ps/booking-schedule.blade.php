@extends('layouts.app-partner')

@section('content')
<section class="content">
        <!-- <div class="row">
            <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="title">Booking Schedule</h4>
                        </div>
                            <div class="content">
                                <table class="table table-bordered table-striped " id="booking-schedule">
                                    <thead>
                                        <th>ID Booking</th>
                                        <th>Booked By</th>
                                        <th>Package Name</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>SF101</td>
                                            <td>Arsy Darmawan</td>
                                            <td>Special</td>
                                            <td>17 Februari 2020</td>
                                            <td>
                                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                                
                                                  <input type="text" name="id" value="" hidden="">
                                                  <button type="submit" class="btn btn-primary">Selesai</button>
                                                </form>
                                            </td>   
                                        </tr>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID Booking</th>
                                            <th>Booked By</th>
                                            <th>Package Name</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                </div>
        </div> -->

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<div class="container-fluid">
 <div class="row">
  <div class="col-md-8">
   <div class="card">
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

</section>     
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}

@endsection

