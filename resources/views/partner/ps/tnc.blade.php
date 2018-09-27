
         <div class="header">
             <h4 class="title">Syarat dan Ketentuan</h4>
         </div>
         <div class="content">
            <div class="row">
                <div class="col-md-9">
                    @foreach($tnc as $key => $data)
                    <p>{{$key+1}}. {{$data->tnc_desc}} 
                        <a href="{{route('delete.tnc', ['id' => $data->id])}}" class="btn btn-info btn-sm pull-right">Delete</a>
                    </p> 
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>Silahkan isi Syarat dan Ketentuan</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info addService">Add More</button>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="tnc[]" placeholder="Syarat dan Ketentuan">
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <button type="submit" class="btn btn-block btn-info pull-right">Submit</button>
                        <div class="clearfix"></div> 
                    </div>  
                </div>
              </div>
         </div>