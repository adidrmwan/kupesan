<div class="main-block flight-block">
    <div class="frame" style="">
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->image.'.jpg')  }}">
                @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                <img class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" style="max-width: 100%;height: auto; margin: 0 auto; display: block; float: none;position: relative;" />
            </a>
        </div>
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}">
                @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                <img class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" style="max-width: 100%;height: auto; margin: 0 auto; display: block; float: none;position: relative;"/>
            </a>
        </div>
        <div class="img-hover">
            <a class="image-popup-no-margins" href="{{ asset('img_pkg/'.$data->image.'.png')  }}">
                @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                <img class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" style="max-width: 100%;height: auto; margin: 0 auto; display: block; float: none;position: relative;" />
                @endif
            </a>
        </div><!-- end flight-img -->
        <div class = "details">
            <br>
            <br>
            <br>
            <p style="color: white; margin-left: 25%;">
                <b>Set :</b> {{$data->set}} <br>
                <b>Size :</b> {{$data->size}}   <br>
                <b>Stock :</b> {{$data->quantity}}<br>
                @if($data->price_dryclean == '0')
                <b>Dryclean :</b> Exclude<br>
                @elseif($data->price_dryclean != '0')
                <b>Dryclean :</b> Include<br>
                @endif
            </p>
        </div>
    </div>
    
    
    <div class="flight-info">
        <div class="flight-title" style="text-align: center;">
            <h3>{{$data->partner_name}}</h3>
        </div><!-- end flight-title -->
        
        <ul class="list-unstyled list-inline offer-price-1">
            <li class="price">{{$data->name}} <b>{{$data->size}}</b></li><br>
            @if(Auth::check())
            <li >Rp {{ number_format($data->price, 0, ',', '.') }} / Paket</li><br>
            @endif
            <!-- <li >Rp {{$data->pkg_overtime_them}} / Overtime</li><br> -->
            <li>
                <a href="{{route('kebaya.step1', ['package_id' => $data->id])}}">
                    <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">Pesan</span>
                    </button>
                </a>
            </li>
            <li >
                <a href="{{route('detail.kebaya', ['id' => $data->partner_id])}}">
                    <button type="submit" class="btn btn-orange" style=" padding: 5px 15px; margin-top: 6px;"><span style="color: white; text-decoration: none;">View More</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</div>