<div class="row">
  <div class="col-md-12">
    <h5><b>Detail Pemesanan</b></h5>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <tr>
        <td>Tanggal Sewa</td>
        <td>{{ date('d F Y', strtotime($data->start_date)) }} - {{ date('d F Y', strtotime($data->end_date)) }}</td>
      </tr>
      <tr>
        <td>Tipe / Set Paket</td>
        <td>{{$data->category_name}} / {{$data->set}}</td>
      </tr>
      <tr>
        <td>Ukuran</td>
        <td>{{$data->size}}</td>
      </tr>
      <tr>
        <td>Kuantitas Pesanan</td>
        <td>{{$data->kuantitas}} pcs</td>
      </tr>
      <tr>
        <th>Tanggal Penerimaan</th>
        <th>{{ date('d F Y', strtotime($data->start_date)) }} <br>
        @if($alamat_kirim->flag == 'partnerku')  
          <h5 class="text-muted">Anda diharapkan untuk mengambil pesanan pada lokasi Partner-Ku di <br>
            <b style="color: #EA410C;">{{$partner->pr_addr}}, {{$partner->pr_kel}}, {{$kecamatan->name}}, {{$kota->name}}, {{$provinsi->name}}, {{$partner->pr_postal_code}}</b> pada tanggal 
            <b>{{ date('d F Y', strtotime($data->start_date)) }}</b>.<br>
            Kontak <b>{{$data->partner_name}}</b> akan diberikan setelah menyelesaikan konfirmasi pembayaran.
          </h5>
        @elseif($alamat_kirim->flag == 'userku')
          <h5 class="text-muted">Pesanan Anda akan dikirim dengan kurir JNE dan akan sampai di <br>
            <b style="color: #EA410C;">{{$alamat_kirim->pr_addr}}, {{$alamat_kirim->pr_kel}}, {{$kecamatan_alamat->name}}, {{$kota_alamat->name}}, {{$provinsi_alamat->name}}, {{$partner->pr_postal_code}}</b> pada tanggal 
            <b>{{ date('d F Y', strtotime($data->start_date)) }}</b>.
          </h5>
        @endif
        </th>
      </tr>
      <tr>
        <th>Tanggal Penerimaan</th>
        <th>{{ date('d F Y', strtotime($data->end_date)) }}</th>
      </tr>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h5><b>Harga</b></h5>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <tr>
        <td>Harga Paket</td>
        <td>Rp. {{number_format($data->booking_total, 0, ',', '.')}}</td>
      </tr>
      <tr>
        <td>Deposit</td>
        <td>Rp. {{number_format($data->deposit, 0, ',', '.')}}</td>
      </tr>
      @if($data->price_dryclean != '0')
      <tr>
        <td>Dryclean Cost</td>
        <td>Rp. {{number_format($data->price_dryclean, 0, ',', '.')}}</td>
      </tr>
      @endif
      @if($alamat_kirim->flag == 'userku')
      <tr>
        <td>Biaya Pengiriman</td>
        <td>Rp. {{number_format($biayaKirim, 0, ',', '.')}}</td>
      </tr>
      <tr>
        <th>Total</th>
        <th>Rp. {{number_format($data->booking_total + $data->deposit + $data->price_dryclean + $biayaKirim, 0, ',', '.')}}</th>
      </tr>
      @else
      <tr>
        <th>Total</th>
        <th>Rp. {{number_format($data->booking_total + $data->deposit + $data->price_dryclean, 0, ',', '.')}}</th>
      </tr>
      @endif
    </table>
  </div>
</div>