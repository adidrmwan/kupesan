@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <div class="logreg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="login-wrapp">
                        <div class="logreg-contain">
                            <div class="custom-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab">Login to your account</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">Use social media</a>
                                    </li>
                                </ul>
                             
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}" >
                                                <label>Email Adress: <span class="noempaty">*</span></label> 
                                                <div>
                                                     <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus />
                                                     @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label>Password : <span class="noempaty">*</span></label>
                                                
                                                <div>
                                                    <input id="password" type="password" class="form-control" name="password" required />
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Login now</button>
                                            </div>
                                            <div>
                                                <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password?
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-md-12 text-center marginbot20">
                                               
                                                <h5>Login with social media account</h5>
                                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                                     {{ csrf_field() }}
                                                        <a href="{{ url('auth/facebook') }}" class="btn btn-primary btn-icon btn-block btn-picton btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
                                                         <a href="{{ url('auth/google') }}" class="btn btn-primary btn-icon btn-block btn-picton btn-lg"> Google</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
