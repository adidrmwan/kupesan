@extends('partner.layouts.app-form')
@section('title', 'Add Product')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-8">
        <div class="card">
          <div class="header">
            <h4 class="title">Add Product</h4>
          </div>
          <div class="content">
            <form role="form" action="{{route('submit.item')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <label>Upload Gambar</label>
                      <div class="alert alert-info" style="text-align: center;">
                        <b style="color: red;">*</b> Ukuran gambar maksimal 512 KB <br> dengan format .PNG atau .JPG
                      </div>
                      <div class="file-loading">
                        <input id="file-0a" class="file" type="file" name="image" required="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Nama Barang" required="" name="name">
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kategori</label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="category" required>
                          <option selected value="">Pilih Kategori</option>
                          @foreach($kategori as $list)
                          <option value="{{$list->id}}">Kebaya {{$list->category_name}}</option>
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
                          <input type="number" class="form-control" placeholder="Biaya Sewa Per Hari" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="price" value="10000" required>
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
                          <input type="number" class="form-control" placeholder="Kuantitas" min="0" step="1" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="quantity" value="1" required>
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
                            <option selected value="">Pilih Set</option>
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
                            <option selected value="">Pilih Ukuran</option>
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
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-info btn-fill btn-block">Submit</button>
                <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
@endsection

