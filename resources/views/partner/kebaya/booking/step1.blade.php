@extends('partner.layouts.app-form')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p><span class="badge badge-primary">Step 1 : Pilih Kebaya</span> </p>
                                <p></p>
                            </div>
                            <div class="content">
                              <div class="row">
                                  @foreach($package as $key => $data)
                                  <div class="col-md-2 col-sm-12">
                                    <div class="card">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <div class="header">
                                            <h5 style="text-align: center;">{{$data->name}}</h5>
                                          </div>
                                          <div class="content">

                                            <div class="row">
                                              <div class="col-sm-12 col-md-12">
                                                @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->image.".JPG")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->image.".JPEG")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPEG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->image.".PNG")))
                                                <img style="height: auto; width: 100px; margin: 0 auto; float: none; position: relative;display: flex;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.PNG')  }}" alt= "Package Image" />
                                                @endif
                                              </div>
                                              <div class="col-sm-12 col-md-12" style="padding: 25px;">
                                                <a href="{{route('kebaya.off-booking.step2', ['product_id' => $data->id])}}" >
                                                  <button type="submit" class="btn btn-primary" style="margin: 0 auto; float: none; position: relative;display: flex;">Pesan</button>
                                                </a>
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