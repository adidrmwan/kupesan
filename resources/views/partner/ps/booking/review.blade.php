@foreach($review as $key => $data)
<div class="col-sm-8 col-xs-12 col-md-4 col-lg-3">
  <div class="card">
    <div class="row">
      <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <div class="header">
          <h4 class="title text-uppercase" style="text-align: center;"><b>Review</b></h4>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-lg-12">
              <table class="table">
                <tr>
                    <th >Tanggal</th>
                    <td >{{ date('d F Y', strtotime($data->booking_start_date)) }}</td>
                </tr>
                <tr>
                    <th >Waktu</th>
                    <td >{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                </tr>
                <tr>
                    <th colspan="2">Detail Harga</th>
                </tr>
                <tr>
                    <th >Harga Paket</th>
                    <td >Rp {{number_format($data->total_normal)}}</td>
                </tr>
                <tr>
                    <th >Harga Overtime</th>
                    <td >Rp {{number_format($data->total_overtime)}}</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>{{$data->total}}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach