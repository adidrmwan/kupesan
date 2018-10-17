<div class="card">
    <div class="header">
        <h4 class="title">Event</h4>
        <small>Upcoming Event</small>
    </div>
    <div class="content">
        <h3>There is no event..</h3>
    </div>
</div>

<div class="card">
    <div class="header">
        <h4 class="title">Event</h4>
        <small>Upcoming Event</small>
    </div>
    <div class="content">
        <table class="table table-bordered table-striped table-responsive" id="list-package2">
          <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Pengambilan</th>
                      <th>Tanggal Pengembalian</th>
                      <th>ID Paket</th>
                      <th>Nama Paket</th>
                      <th>Tipe Paket</th>
                      <th>Ukuran</th>
                      <th>Kuantitas</th>
                      <th>Harga Paket (Rp)</th>
                      <th>Deposit (Rp)</th>
                      <th>Dryclean (Rp)</th>
                      <th>Biaya Kirim (Rp)</th>
                      <th>Total (Rp)</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($booking_unapprove as $key => $data)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{date('d F Y H:i:s', strtotime($data->updated_at))}}</td>
                      <td>{{date('d F Y', strtotime($data->start_date))}}</td>
                      <td>{{date('d F Y', strtotime($data->end_date))}}</td>
                      <td>{{$data->package_id}}</td>
                      <td>{{$data->name}}</td>
                      <td>{{$data->set}}</td>
                      <td>{{$data->size}}</td>
                      <td>{{$data->quantity}} pcs</td>
                      @include('superadmin.kebaya.detail-harga-kebaya')
                      <!-- @if($data->booking_status == 'un_approved')
                      <td><span class="label label-danger">On Review</span></td>
                      @endif -->
                      <td>  
                        <a href="{{route('partner.cancel.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel?')">Cancel</span>
                          </button>
                        </a>
                        <a href="{{route('partner.approve.booking', ['id' => $data->booking_id])}}">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to approve?')">Approve</span>
                          </button>
                        </a>
                      </td> 
                    </tr>
                    @endforeach
                    </tbody>
        </table>
    </div>
</div>
