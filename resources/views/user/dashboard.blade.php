@extends('user.layouts.app')
@section('title', 'Dashboard')
@section('content')

<section class="innerpage-wrapper">
	<div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                	<div class="dashboard-heading">
                        <p>Hai Arsya, Selamat Datang di kupesan.id !</p>
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
                                                        <li><span>Nama  :</span> <br>Arsya Darmawan</li>
                                                        <li><span>Email :</span> <br> arsyadarmawan@gmail.com</li>
                                                        <li><span>Phone :</span> <br> +6289 456 7890</li>
                                                    </ul>
                                                    <div class="col-sm-12 col-md-4" style="margin-top: 3%">
                                                        <button class="btn" data-toggle="modal" data-target="#edit-profile">Update Profile</button>    
                                                    </div>
                                                    
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
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date">
                                                            <div class="b-date"><p>18 October 2018</p></div>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>Studio Kupesan</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Tanggal Pemesanan:</span> 26.12.2017 at 03:20 pm</li>
                                                                <li><span>Detail Pesanan:</span> 3 to 6 People</li>
                                                                <li><span>Nama Pemesan:</span> Arsya Darmawan</span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    
                                                   <tr>
                                                        <td class="dash-list-icon booking-list-date">
                                                            <div class="b-date"><p>18 October 2018</p></div>
                                                        </td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>Studio Kupesan</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Tanggal Pemesanan:</span> 26.12.2017 at 03:20 pm</li>
                                                                <li><span>Detail Pesanan:</span> 3 to 6 People</li>
                                                                <li><span>Nama Pemesan:</span> Arsya Darmawan</span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-booking -->
                            
                            <div id="dsh-wishlist" class="tab-pane fade">
                            	<div class="dashboard-content wishlist">
                                    <h2 class="dash-content-title">Riwayat PesananKU</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr class="list-content">
                                                    <td class="list-text wishlist-text">
                                                        <h3>Studio Kupesan</h3>
                                                        <p>
                                                            <span>Nama Pemesan :</span> Arsya Darmawan <br>
                                                            <span>Tanggal Pemesan :</span> 18 Oktober 2018
                                                        </p>
                                                        <p class="order"><span>Total:</span> $548</p>
                                                    </td>
                                                    
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-text wishlist-text">
                                                        <h3>Studio Kupesan</h3>
                                                        <p>
                                                            <span>Nama Pemesan :</span> Arsya Darmawan <br>
                                                            <span>Tanggal Pemesan :</span> 18 Oktober 2018
                                                        </p>
                                                        <p class="order"><span>Total:</span> $548</p>
                                                    </td>
                                                    
                                                </tr>
                                             </tbody>
                                         </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-wishlist -->
                            
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