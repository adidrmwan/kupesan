@extends('partner.layouts.app-ps')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8">
                <div class="card">
                  <form role="form" action="{{ route('form.offline.step2.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p><span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> <span class="badge badge-primary">Step 2 : Pilih Tanggal</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                                <div class="row">
                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                      <div class="row">
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                  <label>Pilih Tanggal Booking</label>
                                                  <div id="datepicker"></div>            
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                  <label>Tanggal Terpilih</label>
                                                  <input type="text" class="form-control" id="datepicker2" name="booking_date">   
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="package_id" value="{{$package_id}}" hidden="">
                                    <button type="submit" class="btn btn-block btn-info pull-right">Submit</button> 
                                  </div>
                                </div>     
                            </div> 
                        </div>     
                    </div>
                  </form>
                </div>
            </div>
            @include('partner.ps.booking.package-info')
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