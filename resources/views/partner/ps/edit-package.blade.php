@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Photostudio Package</h4>
                    </div>
                    <div class="content">
                        @foreach($package as $data)
                        <form role="form" action="{{route('partner-addpackage-submit')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        
                                        <input id="file-0a" class="file" type="file" name="pkg_img_them">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Package Name</label>
                                        <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them" value="{{$data->pkg_name_them}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                            <option selected value="{{$data->pkg_category_them}}">{{$data->pkg_category_them}}</option>
                                            <option value="Thematic Set">Thematic Set</option>
                                            <option value="Room (Ala Carte)">Room (Ala Carte)</option>
                                            <option value="Special">Special</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group"> 
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" value="{{$data->pkg_price_them}}" min="0" step="1000" class="form-control" placeholder="Price" data-number-stepfactor="100" name="pkg_price_them">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Tuliskan deskripsi detail paket anda" style="resize: none;" name="pkg_desc_them">{{$data->pkg_desc_them}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Edit Package</button>
                            <div class="clearfix"></div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection