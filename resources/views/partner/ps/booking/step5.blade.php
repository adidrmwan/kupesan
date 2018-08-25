@extends('partner.layouts.app-ps')
@section('title', 'Offline Booking')
@section('content')
<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-md-8 col-lg-8">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Selamat!</h4>
                    </div>
                    <div class="content">
                        <h5>Proses pemesanan fotostudio Anda telah berhasil, silahkan kembali ke <a href="{{route('index')}}" style="color: #EA410C;"><span style="color: #EA410C;">halaman awal.</span></a></h5>
                    </div>
                </div>            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ URL::asset('dist/js/custom-date-picker.js') }} "></script>
<script src="{{ URL::asset('dist/js/bootstrap-datepicker.js') }} "></script>
@endsection