@extends('partner.layouts.app-form')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <form role="form" action="{{ route('informasi.mitra.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                 <h4 class="title">Fasilitas</h4>
                                 <small>Daftar fasilitas yang   disediakan.</small>
                             </div>
                             <div class="content">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="toilet" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">Kamar Mandi</label>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="wifi" id="defaultCheck2">
                                          <label class="form-check-label" for="defaultCheck2">Wi-Fi</label>
                                        </div>  
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="rganti" id="defaultCheck3">
                                          <label class="form-check-label" for="defaultCheck3">Ruang Ganti</label>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="ac" id="defaultCheck4">
                                          <label class="form-check-label" for="defaultCheck4">AC</label>
                                        </div>  
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="parkir" id="defaultCheck5">
                                          <label class="form-check-label" for="defaultCheck5">Parkir</label>
                                        </div>  
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-info btn-block pull-right">Submit</button>
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