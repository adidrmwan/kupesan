@extends('layouts.app-partner')

@section('content')
<div class="content">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Profil Bisnis</h4>
                    </div>
                    <div class="content">
                        <form role="form" action="{{ route('partner.profile.form.submit') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @foreach($partner as $data)
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Usaha</label>
                                        <input type="text" class="form-control" placeholder="" name="pr_name" value="{{$data->pr_name}}" disabled required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kategori Jasa</label>
                                        @if($data->pr_type == '1')
                                        <input type="text" class="form-control" disabled placeholder=" " value="Foto Studio">
                                        @elseif($data->pr_type == '2')
                                        <input type="text" class="form-control" disabled placeholder=" " value="Fotografer">
                                        @elseif($data->pr_type == '3')
                                        <input type="text" class="form-control" disabled placeholder=" " value="MUA">
                                        @elseif($data->pr_type == '4')
                                        <input type="text" class="form-control" disabled placeholder=" " value="Kebaya">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name Pemilik</label>
                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="pr_owner_name" value="{{$data->pr_owner_name}}" required>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                                
                                @foreach($email as $data)
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" disabled placeholder="Email" value="{{$data->email}}">
                                    </div>
                                </div>
                                @endforeach
                            @foreach($partner as $data)
                                <div class='col-sm-6'>
                                    <div class="form-group">
                                        
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
      <div class="content">
        <h1>DateTimePicker Styles</h1>
        <label>Date & Time</label>
        <div class="input-group date-time" id="datetimepicker">
          <input class="form-control"/><span class="input-group-addon"><span class="fa fa-calendar"></span></span>
        </div>
        <label>Date</label>
        <div class="input-group date" id="datepicker">
          <input class="form-control"/><span class="input-group-addon"><span class="fa fa-calendar"></span></span>
        </div>
        <label>Time</label>
        <div class="input-group time" id="timepicker">
          <input class="form-control"/><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
        </div>
      </div>
    </div>
  </div>
</div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker2').datetimepicker({
                                            format: 'LT'
                                        });
                                    });
                                </script>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jam Tutup</label>
                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="pr_owner_name" value="{{$data->pr_owner_name}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" placeholder="" name="pr_addr" value="{{$data->pr_addr}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control" placeholder="Kode Pos" name="pr_postal_code" value="{{$data->pr_postal_code}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Wilayah</label>
                                        <select  class="form-control" id="inlineFormCustomSelectPref" name="pr_area" required>
                                            <option selected value="">{{$data->pr_area}}</option>
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
                                        <label>No. Telepon/HP (1)</label>
                                        <input type="number" class="form-control" placeholder="No. Telepon/HP" name="pr_phone" value="{{$data->pr_phone}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>No. Telepon/HP (2)</label>
                                        <input type="number" class="form-control" placeholder="No. Telepon/HP" name="pr_phone2" value="{{$data->pr_phone2}}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea rows="5" class="form-control" placeholder="" name="pr_desc" required>{{$data->pr_desc}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>

                        <div class="header">
                            <h4 class="title">Portofolio Bisnis</h4>
                        </div>  

                         <form enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="ps_img_port1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="ps_img_port2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="ps_img_port3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="ps_img_port4">
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>

                    @endforeach
        </div>
    </div>
    
</div>
        
@endsection