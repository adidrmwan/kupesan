<div class="card">
  <div class="row">
    <div class="col-md-12">
      <div class="header">
        <h4 class="title" style="text-align: center;">{{$data->name}}</h4>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$data->image.".JPG")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPG')  }}" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$data->image.".JPEG")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPEG')  }}" alt= "Package Image" />
            @elseif(File::exists(public_path("img_pkg/".$data->image.".PNG")))
            <img style="height: auto; width: 150px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.PNG')  }}" alt= "Package Image" />
            @endif
          </div>
          <div class="col-sm-12 col-md-12" style="padding: 25px;">
            <table class="table">
              <tbody>
                <tr>
                  <th>Tipe Kebaya</th>
                  <td style="text-align: right;">{{$data->category}}</td>
                </tr>
                <tr>
                  <th>Ukuran</th>
                  <td style="text-align: right;">{{$data->size}}</td>
                </tr>
                <tr>
                  <th>Biaya Sewa/hari</th>
                  <td style="text-align: right;">Rp {{number_format($data->price)}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>