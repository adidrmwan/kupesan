<li>Harga Paket : <span class="pull-right-booking">Rp {{number_format($listpesanan->booking_total, 0, ',', '.')}}</span></li>
<li>Deposit : <span class="pull-right-booking">Rp {{number_format($listpesanan->deposit, 0, ',', '.')}}</span></li>
@if($listpesanan->price_dryclean != '0')
<li>Dryclean Cost : <span class="pull-right-booking">Rp {{number_format($listpesanan->price_dryclean, 0, ',', '.')}}</span></li>
@endif
@if($listpesanan->flag == 'userku')
<li>Biaya Pengiriman : <span class="pull-right-booking">Rp {{number_format($biayaKirim, 0, ',', '.')}}</span></li>
<li>Total :<span class="pull-right-booking"> Rp {{number_format($listpesanan->booking_total + $listpesanan->deposit + $biayaKirim + $listpesanan->price_dryclean, 0, ',','.')}}</span></li>
@else
<li>Total :<span class="pull-right-booking"> Rp {{number_format($listpesanan->booking_total + $listpesanan->deposit + $listpesanan->price_dryclean, 0, ',','.')}}</span></li>
@endif