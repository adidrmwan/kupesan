@extends('layouts.app-partner')

@section('content')
<div class="content">  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Portofolio</h4>
                        <small>Upload Portofolio Terbaik dari Jasa Anda.</small>
                    </div>  
                    <div class="content">
                         <form role="form" action="{{ route('partner.upload.portofolio') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <label>Upload Portofolio Terbaik 1</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_1">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>Upload Portofolio Terbaik 2</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_2">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>Upload Portofolio Terbaik 3</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_3">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <label>Upload Portofolio Terbaik 4</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_4">
                                    </div>
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Review Portofolio</h4>
                    </div>  
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <table>
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <td >
                                            @if(!empty($data->album_img_1))
                                            <img style="text-align: center; align-content: center; width: 500px; height: auto; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                            @else
                                            @endif    
                                            </td>
                                            <td>
                                            @if(!empty($data->album_img_2))
                                            <img style="text-align: center; align-content: center; width: 500px; height: auto;padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                            @else
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            @if(!empty($data->album_img_3))
                                            <img style="text-align: center; align-content: center; width: 500px; height: auto;padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                            @else
                                            @endif    
                                            </td>
                                            <td>
                                            @if(!empty($data->album_img_4))
                                            <img style="text-align: center; align-content: center; width: 500px; height: auto;padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                            @else
                                            @endif   
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
</div>     
@endsection