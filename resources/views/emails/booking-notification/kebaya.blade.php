Halo, {{$partner_name}}.
<br>
<br>
Berikut adalah detail pesanan dari pelanggan Kupesan,
<br>
<table class="table table-bordered">
	<tr>
		<th style="text-align: left;">Name Pelanggan : {{$user_name}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Tanggal Sewa: {{ date('d F Y', strtotime($start_date)) }} - {{ date('d F Y', strtotime($end_date)) }}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Name Paket : <span style="text-transform: uppercase;">{{$name}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Tipe Paket : <span style="text-transform: uppercase;">{{$category_name}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Ukuran : <span style="text-transform: uppercase;">{{$size}}</span></th>
	</tr>
	@if($flag == 'userku')
	<tr>
		<th style="text-align: left;">Total : Rp {{number_format($booking_total + $deposit + $price_dryclean + 10000,0,',','.')}}</th>
	</tr>
	@else
	<tr>
		<th style="text-align: left;">Total : Rp {{number_format($booking_total + $deposit + $price_dryclean,0,',','.')}}</th>
	</tr>
	@endif
</table>

Apakah anda akan menerima pesanan ini?<br>

{{ url('partner/dashboard/busana', $link)}}