<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span ><img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " style="width: 165px;" ></span></h2>

        <div id="main-menu">
        	<div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->
            
            <div class="list-group panel">
            
                <a href="{{route('index')}}" class="list-group-item"> <span><i class="fa fa-home link-icon"></i></span>Home</a>
                 
                @guest
                
                    <a href="{{ route('login') }}" class="list-group-item" ><span><i class="fa fa-sign-in link-icon"></i></span>Log In</a>
                    
                    <a href="{{ route('register') }}" class="list-group-item" ><span><i class="fa fa-user link-icon"></i></span>Daftar</a>
                @else

                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
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
                
                <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px; width: 100%;" >
                    <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">Jadi Mitra </a>
                </button>
                
                
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->