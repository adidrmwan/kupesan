@extends('superadmin.layouts.master-admin')
@section('title', 'Daftar Partner')
@section('content')

  <section class="content">      
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Booking List</h3>
          </div>
          <div class="box-body">
            <div class="nav-tabs-custom">
              <div class="tab-content no-padding">
                <div class="tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <table id="example1" class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>User ID</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Details</th>
                      <th>Cancel</th>
                      <th>Confirm</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    <tr>
                      <td>1</td>
                      <td>123</td>
                      <td>12 Agustus</td>
                      <td> 23.00</td>
                      <td> </td>
                      
                      <td><span class="label label-success">Transfered</span></td>
                      <td>

                          <button type="submit" class="btn btn-primary btn-xs" style=" padding: 3px 15px;" data-toggle="modal" data-target="#show-pemesan"><span style="color: white; text-decoration: none;">Show</span>
                          </button>

                      </td>
                      <td>  
                        <a href="">
                          <button type="submit" class="btn btn-danger btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Cancel</span>
                          </button>
                        </a>
                      </td>  
                      <td>  
                        <a href="">
                          <button type="submit" class="btn btn-success btn-xs" style=" padding: 3px 15px;"><span style="color: white; text-decoration: none;">Confirm</span>
                          </button>
                        </a>
                      </td>
                    </tr>
                    
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