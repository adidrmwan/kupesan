    <div class="sidebar" data-color="red" data-image="{{ URL::asset('dist/images/sidebar-partner.png') }}" >
        <div class="sidebar-wrapper">
            <div class="logo">

                <div class="col-md-12 col-sm-12">
                     <img src="{{ URL::asset('dist/images/logo-navbar.png') }}" alt="Logo-Kupesan" style="max-width: 75%; margin-left: 20px;" />
                </div>

                <div class="col-md-12 col-sm-12">                
                    @if(!empty($partner->pr_name))
                    <a href="{{ route('partner.dashboard') }}" class="simple-text">
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
                @if(!empty($partner->pr_name))
                    <!-- kebaya -->
                    @if($partner->pr_type == '4')
                        @include('partner.layouts.sidebar-kebaya')
                    @elseif($partner->pr_type == '1')
                        @include('partner.layouts.sidebar-fotostudio')
                    @endif
                @else
                @endif
                
            </ul>
        </div>
    </div>