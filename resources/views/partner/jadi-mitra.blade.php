@extends('layouts.app')
@section('title', 'Jadi PARTNER-KU')
@section('content')

<section class="innerpage-wrapper">
	<div id="about-content-2 " class="innerpage-section-padding-mitra">
		<div class="container">
			<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                	<div id="abt-cnt-2-img">
                    	<img src=" {{URL::asset('dist/images/logo-navbar.png')}} " class="img-responsive" alt="about-img" />
                    </div><!-- end abt-cnt-2-img -->
                </div><!-- end columns -->
                
            	<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                	<div id="abt-cnt-2-text">
                        <h2>Jadilah Bagian dari kami</h2>
                        <p>Kami akan menghubungkan anda dengan customer sehingga anda dapat meningkatkan kinerja bisnis anda.</p>
                         <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                                <a href="{{route('mitra.daftar')}}" style="color: white; text-decoration: none;">Daftar PARTNER-KU </a>
                        </button>
                        
                    </div><!-- end abt-cnt-2-text -->
                </div><!-- end columns -->
            </div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end about-content-2 -->
    
    <div id="why-us" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-heading innerpage-heading">
                        <h2>Mengapa jadi mitra kupesan ?</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->
                    
                    <div class="row">

                        <div class="col-sm-6 col-md-3">
			                <div class="b-feature-block">
			                    <span><i class="fa fa-briefcase"></i></span>
			                    <h3>Pemasaran bisnis secara gratis</h3>
			                    
			                </div><!-- end b-feature-block -->
			           </div><!-- end columns -->
           
			           <div class="col-sm-6 col-md-3">
			                <div class="b-feature-block">
			                    <span><i class="fa fa-arrows-alt"></i></span>
			                    <h3>Memperluas target konsumen</h3>
			                    
			                </div><!-- end b-feature-block -->
			           </div><!-- end columns -->
			           
			           <div class="col-sm-6 col-md-3">
			                <div class="b-feature-block">
			                    <span><i class="fa fa-thumbs-up"></i></span>
			                    <h3>Pembayaran terjamin</h3>
			                    
			                </div><!-- end b-feature-block -->
			           </div><!-- end columns -->
			           <div class="col-sm-6 col-md-3">
			                <div class="b-feature-block">
			                    <span><i class="fa fa-users"></i></span>
			                    <h3>Program Customer Relationship Management</h3>
			                    
			                </div><!-- end b-feature-block -->
			           </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->
           </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end why-us -->
    
</section><!-- end innerpage-wrapper -->

@include('layouts.footer')
@endsection
