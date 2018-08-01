@extends('layouts.app-partner')

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
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#daftarBooking" role="tab" aria-controls="home" aria-expanded="true">Daftar Booking</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#jadwalBooking" role="tab" aria-controls="profile" aria-expanded="false">Jadwal Booking</a>
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
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Daftar Paket</h3>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered table-striped " id="list-package">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Harga Paket<small> per jam</small></th>
                                    <th>Harga Paket<small> overtime</small></th>
                                    <th>Kategori Paket</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                            
                                              <input type="text" name="id" value="" hidden="">
                                              <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                            </form>
                                        </td>   
                                        <td>
                                            <form role="form" action="" method="post" enctype="multipart/form-data">
                                            
                                              <input type="text" name="id" value="" hidden="">
                                              <button type="submit" class="btn btn-danger pull-right">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Harga Paket<small> per jam</small></th>
                                        <th>Harga Paket<small> overtime</small></th>
                                        <th>Kategori Paket</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
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

</section>     
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}

@endsection

