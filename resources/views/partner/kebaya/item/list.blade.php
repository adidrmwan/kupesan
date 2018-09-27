@extends('layouts.app-partner')
@section('title', 'List Product')
@section('content')
<section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                      <h3 class="title">List Product</h3>
                    </div>
                        <div class="content">
                            <table class="table table-bordered table-striped table-condensed table-responsive" id="list-package">
                                <thead>
                                    <th>No</th>
                                    <!-- <th>Product ID</th> -->
                                    <th>Nama Produk</th>
                                    <th>Tipe</th>
                                    <th>Set</th>
                                    <th>Ukuran</th>
                                    <th>Kuantitas (@)</th>
                                    <th>Biaya Sewa</th>
                                    <th>Deposit</th>
                                    <th>Biaya Dryclean</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($package as $key => $data)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <!-- <td>{{$data->id}}</td> -->
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->category_name}}</td>
                                        <td>{{$data->set}}</td>
                                        <td>{{$data->size}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>Rp {{number_format($data->price,0,',','.')}}</td>
                                        <td>Rp {{number_format($data->deposit,0,',','.')}}</td>
                                        @if($data->price_dryclean == '0')
                                        <td>Tidak Ada</td>
                                        @else
                                        <td>Rp {{number_format($data->price_dryclean,0,',','.')}}</td>
                                        @endif
                                        <td>
                                            <a href="{{route('edit.item', ['product_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-primary "><i class="fa fa-pencil-square-o"></i></button>
                                            </a>
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