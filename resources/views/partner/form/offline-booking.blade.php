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
                                    <div class="col-md-4">                                
                                      <h2 class="demoHeaders">Tanggal</h2>
                                        <div id="datepicker"></div>
                                        <p>Date: <input type="text" id="datepicker2" disabled></p>
                                    </div>
                                    
                                      <div class="col-md-8">
                                          <div class="col-md-6">
                                            <label>Durasi</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Durasi Waktu</option>
                                                <option value="1">1 Jam</option>
                                                <option value="2">2 Jam</option>
                                                <option value="3">3 Jam</option>
                                                <option value="4">4 Jam</option>
                                                <option value="5">5 Jam</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan isi Durasi Waktu.
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label>Jam Mulai</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Jam Mulai</option>
                                                <option value="1">1 Jam</option>
                                                <option value="2">2 Jam</option>
                                                <option value="3">3 Jam</option>
                                                <option value="4">4 Jam</option>
                                                <option value="5">5 Jam</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan isi Jam Mulai.
                                            </div>
                                          </div>

                                          <div class="col-md-4">
                                            <label>Jam Selesai</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Jam Selesai</option>
                                                <option value="1">1 Jam</option>
                                                <option value="2">2 Jam</option>
                                                <option value="3">3 Jam</option>
                                                <option value="4">4 Jam</option>
                                                <option value="5">5 Jam</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan isi Jam Selesai.
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label>Jam Tambahan</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Jam Tambahan</option>
                                                <option value="1">1 Jam</option>
                                                <option value="2">2 Jam</option>
                                                <option value="3">3 Jam</option>
                                                <option value="4">4 Jam</option>
                                                <option value="5">5 Jam</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan isi Jam Tambahan.
                                            </div>
                                          </div>
                                          

                                        </div>

                                    </div>
                                <!-- ./pr_name -->
                                
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