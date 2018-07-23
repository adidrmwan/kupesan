@extends('layouts.master-studio')
@section('title', 'Studio List')
@section('content')

<section class="page-cover" id="cover-hotel-grid-list" style="margin-top: 4.5%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            	<h1 class="page-title">Studio List</h1>
                <h5> By kupesan.id</h5>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->
        
        
<section class="innerpage-wrapper">
    <div id="search-result-page" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                    <div class="page-search-form">
                        <h2>Studio <span>Foto <i class="fa fa-building"></i></span></h2>
                        
                        <form class="pg-search-form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label><span><i class="fa fa-calendar"></i></span>Tanggal Foto</label>
                                         <input type="text" class="form-control dpd1" placeholder="Tanggal Foto" name="tanggal_pesan">
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label><span><i class="fa fa-hashtag"></i></span>Hashtag</label>
                                        <input type="text" class="form-control" placeholder="hashtag"/> 
                                    </div>
                                </div><!-- end columns -->
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-top: 1%;">
                                    <button class="btn btn-orange">Ganti Pencarian</button>
                                </div>
                            </div><!-- end row -->

                        </form>
                         
                    </div><!-- end page-search-form -->
                </div>                    
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-result-page -->
</section><!-- end innerpage-wrapper -->

@include('layouts.footer')
@endsection