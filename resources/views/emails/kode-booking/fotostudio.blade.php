Dear, {{ $first_name }} {{ $last_name}}!
<br>
<br>
Pesanan “Fotostudio” Anda
<br>
BOOKING CODE : {{$kode_booking}}
<table class="table table-bordered">
	<tr>
		<th style="text-align: left;">Name Partner : {{$partner_name}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Tanggal Sewa: {{ date('d F Y', strtotime($booking_start_date)) }} - {{ date('d F Y', strtotime($booking_end_date)) }}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Name Paket : <span style="text-transform: uppercase;">{{$pkg_name_them}} / pkg_category_them</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Harga Paket : Rp {{number_format($booking_normal_price,0,',','.')}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Harga Overtime : Rp {{number_format($booking_overtime_price,0,',','.')}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Total : Rp {{number_format($booking_total,0,',','.')}}</th>
	</tr>
</table>
<br>
Mohon tunjukkan Booking Code untuk menikmati pesanan Anda. Have a nice day!  

-Kupesan.ID 
{{ url('home')}}