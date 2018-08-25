@extends('partner.layouts.app-form')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info alert-dismissible">
                    <h4>Selamat Datang, Partner-Ku!</h4>
                    Silahkan mengisi <em><b>Detail Fasilitas</b></em> yang Anda miliki pada form dibawah ini untuk melanjutkan ke <b>tahap selanjutnya.</b>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form role="form" action="{{ route('partner.facilities.form.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>{{ csrf_field() }}
                    <div class="card">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="header">
                                <h4 class="title">Fasilitas</h4>
                            </div>
                            <div class="content">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->toilet))
                                                <input class="form-check-input" type="checkbox" value="1" name="toilet" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="toilet" id="defaultCheck1">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck1" style="text-align: center;">
                                                    <span><i class="zmdi zmdi-male-female zmdi-hc-5x"></i></span><br>Toilet
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->wifi))
                                                <input class="form-check-input" type="checkbox" value="1" name="wifi" id="defaultCheck2" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="wifi" id="defaultCheck2">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck2" style="text-align: center;">
                                                    <span><i class="zmdi zmdi-wifi-alt zmdi-hc-5x"></i></span><br>Wi-Fi
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->rganti))
                                                <input class="form-check-input" type="checkbox" value="1" name="rganti" id="defaultCheck3" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="rganti" id="defaultCheck3">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck3" style="text-align: center;">
                                                    <span><i class="fa fa-exchange fa-5x fa-fw"></i></span><br>Ruang Ganti
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->ac))
                                                <input class="form-check-input" type="checkbox" value="1" name="ac" id="defaultCheck4" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="ac" id="defaultCheck4">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck4" style="text-align: center;">
                                                    <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span><br>AC
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->parkir))
                                                <input class="form-check-input" type="checkbox" value="1" name="parkir" id="defaultCheck5" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="parkir" id="defaultCheck5">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck5" style="text-align: center;">
                                                    <span><i class="zmdi zmdi-local-parking zmdi-hc-5x"></i></span><br>Parkir
                                                </label>
                                            </div>  
                                        </div>
                                        <div class="col-md-1"></div>
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
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>  
@endsection