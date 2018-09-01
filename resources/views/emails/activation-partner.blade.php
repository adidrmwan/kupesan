Hi, {{ $first_name }} {{ $last_name}}
<br>
<br>
Thank you for registering at Kupesan.id
<br>
<br>
Please visit or click on the link below to verify your email address and activate your account: 
<br>
{{ url('partner/activation/2', $link)}}