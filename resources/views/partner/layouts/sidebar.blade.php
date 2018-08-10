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
                <li>
                    <a href="{{ route('booking.schedule') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Booking Schedule</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ route('form.offline') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Offline Booking</p>
                    </a>
                </li> -->
                <li>
                    <a href="{{ route('form.dayoff') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Form Day-Off</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('booking.history') }}">
                        <i class="pe-7s-server"></i>
                        <p>Booking History</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.profile') }}">
                        <i class="pe-7s-user"></i>
                        <p>Partner Profile</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.portofolio') }}">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Upload Portofolio</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ route('partner.portofolio') }}">
                        <i class="pe-7s-user"></i>
                        <p>Terms & Condition</p>
                    </a>
                </li> -->
                <li>
                    <a>
                        <i class="pe-7s-photo"> </i> <p> Package</p> 
                    </a>
                    <ul class="list-unstyled" id="pageSubmenu">
                        <li style="margin-left: 35px;">
                            <a href="{{ route('partner-addpackage') }}">
                                <i class="pe-7s-plus"></i>
                                <p> Add Package </p>
                            </a>
                        </li>
                        <li style="margin-left: 35px;">
                            <a href="{{ route('partner-editpackage') }}">
                                <i class="pe-7s-note2"></i>
                                <p> List Package </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                @endif
                
            </ul>
        </div>
    </div>