@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Schedule Studio</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Day</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Senin">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jam buka</label>
                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jam tutup</label>
                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <input type="text" class="form-control" disabled placeholder="Company" value="Selasa">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                    <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                    <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Rabu">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Kamis">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Jumat">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Sabtu">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Minggu">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Open">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type="time" class="form-control" placeholder="Close">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Save Schedule</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection