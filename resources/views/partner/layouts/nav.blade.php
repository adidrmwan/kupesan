<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed ">
    <div class="container-fluid">
        <div class="navbar-header col-md-3 col-sm-12">
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span><i class="pe-7s-menu "></i></span>
            </button>
            <a href="{{ route('home') }}">
                <img src="{{ URL::asset('dist/images/logo-navbar.png') }}" alt="Logo-Kupesan" style="max-width: 75%; margin-left: 20px;" />
            </a>
        </div>
        <div class="collapse navbar-collapse col-md-9 col-sm-12" >
            <ul class="nav navbar-nav navbar-right">
               <li >
                    <a class="nav-link" href="{{ route('partner.dashboard') }}"><i class="fa fa-home" aria-hidden="true" style="padding-right: 5px;"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li >
                    <a class="nav-link" href="{{ route('partner.dashboard') }}"><i class="fa fa-user" aria-hidden="true" style="padding-right: 5px;"></i> <b class="text-uppercase">{{$partner->pr_name}}</b> <span class="sr-only">(current)</span></a>
                </li> -->
                <li >
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out" aria-hidden="true" style="padding-right: 5px;"></i> Log-out <span class="sr-only">(current)</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                    </form>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>