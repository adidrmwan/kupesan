@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tambah Paket</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="{{route('partner-addpackage-submit')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="pkg_img_them">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them">
                                            <div class="invalid-feedback">
                                                  Silahkan isi nama paket.
                                              </div>
                                        </div>
                                    </div> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kategori Paket</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Kategori Paket</option>
                                                <option value="Thematic_Set">Thematic Set</option>
                                                <option value="Ala_Carte">Room (Ala Carte)</option>
                                                <option value="Special">Special</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                  Silahkan isi kategori paket.
                                              </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Harga Paket</label>
                                            <div class="input-group mb-4">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                              </div>
                                              <input type="number" class="form-control" placeholder="Harga Paket" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="pkg_price_them" value="10000" required>
                                              <div class="invalid-feedback">
                                                  Silahkan isi harga paket.
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Tuliskan deskripsi detail paket anda" style="resize: none; height: 124px;" name="pkg_desc_them"></textarea>
                                    </div>
                                </div>
                                  </div>
                                </div>
                                
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Package</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection