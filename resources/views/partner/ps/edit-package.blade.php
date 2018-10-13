@extends('partner.layouts.app-add')
@section('title', 'Edit Package')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Package</h4>
                    </div>
                    <div class="content">
                        
                        <form role="form" action="{{route('partner.edit.pkg.submit')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                            {{ csrf_field() }}
                            @foreach($package as $data)
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gambar Paket</label>
                                        @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                        <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                        <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                        @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                        <img style="height: 250px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Update Gambar Paket</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="pkg_img_them">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Paket</label>
                                                <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them" value="{{$data->pkg_name_them}}">
                                                <div class="invalid-feedback">
                                                      Silahkan isi nama paket.
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori Paket</label>
                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                    @if($data->pkg_category_them == 'Ala_Carte')
                                                    <option selected value="{{$data->pkg_category_them}}">Room (A la carte)</option>
                                                    @elseif($data->pkg_category_them == 'Thematic_Set')
                                                    <option selected value="{{$data->pkg_category_them}}">Thematic Set</option>
                                                    @elseif($data->pkg_category_them == 'Special_Studio')
                                                    <option selected value="{{$data->pkg_category_them}}">Special Studio</option>
                                                    @endif
                                                    <option value="Thematic_Set">Thematic Set</option>
                                                    <option value="Ala_Carte">Room (Ala Carte)</option>
                                                    <option value="Special_Studio">Special Studio</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                      Silahkan pilih kategori paket.
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Durasi Paket</label>
                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_duration_them" required>
                                                    <option selected value="{{$data->pkg_duration_them}}">{{$data->pkg_duration_them}} Jam</option>
                                                    <option value="1">1 Jam</option>
                                                    <option value="2">2 Jam</option>
                                                    <option value="3">3 Jam</option>
                                                    <option value="4">4 Jam</option>
                                                    <option value="5">5 Jam</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Silahkan isi durasi paket.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Harga Paket Per Jam</label>
                                                <div class="input-group mb-4">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                                  </div>
                                                  <input type="number" class="form-control" placeholder="Harga Paket" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="pkg_price_them" value="{{$data->pkg_price_them}}" required>
                                                  <div class="invalid-feedback">
                                                      Silahkan isi harga paket per jam.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                                <label>Harga Paket Overtime</label>
                                                <div class="input-group mb-4">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                                  </div>
                                                  <input type="number" class="form-control" placeholder="Harga Paket" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="pkg_overtime_them" value="{{$data->pkg_overtime_them}}" required>
                                                  <div class="invalid-feedback">
                                                      Silahkan isi harga paket overtime.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label>Tags</label>
                                            <select id="tags" class="form-control" name="tag[]"></select>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach($partnerTag as $tag)
                                                <span class="badge badge-info">{{$tag->tag_title}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea rows="5" class="form-control" placeholder="Tuliskan deskripsi detail paket anda" style="resize: none;" name="pkg_desc_them">{{$data->pkg_desc_them}}</textarea>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <input type="text" name="id" value="{{$data->id}}" hidden="">
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

