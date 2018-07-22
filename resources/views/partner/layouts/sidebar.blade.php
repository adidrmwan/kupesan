    <div class="sidebar" data-color="red" data-image=" {{URL::asset('partners/img/sidebar-4.jpg') }} ">
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
                <li>
                    <a href="schedulepartner">
                        <i class="pe-7s-note2"></i>
                        <p>Jadwal Booking</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.profile') }}">
                        <i class="pe-7s-user"></i>
                        <p>Mitra Profil</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.portofolio') }}">
                        <i class="pe-7s-user"></i>
                        <p>Portofolio</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.portofolio') }}">
                        <i class="pe-7s-user"></i>
                        <p>Syarat & Ketentuan</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="pe-7s-photo"> </i> <p> Kelola Paket &nbsp;&nbsp; <b> <span class="pe-7s-angle-down-circle"></span> </b>  </p> 
                    </a>
                    <ul class="list-unstyled" id="pageSubmenu">
                        <li style="margin-left: 35px;">
                            <a href="{{ route('partner-addpackage') }}">
                                <i class="pe-7s-plus"></i>
                                <p> Tambah Paket </p>
                            </a>
                        </li>
                        <li style="margin-left: 35px;">
                            <a href="{{ route('partner-editpackage') }}">
                                <i class="pe-7s-note2"></i>
                                <p> Daftar Paket </p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>