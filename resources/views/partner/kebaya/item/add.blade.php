@extends('partner.layouts.app-form')
@section('title', 'Add Product')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Add Product</h4>
          </div>
          <div class="content">
            <form role="form" action="{{route('submit.item')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-7">
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
                  <div class="col-md-6 col-lg-6">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image" required="">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image2">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="file-loading">
                      <input id="file-0a" class="file" type="file" name="image3">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
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
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" placeholder="Nama Barang" required="" name="name">
                        <div class="invalid-feedback">Wajib diisi.</div>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tipe</label>
                        <select  class="form-control" id="inlineFormCustomSelectPref" name="category" required>
                          <option selected value="">Pilih Tipe</option>
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
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Warna</label>
                        <select id="warna" class="form-control" name="warna[]"></select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tema</label>
                        <select id="tema" class="form-control" name="tema[]"></select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Informasi Produk</label>
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

@endsection


