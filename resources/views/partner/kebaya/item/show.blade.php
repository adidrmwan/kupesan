@extends('partner.layouts.app-add')
@section('title', 'Edit Product')
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
                        <form role="form" action="{{route('kebaya-package.update', ['id' => $package_id])}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            @foreach($package as $data)
                            <div class="row">
                              <div class="col-md-12 col-xs-12 col-lg-7">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gambar Paket (1)</label>
                                        <div class="form-group">
                                            @if(File::exists(public_path("img_pkg/".$data->image.".jpg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image.".jpeg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.jpeg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image.".png")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.png')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image.".JPG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image.".JPEG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.JPEG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image.".PNG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image.'.PNG')  }}" alt= "Package Image" />
                                            @else
                                            <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload-photo_kebaya.png')  }}" alt= "Package Image" />
                                            @endif
                                        </div>
                                    </div>
                                  </div>  
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Update Gambar Paket (1)</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="image">
                                        </div>
                                    </div>
                                  </div>  
                                </div> 
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gambar Paket (2)</label>
                                        <div class="form-group">
                                            @if(File::exists(public_path("img_pkg/".$data->image2.".jpg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image2.".jpeg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.jpeg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image2.".png")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.png')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image2.".JPEG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.JPEG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image2.".PNG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image2.'.PNG')  }}" alt= "Package Image" />
                                            @else
                                            <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo_kebaya.png')  }}" alt= "Package Image" />
                                            @endif
                                        </div>
                                    </div>
                                  </div>  
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Update Gambar Paket (2)</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="image2">
                                        </div>
                                    </div>
                                  </div>  
                                </div> 
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gambar Paket (3)</label>
                                        <div class="form-group">
                                            @if(File::exists(public_path("img_pkg/".$data->image3.".jpg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image3.".jpeg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.jpeg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image3.".png")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.png')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image3.".JPEG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.JPEG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image3.".PNG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image3.'.PNG')  }}" alt= "Package Image" />
                                            @else
                                            <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo_kebaya.PNG')  }}" alt= "Package Image" />
                                            @endif
                                        </div>
                                    </div>
                                  </div>  
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Update Gambar Paket (3)</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="image3">
                                        </div>
                                    </div>
                                  </div>  
                                </div> 
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gambar Paket (4)</label>
                                        <div class="form-group">
                                            @if(File::exists(public_path("img_pkg/".$data->image4.".jpg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image4.".jpeg")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.jpeg')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image4.".png")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.png')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image4.".JPEG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.JPEG')  }}" alt= "Package Image" />
                                            @elseif(File::exists(public_path("img_pkg/".$data->image4.".PNG")))
                                            <img style="height: auto; width: 200px;" class="img-responsive" src="{{ asset('img_pkg/'.$data->image4.'.PNG')  }}" alt= "Package Image" />
                                            @else
                                            <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo_kebaya.PNG')  }}" alt= "Package Image" />
                                            @endif
                                        </div>
                                    </div>
                                  </div>  
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Update Gambar Paket (4)</label>
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="image4">
                                        </div>
                                    </div>
                                  </div>  
                                </div>  
                              </div>
                              <div class="col-md-12 col-xs-12 col-lg-5">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Nama Barang <b style="color: red;">*</b></label>
                                      <input type="text" class="form-control" placeholder="Nama Barang" required="" value="{{$data->name}}" name="name">
                                      <div class="invalid-feedback">Wajib diisi.</div>
                                    </div>
                                  </div> 
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Tipe <b style="color: red;">*</b></label>
                                      <select  class="form-control" id="inlineFormCustomSelectPref" name="category" required>
                                        <option selected value="{{$data->category_id}}">{{$data->category_name}}</option>
                                        @foreach($kategori as $list)
                                        @if($list->id != $data->category_id)
                                        <option value="{{$list->id}}">{{$list->category_name}}</option>
                                        @endif
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
                                        <option selected value="{{$data->priawanita}}">{{$data->priawanita}}</option>
                                        @if($data->priawanita == 'Pria')
                                        <option value="Wanita">Wanita</option>
                                        @elseif($data->priawanita == 'Wanita')
                                        <option value="Pria">Pria</option>
                                        @endif
                                      </select>
                                      <div class="invalid-feedback">Wajib diisi.</div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <label>Biaya Sewa</label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <table class="table table-responsive">
                                              <thead>
                                                  <th>Durasi Sewa</th>
                                                  <th>Biaya Sewa</th>
                                                  <th>Action</th>
                                              </thead>
                                              @foreach($biayaSewa as $key => $value)
                                              <tr>
                                                  @if($value->kebaya_durasi_hari < '7')
                                                  <td>{{$value->kebaya_durasi_hari}} Hari</td>
                                                  @elseif($value->kebaya_durasi_hari == '7')
                                                  <td>1 Minggu</td>
                                                  @elseif($value->kebaya_durasi_hari == '14')
                                                  <td>2 Minggu</td>
                                                  @elseif($value->kebaya_durasi_hari == '21')
                                                  <td>3 Minggu</td>
                                                  @elseif($value->kebaya_durasi_hari == '30')
                                                  <td>1 Bulan</td>
                                                  @endif
                                                  <td>Rp {{number_format($value->kebaya_biaya_sewa,0,',','.')}}</td>
                                                  <td><a href="{{route('kebaya.delete.biaya', ['id' => $value->id_kebaya_biaya_sewa])}}" class="btn btn-info btn-sm pull-right" onclick="return confirm('Are you sure want to Delete?')">Delete</a></td>
                                              </tr>
                                              @endforeach
                                          </table>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-info addBiayaSewa"><i class="fa fa-plus-square"></i> Tambah Biaya Sewa</button>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>Biaya Dryclean (Optional)</label>
                                      <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input class="form-control number" placeholder="Biaya Dryclean" min="1000" name="price_dryclean" value="{{number_format($data->price_dryclean,0,',','.')}}">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>Deposit <b style="color: red;">*</b></label>
                                      <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">Rp</span>
                                        </div>
                                        <input class="form-control number" placeholder="Deposit" min="1000" name="deposit" value="{{number_format($data->deposit,0,',','.')}}" required>
                                        <div class="invalid-feedback">Wajib diisi.</div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-lg-6">
                                    <div class="form-group">
                                      <label>Jumlah Produk Tersedia <b style="color: red;">*</b></label>
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
                                      <label>Set <b style="color: red;">*</b></label>
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
                                      <label>Ukuran <b style="color: red;">*</b></label>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <label>Detail Ukuran Produk</label>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-lg-12">
                                            <table class="table table-responsive">
                                              <thead>
                                                  <th>Bagian</th>
                                                  <th>Ukuran (cm)</th>
                                                  <th>Action</th>
                                              </thead>
                                              @foreach($pu as $key => $value)
                                              <tr>
                                                  <td>{{$value->bagian}}</td>
                                                  <td>{{$value->cm}} cm</td>
                                                  <td><a href="{{route('kebaya.delete.pu', ['id' => $value->id])}}" class="btn btn-info btn-sm pull-right" onclick="return confirm('Are you sure want to Delete?')">Delete</a></td>
                                              </tr>
                                              @endforeach
                                          </table>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-info addUkuran">Add More</button>
                                        <div class="row">
                                          <div class="col-lg-8">
                                            <div class="form-group">
                                              <label>Bagian</label>
                                              <select  class="form-control" id="inlineFormCustomSelectPref" name="bagian[]">
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
                                                    <label>Ukuran (cm)</label>
                                                    <input type="text" class="form-control" name="ukuran[]" placeholder="Ukuran (cm)">
                                                    <div class="invalid-feedback">Wajib diisi.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                      <label>Informasi Tambahan (Optional)</label><br>
                                      <small>(contoh: Bahan Balotely, Tidak untuk di setrika)</small>
                                      <textarea class="form-control" name="description" style="height: 185px;" placeholder="{{$data->description}}">{{$data->description}}</textarea>
                                    </div>
                                  </div>
                                </div> -->

                                <!-- <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Tags</label>
                                      <select id="tags" class="form-control" name="tag[]"></select>
                                    </div>
                                  </div>
                                </div> -->
                              </div>
                              <div class="col-md-12 col-xs-12 col-lg-12">
                                <input type="text" name="product_id" value="{{$data->id}}" hidden="">
                                <button type="submit" class="btn btn-info btn-fill btn-block pull-right">Edit Package</button>
                              </div>
                            </div>
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

@section('script')
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