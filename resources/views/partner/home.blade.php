@extends('layouts.app-partner')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-8 col-md-12 col-xs-12 col-sm-12">
                @if($partner->status == '0')
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Informasi</h4>
                    </div>
                    <div class="content">
                        <h5>Dear {{$partner->pr_name}}, 
                        <br>
                        <br>
                        <p>
                        Formulir pengajuan Anda sedang ditinjau.
                        <br>
                        Pemberitahuan peninjauan akan dikirim oleh kami dalam waktu 2-3 hari.
                        <br>
                        <br>
                        <b>Terima Kasih</b>
                        </p>
                        </h5>
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
                @elseif($partner->status == '2')
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Informasi</h4>
                    </div>
                    <div class="content">
                        <h5>Dear {{$partner->pr_name}}, 
                        <br>
                        <br>
                        <p>Maaf, Formulir pengajuan partner Anda ditolak.
                        <br>Akun Anda akan dihapus oleh kami dalam waktu 1 x 24 Jam.
                        <br>Silahkan melakukan registrasi partner kembali.
                        <br>
                        <br>
                        <b>Terima Kasih</b>
                        </p></h5>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
        
@endsection