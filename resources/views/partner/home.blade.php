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
                        <h4 class="title">Please wait..</h4>
                    </div>
                    <div class="content">
                        <h3>Formulir pengajuan Anda sedang ditinjau. Pemberitahuan peninjauan akan dikirim ke e-mail terdaftar dengan waktu 1x24 jam. Terima Kasih</h3>
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