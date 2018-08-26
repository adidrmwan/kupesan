<div class="main-block flight-block">
    <div class="frame">
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">

                    @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                    <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
            </a>
        </div>
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">
                    @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                    <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;"/>
            </a>
        </div>
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}">
                    @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                    <img class="" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" style="max-width: 100%; height: 250px;" />
                    @endif
            </a>
        </div><!-- end flight-img -->
        <div class = "details">
            <br>
            <br>
            <br>
            <p style="text-align: center; color: white;">
                <b>Type :</b> {{$data->pkg_category_them}} <br>
                <b>Photografer :</b> {{$data->pkg_fotografer}}   <br>
                <b>Print Size :</b> {{$data->pkg_print_size}}<br>
                <b>Edited Photo :</b> {{$data->pkg_edited_photo}}
            </p>
        </div>
    </div>
    
    
    <div class="flight-info">
        <div class="flight-title" style="text-align: center;">
            <h3>{{$data->partner_name}}</h3>
        </div><!-- end flight-title -->
        
        <ul class="list-unstyled list-inline offer-price-1">
            <li class="price">{{$data->pkg_name_them}}</li><br>

            <li >Rp {{ number_format($data->pkg_price_them) }} / Jam</li><br>
            <!-- <li >Rp {{$data->pkg_overtime_them}} / Overtime</li><br> -->
            <li>
                <a href="{{route('ask.page', ['package_id' => $data->id])}}">
                    <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Pesan</span>
                    </button>
                </a>
            </li>
            <li >
                <a href="{{route('detail.fotostudio', ['id' => $data->user_id])}}">
                    <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">View More</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</div>