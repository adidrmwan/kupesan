            <div class="col-md-12">
                    <div class="row">
                     <div class="col-md-4">
                         <div class="card">
                             <form role="form" action="{{ route('update.fasilitas') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                                 <div class="header">
                                     <h4 class="title">Fasilitas</h4>
                                     <small>Daftar fasilitas yang disediakan.</small>
                                 </div>
                                 <div class="content">
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->toilet))
                                                <input class="form-check-input" type="checkbox" value="1" name="toilet" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="toilet" id="defaultCheck1">
                                                @endif
                                                <label class="form-check-label" for="defaultCheck1">Kamar Mandi</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->wifi))
                                                <input class="form-check-input" type="checkbox" value="1" name="wifi" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="wifi" id="defaultCheck1">
                                                @endif
                                              <label class="form-check-label" for="defaultCheck1">Wi-Fi</label>
                                            </div>  
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->rganti))
                                                <input class="form-check-input" type="checkbox" value="1" name="rganti" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="rganti" id="defaultCheck1">
                                                @endif
                                              <label class="form-check-label" for="defaultCheck1">Ruang Ganti</label>
                                            </div>  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->ac))
                                                <input class="form-check-input" type="checkbox" value="1" name="ac" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="ac" id="defaultCheck1">
                                                @endif
                                              <label class="form-check-label" for="defaultCheck1">AC</label>
                                            </div>  
                                        </div>
                                     </div>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                @if(!empty($fasilitas->parkir))
                                                <input class="form-check-input" type="checkbox" value="1" name="parkir" id="defaultCheck1" checked="">
                                                @else
                                                <input class="form-check-input" type="checkbox" value="1" name="parkir" id="defaultCheck1">
                                                @endif
                                              <label class="form-check-label" for="defaultCheck1">Parkir</label>
                                            </div>  
                                        </div>
                                     </div>
                                     <button type="submit" class="btn btn-info btn-block pull-right">Update</button>
                                     <div class="clearfix"></div>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="col-md-8">
                        <div class="card">
                            <form role="form" action="{{ route('partner.upload.logo') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="header">
                                <h4 class="title">Upload Logo</h4>
                            </div>
                            @foreach($partner as $data)
                            @if(!empty($data->pr_logo))
                            
                            @else
                            @endif
                            @endforeach
                            <div class="content">
                                <div class="row">
                                    <img style="text-align: center; align-content: center; max-height: 160px; margin: 0 auto; float: none; position: relative;display: block;" class="img-responsive" src="{{ asset('logo/'.$data->id.'_'.$data->pr_type.'_'.$data->pr_name.'.png')  }}" alt= "Package Image" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="file-loading">
                                            <input id="file-0a" class="file" type="file" name="pr_logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                      </div>
                 </div>    
            </div>