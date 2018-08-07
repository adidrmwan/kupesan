@extends('partner.layouts.app-form')
@section('title', 'Add Package')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><b>Add Package</b></h4>
                        
                    </div>

                    <div class="content">
                        <form role="form" action="{{route('partner-addpackage-submit')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                  <p>*Ukuran Gambar Maksimal 512 KB dan berformat .PNG atau .JPG </p>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="pkg_img_them" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them">
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
                                                <option selected value="">Pilih Kategori Paket</option>
                                                <option value="Thematic_Set">Thematic Set</option>
                                                <option value="Ala_Carte">Room (Ala Carte)</option>
                                                <option value="Special_Studio">Special Studio</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Silahkan isi kategori paket.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Durasi Paket</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_duration_them" required>
                                                <option selected value="">Pilih Durasi Paket</option>
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
                                              <input type="number" class="form-control" placeholder="Harga Paket" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="pkg_price_them" value="10000" required>
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
                                              <input type="number" class="form-control" placeholder="Harga Paket" min="0" step="1000" aria-label="Username" aria-describedby="basic-addon1" data-number-stepfactor="100" name="pkg_overtime_them" value="10000" required>
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

