    <div class="sidebar" data-color="white" >
        <div class="sidebar-wrapper">
            <div class="logo">

                
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