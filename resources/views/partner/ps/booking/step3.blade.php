@extends('partner.layouts.app-ps')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8">
                <div class="card">
                  <form role="form" action="{{ route('form.offline.step3.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <div class="header">
                                <h4 class="title">Offline Booking</h4>
                                <p>
                                  <span class="badge badge-secondary">Step 1</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-secondary">Step 2</span> <i class="fa fa-arrow-right"></i> 
                                  <span class="badge badge-primary">Step 3 : Pilih Jadwal</span></p>
                                <p></p>
                            </div>
                            <div class="content">
                              <div class="row">
                                @if ($message = Session::get('warning'))
                                  <div class="alert alert-warning">
                                    <p>
                                      {{ $message }}
                                    </p>
                                  </div>
                                @endif
                              </div>
                                <div class="row">
                                  <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        <div class="col-lg-6" >
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <label>Waktu yang tersedia pada <b style="color: #EA410C;">{{ date('d F Y', strtotime($booking_date)) }}</b></label>
                                            </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-lg-12">
                                                <table class="table table-bordered" style="text-align: center; height: 20px;">
                                                  <tr>
                                                      @if('1' >= $open && '1' < $close && empty($bookingcheck->num_hour_1))
                                                      <td class="available">01:00 - 02:00</td>
                                                      @elseif($bookingcheck->num_hour_1 == '1')
                                                      <td class="not-available">01:00 - 02:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('2' >= $open && '2' < $close && empty($bookingcheck->num_hour_2))
                                                      <td class="available">02:00 - 03:00</td>
                                                      @elseif($bookingcheck->num_hour_2 == '1')
                                                      <td class="not-available">02:00 - 03:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('3' >= $open && '3' < $close && empty($bookingcheck->num_hour_3))
                                                      <td class="available">03:00 - 04:00</t
                                                        d>
                                                      @elseif($bookingcheck->num_hour_3 == '1')
                                                      <td class="not-available">03:00 - 04:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('4' >= $open && '4' < $close && empty($bookingcheck->num_hour_4))
                                                      <td class="available">04:00 - 05:00</td>
                                                      @elseif($bookingcheck->num_hour_4 == '1')
                                                      <td class="not-available">04:00 - 05:00</td>
                                                      @else                                                                        
                                                      @endif 
                                                  </tr>
                                                  <tr>
                                                      @if('5' >= $open && '5' < $close && empty($bookingcheck->num_hour_5))
                                                      <td class="available">05:00 - 06:00</td>
                                                      @elseif($bookingcheck->num_hour_5 == '1')
                                                      <td class="not-available">05:00 - 06:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr> 
                                                  <tr>
                                                      @if('6' >= $open && '6' < $close && empty($bookingcheck->num_hour_6))
                                                      <td class="available">06:00 - 07:00</td>
                                                      @elseif($bookingcheck->num_hour_6 == '1')
                                                      <td class="not-available">06:00 - 07:00</td>
                                                      @else
                                                      @endif  
                                                  </tr>
                                                  <tr>
                                                      @if('7' >= $open && '7' < $close && empty($bookingcheck->num_hour_7))
                                                      <td class="available">07:00 - 08:00</td>
                                                      @elseif($bookingcheck->num_hour_7== '1')
                                                      <td class="not-available">07:00 - 08:00</td>
                                                      @else
                                                      @endif 
                                                  </tr>
                                                  <tr>
                                                      @if('8' >= $open && '8' < $close && empty($bookingcheck->num_hour_8))
                                                      <td class="available">08:00 -09:00</td>
                                                      @elseif($bookingcheck->num_hour_8== '1')
                                                      <td class="not-available">08:00 -09:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr> 
                                                  </tr>
                                                  <tr >
                                                      @if('9' >= $open && '9' < $close && empty($bookingcheck->num_hour_9))
                                                      <td class="available">09:00 - 10.00</td>
                                                      @elseif($bookingcheck->num_hour_9 == '1')
                                                      <td class="not-available">09:00 - 10.00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('10' >= $open && '10' < $close && empty($bookingcheck->num_hour_10))
                                                      <td class="available">10:00 - 11:00</td>
                                                      @elseif($bookingcheck->num_hour_10 == '1')
                                                      <td class="not-available">10:00 - 11:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('11' >= $open && '11' < $close && empty($bookingcheck->num_hour_11))
                                                      <td class="available">11:00 - 12:00</td>
                                                      @elseif($bookingcheck->num_hour_11 == '1')
                                                      <td class="not-available">11:00 - 12:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('12' >= $open && '12' < $close && empty($bookingcheck->num_hour_12))
                                                      <td class="available">12:00 - 13:00</td>
                                                      @elseif($bookingcheck->num_hour_12 == '1')
                                                      <td class="not-available">12:00 - 13:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('13' >= $open && '13' < $close && empty($bookingcheck->num_hour_13))
                                                      <td class="available">13:00 - 14:00</td>
                                                      @elseif($bookingcheck->num_hour_13 == '1')
                                                      <td class="not-available">13:00 - 14:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('14' >= $open && '14' < $close && empty($bookingcheck->num_hour_14))
                                                      <td class="available">14:00 - 15:00</td>
                                                      @elseif($bookingcheck->num_hour_14 == '1')
                                                      <td class="not-available">14:00 - 15:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('15' >= $open && '15' < $close && empty($bookingcheck->num_hour_15))
                                                      <td class="available">15:00 - 16:00</td>
                                                      @elseif($bookingcheck->num_hour_15== '1')
                                                      <td class="not-available">15:00 - 16:00</td>
                                                      @else                                                                        
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('16' >= $open && '16' < $close && empty($bookingcheck->num_hour_16))
                                                      <td class="available">16:00 - 17:00</td>
                                                      @elseif($bookingcheck->num_hour_16== '1')
                                                      <td class="not-available">16:00 - 17:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      
                                                      @if('17' >= $open && '17' < $close && empty($bookingcheck->num_hour_17))
                                                      <td class="available">17:00 - 18:00</td>
                                                      @elseif($bookingcheck->num_hour_17 == '1')
                                                      <td class="not-available">17:00 - 18:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('18' >= $open && '18' < $close && empty($bookingcheck->num_hour_18))
                                                      <td class="available">18:00 - 19:00</td>
                                                      @elseif($bookingcheck->num_hour_18 == '1')
                                                      <td class="not-available">18:00 - 19:00</td>
                                                      @else
                                                      @endif
                                                      
                                                  </tr>
                                                  <tr>
                                                      @if('19' >= $open && '19' < $close && empty($bookingcheck->num_hour_19))
                                                      <td class="available">19:00 - 20:00</td>
                                                      @elseif($bookingcheck->num_hour_19 == '1')
                                                      <td class="not-available">19:00 - 20:00</td>
                                                      @else
                                                      @endif
                                                      
                                                  </tr>
                                                  <tr>
                                                      @if('20' >= $open && '20' < $close && empty($bookingcheck->num_hour_20))
                                                      <td class="available">20:00 - 21:00</td>
                                                      @elseif($bookingcheck->num_hour_20 == '1')
                                                      <td class="not-available">20:00 - 21:00</td>
                                                      @else
                                                      @endif
                                                      
                                                  </tr>
                                                  <tr>
                                                      @if('21' >= $open && '21' < $close && empty($bookingcheck->num_hour_21))
                                                      <td class="available">21:00 - 22:00</td>
                                                      @elseif($bookingcheck->num_hour_21 == '1')
                                                      <td class="not-available">21:00 - 22:00</td>
                                                      @else
                                                      @endif
                                                      
                                                  </tr>
                                                  <tr>
                                                      @if('22' >= $open && '22' < $close && empty($bookingcheck->num_hour_22))
                                                      <td class="available">22:00 - 23:00</td>
                                                      @elseif($bookingcheck->num_hour_22== '1')
                                                      <td class="not-available">22:00 - 23:00</td>
                                                      @else
                                                      @endif
                                                      
                                                  </tr>
                                                  <tr>
                                                      @if('23' >= $open && '23' < $close && empty($bookingcheck->num_hour_23))
                                                      <td class="available">23:00 - 24:00</td>
                                                      @elseif($bookingcheck->num_hour_23== '1')
                                                      <td class="not-available">23:00 - 24:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      @if('24' >= $open && '24' < $close && empty($bookingcheck->num_hour_24))
                                                      <td class="available">24:00 - 01:00</td>
                                                      @elseif($bookingcheck->num_hour_24== '1')
                                                      <td class="not-available">24:00 - 01:00</td>
                                                      @else
                                                      @endif
                                                  </tr>
                                                  <tr>
                                                      <td colspan="3" style="text-align: left;">
                                                          <div class="col-md-6 col-sm-12" style="padding: 10px;">
                                                              <span class="available" style="color: #acff7a;">---</span>&nbsp;Available
                                                          </div>
                                                          <div class="col-md-6 col-sm-12" style="padding: 10px;">
                                                              <span class="not-available" style="color: #ea410c;">---</span>&nbsp;Not available
                                                          </div>
                                                      </td>
                                                  </tr>
                                                </table>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label><span>Tanggal Terpilih</span></label>
                                              <input type="text" class="form-control" id="datepicker2" value="{{ date('d F Y', strtotime($booking_date)) }}" disabled="" name="booking_date">
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label>Durasi Paket</label>
                                                <select class="form-control" name="durasi_paket" id="provinces2" required>
                                                  <option value="" disable="true" selected="true">Pilih Durasi Paket</option>
                                                    @foreach ($durasi as $key => $value)
                                                      <option value="{{$value->durasi}},{{$package_id}},{{$booking_date}}">{{ $value->durasi }} Jam</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-6">
                                              <label>Jam Mulai</label>
                                              <select class="form-control text-center" name="jam_mulai" id="regencies2" required>
                                                <option value="" disable="true" class="text-center" selected="true">Pilih Jam Mulai</option>
                                              </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                              <label>Jam Selesai</label>
                                              <select class="form-control text-center" name="jam_selesai" id="districts2" required>
                                                <option value="" disable="true" selected="true">Pilih Jam Selesai</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label>Jam Overtime<small> (opsional)</small></label>
                                              <select class="form-control text-center" name="jam_tambahan" id="villages2">
                                                <option value="0" disable="true" selected="true">Pilih Jam Tambahan</option>
                                                <option value="0">Tidak ada</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-lg-12">
                                              <label>Jam Terpilih</label>
                                              <select class="form-control text-center" id="terpilih" disabled="">
                                                <option value="" disable="true" selected="true">Jam Terpilih</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="package_id" value="{{$package_id}}" hidden="">
                                    <button type="submit" id="confirm3" class="btn btn-block btn-info pull-right">Submit</button> 
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
      $('#provinces2').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var durasi = spl[0];
        var pack_id = spl[1];
        var date = spl[2];
        $.get('/json-regencies1?pack_id=' + pack_id + '&durasi=' + durasi + '&callback=?',function(data) {
          console.log(data);
          $('#regencies2').empty();
          $('#regencies2').append('<option value="" disable="true" selected="true">Pilih Jam Mulai</option>');

          $('#districts2').empty();
          $('#districts2').append('<option value="" disable="true" selected="true">Pilih Jam Selesai</option>');

          $('#villages2').empty();
          $('#villages2').append('<option value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies2').append('<option value="'+ regenciesObj.num_hour +','+ durasi +','+ pack_id +','+ date +'">'+ regenciesObj.num_hour +':00</option>');
          })
        });
      });

      $('#regencies2').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var jam_mulai = spl[0];
        var durasi2 = spl[1];
        var pack_id = spl[2];
        var date = spl[3];

        $.get('/json-districts1?jam_mulai=' + jam_mulai + '&durasi2=' + durasi2 + '&callback=?',function(data) {
          console.log(data);
          $('#districts2').empty();
          $('#districts2').append('<option class="text-center" value="" disable="true" selected="true">Pilih Jam Selesai</option>');

          $('#villages2').empty();
          $('#villages2').append('<option class="text-center" value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');

          $.each(data, function(index, districtsObj){
            $('#districts2').append('<option class="text-center" value="'+ districtsObj.num_hour +','+ durasi2 +','+ pack_id +','+ date +','+ jam_mulai +'">'+ districtsObj.num_hour +':00</option>');
          })
        });
      });

      $('#districts2').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var jam_selesai = spl[0];
        var durasi2 = spl[1];
        var pack_id = spl[2];
        var date = spl[3];
        var jam_mulai = spl[4];
        $.get('/json-village1?jam_selesai=' + jam_selesai + '&durasi2=' + durasi2 + '&pack_id=' + pack_id + '&date=' + date + '&jam_mulai=' + jam_mulai + '&callback=?',function(data) {
          console.log(data);
          $('#villages2').empty();
          $('#villages2').append('<option class="text-center" value="0" disable="true" selected="true">Pilih Jam Tambahan</option><option value="0">Tidak ada</option>');
          $('#terpilih').append('<option class="text-center" value="0" disable="true" selected="true">'+ jam_mulai + ':00 - ' + jam_selesai + ':00' + '</option>');
          $.each(data, function(index, villagesObj){
            $('#villages2').append('<option class="text-center" value="'+ villagesObj.num_hour +','+ jam_selesai +','+ jam_mulai + '">'+ villagesObj.num_hour +' Jam</option>');
          })
        });
      });
      $('#villages2').on('change', function(e){
        console.log(e);
        var text = e.target.value;
        var spl = text.split(',');
        var jam_overtime = spl[0];
        var jam_selesai = spl[1];
        var jam_mulai = spl[2];
        var total = +spl[0] + +spl[1];
        $.get('/json-village2?jam_selesai=' + jam_selesai + '&jam_overtime=' + jam_overtime + '&jam_mulai=' + jam_mulai + '&callback=?',function(data) {
          console.log(data);
          $('#terpilih').empty();
          $('#terpilih').append('<option class="text-center" value="0" disable="true" selected="true">'+ jam_mulai + ':00 - ' + total + ':00' + '</option>');
        });
      });
</script>
@endsection