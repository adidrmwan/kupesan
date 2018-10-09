@extends('layouts.app-partner')
@section('title', 'List Product')
@section('content')
<section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                      <h3 class="title">List Package</h3>
                    </div>
                        <div class="content">
                            <table class="table table-bordered table-striped table-condensed table-responsive" id="list-package">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Tipe</th>
                                    <th>Set</th>
                                    <th>Ukuran</th>
                                    <th>Kuantitas (@)</th>
                                    <th>Durasi Sewa</th>
                                    <th>Biaya Sewa</th>
                                    <th>Deposit</th>
                                    <th>Biaya Dryclean</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($package as $key => $data)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->category_name}}</td>
                                        <td>{{$data->set}}</td>
                                        <td>{{$data->size}}</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>
                                            @foreach($biayaSewa as $value)
                                                @if($data->id == $value->fk_package_id)
                                                    @if($value->kebaya_durasi_hari < '7')
                                                        {{$value->kebaya_durasi_hari}} Hari<br>
                                                    @elseif($value->kebaya_durasi_hari == '7')
                                                        1 Minggu<br>
                                                    @elseif($value->kebaya_durasi_hari == '14')
                                                        2 Minggu<br>
                                                    @elseif($value->kebaya_durasi_hari == '21')
                                                        3 Minggu<br>
                                                    @elseif($value->kebaya_durasi_hari == '30')
                                                        1 Bulan<br>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($biayaSewa as $value)
                                                @if($data->id == $value->fk_package_id)
                                                Rp {{number_format($value->kebaya_biaya_sewa,0,',','.')}}<br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>Rp {{number_format($data->deposit,0,',','.')}}</td>
                                        @if($data->price_dryclean == '0')
                                        <td>Tidak Ada</td>
                                        @else
                                        <td>Rp {{number_format($data->price_dryclean,0,',','.')}}</td>
                                        @endif
                                        @if($data->status == '1')
                                        <td><h5><span class="badge badge-pill badge-success">Active</span></h5></td>
                                        <td>
                                            <a href="{{route('kebaya-package.show', ['package_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-primary "><i class="fa fa-pencil-square-o"></i>Edit</button>
                                            </a>
                                            <a href="{{route('set.nonactive', ['product_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to Hide this package to your profile at Kupesan.id?')"><i class="fa fa-close"></i>Hide</button>
                                            </a>
                                        </td>  
                                        @else
                                        <td><h5><span class="badge badge-pill badge-danger">Non-Active</span></h5></td>
                                        <td>
                                            <a href="{{route('kebaya-package.show', ['package_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-primary "><i class="fa fa-pencil-square-o"></i>Edit</button>
                                            </a>
                                            <a href="{{route('set.active', ['product_id' => $data->id])}}">
                                              <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure want to Show this package to your profile at Kupesan.id?')"><i class="fa fa-check"></i>Show</button>
                                            </a>
                                        </td> 
                                        @endif  
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