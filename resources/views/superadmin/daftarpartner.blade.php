@extends('superadmin.layouts.master-admin')
@section('title', 'Daftar Partner')
@section('content')

<section class="content">
  <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$total_fotostudio}}</h3>

            <p>Total Fotostudio</p>
          </div>
          <div class="icon">
            <i class="fa fa-building"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$total_fotografer}}</h3>

            <p>Total Fotografer</p>
          </div>
          <div class="icon">
            <i class="fa fa-camera"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$total_mua}}</h3>

            <p>Total Penata Rias</p>
          </div>
          <div class="icon">
            <i class="fa fa-certificate"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$total_kebaya}}</h3>

            <p>Total Kebaya</p>
          </div>
          <div class="icon">
            <i class="fa fa-female"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
  </div>       
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Partner List</h3>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Unconfirmed <i class="glyphicon glyphicon-remove-circle"></i></a></li>
              <li><a href="#sales-chart" data-toggle="tab">Confirmed <i class="glyphicon glyphicon-ok-circle"></i></a></li>
            </ul>
            <div class="tab-content no-padding">
              <div class="tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                <table id="example5" class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Type</th>
                    <th>Partner Name</th>
                    <th>Owner Name</th>
                    <th>E-mail</th>
                    <th>Register Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($partner as $key => $value)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->type_name}}</td>
                    <td>{{$value->pr_name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->pr_owner_name}}</td>
                    <td>{{ date('d F Y', strtotime($value->created_at)) }}, {{ date('H:i', strtotime($value->created_at)) }}</td>
                    <td>
                      <a href="{{route('show.partner', ['id' => $value->id])}}">
                        <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Show</span>
                        </button>
                      </a>
                      <a href="{{route('cancel.partner', ['id' => $value->id])}}">
                        <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;" onclick="return confirm('Are you sure want to cancel?')"><span style="color: white; text-decoration: none;">Cancel</span>
                        </button>
                      </a>
                      <a href="{{route('confirm.partner', ['id' => $value->id])}}">
                        <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;" onclick="return confirm('Are you sure want to cancel?')"><span style="color: white; text-decoration: none;">Confirm</span>
                        </button>
                      </a>

                    </td>  
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <div class="tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <table id="example7" class="table table-bordered table-striped table-condensed">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>User ID</th>
                    <th>Partner Name</th>
                    <th>Owner Name</th>
                    <th>Type</th>
                    <th>Register Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($partner_confirmed as $key => $value)
                  <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>{{$value->pr_name}}</td>
                    <td>{{$value->pr_owner_name}}</td>
                    <td>{{$value->type_name}}</td>
                    
                    <td>{{ date('d F Y', strtotime($value->created_at)) }}, {{ date('H:i', strtotime($value->created_at)) }}</td>
                    <td>
                      <a href="{{route('show.partner', ['id' => $value->id])}}">
                        <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Show</span>
                        </button>
                      </a>
                      <a href="{{route('cancel.partner', ['id' => $value->id])}}">
                        <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Cancel</span>
                        </button>
                      </a>
                    </td> 
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection