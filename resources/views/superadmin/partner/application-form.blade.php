@extends('superadmin.layouts.master-admin')
@section('title', 'Application Form')
@section('content')

@foreach($partner as $key => $value)
<section class="content">  
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Application Form</h3>
          
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-condensed table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>Partner Type</th>
                    <td>
                      @foreach($type as $data)
                      <label class="label label-success">{{$data->type_name}}</label>
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <th>Partner Name</th>
                    <td>{{$value->pr_name}}</td>
                  </tr>
                  <tr>
                    <th>Register Name</th>
                    <td>{{$value->first_name}} {{$value->last_name}}</td>
                  </tr>
                  <tr>
                    <th>Owner Name</th>
                    <td>{{$value->pr_owner_name}}</td>
                  </tr>
                  <tr>
                    <th>Work Hour</th>
                    <td>{{$value->open_hour}}:00 - {{$value->close_hour}}:00 WIB</td>
                  </tr>
                  <tr>
                    <th colspan="2"></th>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <td>{{$value->pr_addr}}, {{$value->pr_kel}}, {{$kecamatan->name}}, {{$kota->name}}, {{$provinsi->name}}, {{$value->pr_postal_code}}</td>
                  </tr>
                  <tr>
                    <th>Phone (1)</th>
                    <td>{{$value->phone_number}}</td>
                  </tr>
                  <tr>
                    <th>Phone (2)</th>
                    <td>{{$value->pr_phone2}}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>{{$value->email}}</td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td>{{$value->pr_desc}}</td>
                  </tr>
                  <tr>
                    <th>Registration Date</th>
                  <td>{{ date('d F Y', strtotime($value->created_at)) }}, {{ date('H:i', strtotime($value->created_at)) }}</td> 
                  </tr>
                </tbody>
              </table>
            </div>  
          </div>
          <div class="row">
            @if($value->status == '1')
            <div class="col-lg-12">
              <div class="box-header">
                <h1 class="label label-success">PARTNER INI TELAH DITINJAU.</h1> 
              </div>
            </div>
            @else
            <div class="col-lg-6">
              <div class="box-header">
                <h3 class="box-title">Foto KTP</h3> 
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                    @if(File::exists(public_path("partner_ktp/".$value->ktp.".jpg")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.jpg')  }}" alt= "ktp" />
                    @elseif(File::exists(public_path("partner_ktp/".$value->ktp.".png")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.png')  }}" alt= "ktp" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->ktp.".jpeg")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.jpeg')  }}" alt= "ktp" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->ktp.".JPG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.JPG')  }}" alt= "ktp" />
                    @elseif(File::exists(public_path("partner_ktp/".$value->ktp.".PNG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.PNG')  }}" alt= "ktp" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->ktp.".JPEG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->ktp.'.JPEG')  }}" alt= "ktp" /> 
                    @endif
                  </div>  
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-header">
                <h3 class="box-title">Foto Fisik Bangunan</h3> 
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                    @if(File::exists(public_path("partner_ktp/".$value->bangunan.".jpg")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.jpg')  }}" alt= "bangunan" />
                    @elseif(File::exists(public_path("partner_ktp/".$value->bangunan.".png")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.png')  }}" alt= "bangunan" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->bangunan.".jpeg")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.jpeg')  }}" alt= "bangunan" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->bangunan.".JPG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.JPG')  }}" alt= "bangunan" />
                    @elseif(File::exists(public_path("partner_ktp/".$value->bangunan.".PNG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.PNG')  }}" alt= "bangunan" /> 
                    @elseif(File::exists(public_path("partner_ktp/".$value->bangunan.".JPEG")))
                    <img style="height: auto; width: 500px;" class="img-responsive" src="{{ asset('../partner_ktp/'.$value->bangunan.'.JPEG')  }}" alt= "bangunan" /> 
                    @endif
                  </div>  
                </div>
              </div>
            </div>
            @endif
          </div>

          <div class="row">
            <br>
            <br>
            <div class="col-lg-12 pull-right" >
              @if($value->status == '1')
              @else
              <a href="{{route('cancel.partner', ['id' => $value->id])}}">
                <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to cancel this partner?')">Cancel</span>
                </button>
              </a>
              <a href="{{route('confirm.partner', ['id' => $value->id])}}">
                <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;" onclick="return confirm('Are you sure want to confirm this partner?')">Confirm</span>
                </button>
              </a>
              @endif
              <a href="{{route('daftar.partner')}}">
                <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Back</span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach
@endsection