
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span><i class="pe-7s-menu"></i></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('partner.dashboard') }}">Kupesan</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" >
                       <li >
                            <a class="nav-link" href="{{ route('partner.dashboard') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li >
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out <span class="sr-only">(current)</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>