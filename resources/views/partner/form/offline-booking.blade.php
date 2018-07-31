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