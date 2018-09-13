@extends('partner.layouts.app-form')

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
                                <div class="col-md-6 col-sm-6">
                                    <label>#1 Best Portfolio</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @if(!empty($data->album_img_1))
                                        @if(File::exists(public_path("album/".$data->album_img_1.".jpg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_1.".png")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.png')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_1.".jpeg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.jpeg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_1.".JPG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.JPG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_1.".PNG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.PNG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_1.".JPEG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_1.'.JPEG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @endif
                                    @else
                                    <img style="text-align: center; align-content: center; width: 500px; height: auto; padding: 20px;" class="img-responsive" src="{{ asset('partners/images/studio-foto.png')  }}" alt= "Album / Portofolio Bisnis" />
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>#2 Best Portfolio</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_2">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @if(!empty($data->album_img_2))
                                        @if(File::exists(public_path("album/".$data->album_img_2.".jpg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_2.".png")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.png')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_2.".jpeg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.jpeg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_2.".JPG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.JPG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_2.".PNG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.PNG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_2.".JPEG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_2.'.JPEG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @endif
                                    @else
                                    <img style="text-align: center; align-content: center; width: 500px; height: auto; padding: 20px;" class="img-responsive" src="{{ asset('partners/images/studio-foto.png')  }}" alt= "Album / Portofolio Bisnis" />
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>#3 Best Portfolio</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_3">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @if(!empty($data->album_img_3))
                                        @if(File::exists(public_path("album/".$data->album_img_3.".jpg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_3.".png")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.png')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_3.".jpeg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.jpeg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_3.".JPG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.JPG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_3.".PNG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.PNG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_3.".JPEG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_3.'.JPEG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @endif
                                    @else
                                    <img style="text-align: center; align-content: center; width: 500px; height: auto; padding: 20px;" class="img-responsive" src="{{ asset('partners/images/studio-foto.png')  }}" alt= "Album / Portofolio Bisnis" />
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>#4 Best Portfolio</label>
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" name="album_img_4">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    @if(!empty($data->album_img_4))
                                        @if(File::exists(public_path("album/".$data->album_img_4.".jpg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.jpg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_4.".png")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.png')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_4.".jpeg")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.jpeg')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_4.".JPG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.JPG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_4.".PNG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.PNG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @elseif(File::exists(public_path("album/".$data->album_img_4.".JPEG")))
                                        <img style="text-align: center; align-content: center; width: auto; height: 360px; padding: 20px;" class="img-responsive" src="{{ asset('album/'.$data->album_img_4.'.JPEG')  }}" alt= "Album / Portofolio Bisnis" />
                                        @endif
                                    @else
                                    <img style="text-align: center; align-content: center; width: 500px; height: auto; padding: 20px;" class="img-responsive" src="{{ asset('partners/images/studio-foto.png')  }}" alt= "Album / Portofolio Bisnis" />
                                    @endif
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     
@endsection