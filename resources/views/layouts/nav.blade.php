<nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent landing-page-navbar" id="mynavbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>

            <a href="{{route('index')}}" class="navbar-brand">
                <img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " >
            </a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-left navbar-search-link">
                <li>
                    <form action="#" method="get" class="searchform navbar-form" role="search">
<!--                         <input type="hidden" value="search" name="view"> -->
                            <div class="input-group">
                                <input type="text"  name="searchword" required class="form-control" placeholder="Search" name="q">
                                <div class="input-group-btn">
                                    <button class="btn" type="submit" style="background-color: #EA410C"><i class="glyphicon glyphicon-search" style="padding: 4px 0; color: white "></i></button>
                                </div>
                        </div>
                    </form>
                </li>
                <li></li>
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-search-link">
                    <li><a href="{{route('index')}}"><i class="fa fa-home" aria-hidden="true" style="padding-right: 5px;"></i>Home</a></li>
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}" >Log-In</a></li>
                    <li><a href="{{ route('register') }}" >Register</a></li>
                    <li>                                      
                        <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                            <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">PARTNER-KU </a>
                        </button>
                    </li>
                @elseif(Auth::user())
                <li> <a href="{{route('dashboard')}}"><i class="fa fa-user" aria-hidden="true" style="padding-right: 5px;"></i>Profil-KU</a> </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 <i class="fa fa-sign-out" aria-hidden="true" style="padding-right: 5px;"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            
                            

                        </ul>
                    </li> -->
                @endif
                    
                    <li></li>
            </ul>
        </div>
    </div>
</nav>