@extends('partner.layouts.app-form')

@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <form role="form" action="{{ route('form.offline.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-12">
                        <div class="header">
                            <h4 class="title">Offline Booking Form</h4>
                        </div>
                        <div class="content">
                                <div class="row">
                                <!-- pr_name -->
                                    <div class="col-md-6">
                                        <div class="form-group" id="datetimepicker" style="display: inline !important;">
                                            <label>Tanggal Pesan<small><b style="color: red;"> *</b></small></label>
                                            <input type="date" class="form-control dpd1" placeholder="Tanggal Foto" name="booking_date" data-date-format="yyyy-mm-dd" required="" data-date-inline-picker="true" style="display: inline; ">
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                <!-- ./pr_name -->
                                
                                </div>
                                <div class="row">
                                <!-- pr_owner_name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name Pemilik<small><b style="color: red;"> *</b></small></label>
                                            <input type="text" class="form-control" placeholder="Nama Pemilik" name="pr_owner_name" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi nama pemilik usaha.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./pr_owner_name -->
                                <!-- open_hour -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jam Buka<small><b style="color: red;"> *</b></small></label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="open_hour" required>
                                                <option selected value="">Pilih Jam Buka</option>
                                                <option value="1">1:00</option><option value="2">2:00</option>
                                                <option value="3">3:00</option><option value="4">4:00</option>
                                                <option value="5">5:00</option><option value="6">6:00</option>
                                                <option value="7">7:00</option><option value="8">8:00</option>
                                                <option value="9">9:00</option><option value="10">10:00</option>
                                                <option value="11">11:00</option><option value="12">12:00</option>
                                                <option value="13">13:00</option><option value="14">14:00</option>
                                                <option value="15">15:00</option><option value="16">16:00</option>
                                                <option value="17">17:00</option><option value="18">18:00</option>
                                                <option value="19">19:00</option><option value="20">20:00</option>
                                                <option value="21">21:00</option><option value="22">22:00</option>
                                                <option value="23">23:00</option><option value="24">24:00</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Silahkan pilih jam buka.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./open_hour -->
                                <!-- close_hour -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jam Tutup<small><b style="color: red;"> *</b></small></label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="close_hour" required>
                                                <option selected value="">Pilih Jam Tutup</option>
                                                <option value="1">1:00</option><option value="2">2:00</option>
                                                <option value="3">3:00</option><option value="4">4:00</option>
                                                <option value="5">5:00</option><option value="6">6:00</option>
                                                <option value="7">7:00</option><option value="8">8:00</option>
                                                <option value="9">9:00</option><option value="10">10:00</option>
                                                <option value="11">11:00</option><option value="12">12:00</option>
                                                <option value="13">13:00</option><option value="14">14:00</option>
                                                <option value="15">15:00</option><option value="16">16:00</option>
                                                <option value="17">17:00</option><option value="18">18:00</option>
                                                <option value="19">19:00</option><option value="20">20:00</option>
                                                <option value="21">21:00</option><option value="22">22:00</option>
                                                <option value="23">23:00</option><option value="24">24:00</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Silahkan pilih jam tutup.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./close_hour -->
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Usaha<small><b style="color: red;"> *</b></small></label>
                                            <textarea  class="form-control" placeholder="Deskripsikan usaha anda secara detail kepada customer." name="pr_desc" required style="resize: none; height: 100px;"></textarea>
                                            <div class="invalid-feedback">
                                              Silahkan isi deskripsi usaha anda
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                        </div>     
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <button type="submit" class="btn btn-block btn-info pull-right">Submit</button>
                            <div class="clearfix"></div> 
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
@endsection