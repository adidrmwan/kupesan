@extends('layouts.app-partner')

@section('content')
<section class="content">

<div class="row" style="padding: 25px;">
  <div class="col-md-12">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Daftar Paket</h3>
        </div>
            <div class="box-body">
                <table class="table table-bordered table-striped " id="list-package">
                    <thead>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Nama Pemesan</th>
                        <th>Nomor HP Pemesan</th>
                        <th>Email Pemesan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Jam Tambahan</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>  
                            <td>
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                
                                  <input type="text" name="id" value="" hidden="">
                                  <button type="submit" class="btn btn-danger pull-right">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor HP Pemesan</th>
                            <th>Email Pemesan</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Jam Tambahan</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
       
</section>     
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}

@endsection

