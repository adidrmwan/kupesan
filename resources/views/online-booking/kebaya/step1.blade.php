@extends('layouts.app')
@section('title', 'Booking')
@section('content')
@include('online-booking.kebaya.cover-partner')
        
<!-- STEP 1 - ASK USER IF YOU WANT TO BOOKING, YOU HAVE TO LOG-IN FIRST. -->

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
                                        <h4>Untuk melanjutkan pesanan, Anda harus melakukan <b>LOG-IN</b> terlebih dahulu.<br>Jika belum memiliki akun, Anda dapat mendaftar <a href="{{route('register')}}" style="color: #EA410C;"><b>disini.</b></a></h4>
                                      </div>
                                    </div>         
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg-booking-form">
                        <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                            <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                        </div>

                        <input type="text" name="partner_id" value="{{$partner_id}}" hidden="">
                        <input type="text" name="package_id" value="{{$pid}}" hidden="">
                        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                            <a href="{{route('kebaya.step2', ['package_id' => $pid])}}">
                                <button type="submit" class="btn btn-orange" style="float: right;"><span style="color: white; text-decoration: none;">Log-In</span>
                                </button>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
@endsection



