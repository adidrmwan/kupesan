@extends('layouts.app-partner')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-10">
                @if($partner->status == ' 0')
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Informasi</h4>
                    </div>
                    <div class="content">
                        <h5>Formulir pengajuan Anda sedang ditinjau.<br>Pemberitahuan peninjauan akan dikirim melalui E-mail terdaftar dalam waktu 1x24 jam.<br><br>Terima Kasih</h5>
                    </div>
                </div>
                @elseif($partner->status == '1')
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Event</h4>
                        <small>Upcoming Event</small>
                    </div>
                    <div class="content">
                        <h3>There is no event..</h3>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
        
@endsection