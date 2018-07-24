@extends('layouts.app')
@section('title', 'Pesan')
@section('content')
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="booking" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 side-bar left-side-bar">
                            <div class="row">
                            
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                            <div class="side-bar-block detail-block style2 text-center">
                                                <div class="col-xs-12 col-sm-6 col-md-12">
                                                    <div class="side-bar-block detail-block style2 text-center">
                                                        <div class="detail-img text-center">
                                                            <img src="dist/images/mua.png" class="img-responsive" alt="detail-img"/>
                                                        </div><!-- end detail-img -->
                                                        
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nama Studio</td>
                                                                        <td>Kupesan Studio</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga</td>
                                                                        <td>Rp. 300.000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><!-- end table-responsive -->
                                                    </div><!-- end side-bar-block -->
                                        </div><!-- end columns -->                                
                                    </div><!-- end row -->
                                </div><!-- end columns -->                                
                            </div><!-- end row -->
                        
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 content-side">
                            <div class="lg-booking-form-heading">
                                    
                                    <h3>Pesan</h3>
                                </div><!-- end lg-bform-heading -->
                            <div class="panel panel-default" style="margin-top: 35px;">
                                <div class="panel-heading"><h4>Informasi Pesanan-KU</h4></div>
                                <div class="panel-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-12 col-md-12  user-detail">
                                            <form class="lg-booking-form">
                                                <div class="personal-info">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Mulai</label>
                                                                <input type="time" class="form-control" required/>
                                                            </div>
                                                        </div><!-- end columns -->
                                                        
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Selesai</label>
                                                                <input type="time" class="form-control" required/>
                                                            </div>
                                                        </div><!-- end columns -->
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Orang</label>
                                                                <input type="text" class="form-control" required/>
                                                            </div>
                                                        </div><!-- end columns -->
                                                    </div><!-- end row -->                                                                                                 
                                                </div><!-- end personal-info -->
                                                            
                                            </form>
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <form class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <button type="submit" class="btn btn-orange" style="float: right;">Pesan</button>
                                </div>
                            </form>
                            
                        </div><!-- end columns -->
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection

