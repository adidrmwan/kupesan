        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Kupesan</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav justify-content-center">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Detail Profil Mitra</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                      </li>
                      <li class="nav-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <p>Log out</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>