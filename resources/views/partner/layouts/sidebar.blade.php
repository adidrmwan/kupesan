    <div class="sidebar" data-color="red" data-image=" {{URL::asset('partners/img/sidebar-4.jpg') }} ">
        <div class="sidebar-wrapper">
            <div class="logo">

                @foreach($partner as $data)
                    @if(!empty($data->pr_name))
                    <a href="{{ route('partner.dashboard') }}" class="simple-text">
                        {{$data->pr_name}}
                    </a>
                    @else
                    <a href="{{ route('partner.dashboard') }}" class="simple-text">
                        Nama Usaha Anda
                    </a>
                    @endif
                @endforeach
            </div>

            <ul class="nav">
                <li >
                    <a href="{{ route('partner.dashboard') }}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.dashboard') }}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="pe-7s-photo"> </i> <p> Photo Package &nbsp;&nbsp; <b> <span class="pe-7s-angle-down-circle"></span> </b>  </p> 
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li style="margin-left: 35px;">
                            <a href="addpackagepartner">
                                <i class="pe-7s-plus"></i>
                                <p> Add photo package </p>
                            </a>
                        </li>
                        <li style="margin-left: 35px;">
                            <a href="editpackagepartner">
                                <i class="pe-7s-note2"></i>
                                <p> Edit photo package </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="schedulepartner">
                        <i class="pe-7s-note2"></i>
                        <p>Schedule</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>