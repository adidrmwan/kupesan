Hello, {{$partner_name}}.
<br>
<br>
Berikut adalah detail pesanan dari pelanggan Kupesan,
<br>
<table class="table table-bordered">
	<tr>
		<th style="text-align: left;">Name Pelanggan : {{$booking_user_name}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Name Paket : <span style="text-transform: uppercase;">{{$pkg_name_them}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Tanggal Pesan: {{ date('d F Y', strtotime($booking_start_date)) }}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Durasi Pesan: {{$booking_start_time}}:00 - {{$booking_end_time + $booking_overtime}}:00 WIB (Paket: {{$booking_end_time - $booking_start_time}} @if($booking_overtime != '0') Jam, Overtime: {{$booking_overtime}} Jam @endif )
		</th>
	</tr>
	<tr>
		<th style="text-align: left;">Total : Rp {{number_format($booking_total,0,',','.')}}</th>
	</tr>
</table>

Apakah anda akan menerima pesanan ini?<br>

{{ url('partner/dashboard', $link)}}