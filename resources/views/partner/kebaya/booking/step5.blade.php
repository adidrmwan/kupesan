@extends('partner.layouts.app-form')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p>
                                  <span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 2</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 3</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 4</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-success">Pesanan Berhasil!</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5>Selamat!</h5>
                                        Proses pemesanan kebaya Anda telah berhasil.
                                        <br>
                                        Silahkan kembali ke <a href="{{route('kebaya.off-booking')}}" style="color: #EA410C;"><span style="color: #EA410C;"><b>halaman awal.</b></span></a>
                                      </div>
                                    </div>
                                  </div>
                                </div> 
                            </div>   
                        </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
<script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>


<link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
<script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

@endsection