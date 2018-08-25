    <div class="sidebar" data-color="red" data-image="{{ URL::asset('dist/images/sidebar-partner.png') }}" >
        <div class="sidebar-wrapper">
            <div class="logo">
                <div class="col-md-12 col-sm-12">
                    @if(!empty($partner->pr_name))
                    <a href="{{ route('partner.dashboard') }}" class="simple-text">
                        @if(File::exists(public_path("logo/".$partner->pr_logo.".jpg")))
                        <img src="{{ asset('logo/'.$partner->pr_logo.'.jpg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; height: 70px; width: auto; display: block;position: relative; border-radius: 100%;" />
                        @elseif(File::exists(public_path("logo/".$partner->pr_logo.".png")))
                        <img src="{{ asset('logo/'.$partner->pr_logo.'.png')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; height: 70px; width: auto; display: block;position: relative; border-radius: 100%;" />
                        @elseif(File::exists(public_path("logo/".$partner->pr_logo.".jpeg")))
                        <img src="{{ asset('logo/'.$partner->pr_logo.'.jpeg')  }}" class="img-responsive" alt="about-img" style="max-width: 100%; margin: 0 auto; float: none; height: 70px; width: auto; display: block;position: relative; border-radius: 100%;" />
                        @endif

                        <br>

                        {{$partner->pr_name}}
                    </a>
                    @else
                    <a href="{{ route('partner.dashboard') }}" class="simple-text">
                        Nama Usaha Anda
                    </a>
                    @endif
                </div>

            </div>

            <ul class="nav">
                <li >
                    <a href="{{ route('partner.dashboard') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if($partner->status == '0')
                
                @elseif($partner->status == '1')
                    @if(!empty($partner->pr_name))
                        <!-- kebaya -->
                        @if($partner->pr_type == '4')
                            @include('partner.layouts.sidebar-kebaya')
                        @elseif($partner->pr_type == '1')
                            @include('partner.layouts.sidebar-fotostudio')
                        @endif
                    @else
                    @endif
                @endif
            </ul>
        </div>
    </div>