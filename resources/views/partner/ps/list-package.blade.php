@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List Package</h4>
                    </div>
                    
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id= "table-id">
                            <thead>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Harga Paket<small> per jam</small></th>
                                <th>Harga Paket<small> overtime</small></th>
                                <th>Kategori Paket</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                @foreach($partner as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->pkg_name_them}}</td>
                                    <td>{{$data->pkg_price_them}}</td>
                                    <td>{{$data->pkg_overtime_them}}</td>
<!--                                     <td>{{$data->pkg_desc_them}}</td> -->
                                    <td>{{$data->pkg_category_them}}</td>

                                    <td>
                                        <form role="form" action="{{route('partner.edit.pkg')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                          <input type="text" name="id" value="{{$data->id}}" hidden="">
                                          <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                        </form>
                                    </td>   
                                    <td>
                                        <form role="form" action="{{route('partner.delete.pkg')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                          <input type="text" name="id" value="{{$data->id}}" hidden="">
                                          <button type="submit" class="btn btn-danger pull-right">Delete</button>
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
        </div>
    </div>
</div>
        
@endsection