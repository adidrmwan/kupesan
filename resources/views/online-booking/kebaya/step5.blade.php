@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.kebaya.cover-partner')   
<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
	<div id="booking" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                @include('online-booking.kebaya.package-info')
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Pesanan-KU</h4></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12  user-detail">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h4>Dear <b class="text-capitalize">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</b>,
                                        <br>
                                        <br>
                                        <b style="color: #EA410C;">KUPESAN.ID</b> sedang mengecek ketersediaan kebaya pada <b>{{$partner->pr_name}}</b>. 
                                        <br>
                                        Kami akan mengirimkan e-mail untuk memberitahukan status pesanan Anda maksimal 6 jam dari sekarang. 
                                        <br>
                                        <br>
                                        Anda juda dapat melihat status pesanan pada menu <b class="text-uppercase">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</b> diatas atau <a href="{{route('dashboard')}}" style="color: #EA410C;"><b>disini.</b></a>
                                        <br>
                                        <br>
                                        Mohon kesediaan Anda untuk menunggu,
                                        <br>
                                        Terima Kasih. </h4>
                                      </div>
                                    </div>
                                        
                                                 
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                            
                        </div><!-- end panel-body -->
                    </div><!-- end panel-detault -->

                    <div class="lg-booking-form">
                        <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8"  >

                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                            <a href="{{route('index')}}">
                                <button class="btn btn-orange" style="float: right;"><span style="color: white; text-decoration: none;">Kembali</span>
                                </button>
                            </a>
                        </div>
                    </div> 
                </div>
        </div><!-- end container -->         
    </div><!-- end flight-booking -->
</section>

@include('layouts.footer')
@endsection



