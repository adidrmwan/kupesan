@extends('layouts.app')
@section('title', 'Pesan')
@section('content')
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="booking" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
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
                                                
                                                         
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <div class="lg-booking-form">
                                <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <a href="">
                                        <button type="submit" class="btn btn-orange" style="float: right;"><span style="color: white; text-decoration: none;">Lanjutkan</span>
                                        </button>
                                    </a>
                                </div>
                            </div> 
                        </div>
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection



