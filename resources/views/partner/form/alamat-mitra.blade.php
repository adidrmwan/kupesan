<div class="header">
    <h4 class="title">Alamat</h4>
</div>
<div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Provinsi<small><b style="color: red;"> *</b></small></label>
                    <select class="form-control" name="pr_prov" id="provinces" required>
                        <option value="" disable="true" selected="true">Pilih Provinsi</option>
                        @foreach ($provinces as $key => $value)
                        <option value="{{$value->id}}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Wajib disi.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Kota/Kabupaten<small><b style="color: red;"> *</b></small></label>
                    <select class="form-control" name="pr_kota" id="regencies" required>
                      <option value="" disable="true" selected="true">Pilih Kota/Kabupaten</option>
                    </select>
                    <div class="invalid-feedback">
                      Wajib diisi. 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Kecamatan<small><b style="color: red;"> *</b></small></label>
                    <select class="form-control" name="pr_kec" id="districts" required>
                      <option value="" disable="true" selected="true">Pilih Kecamatan</option>
                    </select>
                    <div class="invalid-feedback">
                      Wajib diisi.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Kelurahan<small><b style="color: red;"> *</b></small></label>
                    <select class="form-control" name="pr_kel" id="villages">
                      <option value="0" disable="true" selected="true">Pilih Kelurahan</option>
                    </select>
                    <div class="invalid-feedback">
                      Wajib diisi.
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Kode Pos<small><b style="color: red;"> *</b></small></label>
                    @if(!empty($partner->pr_postal_code))
                    <input type="text" class="form-control" placeholder="Kode Pos" value="{{$partner->pr_postal_code}}" name="pr_postal_code" required>
                    @else
                    <input type="text" class="form-control" placeholder="Kode Pos" name="pr_postal_code" required>
                    @endif
                    <div class="invalid-feedback">
                      Wajib diisi.
                    </div>
                </div>
            </div>
        </div>
        @if(!empty($partner_prov->name))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p>{{$partner->pr_kel}}, {{$partner_kec->name}}, {{$partner_kota->name}}, {{$partner_prov->name}}, {{$partner->pr_postal_code}}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Alamat Lengkap<small><b style="color: red;"> *</b></small></label>
                    @if(!empty($partner->pr_addr))
                    <textarea class="form-control" placeholder="Tuliskan alamat usaha anda secara lengkap." name="pr_addr" required style="resize: none; height: 100px;">{{$partner->pr_addr}}</textarea>
                    @else
                    <textarea class="form-control" placeholder="Tuliskan alamat usaha anda secara lengkap." name="pr_addr" required style="resize: none; height: 100px;"></textarea>
                    @endif
                    <div class="invalid-feedback">
                      Silahkan isi alamat usaha anda.
                    </div>
                </div>
            </div>
        </div>
         
</div>