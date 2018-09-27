@extends('partner.layouts.app-form')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                  <form role="form" action="{{ route('kebaya.off-booking.step2.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p><span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> <span class="badge badge-primary">Step 2 : Pilih Jadwal</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                              <form role="form" action="{{route('submit.item')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                              {{ csrf_field() }}
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <h5>Durasi Sewa</h5>
                                        <small><b style="color: red;">*</b> Durasi sewa yaitu 3 hari dari tanggal mulai sewa.</small>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <label>Tanggal Mulai</label> 
                                          <input  class="form-control" id="startDate" name="start_date" data-date-format="yyyy-mm-dd" required="" placeholder="Tanggal Mulai">
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                      <!-- <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Tanggal Selesai</label> 
                                          <input  class="form-control" id="endDate" name="end_date" data-date-format="yyyy-mm-dd" placeholder="Tanggal Selesai" />
                                        </div>
                                      </div> -->
                                    </div>
                                    <!-- <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Kuantitas</label>
                                          <select class="form-control" required="" name="quantity">
                                            <option value="" selected="">Pilih Banyaknya Barang</option>
                                            @for ($i = 1; $i <= $quantity2; $i++) 
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                          </select>
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-12">
                                        <h5>Detail Pelanggan</h5>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label>Nama</label> 
                                          <input type="text" class="form-control" name="user_name" placeholder="Nama" required="">
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-7">
                                        <div class="form-group">
                                          <label>E-mail</label> 
                                          <input type="text" class="form-control" name="user_email" placeholder="E-mail">
                                        </div>
                                      </div>
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label>No HP</label> 
                                          <input type="text" class="form-control" name="user_nohp" placeholder="No HP" required="">
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div> -->
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="product_id" value="{{$product_id}}" hidden="">
                                    <button type="submit" class="btn btn-block btn-info pull-right">Cek Ketersediaan</button> 
                                  </div>
                                </div> 
                              </form>  
                            </div>   
                        </div>     
                    </div>
                      
                  </form>
                </div>
            </div>
            <div class="col-md-4">
              @foreach($package as $data)
                @include('partner.kebaya.booking.kebaya-paket')
              @endforeach
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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
$(function() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var mmm = mm + 3; 
  var yyyy = today.getFullYear();

  if(dd<10) {
      dd = '0'+dd
  } 

  if(mm<10) {
      mm = '0'+mm
  } 

  today = mm + '/' + dd + '/' + yyyy;
  nextmonth = mmm + '/' + dd + '/' + yyyy;

  var a = moment("08/15/2018");
  var b = moment("08/18/2018");
  var x = moment("08/20/2018");
  var y = moment("08/25/2018");
  
  $('input[name="daterange"]').daterangepicker({
    "minDate": today,
    "maxDate": nextmonth,
    isInvalidDate: function(date) {
            return (date >= a && date <= b) || (date >= x && date <= y);
        }
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>

<link href=" {{ URL::asset('partners/css/jquery-ui.css ') }}" rel="stylesheet"/>
<script src=" {{ URL::asset('partners/js/jquery-ui.min.js') }} " type="text/javascript"></script>

<script type="text/javascript">
  var array = {!! json_encode($disableDates) !!}
  var trima = []
  for (i = 0; i < array.length; i++ ) {
      trima.push(array[i].substring(10,""))
  }
  $('#startDate').datepicker({
      minDate:0,
      maxDate: "+3M",
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ trima.indexOf(string) == -1 ]
      }
  });
</script>

<script type="text/javascript">
  var array = {!! json_encode($disableDates) !!}
  var trima = []
  for (i = 0; i < array.length; i++ ) {
      trima.push(array[i].substring(10,""))
  }
  $('#endDate').datepicker({
      minDate:0,
      maxDate: "+3M",
      beforeShowDay: function(date){
          var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
          return [ trima.indexOf(string) == -1 ]
      }
  });
</script>

@endsection