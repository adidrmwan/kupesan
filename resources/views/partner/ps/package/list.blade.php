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
                            <table class="table table-bordered table-striped table-condensed" id="list-package">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Kategori Paket</th>
                                    <th>Fotografer</th>
                                    <th>Print Size</th>
                                    <th>Edited Photo (pcs)</th>
                                    <th>Harga Paket (Per Jam)</th>
                                    <th>Harga Overtime (Per Jam)</th>
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
                                        <td>Rp {{$data->pkg_price_them}}</td>
                                        <td>Rp {{$data->pkg_overtime_them}}</td>
                                        <td>
                                            <form role="form" action="{{route('partner.edit.pkg')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                              <input type="text" name="id" value="{{$data->id}}" hidden="">
                                              <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i></button>
                                            </form>
                                        </td>   
                                        <td>
                                            <form role="form" action="{{route('partner.delete.pkg')}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                              <input type="text" name="id" value="{{$data->id}}" hidden="">
                                              <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-trash"></i></button>
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