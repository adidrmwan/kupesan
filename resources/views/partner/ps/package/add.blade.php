@extends('partner.layouts.app-add')
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
                        <form role="form" action="{{route('partner.addpackage.submit')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                {{ csrf_field() }}
                            <div class="row">
                              <div class="col-md-8">
                                <div class="row">
                                  <div class="col-md-12 col-lg-12">
                                    <div class="alert alert-info alert-dismissible">
                                      <h4>Upload Foto</h4>
                                      Minimal upload 1(satu) foto dengan perbandingan <b>1:1</b><br>dalam format file <b>JPG, JPEG, atau PNG.</b> <br>
                                        Ukuran Maksimal <b>512 KB</b>
                                    </div>
                                  </div>
                                </div>                                
                                <div class="row">
                                  <div class="col-md-2 col-lg-2">
                                  </div>
                                  <div class="col-md-8 col-lg-8">
                                  <h4 style="text-align: center;">Foto Utama <span style="font-size: 15px;">*Wajib Diisi</span></h4> 
                                    <div class="file-loading">
                                      <input id="file-0a" class="file" type="file" name="pkg_img_them" required >
                                    </div>
                                  </div>
                                  
                                </div>
                                <hr>
                                <h4 style="text-align: center; padding: 10px;">Foto Pendukung</h4>
                                <div class="row">

                                  
                                  <div class="col-md-4 col-lg-4">
                                    <div class="file-loading">
                                      <input id="file-0a" class="file" type="file" name="pkg_img_them2">
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-lg-4">
                                    <div class="file-loading">
                                      <input id="file-0a" class="file" type="file" name="pkg_img_them3">
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-lg-4">
                                    <div class="file-loading">
                                      <input id="file-0a" class="file" type="file" name="pkg_img_them4">
                                    </div>
                                  </div>
                                </div>
                              </div>
                                <div class="col-md-4">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Paket</label>
                                            <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them">
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div> 
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori Paket</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>
                                                <option selected value="">Pilih Kategori Paket</option>
                                                <option value="A La Carte">A La Carte</option>
                                                <option value="Special Package">Special Package</option>
                                                <option value="Special Studio">Special Studio</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <button type="button" class="btn btn-info addPaket">Tambah Durasi Paket</button>
                                      <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                              <label>Durasi Paket</label>
                                              <select  class="form-control" id="inlineFormCustomSelectPref" name="durasi_jam[]" required>
                                                <option selected value="">Pilih Durasi Paket</option>
                                                <option value="1">1 Jam</option>
                                                <option value="2">2 Jam</option>
                                                <option value="3">3 Jam</option>
                                                <option value="4">4 Jam</option>
                                                <option value="5">5 Jam</option>
                                              </select>
                                              <div class="invalid-feedback">Wajib diisi.</div> 
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                          <div class="form-group">
                                            <label>Harga Paket</label>
                                            <div class="input-group mb-4">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                              </div>
                                              <input class="form-control number" placeholder="Harga Paket" min="1000" name="durasi_harga[]" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>  
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                            <label>Harga Overtime (Per Jam)</label>
                                            <div class="input-group mb-4">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                              </div>
                                              <input class="form-control number" placeholder="Harga Overtime" min="1000" name="pkg_overtime_them">
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Fotografer</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_fotografer" required>
                                                <option selected value="">Pilih Fotografer</option>
                                                <option value="Include">Include</option>
                                                <option value="Exclude">Exclude</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Print Size</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_print_size" required>
                                                <option selected value="">Pilih Print Size</option>
                                                <option value="4">4 R</option>
                                                <option value="10">10 R</option>
                                                <option value="20">20 R</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Frame</label>
                                            <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_frame" required>
                                                <option selected value="">Pilih Frame</option>
                                                <option value="Include">Include</option>
                                                <option value="Exclude">Exclude</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Edited Photo</label>
                                            <input type="number" min="1" max="1000" class="form-control" placeholder="Jumlah foto" required="" name="pkg_edited_photo">
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Studio Capacity</label>
                                            <input type="number" min="1" max="100" class="form-control" placeholder="Capacity" required="" name="pkg_capacity">
                                            <div class="invalid-feedback">Wajib diisi.</div>
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

@section('script')
<script type="text/javascript">
  var pkg_duration_them = $('#durasi');
    $(pkg_duration_them).select2({
      data:[
        {id:1,text:"1 Jam"},
        {id:2,text:"2 Jam"},
        {id:3,text:"3 Jam"},
        {id:4,text:"4 Jam"},
        {id:5,text:"5 Jam"},
      ],
      multiple: true,
      placeholder: "Pilih Durasi Paket",
      width: "100%"
    });
</script>
<script type="text/javascript">
$(document).on('click', '.addPaket', function(){
    var html = '<div class="row"><div class="col-md-5"><select  class="form-control" id="inlineFormCustomSelectPref" name="durasi_jam[]" required><option selected value="">Pilih Durasi Paket</option><option value="1">1 Jam</option><option value="2">2 Jam</option><option value="3">3 Jam</option><option value="4">4 Jam</option><option value="5">5 Jam</option></select><div class="invalid-feedback">Wajib diisi.</div></div><div class="col-md-7"><div class="input-group mb-4"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Rp</span></div><input class="form-control number2" placeholder="Harga Paket" min="1000" name="durasi_harga[]" required><div class="invalid-feedback">Wajib diisi.</div></div></div></div>';
  $(this).parent().append(html);
});
</script>
<script type="text/javascript">
    $('input.number').keyup(function(event) {

      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;

      // format number
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        ;
      });
    });
</script>
<script type="text/javascript">
    $('input.number2').keyup(function(event) {

      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40) return;

      // format number
      $(this).val(function(index, value) {
        return value
        .replace(/\D/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        ;
      });
    });
</script>
@endsection

