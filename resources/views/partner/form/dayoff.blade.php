@extends('partner.layouts.app-ps')
@section('title', 'Day Off')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                  <form role="form" action="{{ route('form.dayoff.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Form Day Off (Hari Libur)</h4>
                            </div>
                            <div class="content">
                                <!-- <div class="row"> -->
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Pilih Tanggal Mulai Libur</label>
                                                    <div id="datepicker"></div>            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7" style="padding: 0 15px;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tanggal Terpilih</label>
                                                    <input type="text" class="form-control" id="datepicker2" name="Tanggal_libur">   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" class="form-control" placeholder="Judul" name="judul"> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Durasi Waktu</label>
                                                    <select  class="form-control" id="inlineFormCustomSelectPref" name="durasi_libur" required>
                                                        <option selected value="">Pilih Durasi Waktu</option>
                                                        <option value="full_day">Full Day (24 Jam)</option>
                                                        <!--<option value="3">3 Hari</option>-->
                                                        <!--<option value="5">5 Hari</option>-->
                                                        <!--<option value="7">7 Hari</option>-->
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan isi Durasi Waktu.
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jam Mulai</label>
                                                    <select  class="form-control" id="inlineFormCustomSelectPref" name="jam_mulai_libur" >
                                                        <option selected value="">Pilih Jam Mulai</option>
                                                        @foreach($jam as $key => $value)
                                                        @if($value->num_hour < 10)
                                                        <option value="{{$value->num_hour}}">0{{$value->num_hour}}:00</option>
                                                        @elseif($value->num_hour >= 10)
                                                        <option value="{{$value->num_hour}}">{{$value->num_hour}}:00</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan isi Jam Mulai.
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Jam Selesai</label>
                                                    <select  class="form-control" id="inlineFormCustomSelectPref" name="jam_selesai_libur" >
                                                        <option selected value="">Pilih Jam Selesai</option>
                                                        @foreach($jam as $key => $value)
                                                        @if($value->num_hour < 10)
                                                        <option value="{{$value->num_hour}}">0{{$value->num_hour}}:00</option>
                                                        @elseif($value->num_hour >= 10)
                                                        <option value="{{$value->num_hour}}">{{$value->num_hour}}:00</option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Silahkan isi Jam Selesai.
                                                    </div>   
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                <!-- </div>  -->
                                <div class="row">
                                    <div class="col-md-12">
                                            <button type="submit" class="btn btn-block btn-info pull-right">Submit</button> 
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