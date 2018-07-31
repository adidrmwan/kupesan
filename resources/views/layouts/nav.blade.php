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
                        <ul class="nav navbar-nav navbar-right navbar-search-link">
                                <li><a href="{{route('index')}}">Home</a></li>
                            @guest
                                <li><a href="{{ route('login') }}" >Log-in</a></li>
                                <li><a href="{{ route('register') }}" >Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{route('dashboard')}}">Profil-KU</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                            @endguest
                                <li>                                      
                                    <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px;" >
                                        <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">PARTNER-KU </a>
                                    </button>
                                </li>
                                <li></li>
                        </ul>
                    </div>
                </div>
            </nav>