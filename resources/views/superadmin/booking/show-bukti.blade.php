@extends('superadmin.layouts.master-admin')
@section('title', 'Application Form')
@section('content')

<section class="content">  
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Application Form</h3>
          
        </div>
        <div class="box-body">
          @foreach($booking as $key => $data)
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>Nama Pemesan</th>
                    <td>{{$data->booking_user_name}}</td>
                  </tr>
                  <tr>
                    <th>No HP</th>
                    <td>{{$data->booking_user_nohp}}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{$data->booking_user_email}}</td>
                  </tr>
                  <tr>
                    <th colspan="2"></th>
                  </tr>
                  <tr>
                    <th>Nama Studio</th>
                    <td>{{$data->partner_name}}</td>
                  </tr>
                  <tr>
                    <th>Tanggal Pesan</th>
                    <td>{{date('d F Y', strtotime($data->booking_start_date))}}</td>
                  </tr>
                  <tr>
                    <th>Waktu Pesan</th>
                    <td>{{$data->booking_start_time}}:00 - {{$data->booking_end_time + $data->booking_overtime}}:00 WIB</td>
                  </tr>
                  <tr>
                    <th>Bukti Pembayaran</th>
                    <td>
                      @if(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".jpg")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.jpg')  }}" alt= "Bukti Transfer" />
                      @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".png")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.png')  }}" alt= "Bukti Transfer" /> 
                      @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".jpeg")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.jpeg')  }}" alt= "Bukti Transfer" /> 
                      @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".JPG")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.JPG')  }}" alt= "Bukti Transfer" />
                      @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".PNG")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.PNG')  }}" alt= "Bukti Transfer" /> 
                      @elseif(File::exists(public_path("bukti_pembayaran/".$data->bukti_transfer.".JPEG")))
                      <img style="height: auto; width: 300px;" class="img-responsive" src="{{ asset('../bukti_pembayaran/'.$data->bukti_transfer.'.JPEG')  }}" alt= "Bukti Transfer" /> 
                      @endif
                    </td>
                  </tr>
                  <tr style="background-color: #4b75a7; color: white;">
                    <th>Total</th>
                    <th>Rp {{number_format($data->booking_total,2,',','.')}}</th>
                  </tr>
                </tbody>
              </table>            
            </div>  
          </div>
          <div class="row">
            <div class=""></div>
            <div class="col-lg-12 pull-right" >
              @if($data->booking_status == 'confirmed')
              @else
              <a href="{{route('cancel.bukti', ['id' => $data->booking_id])}}">
                <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel this booking?')">Cancel</span>
                </button>
              </a>
              <a href="{{route('confirm.bukti', ['id' => $data->booking_id])}}">
                <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to confirm this booking?')">Confirm</span>
                </button>
              </a>
              @endif
              <a href="{{route('index')}}">
                <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Back</span>
                </button>
              </a>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endsection