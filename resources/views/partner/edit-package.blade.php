@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Package Thematic</h4>
                    </div>
                    
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id= "table-id">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2"> <span style="margin-left: 28%;"> Actions </span></th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                    <td>Sinaai-Waas</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Doris Greene</td>
                                    <td>$63,542</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mason Porter</td>
                                    <td>$78,615</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="panel-footer">
                            <div class="row">
                              <div class="col col-md-4">
                                <div class="row">
                                  <div class="col col-md-4">
                                    <p>Select Number Of Rows</p>
                                  </div>  
                                    <div class="form-group col col-md-8" style="float: right;">
                                        <select class  ="form-control" name="state" id="maxRows">
                                             <option value="5000"></option>
                                             <option value="5">5</option>
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="20">20</option>
                                             <option value="50">50</option>
                                             <option value="70">70</option>
                                             <option value="100">100</option>
                                            </select>
                                        
                                    </div>
                                </div>
                              </div>

                              <div class="col col-md-8">
                                <div class="pagination-container" style="">
                                    <nav>
                                      <ul class="pagination">
                                       <!-- Here the JS Function Will Add the Rows -->
                                      </ul>
                                    </nav>
                                </div>
                              </div>

                            </div>
                          </div>
                        

                    </div>
                </div>
                <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Package Room (Ala Carte)</h4>
                    </div>
                    
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id= "table-id">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2"> <span style="margin-left: 28%;"> Actions </span></th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                    <td>Baileux</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                    <td>Overland Park</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Doris Greene</td>
                                    <td>$63,542</td>
                                    <td>Malawi</td>
                                    <td>Feldkirchen in Kärnten</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mason Porter</td>
                                    <td>$78,615</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="panel-footer">
                            <div class="row">
                              <div class="col col-md-4">
                                <div class="row">
                                  <div class="col col-md-4">
                                    <p>Select Number Of Rows</p>
                                  </div>  
                                    <div class="form-group col col-md-8" style="float: right;">
                                        <select class  ="form-control" name="state" id="maxRows">
                                             <option value="5000"></option>
                                             <option value="5">5</option>
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="20">20</option>
                                             <option value="50">50</option>
                                             <option value="70">70</option>
                                             <option value="100">100</option>
                                            </select>
                                        
                                    </div>
                                </div>
                              </div>

                              <div class="col col-md-8">
                                <div class="pagination-container" style="">
                                    <nav>
                                      <ul class="pagination">
                                       <!-- Here the JS Function Will Add the Rows -->
                                      </ul>
                                    </nav>
                                </div>
                              </div>

                            </div>
                          </div>
                        

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Package Special</h4>
                    </div>
                    
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" id= "table-id">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2"> <span style="margin-left: 28%;"> Actions </span></th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                    <td>Oud-Turnhout</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Mason Porter</td>
                                    <td>$78,615</td>
                                    <td>Chile</td>
                                    <td>Gloucester</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><span class="pe-7s-pen" aria-hidden="true">&nbsp;</span>Edit</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><span class="pe-7s-close-circle" aria-hidden="true">&nbsp;</span>Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="panel-footer">
                            <div class="row">
                              <div class="col col-md-4">
                                <div class="row">
                                  <div class="col col-md-4">
                                    <p>Select Number Of Rows</p>
                                  </div>  
                                    <div class="form-group col col-md-8" style="float: right;">
                                        <select class  ="form-control" name="state" id="maxRows">
                                             <option value="5000"></option>
                                             <option value="5">5</option>
                                             <option value="10">10</option>
                                             <option value="15">15</option>
                                             <option value="20">20</option>
                                             <option value="50">50</option>
                                             <option value="70">70</option>
                                             <option value="100">100</option>
                                            </select>
                                        
                                    </div>
                                </div>
                              </div>

                              <div class="col col-md-8">
                                <div class="pagination-container" style="">
                                    <nav>
                                      <ul class="pagination">
                                       <!-- Here the JS Function Will Add the Rows -->
                                      </ul>
                                    </nav>
                                </div>
                              </div>

                            </div>
                          </div>
                        

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
        
@endsection