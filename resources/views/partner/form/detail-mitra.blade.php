@extends('partner.layouts.app-form')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <form role="form" action="{{ route('partner.profile.form.submit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                  {{ csrf_field() }}
                  <div class="row">
                      <div class="col-md-8">
                        <div class="header">
                            <h4 class="title">Informasi Utama</h4>
                        </div>
                        <div class="content">
                                <div class="row">
                                <!-- pr_name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Usaha<small><b style="color: red;"> *</b></small></label>
                                              <input type="text" class="form-control" placeholder="Nama Usaha"
                                              name="pr_name" required="">
                                              <div class="invalid-feedback">Silahkan isi nama usaha Anda.</div>
                                        </div>
                                    </div>
                                <!-- ./pr_name -->
                                <!-- pr_typr -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kategori usaha<small><b style="color: red;"> *</b></small></label>
                                                <select class="form-control" required="" name="pr_type">
                                                    <option value="">Pilih Kategori Usaha</option>
                                                    @foreach($type as $list)
                                                    <option value="{{$list->id}}">{{$list->type_name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Silahkan pilih kategori usaha Anda.</div>
                                        </div>
                                    </div>
                                <!-- ./pr_type -->
                                </div>
                                <div class="row">
                                <!-- pr_owner_name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name Pemilik<small><b style="color: red;"> *</b></small></label>
                                            <input type="text" class="form-control" placeholder="Nama Pemilik" name="pr_owner_name" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi nama pemilik usaha.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./pr_owner_name -->
                                <!-- open_hour -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jam Buka<small><b style="color: red;"> *</b></small></label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="open_hour" required>
                                                <option selected value="">Pilih Jam Buka</option>
                                                <option value="1">1:00</option><option value="2">2:00</option>
                                                <option value="3">3:00</option><option value="4">4:00</option>
                                                <option value="5">5:00</option><option value="6">6:00</option>
                                                <option value="7">7:00</option><option value="8">8:00</option>
                                                <option value="9">9:00</option><option value="10">10:00</option>
                                                <option value="11">11:00</option><option value="12">12:00</option>
                                                <option value="13">13:00</option><option value="14">14:00</option>
                                                <option value="15">15:00</option><option value="16">16:00</option>
                                                <option value="17">17:00</option><option value="18">18:00</option>
                                                <option value="19">19:00</option><option value="20">20:00</option>
                                                <option value="21">21:00</option><option value="22">22:00</option>
                                                <option value="23">23:00</option><option value="24">24:00</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Silahkan pilih jam buka.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./open_hour -->
                                <!-- close_hour -->
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jam Tutup<small><b style="color: red;"> *</b></small></label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="close_hour" required>
                                                <option selected value="">Pilih Jam Tutup</option>
                                                <option value="1">1:00</option><option value="2">2:00</option>
                                                <option value="3">3:00</option><option value="4">4:00</option>
                                                <option value="5">5:00</option><option value="6">6:00</option>
                                                <option value="7">7:00</option><option value="8">8:00</option>
                                                <option value="9">9:00</option><option value="10">10:00</option>
                                                <option value="11">11:00</option><option value="12">12:00</option>
                                                <option value="13">13:00</option><option value="14">14:00</option>
                                                <option value="15">15:00</option><option value="16">16:00</option>
                                                <option value="17">17:00</option><option value="18">18:00</option>
                                                <option value="19">19:00</option><option value="20">20:00</option>
                                                <option value="21">21:00</option><option value="22">22:00</option>
                                                <option value="23">23:00</option><option value="24">24:00</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Silahkan pilih jam tutup.
                                            </div>
                                        </div>
                                    </div>
                                <!-- ./close_hour -->
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Usaha<small><b style="color: red;"> *</b></small></label>
                                            <textarea  class="form-control" placeholder="Deskripsikan usaha anda secara detail kepada customer..." name="pr_desc" required style="resize: none; height: 100px;"></textarea>
                                            <div class="invalid-feedback">
                                              Silahkan isi deskripsi usaha anda
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                        </div>      
                      </div>
                      <div class="col-md-4">
                        <div class="header">
                            <h4 class="title">Kontak</h4>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" placeholder="Tuliskan alamat usaha"
                                              disabled="" value="{{$email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telepon/HP (1)<small><b style="color: red;"> *</b></small></label>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Telepon/HP" aria-label="Username" aria-describedby="basic-addon1" name="pr_phone" required>
                                          <div class="invalid-feedback">
                                              Silahkan isi no. telepon aktif.
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telepon/HP (2)</label>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Telepon/HP" aria-label="Username" name="pr_phone2" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                        <div class="header">
                            <h4 class="title">Alamat</h4>
                        </div>
                        <div class="content">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Alamat Usaha<small><b style="color: red;"> *</b></small></label>
                                            <input type="text" class="form-control" placeholder="Tuliskan alamat usaha anda secara lengkap..." name="pr_addr" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi alamat usaha anda.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="pr_postal_code" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi kode pos.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" class="form-control" placeholder="Kecamatan" name="pr_kec" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi kecamatan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input type="text" class="form-control" placeholder="Kelurahan" name="pr_kel" required>
                                            <div class="invalid-feedback">
                                              Silahkan isi kelurahan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Wilayah</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pr_area" required>
                                                <option selected value="">Pilih Wilayah</option>
                                                <option value="Surabaya Pusat">Surabaya Pusat</option>
                                                <option value="Surabaya Utara">Surabaya Utara</option>
                                                <option value="Surabaya Selatan">Surabaya Selatan</option>
                                                <option value="Surabaya Barat">Surabaya Barat</option>
                                                <option value="Surabaya Timur">Surabaya Timur</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Silahkan pilih wilayah.
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-block btn-info pull-right">Update</button>
                            <div class="clearfix"></div>  
                        </div>  
                    </div>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection