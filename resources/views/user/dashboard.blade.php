@extends('user.layouts.app')
@section('title', 'Dashboard')
@section('content')

<section class="innerpage-wrapper">
	<div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                	<div class="dashboard-heading">
                        @foreach($user as $data)
                        <p>Hai {{$data->first_name}} {{$data->last_name}}, Selamat Datang di kupesan.id !</p>
                        @endforeach
                        <p>Semoga harimu indah</p>
                    </div><!-- end dashboard-heading -->
                	
                    
                    <div id="dashboard-tabs">
                    	<ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#dsh-profile" data-toggle="tab"><span><i class="fa fa-user"></i></span>Profil</a></li>
                            <li><a href="#dsh-booking" data-toggle="tab"><span><i class="fa fa-briefcase"></i></span>Pesanan</a></li>
                            <li><a href="#dsh-wishlist" data-toggle="tab"><span><i class="fa fa-history"></i></span>Riwayat</a></li>
                        </ul>
                    	
                        <div class="tab-content">                            
                            <div id="dsh-profile" class="tab-pane fade in active">
                            	<div class="dashboard-content user-profile">
                                    <h2 class="dash-content-title">Profil Ku</h2>
                                    <div class="panel panel-default ">

                                        <div class="panel-heading"><h4>Detail Profil</h4></div>
                                        <div class="panel-body">
                                            <div class="row">                                                
                                                <div class="col-sm-12 col-md-12  user-detail">
                                                    <ul class="list-unstyled">
                                                        @foreach($user as $data)
                                                        <li><span>Nama  :</span> <br> {{$data->first_name}} {{$data->last_name}}</li>
                                                        <li><span>Email :</span> <br> {{$data->email}}</li>
                                                        <li><span>No Hp :</span> <br> {{$data->phone_number}}</li>
                                                        @endforeach
                                                    </ul>
                                                    <!-- <div class="col-sm-12 col-md-4" style="margin-top: 3%">
                                                        <button class="btn" data-toggle="modal" data-target="#edit-profile">Update Profile</button>    
                                                    </div> -->
                                                    
                                                </div><!-- end columns -->                                        
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="dsh-booking" class="tab-pane fade">
                            	<div class="dashboard-content booking-trips">
                                    <h2 class="dash-content-title">PesananKU</h2>

                                    <div class="dashboard-listing booking-listing">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    @foreach($pesanan as $listpesanan)
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date">
                                                            <div class="b-date"><p>{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</p></div>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>{{$listpesanan->partner_name}}</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li>Kode Booking :<span class="pull-right">{{$listpesanan->kode_booking}}</span></li>
                                                                <li>Nama Pemesan :<span class="pull-right">{{$listpesanan->booking_user_name}}</span></li>
                                                                <li>Tanggal :<span class="pull-right">{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <br>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Detail Pemesanan</span></li>
                                                                <li>Jam Pesan :<span class="pull-right">{{$listpesanan->booking_start_time}}:00 - {{$listpesanan->booking_end_time + $listpesanan->booking_overtime}}:00</span></li>
                                                                <li>Tamu :<span class="pull-right">{{$listpesanan->booking_capacities}} Orang</span></li>
                                                                <li>Total Harga :<span class="pull-right"> Rp {{$listpesanan->booking_total}}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <div class="checkbox">
                                                                <form role="form" action="{{ route('form.konfirmasi') }}" method="post" enctype="multipart/form-data" class="lg-booking-form">
                                                                {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-orange" style="float: right; color: white;"><b>Konfirmasi Pembayaran</b></button>
                                                                    <input type="text" name="bid" value="{{$listpesanan->booking_id}}" hidden="">
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr></tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="dashboard-listing booking-listing">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    @foreach($pesanan_paid as $listpesanan)
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date">
                                                            <div class="b-date"><p>{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</p></div>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>{{$listpesanan->partner_name}}</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li>Kode Booking :<span class="pull-right">{{$listpesanan->kode_booking}}</span></li>
                                                                <li>Nama Pemesan :<span class="pull-right">{{$listpesanan->booking_user_name}}</span></li>
                                                                <li>Tanggal :<span class="pull-right">{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <br>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Detail Pemesanan</span></li>
                                                                <li>Jam Pesan :<span class="pull-right">{{$listpesanan->booking_start_time}}:00 - {{$listpesanan->booking_end_time + $listpesanan->booking_overtime}}:00</span></li>
                                                                <li>Tamu :<span class="pull-right">{{$listpesanan->booking_capacities}} Orang</span></li>
                                                                <li>Total Harga :<span class="pull-right"> Rp {{$listpesanan->booking_total}}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <div class="checkbox">
                                                                <a><button class="btn btn-warning" style="float: right; color: white;"><b>Tunggu Konfirmasi</b></button>
                                                                </a>
                                                                    
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr></tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="dashboard-listing booking-listing">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    @foreach($pesanan_confirmed as $listpesanan)
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date">
                                                            <div class="b-date"><p>{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</p></div>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>{{$listpesanan->partner_name}}</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li>Kode Booking :<span class="pull-right">{{$listpesanan->kode_booking}}</span></li>
                                                                <li>Nama Pemesan :<span class="pull-right">{{$listpesanan->booking_user_name}}</span></li>
                                                                <li>Tanggal :<span class="pull-right">{{ date('d F Y', strtotime($listpesanan->booking_start_date)) }}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <br>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Detail Pemesanan</span></li>
                                                                <li>Jam Pesan :<span class="pull-right">{{$listpesanan->booking_start_time}}:00 - {{$listpesanan->booking_end_time + $listpesanan->booking_overtime}}:00</span></li>
                                                                <li>Tamu :<span class="pull-right">{{$listpesanan->booking_capacities}} Orang</span></li>
                                                                <li>Total Harga :<span class="pull-right"> Rp {{$listpesanan->booking_total}}</span></li>
                                                            </ul>
                                                        </td>
                                                        <td></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <div class="checkbox">
                                                                <a><button class="btn btn-success" style="float: right; color: white;"><b>Pembayaran Berhasil</b></button>
                                                                </a>
                                                                    
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr></tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-booking -->
                            <div id="dsh-wishlist" class="tab-pane fade">
                            	<div class="dashboard-content wishlist">
                                    <h2 class="dash-content-title">Riwayat PesananKU</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($riwayat as $data)
                                                <tr class="list-content">
                                                    <td class="list-text wishlist-text">
                                                        <h3>{{$data->partner_name}}</h3>
                                                        <p>
                                                            <span>Nama Pemesan :</span> {{$data->booking_user_name}}<br>
                                                            <span>Tanggal :</span> {{ date('d F Y', strtotime($data->booking_start_date)) }}
                                                        </p>
                                                        <p class="order"><span>Total:</span> Rp {{$data->booking_total}}</p>
                                                    </td>
                                                    <td class="list-text wishlist-text">
                                                        <br>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Detail Pemesanan</span></li>
                                                                <li>Jam Pesan :<span class="pull-right">{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}}}:00</span></li>
                                                                <li>Tamu :<span class="pull-right">{{$data->booking_capacities}} Orang</span></li>
                                                                <li>Total Harga :<span class="pull-right"> Rp {{$data->booking_total}}</span></li>
                                                            </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                             </tbody>
                                         </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-wishlist -->
                            </div>
                            
                            <div id="dsh-cards" class="tab-pane fade">
                            	<div class="dashboard-content my-cards">
                                    <h2 class="dash-content-title">Credit/Debit Cards</h2>
                                    <div class="row">
                                    
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <div class="primary-tag">
                                                    <h4>Primary</h4>
                                                </div><!-- end primary-tag -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <a href="#add-card" data-toggle="modal">
                                                <div class="card-block add-card">
                                                    <span><i class="fa fa-plus-circle"></i></span> 
                                                    <h4>Add New Card</h4>
                                                </div><!-- end card-block -->
                                            </a>
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end cards -->
                            
                        </div><!-- end tab-content -->
                    </div><!-- end dashboard-tabs -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->   
    </div><!-- end contact-us -->
</section><!-- end innerpage-wrapper -->

<div id="edit-profile" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Edit Profile</h3>
            </div><!-- end modal-header -->
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Name"/>
                    </div><!-- end form-group -->
                    
                    <div class="form-group">
                        <label>Your Email</label>
                        <input type="email" class="form-control" placeholder="Email" />
                    </div><!-- end form-group -->
                    
                    <div class="form-group">
                        <label>Your Phone</label>
                        <input type="text" class="form-control" placeholder="Phone Number" />
                    </div><!-- end form-group -->
                    <button class="btn btn-orange">Save Changes</button>
                </form>
            </div><!-- end modal-bpdy -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end edit-profile -->

@include('layouts.footer')
@endsection