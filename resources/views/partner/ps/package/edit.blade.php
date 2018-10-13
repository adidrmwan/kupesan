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
                        <form role="form" action="{{route('partner.editpackage.submit')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                            @foreach($package as $data)
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Update Foto Paket (1)</label>
                                                <div class="file-loading">
                                                    <input id="file-0a" class="file" type="file" name="pkg_img_them">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Foto Paket (1)</label><br>
                                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".jpeg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.jpeg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".png")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.png')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".JPEG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.JPEG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them.".PNG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them.'.PNG')  }}" alt= "Package Image" />
                                                @else
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload-photo.PNG')  }}" alt= "Package Image" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Update Foto Paket (2)</label>
                                                <div class="file-loading">
                                                    <input id="file-0a" class="file" type="file" name="pkg_img_them2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Foto Paket (2)</label><br>
                                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".jpeg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.jpeg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".png")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.png')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".JPEG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.JPEG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them2.".PNG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them2.'.PNG')  }}" alt= "Package Image" />
                                                @else
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo.png')  }}" alt= "Package Image" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Update Foto Paket (3)</label>
                                                <div class="file-loading">
                                                    <input id="file-0a" class="file" type="file" name="pkg_img_them3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Foto Paket (3)</label><br>
                                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".jpeg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.jpeg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".png")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.png')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".JPEG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.JPEG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them3.".PNG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them3.'.PNG')  }}" alt= "Package Image" />
                                                @else
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo.png')  }}" alt= "Package Image" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Update Foto Paket (4)</label>
                                                <div class="file-loading">
                                                    <input id="file-0a" class="file" type="file" name="pkg_img_them4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Foto Paket (4)</label><br>
                                                @if(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".jpeg")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.jpeg')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".png")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.png')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".JPEG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.JPEG')  }}" alt= "Package Image" />
                                                @elseif(File::exists(public_path("img_pkg/".$data->pkg_img_them4.".PNG")))
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/'.$data->pkg_img_them4.'.PNG')  }}" alt= "Package Image" />
                                                @else
                                                <img style="height: 270px; width: auto;" class="img-responsive" src="{{ asset('img_pkg/upload_photo.png')  }}" alt= "Package Image" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Paket</label>
                                                <input type="text" class="form-control" placeholder="Nama Paket" required="" name="pkg_name_them" value="{{$data->pkg_name_them}}">
                                                <div class="invalid-feedback">
                                                    Wajib diisi.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Kategori Paket</label>
                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_category_them" required>\
                                                    <option selected value="{{$data->pkg_category_them}}">{{$data->pkg_category_them}}</option>
                                                    @if($data->pkg_category_them != 'A La Carte')
                                                    <option value="A La Carte">A La Carte</option>
                                                    @endif
                                                    @if($data->pkg_category_them != 'Special Package')
                                                    <option value="Special Package">Special Package</option>
                                                    @endif
                                                    @if($data->pkg_category_them != 'Special Studio')
                                                    <option value="Special Studio">Special Studio</option>
                                                    @endif
                                                </select>
                                                <div class="invalid-feedback">
                                                      Wajib diisi.
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>Durasi Paket</th>
                                                    <th>Harga Paket</th>
                                                    <th>Delete</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($durasiPaket as $paket)
                                                    <tr>
                                                        <td>{{$paket->durasi_jam}} Jam</td>
                                                        <td>Rp {{number_format($paket->durasi_harga,0,',','.')}}</td>
                                                        <td><a href="{{route('durasi.delete', ['id' => $paket->id])}}" class="btn btn-info btn-sm">Delete</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-info addJam">Tambah Durasi Paket</button>
                                            <br><br>    
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
                                                  <input class="form-control number" placeholder="Harga Overtime" min="1000" name="pkg_overtime_them" value="{{number_format($data->pkg_overtime_them,0,',','.')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fotografer</label>
                                                <select  class="form-control" id="inlineFormCustomSelectPref" name="pkg_fotografer" required>
                                                    <option selected value="{{$data->pkg_fotografer}}">{{$data->pkg_fotografer}}</option>
                                                    @if($data->pkg_fotografer != 'Include')
                                                    <option value="Include">Include</option>
                                                    @endif
                                                    @if($data->pkg_fotografer != 'Exclude')
                                                    <option value="Exclude">Exclude</option>
                                                    @endif
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
                                                    <option selected value="{{$data->pkg_print_size}}">{{$data->pkg_print_size}} R</option>
                                                    @if($data->pkg_fotografer != '4')
                                                    <option value="4">4 R</option>
                                                    @endif
                                                    @if($data->pkg_fotografer != '4')
                                                    <option value="4">10 R</option>
                                                    @endif
                                                    @if($data->pkg_fotografer != '4')
                                                    <option value="4">20 R</option>
                                                    @endif
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
                                                    <option selected value="{{$data->pkg_frame}}">{{$data->pkg_frame}}</option>
                                                    <option value="{{$data->pkg_print_size}}">$data->pkg_print_size</option>
                                                </select>
                                                <div class="invalid-feedback">Wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Edited Photo (Lembar)</label>
                                                <input type="number" min="1" max="1000" class="form-control" placeholder="Jumlah foto" required="" name="pkg_edited_photo" value="{{$data->pkg_edited_photo}}">
                                                <div class="invalid-feedback">Wajib diisi.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Studio Capacity</label>
                                                <input type="number" min="1" max="1000" class="form-control" placeholder="Jumlah Kapasitas" required="" name="pkg_capacity" value="{{$data->pkg_capacity}}">
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach($partnerTag as $tag)
                                                <span class="badge badge-info">{{$tag->tag_title}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="id" value="{{$data->id}}" hidden="">
                                            <button type="submit" class="btn btn-info btn-fill btn-block">Update</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
$(document).on('click', '.addJam', function(){
    var html = '<div class="row"><div class="col-md-5"><select  class="form-control" id="inlineFormCustomSelectPref" name="durasi_jam[]" required><option selected value="">Pilih Durasi Paket</option><option value="1">1 Jam</option><option value="2">2 Jam</option><option value="3">3 Jam</option><option value="4">4 Jam</option><option value="5">5 Jam</option></select><div class="invalid-feedback">Wajib diisi.</div></div><div class="col-md-7"><div class="input-group mb-4"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Rp</span></div><input class="form-control number" placeholder="Harga Paket" min="1000" name="durasi_harga[]" required><div class="invalid-feedback">Wajib diisi.</div></div></div></div>';
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

