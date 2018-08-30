@extends('layouts.master-studio')
@section('title', 'Paket List')
@section('content')
<section class="innerpage-wrapper">
    <div id="search-result-page" class="top-section-padding">
        <div class="container"></div>
    </div>
</section>

<section class="innerpage-wrapper">
	<div id="hotel-listing" class="bottom-padding">
        <div class="container">
            <div class="row">     

                <div class="col-xs-12 col-sm-12 col-md-4 side-bar left-side-bar" >
                    <div class="col-xs-12 col-sm-12 col-md-12">            
                        <div class="side-bar-block filter-block ">
                            <h3>Filter Harga</h3>
                            <br>
                            <form role="form" action="{{ route('search.kebaya') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                
                                <div class="padding-price">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label style="color: white;">Min Price</label>
                                                <div class="input-group md-12 xs-12 sm-12"> 
                                                    <span class="input-group-addon">Rp</span>
                                                    <input class="form-control number" placeholder="Min Price" name="min_price" min="0">
                                                </div>

                                            </div>        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label style="color: white;">Max Price</label>
                                                <div class="input-group"> 
                                                    <span class="input-group-addon">Rp</span>
                                                    <input class="form-control number" placeholder="Max Price" name="max_price" min="0">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 style="margin-bottom: 20px;">Filter Ukuran</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-check col-sm-12 col-md-3">
                                              <input class="form-check-input" type="radio" name="size" id="exampleRadios1" value="S" checked>
                                              <label class="form-check-label" for="exampleRadios1" style="color: white">
                                                S
                                              </label>
                                            </div>
                                            <div class="form-check col-sm-12 col-md-3">
                                              <input class="form-check-input" type="radio" name="size" id="exampleRadios1" value="M" >
                                              <label class="form-check-label" for="exampleRadios1" style="color: white">
                                                M
                                              </label>
                                            </div> 
                                            <div class="form-check col-sm-12 col-md-3">
                                              <input class="form-check-input" type="radio" name="size" id="exampleRadios1" value="L" >
                                              <label class="form-check-label" for="exampleRadios1" style="color: white">
                                                L
                                              </label>
                                            </div>
                                            <div class="form-check col-sm-12 col-md-3">
                                              <input class="form-check-input" type="radio" name="size" id="exampleRadios1" value="XL" >
                                              <label class="form-check-label" for="exampleRadios1" style="color: white">
                                                XL
                                              </label>
                                            </div>              
                                        </div>    
                                    </div>
                                    <hr>
                                    <h3 style="margin-bottom: 20px;">Filter Tipe Paket</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group" >
                                                <select  class="form-control" name="type" required>
                                                    <option selected value="All_type">Semua</option>
                                                    <option value="Setelan">Setelan</option>
                                                    <option value="Atasan">Atasan</option>
                                                    <option value="Bawahan">Bawahan</option>
                                                </select>
                                            </div>             
                                        </div>    
                                    </div>
                                    <!-- <hr>
                                    <h3 style="margin-bottom: 20px;">Filter Tipe Warna</h3>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group" >
                                                <select  class="form-control" name="type" required>
                                                    <option selected value="All_type">Semua</option>
                                                    <option value="A La Carte">Ala Carte</option>
                                                    <option value="Special Package">Special Package</option>
                                                    <option value="Special Studio">Special Studio</option>
                                                </select>
                                            </div>             
                                        </div>    
                                    </div> -->
                                    <hr>
                                    <div style="margin-top: 10px;" class="padding-price">
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" name="tag_id" value="{{$tag_id}}" hidden="">
                                            <button type="submit" class="btn btn-default" style="width: 100%;">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
                    <div class="col-sm-12 col-md-12">
                        @if(empty($tema->tema_name))
                        <h3><b><span style="color: #EA410C;">Semua Tema</span> di <span style="color: #EA410C;">Kota Surabaya</span></b></h3> 
                        @else
                        <h3><b>Tema <span style="color: #EA410C;">{{$tema->tema_name}}</span> di <span style="color: #EA410C;">Kota Surabaya</span></b></h3> 
                        @endif
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content-side">
                    @foreach($allThemes as $data)
                    <div class="col-sm-6 col-md-4">
                        @include('search-result.kebaya.paket')
                    </div>
                    @endforeach
                </div>

        	</div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection

@section('script')
<script type="text/javascript">
    $('input.number').keyup(function(event) {

      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;

      // format number
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        ;
      });
    });
</script>
@endsection