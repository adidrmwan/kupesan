<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed ">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">Kupesan</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="#">Detail Profil Mitra</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <p>Log out</p>
                  </a>
=======
>>>>>>> 7f40de91e09bdc622802eb89b1e8e588ef6adb9f

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