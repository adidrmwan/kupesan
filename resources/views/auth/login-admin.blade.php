@extends('layouts.app')

@section('title', 'Login')
@section('content')
<section>
    <div class="colored-border"></div>
    <div id="full-page-form" class="full-page-form-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="custom-form custom-form-fields">
                        <h3>Log-In Admin</h3>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}"> 
                            {{ csrf_field() }}

                             @if ($message = Session::get('success'))
                              <div class="alert alert-success" style="text-align: center;">
                                {{ $message }}
                              </div>
                            @endif
                            @if ($message = Session::get('warning'))
                              <div class="alert alert-warning" style="text-align: center;">
                                {{ $message }}
                              </div>
                            @endif
                            <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}" >
                                     <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus />
                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                     <span><i class="fa fa-user"></i></span>
                                </div>
                              </div>
                            </div>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                             <input id="password" type="password" class="form-control" name="password" placeholder="Password" required />
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                             <span><i class="fa fa-lock"></i></span>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="checkbox">
                                          <label>
                                            <input type="text" name="flag" value="admin" hidden="">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-top: 12px;"> Remember Me
                                          </label>
                                        </div>
                                      </div>
                                      <button class="btn btn-orange btn-block" type="submit">LOG-IN AS PARTNER-KU</button>
                                    </div>
                                    
                                  
                                    <div class="other-links">
                                        <p class="link-line">New Here ? <a href="{{route('mitra.daftar')}}">Register</a></p>
                                        <a class="simple-link" href="{{ route('mitra.password.request') }}"> Forgot Your Password?
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
