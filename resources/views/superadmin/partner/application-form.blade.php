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
          @foreach($partner as $key => $value)
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
            <div class=""></div>
            <div class="col-lg-12 pull-right" >
              <a href="{{route('cancel.partner', ['id' => $value->id])}}">
                <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Cancel</span>
                </button>
              </a>
              @if($value->status == '1')
              @else
              <a href="{{route('confirm.partner', ['id' => $value->id])}}">
                <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Confirm</span>
                </button>
              </a>
              @endif
              <a href="{{route('daftar.partner')}}">
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