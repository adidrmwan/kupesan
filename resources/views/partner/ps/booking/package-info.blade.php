@foreach($package as $key => $data)
<div class="col-sm-8 col-xs-12 col-md-4 col-lg-4">
  <div class="card">
    <div class="row">
      <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <div class="header">
          <h4 class="title text-uppercase" style="text-align: center;"><b>{{$data->pkg_name_them}}</b></h4>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-lg-12">
              <table class="table">
                <tr>
                  <th colspan="2">
                    @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                    <img style="height: auto; width: 250px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                    @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                    <img style="height: auto; width: 250px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                    @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                    <img style="height: auto; width: 250px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                    @endif
                  </th>
                </tr>
                <tr>
                    <th >Harga Paket</th>
                    <td >Rp {{$data->pkg_price_them}}</td>
                </tr>
                <tr>
                    <th >Harga Overtime</th>
                    <td >Rp {{$data->pkg_overtime_them}}</td>
                </tr>
                <tr>
                    <th >Photografer</th>
                    <td >{{$data->pkg_fotografer}}</td>
                </tr>
                <tr>
                    <th >Print Size</th>
                    <td >{{$data->pkg_print_size}} R</td>
                </tr>
                <tr>
                    <th >Edited Photo</th>
                    <td >{{$data->pkg_edited_photo}} lembar</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach