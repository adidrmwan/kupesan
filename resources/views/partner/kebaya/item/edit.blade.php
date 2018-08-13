@extends('partner.layouts.app-form')
@section('title', 'Edit Product')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Product</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="{{route('submit.edit.item')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                            {{ csrf_field() }}
                            @foreach($package as $data)
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-lg-12">
                                        <label>Gambar Paket</label>
                                    <div class="form-group">
                                        @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                                        <img style="height: auto; width: 280px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                                        @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                                        <img style="height: auto; width: 280px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                                        @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                                        <img style="height: auto; width: 280px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-lg-6">
                                    <div class="form-group">
                                        <label>Update Gambar Paket</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12 col-lg-6">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" placeholder="Nama Barang" required="" value="{{$data->name}}" name="name">
                                        <div class="invalid-feedback">Wajib diisi.</div>
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label>Kategori</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="category" required>
                                          <option selected value="{{$data->category_id}}">Kebaya {{$data->category_name}}</option>
                                          @foreach($kategori as $list)
                                          @if($list->id != $data->category_id)
                                          <option value="{{$list->id}}">Kebaya {{$list->category_name}}</option>
                                          @endif
                                          @endforeach
                                        </select>
                                        <div class="invalid-feedback">Wajib diisi.</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-8">
                                      <div class="form-group">
                                        <label>Biaya Sewa Per Hari</label>
                                        <div class="input-group mb-4">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp</span>
                                          </div>
                                          <input type="number" class="form-control" placeholder="Biaya Sewa Per Hari" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="price" value="{{$data->price}}" required>
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label>Kuantitas</label>
                                        <div class="input-group mb-4">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                          </div>
                                          <input type="number" class="form-control" placeholder="Kuantitas" min="0" step="1" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="quantity" value="{{$data->quantity}}" required>
                                          <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Set</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="set" required>
                                            <option selected value="{{$data->set}}">{{$data->set}}</option>
                                            <option value="Atasan">Atasan</option>
                                            <option value="Bawahan">Bawahan</option>
                                            <option value="Setelan">Setelan</option>
                                        </select>
                                        <div class="invalid-feedback">Wajib diisi.</div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label>Ukuran</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="size" required>
                                            <option selected value="{{$data->size}}">{{$data->size}}</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XXXL">XXXL</option>
                                        </select>
                                        <div class="invalid-feedback">Wajib diisi.</div>
                                      </div>
                                    </div> 
                                  </div>
                                  <!-- <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label>Tags</label>
                                        <select id="tags" class="form-control" name="tag[]"></select>
                                      </div>
                                    </div>
                                  </div> -->
                                </div>
                            </div>
                            <input type="text" name="product_id" value="{{$data->id}}" hidden="">
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

