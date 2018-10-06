@extends('partner.layouts.app-add')
@section('title', 'Add Product')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Add Package</h4>
          </div>
          <div class="content">
            <form role="form" action="{{route('kebaya-package.store')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-7">
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="alert alert-info alert-dismissible">
                      <h5>Upload Foto</h5>
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
                      <input id="file-0a" class="file" type="file" name="image" required="">
                    </div>
                  </div>
                  
                </div>
                <hr>
                <h4 style="text-align: center; padding: 10px;">Foto Pendukung</h4>
                <div class="row">

                  
                  <div class="col-md-4 col-lg-4">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image2">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image3">
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image4">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama <b style="color: red;">*</b></label>
                        <input type="text" class="form-control" placeholder="Nama Produk" required="" name="name">
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tipe <b style="color: red;">*</b></label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="category" required>
                          <option selected value="">Pilih Tipe</option>
                          @foreach($kategori as $list)
                          <option value="{{$list->id}}">{{$list->category_name}}</option>
                          @endforeach
                        </select>
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Pria / Wanita <b style="color: red;">*</b></label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="priawanita" required>
                          <option selected value="">Pilih Pria / Wanita</option>
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>
                        </select>
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <button type="button" class="btn btn-info addBiayaSewa"><i class="fa fa-plus-square"></i> Tambah Biaya Sewa</button>
                          <div class="row">
                            <div class="col-lg-12">
                              <label>Biaya Sewa</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label>Durasi Sewa <b style="color: red;">*</b></label>
                                <select  class="form-control" id="inlineFormCustomSelectPref" name="durasiSewa[]" required>
                                    <option selected value="">Pilih Durasi Sewa</option>
                                    <option value="3">3 Hari</option>
                                    <option value="5">5 Hari</option>
                                    <option value="7">1 Minggu</option>
                                    <option value="14">2 Minggu</option>
                                    <option value="21">3 Minggu</option>
                                    <option value="30">1 Bulan (30 Hari)</option>
                                </select>
                                <div class="invalid-feedback">Wajib diisi.</div>
                              </div>
                            </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label>Harga (Rp)<b style="color: red;">*</b></label>
                                      <input class="form-control number" placeholder="Harga (Rp)" min="1000" name="biayaSewa[]" required="">
                                      <div class="invalid-feedback">Wajib diisi.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="alert alert-warning alert-dismissible">
                        <h5>Informasi Biaya</h5>
                        <b>Biaya Dryclean</b> dicantumkan jika penyewaan produk termasuk dry clean. 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Deposit <b style="color: red;">*</b></label>
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                          </div>
                          <input class="form-control number" placeholder="Deposit" min="1000" name="deposit" required>
                          <div class="invalid-feedback">Wajib diisi.</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Biaya Dryclean (Optional)</label>
                        <div class="input-group mb-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                          </div>
                          <input class="form-control number" placeholder="Biaya Dryclean (Rp)" min="1000" name="price_dryclean">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Jumlah Produk Tersedia (Stok Produk)<b style="color: red;">*</b></label>
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
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Set <b style="color: red;">*</b></label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="set" required>
                            <option selected value="">Pilih Set</option>
                            <option value="Atasan">Atasan</option>
                            <option value="Bawahan">Bawahan</option>
                            <option value="Setelan">Setelan</option>
                        </select>
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label>Ukuran <b style="color: red;">*</b></label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="size" required>
                            <option selected value="">Pilih Ukuran</option>
                            <option value="XS">XS</option>
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

                  <div class="row">
                      <div class="col-lg-12">
                          <button type="button" class="btn btn-info addUkuran"><i class="fa fa-plus-square"></i> Tambah Detail Ukuran</button>
                          <div class="row">
                            <div class="col-lg-12">
                              <label>Detail Ukuran</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-8">
                              <div class="form-group">
                                <label>Bagian <b style="color: red;">*</b></label>
                                <select  class="form-control" id="inlineFormCustomSelectPref" name="bagian[]" required>
                                    <option selected value="">Pilih Bagian</option>
                                    <option value="Panjang Tangan">Panjang Tangan</option>
                                    <option value="Panjang Bahu">Panjang Bahu (dari leher ke lengan)</option>
                                    <option value="Panjang Baju">Panjang Baju (dari atas ke bawah)</option>
                                    <option value="Panjang Lengan">Panjang Lengan</option>
                                    <option value="Panjang Lengan Siku">Panjang Lengan Siku</option>
                                    <option value="Lingkar Badan">Lingkar Badan</option>
                                    <option value="Lingkar Pinggang">Lingkar Pinggang</option>
                                    <option value="Lingkar Pinggul">Lingkar Pinggul</option>
                                    <option value="Lingkar Ketiak">Lingkar Ketiak</option>
                                    <option value="Lingkar Dada">Lingkar Dada</option>
                                    <option value="Lingkar Leher">Lingkar Leher</option>
                                    <option value="Lingkar Siku">Lingkar Siku</option>
                                    <option value="Lingkar Pergelangan Tangan">Lingkar Pergelangan Tangan</option>
                                    <option value="Lebar Pundak">Lebar Pundak (dari kanan ke kiri)</option>
                                    <option value="Lebar Punggung">Lebar Punggung</option>
                                </select>
                                <div class="invalid-feedback">Wajib diisi.</div>
                              </div>
                            </div>
                              <div class="col-lg-4">
                                  <div class="form-group">
                                      <label>Ukuran (cm) <b style="color: red;">*</b></label>
                                      <input type="text" class="form-control" name="ukuran[]" placeholder="Ukuran (cm)" required="">
                                      <div class="invalid-feedback">Wajib diisi.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Warna <b style="color: red;">*</b></label>
                        <select id="warna" class="form-control" name="warna[]"></select>
                      </div>
                    </div> 
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tema</label>
                        <select id="tema" class="form-control" name="tema[]"></select>
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Informasi Tambahan (Optional)</label><br>
                        <small>(contoh: Bahan Balotely, Tidak untuk di setrika)</small>
                        <textarea class="form-control" name="description" style="height: 185px;"></textarea>
                      </div>
                    </div>
                  </div>
                
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

