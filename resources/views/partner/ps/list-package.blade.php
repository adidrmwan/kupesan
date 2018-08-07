@extends('layouts.app-partner')

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
                                <thead class="thead-dark">
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Kategori Paket</th>
                                    <th>Durasi Paket</th>
                                    <th>Harga Paket (Per Jam)</th>
                                    <th>Harga Overtime (Per Jam)</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    @foreach($package as $key => $data)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$data->pkg_name_them}}</td>
                                        @if($data->pkg_category_them == 'Ala_Carte')
                                        <td>Room (A la carte)</td>
                                        @elseif($data->pkg_category_them == 'Thematic_Set')
                                        <td>Thematic Set</td>
                                        @elseif($data->pkg_category_them == 'Special_Studio')
                                        <td>Special Studio</td>
                                        @endif
                                        <td>{{$data->pkg_duration_them}} Jam</td>
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