@extends('layouts.app-partner')

@section('content')
<section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Daftar Paket</h3>
                    </div>
                        <div class="box-body">
                            <table class="table table-bordered table-striped" id="example">
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
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Paket</th>
                                        <th>Harga Paket<small> per jam</small></th>
                                        <th>Harga Paket<small> overtime</small></th>
                                        <th>Kategori Paket</th>
                                        <th>Edit</th>
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