@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Booking Schedule</h4>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>ID</tr>
                                    <tr>Booked By</tr>
                                    <tr>Package Name</tr>
                                    <tr>Mitra Name</tr>
                                    <tr>Tanggal</tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection