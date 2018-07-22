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
                            <li><a href="#dsh-wishlist" data-toggle="tab"><span><i class="fa fa-heart"></i></span>Riwayat</a></li>
                        </ul>
                    	
                        <div class="tab-content">                            
                            <div id="dsh-profile" class="tab-pane fade in active">
                            	<div class="dashboard-content user-profile">
                                    <h2 class="dash-content-title">Profil Ku</h2>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h4>Detail Profil</h4></div>
                                        <div class="panel-body">
                                            <div class="row">                                                
                                                <div class="col-sm-12 col-md-8  user-detail">
                                                    <ul class="list-unstyled">
                                                        <li><span>Name:</span> Lisa Jorge</li>
                                                        <li><span>Date of Birth:</span> 25 Jan 1987</li>
                                                        <li><span>Email:</span> youremail@gmail.com</li>
                                                        <li><span>Phone:</span> +31 123 456 7890</li>
                                                        <li><span>Address:</span> 23 Block, Lorem Ipsum, California.</li>
                                                        <li><span>Country:</span> United States of America</li>
                                                    </ul>
                                                    <button class="btn" data-toggle="modal" data-target="#edit-profile">Edit Profile</button>
                                                </div><!-- end columns -->
                                                
                                                <div class="col-sm-12 user-desc">
                                                    <h4>About You</h4>
                                                    <p>Vestibulum tristique, justo eu sollicitudin sagittis, metus dolor eleifend urna, quis scelerisque purus quam nec ligula. Suspendisse iaculis odio odio, ac vehicula nisi faucibus eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse posuere semper sem ac aliquet. Duis vel bibendum tellus, eu hendrerit sapien. Proin fringilla, enim vel lobortis viverra, augue orci fringilla diam, sed cursus elit mi vel lacus. Nulla facilisi. Fusce sagittis, magna non vehicula gravida, ante arcu pulvinar arcu, aliquet luctus arcu purus sit amet sem. Mauris blandit odio sed nisi porttitor egestas. Mauris in quam interdum purus vehicula rutrum quis in sem. Integer interdum lectus at nulla dictum luctus. Sed risus felis, posuere id condimentum non, egestas pulvinar enim. Praesent pretium risus eget nisi ullamcorper fermentum. Duis lacinia nisi ac rhoncus vestibulum.</p>
                                                
                                                </div><!-- end columns -->
                                            </div><!-- end row -->
                                            
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-detault -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-profile -->
                            
                            <div id="dsh-booking" class="tab-pane fade">
                            	<div class="dashboard-content booking-trips">
                                    <h2 class="dash-content-title">Trips You have Booked!</h2>
                                    <div class="dashboard-listing booking-listing">
                                        <div class="dash-listing-heading">
                                            <div class="custom-radio">
                                                <input type="radio" id="radio01" name="radio" checked/>
                                                <label for="radio01"><span></span>All Types</label>
                                            </div><!-- end custom-radio -->
                                                
                                            <div class="custom-radio">
                                                <input type="radio" id="radio02" name="radio" />
                                                <label for="radio02"><span></span>Hotels</label>
                                            </div><!-- end custom-radio -->
                                            
                                            <div class="custom-radio">
                                                <input type="radio" id="radio03" name="radio" />
                                                <label for="radio03"><span></span>Flights</label>
                                            </div><!-- end custom-radio -->
                                            
                                            <div class="custom-radio">
                                                <input type="radio" id="radio04" name="radio" />
                                                <label for="radio04"><span></span>Cars</label>
                                            </div><!-- end custom-radio -->
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>Tom's Restaurant</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                            </ul>
                                                            <button class="btn btn-orange">Message</button>
                                                        </td>
                                                        <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">Approve</button></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>Tom's Restaurant</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                            </ul>
                                                            <button class="btn btn-orange">Message</button>
                                                        </td>
                                                        <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">Approve</button></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td class="dash-list-icon booking-list-date"><div class="b-date"><h3>18</h3><p>October</p></div></td>
                                                        <td class="dash-list-text booking-list-detail">
                                                            <h3>Tom's Restaurant</h3>
                                                            <ul class="list-unstyled booking-info">
                                                                <li><span>Booking Date:</span> 26.12.2017 at 03:20 pm</li>
                                                                <li><span>Booking Details:</span> 3 to 6 People</li>
                                                                <li><span>Client:</span> Lisa Smith<span class="line">|</span>lisasmith@youremail.com<span class="line">|</span>125 254 2578</li>
                                                            </ul>
                                                            <button class="btn btn-orange">Message</button>
                                                        </td>
                                                        <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">Approve</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end table-responsive -->
                                    </div><!-- end booking-listings -->
                                </div><!-- end dashboard-content -->
                            </div><!-- end dsh-booking -->
                            
                            <div id="dsh-wishlist" class="tab-pane fade">
                            	<div class="dashboard-content wishlist">
                                    <h2 class="dash-content-title">Your Wish List</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
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

@include('layouts.footer')
@endsection