@section('script')
<script type="text/javascript">
  var tags = $('#warna');
    $(tags).select2({
      data:[
        {id:1,text:"Biru"},
        {id:2,text:"Coklat"},
        {id:3,text:"Hijau"},
        {id:4,text:"Jingga"},
        {id:5,text:"Kuning"},
        {id:6,text:"Merah"},
        {id:2,text:"Pink"},
        {id:3,text:"Putih"},
        {id:4,text:"Hitam"},
        {id:5,text:"Ungu"},
        {id:6,text:"Pastel"},
        {id:7,text:"Peach"},
      ],
      multiple: true,
      placeholder: "Pilih Warna",
      width: "100%"
    });
</script>

<script type="text/javascript">
  var tags = $('#tema');
    $(tags).select2({
      data:[
        {id:1,text:"Modern"},
        {id:2,text:"Jawa"},
        {id:2,text:"Sunda"},
        {id:3,text:"Bali"},
        {id:4,text:"Encim"},
        {id:5,text:"Kartini"},
        {id:6,text:"Kutu Baru"},
      ],
      multiple: true,
      placeholder: "Pilih Tema Kebaya",
      width: "100%"
    });
</script>
<script type="text/javascript">
$(document).on('click', '.addBiayaSewa', function(){
    var html = '<div class="row"><div class="col-lg-6"><div class="form-group"><select  class="form-control" id="inlineFormCustomSelectPref" name="durasiSewa[]" required><option selected value="">Pilih Durasi Sewa</option><option value="3">3 Hari</option><option value="5">5 Hari</option><option value="7">1 Minggu</option><option value="14">2 Minggu</option><option value="21">3 Minggu</option><option value="30">1 Bulan (30 Hari)</option></select><div class="invalid-feedback">Wajib diisi.</div></div></div><div class="col-lg-6"><div class="form-group"><input type="number" class="form-control" name="biayaSewa[]" placeholder="Harga (Rp)" required=""><div class="invalid-feedback">Wajib diisi.</div></div></div></div>';
  $(this).parent().append(html);
});
</script>

<script type="text/javascript">
$(document).on('click', '.addUkuran', function(){
    var html = '<div class="row"><div class="col-lg-8"><div class="form-group"><select  class="form-control" id="inlineFormCustomSelectPref" name="bagian[]" required><option selected value="">Pilih Bagian</option><option value="Panjang Tangan">Panjang Tangan</option><option value="Panjang Bahu">Panjang Bahu (dari leher ke lengan)</option><option value="Panjang Baju">Panjang Baju (dari atas ke bawah)</option><option value="Panjang Lengan">Panjang Lengan</option><option value="Panjang Lengan Siku">Panjang Lengan Siku</option><option value="Lingkar Badan">Lingkar Badan</option><option value="Lingkar Pinggang">Lingkar Pinggang</option><option value="Lingkar Pinggul">Lingkar Pinggul</option><option value="Lingkar Ketiak">Lingkar Ketiak</option><option value="Lingkar Dada">Lingkar Dada</option><option value="Lingkar Leher">Lingkar Leher</option><option value="Lingkar Siku">Lingkar Siku</option><option value="Lingkar Pergelangan Tangan">Lingkar Pergelangan Tangan</option><option value="Lebar Pundak">Lebar Pundak (dari kanan ke kiri)</option><option value="Lebar Punggung">Lebar Punggung</option></select><div class="invalid-feedback">Wajib diisi.</div></div></div><div class="col-lg-4"><div class="form-group"><input type="text" class="form-control" name="ukuran[]" placeholder="Ukuran (cm)" required=""><div class="invalid-feedback">Wajib diisi.</div></div></div></div>';
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
@endsection


