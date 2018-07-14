@extends('layouts.app-partner')

@section('content')
<div class="content">
    @foreach($partner as $data)
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Profil Usaha</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="{{ route('partner.profile.edit') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nama Usaha</label>
                                        <input type="text" class="form-control" placeholder="Tuliskan nama usaha Anda" name="partner_name" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kategori Jasa</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="partner_type" required>
                                            <option value="">Pilih Kategori Jasa</option>
                                            @foreach ($tipe as $listtipe)
                                            <option value="{{$listtipe->id}}">{{$listtipe->type_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name Pemilik</label>
                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="partner_owner_name" value="" required>
                                    </div>
                                </div>
                                @foreach($email as $data)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" disabled placeholder="Email" value="{{$data->email}}">
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" name="partner_address" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Wilayah</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="partner_area" required>
                                            <option value="">Pilih Wilayah</option>
                                            <option value="Pusat">Surabaya Pusat</option>
                                            <option value="Utara">Surabaya Utara</option>
                                            <option value="Selatan">Surabaya Selatan</option>
                                            <option value="Barat">Surabaya Barat</option>
                                            <option value="Timur">Surabaya Timur</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control" placeholder="Kode Pos" name="partner_postal_code" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>No. Telepon/HP</label>
                                        <input type="number" class="form-control" placeholder="No. Telepon/HP" name="partner_telephone" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea rows="5" class="form-control" placeholder="Deskripsikan usaha anda agar customer dapat memahami detail usaha anda" name="partner_description" value="" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>

                        <div class="header">
                            <h4 class="title">Edit Foto Studio</h4>
                        </div>  

                         <form enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                             <a href="#">
                            <img class="avatar border-gray" src="partner/img/faces/face-3.jpg" alt="..."/>

                              <h4 class="title">Mike Andrew<br />
                                 <small>michael24</small>
                              </h4>
                            </a>
                        </div>
                        <p class="description text-center"> "Lamborghini Mercy <br>
                                            Your chick she so thirsty <br>
                                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>
        
@endsection