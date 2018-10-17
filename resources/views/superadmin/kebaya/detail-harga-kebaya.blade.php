<td>{{number_format($data->booking_total,0,',','.')}}</td>
<td>{{number_format($data->deposit,0,',','.')}}</td>
@if($data->price_dryclean == '0')
<td>-</td>
@else
<td>{{number_format($data->price_dryclean,0,',','.')}}</td>
@endif
@if($data->flag == 'userku')
<td>{{number_format($biayaKirim,0,',','.')}}</td>
<td>{{number_format($data->booking_total + $data->deposit + $biayaKirim + $data->price_dryclean,0,',','.')}}</td>
@else
<td>-</td>
<td>{{number_format($data->booking_total + $data->deposit + $data->price_dryclean,0,',','.')}}</td>
@endif