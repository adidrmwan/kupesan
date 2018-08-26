<div class="item" style="padding: 10px;">
  <div class="main-block hotel-block ">
      <div class="main-img img-hover">
          <a class="image-popup-fit-width" href="{{ URL::asset('img_pkg/'.$listthem->pkg_img_them.'.jpg')  }}" >
            @if(File::exists(public_path("img_pkg/".$listthem->pkg_img_them.".jpg")))
              <img style="height: 350px; width: auto;" class="img-responsive" src="{{ URL::asset('img_pkg/'.$listthem->pkg_img_them.'.jpg')  }}" id="myImg" alt= "Package Image" /> 
            @elseif(File::exists(public_path("img_pkg/".$listthem->pkg_img_them.".jpeg")))
              <img style="height: 350px; width: auto;" class="img-responsive" src="{{ URL::asset('img_pkg/'.$listthem->pkg_img_them.'.jpeg')  }}" id="myImg" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$listthem->pkg_img_them.".png")))
              <img style="height: 350px; width: auto;" class="img-responsive" src="{{ URL::asset('img_pkg/'.$listthem->pkg_img_them.'.png')  }}" id="myImg" alt= "Package Image" />
            @endif
          </a>
          <div class="main-mask">
            <ul class="list-unstyled list-inline offer-price-1">
                <li class="price" style="color: white;">{{$listthem->pkg_name_them}}</li>
              </ul>
          </div>
      </div>
      
      <div class="main-info hotel-info">
          <div class="main-title hotel-title">
              
            <p><span>Rp</span>&nbsp;&nbsp;{{number_format($listthem->pkg_price_them)}} / Jam </p>
            <p><span>Rp</span>&nbsp;&nbsp;{{number_format($listthem->pkg_overtime_them)}} / Overtime</p>
            
            <a href="{{route('ask.page', ['package_id' => $listthem->id])}}">
              <button type="submit" class="btn btn-orange pull-right" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Pesan</span>
              </button>
            </a>
            
          </div>
      </div>
  </div>
</div>