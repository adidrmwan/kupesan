@extends('layouts.app-partner')
@section('title', 'List Package')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                  <h3 class="title">List Package</h3>
                </div>
                <div class="content">
                    <table class="table table-bordered table-striped table-responsive table-condensed" id="list-package">
                        <thead>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Kategori Paket</th>
                            <th>Fotografer</th>
                            <th>Print Size</th>
                            <th>Edited Photo (pcs)</th>
                            <th>Durasi Paket</th>
                            <th>Harga Paket</th>
                            <th>Harga Overtime</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($package as $key => $data)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td class="text-uppercase">{{$data->pkg_name_them}}</td>
                                <td>{{$data->pkg_category_them}}</td>
                                <td>{{$data->pkg_fotografer}}</td>
                                <td>{{$data->pkg_print_size}} R</td>
                                <td>{{$data->pkg_edited_photo}} lembar</td>
                                <td>
                                    @foreach($hargaPaket as $harga)
                                        @if($data->id == $harga->package_id)
                                        {{$harga->durasi_jam}} Jam<br>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($hargaPaket as $harga)
                                        @if($data->id == $harga->package_id)
                                        Rp {{number_format($harga->durasi_harga,0,',','.')}}<br>
                                        @endif
                                    @endforeach
                                </td>
                                @if($data->pkg_overtime_them == '0')
                                <td>Tidak Ada</td>
                                @else
                                <td>Rp {{number_format($data->pkg_overtime_them,0,',','.')}}</td>
                                @endif
                                <td>
                                    <form role="form" action="{{route('partner.editpackage')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                      <input type="text" name="id" value="{{$data->id}}" hidden="">
                                      <button type="submit" class="btn btn-primary pull-right" >Edit</i></button>
                                    </form>
                                </td>   
                                <td>
                                    <form role="form" action="{{route('partner.deletepackage')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                      <input type="text" name="id" value="{{$data->id}}" hidden="">
                                      <button type="submit" class="btn btn-danger pull-right" onclick="return confirm('Are you sure want to delete this package?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
        
@endsection