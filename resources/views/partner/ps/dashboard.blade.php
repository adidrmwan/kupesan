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
              <th>Jadwal Pesan</th>
              <th>Nama Paket</th>
              <th>Tipe Paket</th>
              <th>Total</th>
              <!-- <th>Status</th> -->
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($booking_unapprove as $key => $data)
            <tr>
              <td>{{$key + 1}}</td>
              <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
              <td>{{date('H:i', strtotime($data->booking_start_date))}} - {{date('H:i', strtotime($data->booking_end_date))}} WIB</td>
              <td>{{$data->pkg_name_them}}</td>
              <td>{{$data->pkg_category_them}}</td>
              <td>Rp {{number_format($data->booking_total,0,',','.')}}</td>
             <!--  @if($data->booking_status == 'un_approved')
              <td><span class="label label-danger">On Review</span></td>
              @endif -->
              <td>  
                <a href="{{route('sp.cancel.booking', ['id' => $data->booking_id])}}">
                  <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel this booking?')">Cancel</span>
                  </button>
                </a>
                <a href="{{route('sp.approve.booking', ['id' => $data->booking_id])}}">
                  <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to aprrove this booking?')">Approve</span>
                  </button>
                </a>
              </td> 
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
