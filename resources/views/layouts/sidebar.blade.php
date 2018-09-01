<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span ><img src=" {{ URL::asset('dist/images/logo-navbar.png') }} " style="width: 165px;" ></span></h2>

        <div id="main-menu">
        	<div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->
            
            <div class="list-group panel">

                        <form role="search" action="{{ route('search.data') }}" method="post" enctype="multipart/form-data" class="searchform navbar-form">
                    {{ csrf_field() }}
        <!--                         <input type="hidden" value="search" name="view"> -->
                                <div class="input-group">
                                    <input type="text"  name="word" required class="form-control" placeholder="Search by tag, name..">
                                    <div class="input-group-btn">
                                        <button class="btn" type="submit" style="background-color: #EA410C"><i class="glyphicon glyphicon-search" style="padding: 4px 0; color: white "></i></button>
                                    </div>
                            </div>
                        </form>
                <a href="{{route('index')}}" class="list-group-item"> <span><i class="fa fa-home link-icon"></i></span>Home</a>
                 
                @if(Auth::guest())
                
                    <a href="{{ route('login') }}" class="list-group-item" ><span><i class="fa fa-sign-in link-icon"></i></span>Log-In</a>
                    
                    <a href="{{ route('register') }}" class="list-group-item" ><span><i class="fa fa-user link-icon"></i></span>Register</a>

                    <button class="btn btn-orange" style=" padding: 10px 30px; margin-top: 6px; width: 100%;" >
                        <a href="{{route('jadi.mitra')}}" style="color: white; text-decoration: none;">PARTNER-KU  </a>
                    </button>
                 @elseif(Auth::user())

                <a href="{{ route('dashboard')}}" class="list-group-item" ><span><i class="fa fa-user link-icon"></i></span>
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
                 
                <a href="{{ route('logout') }}" class="list-group-item"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <span><i class="fa fa-sign-out link-icon"></i></span>Log-Out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }} 
                </form>
                        
                <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            
                        </ul>
                    </li> -->

                @endguest                
                
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->