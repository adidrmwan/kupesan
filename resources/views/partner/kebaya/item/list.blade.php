@extends('layouts.app-partner')
@section('title', 'List Product')
@section('content')
<section class="content">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="header">
                      <h3 class="title">List Product</h3>
                    </div>
                        <div class="content">
                            <table class="table table-bordered table-striped table-condensed" id="list-package">
                                <thead>
                                    <th>No</th>
                                    <th>Product ID</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Set</th>
                                    <th>Ukuran</th>
                                    <th>Kuantitas</th>
                                    <th>Biaya Sewa</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($package as $key => $data)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->category_name}}</td>
                                        <td>{{$data->set}}</td>
                                        <td>{{$data->size}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>Rp {{$data->price}}</td>

                                        <td>
                                            <a href="{{route('edit.item', ['product_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-primary "><i class="fa fa-pencil-square-o"></i></button>
                                            </a>
                                        </td>   
                                        <td>
                                            <a href="{{route('delete.item', ['product_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-danger" "><i class="fa fa-trash"></i></button>
                                            </a>
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