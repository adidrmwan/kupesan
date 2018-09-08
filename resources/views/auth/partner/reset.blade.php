@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')

<section>
    <div class="colored-border"></div>
    <div id="full-page-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="forgot-password">
                        <div class="custom-form custom-form-fields">
                            <h3>Reset Password</h3>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <p>{{ session('status') }}</p>
                                </div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('password.reset') }}">
                            {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="E-Mail" required autofocus>

                                    <span><i class="fa fa-envelope"></i></span>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required >
                                    <span class="text-muted"><small>The password must be contain at least 8 characters including :</small></span><br> 
                                        <ul>
                                            <li><span class="text-muted"><small>One uppercase letter</small></span></li>
                                            <li><span class="text-muted"><small>One number</small></span></li>
                                        </ul>
                                    <span><i class="fa fa-lock"></i></span>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                    <span><i class="fa fa-lock"></i></span>

                                    @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                <button class="btn btn-orange btn-block">Reset Password</button>
                            </form>
                        </div><!-- end custom-form -->
                    </div><!-- end forgot-password -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end full-page-form -->
</section>

@include('layouts.footer')
@endsection
