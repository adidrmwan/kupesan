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
                                                @foreach($package as $data)
                                                <div class="detail-img text-center">
                                                    <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" /> 
                                                </div><!-- end detail-img -->
                                                        
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td class="pull-left">Nama Studio</td>
                                                                <td class="pull-right">{{$partner->pr_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Nama Paket</td>
                                                                <td class="pull-right">{{$data->pkg_name_them}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pull-left">Harga Paket / Jam</td>
                                                                <td class="pull-right">Rp {{$data->pkg_price_them}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- end table-responsive -->
                                                @endforeach
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
                                            <form role="form" action="{{ route('form.pesan') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                            {{ csrf_field() }}
                                                <div class="personal-info">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Mulai</label>    
                                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="booking_start_time" required="">
                                                                    <option selected value="">Pilih Jam Mulai</option>
                                                                    @foreach($jam_mulai as $data)
                                                                    <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Jam Selesai</label>    
                                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="booking_end_time" required="">
                                                                    <option selected value="">Pilih Jam Selesai</option>
                                                                    @foreach($jam_selesai as $data)
                                                                    <option value="{{$data->num_hour}}">{{$data->num_hour}}:00</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Kapasitas Orang</label>
                                                                <input type="text" class="form-control" placeholder="Kapasitas orang" name="booking_capacities" required="">
                                                            </div>
                                                        </div><!-- end columns -->
                                                        <input type="text" name="pid" value="{{$pid}}" hidden="">
                                                        <input type="text" name="prc" value="{{$prc}}" hidden="">
                                                        <input type="text" name="pname" value="{{$pname}}" hidden="">
                                                        <input type="text" name="bdte" value="{{$bdte}}" hidden="">
                                                    </div><!-- end row -->                                                                                                 
                                                </div><!-- end personal-info -->
                                                            
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                    
                                </div><!-- end panel-body -->
                            </div><!-- end panel-detault -->
        
                            <div class="lg-booking-form">
                                <div class="checkbox col-xs-12 col-sm-12 col-md-8 col-lg-8"  >
                                    <label> By continuing, you are agree to the <a href="#">Terms and Conditions.</a></label>
                                </div><!-- end checkbox -->
                                <div class="checkbox col-xs-12 col-sm-12 col-md-4 col-lg-4"  >
                                    <button type="submit" class="btn btn-orange" style="float: right;">Pesan</button>
                                </div>
                            </div>
                        </form> 
                        </div><!-- end columns -->
                </div><!-- end container -->         
            </div><!-- end flight-booking -->
        </section><!-- end innerpage-wrapper -->


@include('layouts.footer')
@endsection

