<div class="card">
     <form role="form" action="{{ route('kebaya.update.pu') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
         <div class="header">
             <h4 class="title">Panduan ukuran</h4>
             <small>Tuliskan detail ukuran dari kebaya Anda.</small>
         </div>
         <div class="content">
            <div class="row">
                <div class="col-md-5">
                    <table class="table table-responsive">
                        <thead>
                            <th>Ukuran</th>
                            <th>Panjang</th>
                            <th>Lebar</th>
                            <th>Action</th>
                        </thead>
                        @foreach($pu as $key => $data)
                        <tr>
                            <td>{{$data->ukuran}}</td>
                            <td>{{$data->panjang}} cm</td>
                            <td>{{$data->lebar}} cm</td>
                            <td><a href="{{route('kebaya.delete.pu', ['id' => $data->id])}}" class="btn btn-info btn-sm pull-right">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info addUkuran">Add More</button>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Ukuran</label>
                                <input type="text" class="form-control" name="ukuran[]" placeholder="Ukuran">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Panjang</label>
                                <input type="text" class="form-control" name="panjang[]" placeholder="Panjang (cm)">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Lebar</label>
                                <input type="text" class="form-control" name="lebar[]" placeholder="Lebar (cm)">
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
         </div>
     </form>
 </div>