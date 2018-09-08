@extends('partner.layouts.app-ps')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8">
                <div class="card">
                  <form role="form" action="{{ route('form.offline.step4.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p>
                                  <span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 2</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 3</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-primary">Step 4 : Data Customer + Review</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                                <div class="row">
                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <h5>Data Customer</h5>
                                      </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label><span>Nama</span></label>
                                              <input type="text" class="form-control" name="booking_user_name" placeholder="Nama Customer" required="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label><span>E-mail</span></label>
                                              <input type="text" class="form-control" name="booking_user_email" placeholder="E-mail Customer" required="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label><span>HP</span></label>
                                              <input type="text" class="form-control" name="booking_user_nohp" placeholder="No HP Customer" required="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                  @foreach($review as $key => $data)
                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-6">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <h5>Review</h5>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="card">
                                          <div class="row">
                                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                              <div class="header">
                                                <input type="text" name="total" value="{{$data->total}}" hidden="">

                                              </div>
                                              <div class="content">
                                                <div class="row">
                                                  <div class="col-lg-12">
                                                    <table class="table">
                                                      <tr>
                                                          <th colspan="2 " style="text-align: center;">Detail Pemesanan</th>
                                                      </tr>
                                                      <tr>
                                                          <td >Tanggal</td>
                                                          <td >{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                                                      </tr>
                                                      <tr>
                                                          <td >Jadwal</td>
                                                          <td >
                                                            {{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB<br>
                                                            Durasi Paket : {{$data->booking_end_time - $data->booking_start_time}} Jam ({{$data->booking_start_time}}:00 - {{$data->booking_end_time}}:00 WIB)<br>
                                                            Overtime : {{$data->booking_overtime}} Jam
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <th colspan="2 " style="text-align: center;">Detail Harga</th>
                                                      </tr>
                                                      <tr>
                                                          <td>Paket</td>
                                                          <td>Rp {{number_format($data->total_normal,0,',','.')}}</td>
                                                      </tr>
                                                      @if($data->total_overtime != '0')
                                                      <tr>
                                                          <td>Overtime</td>
                                                          <td>Rp {{number_format($data->total_overtime,0,',','.')}}</td>
                                                      </tr>
                                                      @endif
                                                      <tr>
                                                        <th>Total</th>
                                                        <th>Rp {{number_format($data->total,0,',','.')}}</th>
                                                      </tr>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
                                </div> 
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="package_id" value="{{$package_id}}" hidden="">
                                    <input type="text" name="booking_date" value="{{$booking_date}}" hidden="">
                                    <input type="text" name="bid" value="{{$bid}}" hidden="">
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