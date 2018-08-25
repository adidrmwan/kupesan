@extends('partner.layouts.app-ps')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                <div class="card">
                  <form role="form" action="{{ route('form.dayoff.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p><span class="badge badge-primary">Step 1 : Pilih Paket Studio</span> </p>
                                <p></p>
                                <div class="bd-example bd-example-tabs">
                                  <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#carte" role="tab" aria-controls="home" aria-expanded="true">A La Carte</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#package" role="tab" aria-controls="profile" aria-expanded="false">Special Package</a>
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#studio" role="tab" aria-controls="about" aria-expanded="false">Special Studio</a>
                                  </nav>
                                </div>
                            </div>
                            <div class="content">
                              <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade active show" id="carte" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
                                  <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        @foreach($package_carte as $key => $data)
                                        <div class="col-sm-4 col-xs-12 col-md-3 col-lg-2">
                                          <div class="card">
                                            <div class="row">
                                              <div class="col-lg-12">
                                                <div class="content">
                                                  <div class="row">
                                                    <div class="col-lg-12">
                                                      <table class="table">
                                                      <tr>
                                                        <th style="text-align: center;" class="text-uppercase">{{$data->pkg_name_them}}</th>
                                                      </tr>
                                                      <tr>
                                                        @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                                        @endif
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <a href="{{route('form.offline.step2', ['package_id' => $data->id])}}" >
                                                            <span class="btn btn-primary" style="margin: 0 auto; float: none; position: relative;display: flex;">Pilih Paket</span>
                                                          </a>
                                                        </td>
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
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                                <div class="tab-pane fade" id="package" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
                                  <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        @foreach($package_package as $key => $data)
                                        <div class="col-sm-4 col-xs-12 col-md-3 col-lg-2">
                                          <div class="card">
                                            <div class="row">
                                              <div class="col-lg-12">
                                                <div class="content">
                                                  <div class="row">
                                                    <div class="col-lg-12">
                                                      <table class="table">
                                                      <tr>
                                                        <th style="text-align: center;" class="text-uppercase">{{$data->pkg_name_them}}</th>
                                                      </tr>
                                                      <tr>
                                                        @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                                        @endif
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <a href="{{route('form.offline.step2', ['package_id' => $data->id])}}" >
                                                            <span class="btn btn-primary" style="margin: 0 auto; float: none; position: relative;display: flex;">Pilih Paket</span>
                                                          </a>
                                                        </td>
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
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                                <div class="tab-pane fade" id="studio" role="tabpanel" aria-labelledby="nav-about-tab" aria-expanded="false">
                                  <div class="row">
                                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        @foreach($package_studio as $key => $data)
                                        <div class="col-sm-4 col-xs-12 col-md-3 col-lg-2">
                                          <div class="card">
                                            <div class="row">
                                              <div class="col-lg-12">
                                                <div class="content">
                                                  <div class="row">
                                                    <div class="col-lg-12">
                                                      <table class="table">
                                                      <tr>
                                                        <th style="text-align: center;" class="text-uppercase">{{$data->pkg_name_them}}</th>
                                                      </tr>
                                                      <tr>
                                                        @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                                        <img style="height: auto; width: 130px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                                        @endif
                                                      </tr>
                                                      <tr>
                                                        <td>
                                                          <a href="{{route('form.offline.step2', ['package_id' => $data->id])}}" >
                                                            <span class="btn btn-primary" style="margin: 0 auto; float: none; position: relative;display: flex;">Pilih Paket</span>
                                                          </a>
                                                        </td>
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
                                      </div>
                                    </div>
                                  </div> 
                                </div>
                              </div>
                            </div>
                        </div>     
                    </div>
                      
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
<script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>

<script type="text/javascript">
      $('#provinces').on('change', function(e){
        console.log(e);
        var province_id = e.target.value;
        $.get('/json-regencies?province_id=' + province_id,function(data) {
          console.log(data);
          $('#regencies').empty();
          $('#regencies').append('<option value="0" disable="true" selected="true">Pilih Kota/Kabupaten</option>');

          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');

          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">Pilih Kelurahan</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.name +'</option>');
          })
        });
      });

      $('#regencies').on('change', function(e){
        console.log(e);
        var regencies_id = e.target.value;
        $.get('/json-districts?regencies_id=' + regencies_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
          })
        });
      });

      $('#districts').on('change', function(e){
        console.log(e);
        var districts_id = e.target.value;
        $.get('/json-village?districts_id=' + districts_id,function(data) {
          console.log(data);
          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">Pilih Kelurahan</option>');

          $.each(data, function(index, villagesObj){
            $('#villages').append('<option value="'+ villagesObj.id +'">'+ villagesObj.name +'</option>');
          })
        });
      });
    </script>
@endsection