@extends('partner.layouts.app-form')
@section('title', 'Profil-KU')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bd-example bd-example-tabs">
                    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#daftarBooking" role="tab" aria-controls="home" aria-expanded="true">Detail Bisnis</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#ukuran" role="tab" aria-controls="profile" aria-expanded="false">Panduan Ukuran</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tnc" role="tab" aria-controls="profile" aria-expanded="false">Syarat dan ketentuan</a>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="daftarBooking" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
                        <div class="card">
                              <form role="form" action="{{ route('partner.profile.form.edit') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                              {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-md-7">
                                    <!-- informasi utama -->
                                    <div class="header">
                                        <h4 class="title">Informasi Utama</h4>
                                    </div>
                                    <div class="content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nama Usaha</label>
                                                        <input type="text" class="form-control" value="{{$partner->pr_name}}" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Kategori usaha</label>
                                                            <input type="text" class="form-control" placeholder="Nama Usaha"
                                                          value="{{$tipe->type_name}}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name Pemilik</label>
                                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="pr_owner_name" value="{{$partner->pr_owner_name}}" required>
                                                        <div class="invalid-feedback">
                                                          Silahkan isi nama pemilik usaha.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Jam Buka</label>
                                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="open_hour" required>
                                                            @if(!empty($partner->open_hour))
                                                                @if($partner->open_hour < 10)
                                                                <option selected value="{{$partner->open_hour}}">0{{$partner->open_hour}}:00</option>
                                                                @elseif($partner->open_hour >= 10)
                                                                <option selected value="{{$partner->open_hour}}">{{$partner->open_hour}}:00</option>
                                                                @endif
                                                            @else
                                                            <option selected value="">Pilih Jam Buka</option>
                                                            @endif
                                                            @foreach($jam as $jaam)
                                                                @if($jaam->num_hour != $partner->open_hour)
                                                                    @if($jaam->num_hour < 10)
                                                                    <option value="{{$jaam->num_hour}}">0{{$jaam->num_hour}}:00</option>
                                                                    @elseif($jaam->num_hour >= 10)
                                                                    <option value="{{$jaam->num_hour}}">{{$jaam->num_hour}}:00</option>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                          Silahkan pilih jam buka.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Jam Tutup</label>
                                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="close_hour" required>
                                                            @if(!empty($partner->close_hour))
                                                                @if($partner->close_hour < 10)
                                                                <option selected value="{{$partner->close_hour}}">0{{$partner->close_hour}}:00</option>
                                                                @elseif($partner->close_hour >= 10)
                                                                <option selected value="{{$partner->close_hour}}">{{$partner->close_hour}}:00</option>
                                                                @endif
                                                            @else
                                                            <option selected value="">Pilih Jam Buka</option>
                                                            @endif
                                                            @foreach($jam as $jaam)
                                                            @if($jaam->num_hour != $partner->close_hour)
                                                            @if($jaam->num_hour < 10)
                                                            <option value="{{$jaam->num_hour}}">0{{$jaam->num_hour}}:00</option>
                                                            @elseif($jaam->num_hour >= 10)
                                                            <option value="{{$jaam->num_hour}}">{{$jaam->num_hour}}:00</option>
                                                            @endif
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                          Silahkan pilih jam tutup.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi Usaha</label>
                                                        <textarea  class="form-control" placeholder="Deskripsikan usaha anda secara detail kepada customer." name="pr_desc" required style="resize: none; height: 100px;">{{$partner->pr_desc}}</textarea>
                                                        <div class="invalid-feedback">
                                                          Silahkan isi deskripsi usaha anda
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                    </div>
                                    <!-- alamat -->
                                    @include('partner.form.alamat-mitra')        
                                  </div>
                                  <div class="col-md-5">
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
                                                      <input type="text" class="form-control" placeholder="Telepon/HP" aria-label="Username" aria-describedby="basic-addon1" name="pr_phone" value="{{$phone_number}}" required>
                                                      <div class="invalid-feedback">
                                                          Silahkan isi no. telepon aktif.
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Telepon/HP (2)</label>
                                                      <input type="text" class="form-control" placeholder="Telepon/HP" aria-label="Username" name="pr_phone2" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header">
                                        <h4 class="title">Logo</h4>

                                    </div>
                                    <div class="content">
                                        @if(empty($partner->pr_logo))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning" style="text-align: center;">
                                                    Upload logo usaha Anda di sini<br>dalam format file: JPG, JPEG, atau PNG. <br>
                                                    Maximum size: 512 KB
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            @if(File::exists(public_path("logo/".$partner->pr_logo.".jpg")))
                                            <img src="{{ asset('logo/'.$partner->pr_logo.'.jpg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; display: block;position: relative; border-radius: 25%;" />
                                            @elseif(File::exists(public_path("logo/".$partner->pr_logo.".png")))
                                            <img src="{{ asset('logo/'.$partner->pr_logo.'.png')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; display: block;position: relative; border-radius: 25%;" />
                                            @elseif(File::exists(public_path("logo/".$partner->pr_logo.".jpeg")))
                                            <img src="{{ asset('logo/'.$partner->pr_logo.'.jpeg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; display: block;position: relative; border-radius: 25%;" />
                                            @endif
                                        @endif
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="file-loading">
                                                    <input id="file-0a" class="file" type="file" name="pr_logo" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="content">
                                        <button type="submit" class="btn btn-block btn-info pull-right">Update</button>
                                        <div class="clearfix"></div> 
                                    </div>  
                                </div>
                              </div>
                              </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="jadwalBooking" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
                        @include('partner.ps.upload-foto-usaha')
                    </div>
                    <div class="tab-pane fade" id="tnc" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
                        @include('partner.ps.tnc')
                    </div>
                    <div class="tab-pane fade" id="ukuran" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
                        @include('partner.kebaya.panduan-ukuran')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection

@section('script')
<script type="text/javascript">
$(document).on('click', '.addService', function(){
    var html = '<input type="text" class="form-control" name="tnc[]" placeholder="Syarat dan Ketentuan">';
  $(this).parent().append(html);
});
</script>
<script type="text/javascript">
$(document).on('click', '.addUkuran', function(){
    var html = '<div class="row"><div class="col-md-3"><div class="form-group"><label>Ukuran</label><input type="text" class="form-control" name="ukuran[]" placeholder="Ukuran"></div></div><div class="col-md-3"><div class="form-group"><label>Panjang</label><input type="text" class="form-control" name="panjang[]" placeholder="Panjang (cm)"></div></div><div class="col-md-3"><div class="form-group"><label>Lebar</label><input type="text" class="form-control" name="lebar[]" placeholder="Lebar (cm)"></div></div></div>';
  $(this).parent().append(html);
});
</script>
@endsection