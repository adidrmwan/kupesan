Dear, {{ $first_name }} {{ $last_name}}!
<br>
<br>
Pesanan “{{$category_name}}” Anda
<br>
BOOKING CODE : <b>{{$kode_booking}}</b>
<table class="table table-bordered">
	<tr>
		<th style="text-align: left;">Name Partner : {{$partner_name}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Tanggal Sewa: {{ date('d F Y', strtotime($start_date)) }} - {{ date('d F Y', strtotime($end_date)) }}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Name Paket : <span style="text-transform: uppercase;">{{$name}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Tipe / Set Paket : <span style="text-transform: uppercase;">{{$category_name}} / {{$set}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Ukuran : <span style="text-transform: uppercase;">{{$size}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Kuantitas Paket : <span style="text-transform: uppercase;">{{$kuantitas_pesanan}}</span></th>
	</tr>
	<tr>
		<th style="text-align: left;">Harga Paket : Rp {{number_format($booking_total,0,',','.')}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Deposit : Rp {{number_format($deposit,0,',','.')}}</th>
	</tr>
	<tr>
		<th style="text-align: left;">Total : Rp {{number_format($booking_total + $deposit,0,',','.')}}</th>
	</tr>
</table>
<br>
Mohon tunjukkan Booking Code untuk menikmati pesanan Anda. Have a nice day!  

-Kupesan.ID 
{{ url('home')}}