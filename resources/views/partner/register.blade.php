@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section>
            <div class="colored-border"></div>
            <div id="full-page-form">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">                            
                            <div class="custom-form custom-form-fields">
                                <h3>Daftar Jadi Mitra</h3>
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                    <div class="form-group">
                                          <input id="name" type="text" class="form-control" name="name" placeholder="Your Name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                         <span><i class="fa fa-user"></i></span>
                                    </div>
    
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          <input id="email" type="email" class="form-control" name="email" placeholder="Your Email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                         <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                         <input id="password" type="password" class="form-control" name="password" placeholder="Your Password"required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
    
                                    <div class="form-group">
                                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confrim Password" required>
                                         <span><i class="fa fa-lock"></i></span>
                                    </div>
                                    
                                    <button class="btn btn-orange btn-block" type="submit">Daftar</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="login">Login Here</a></p>
                                    <p>By registering, I agree with Terms & Conditions and Privacy Policy of Kupesan.</p>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
            
        </section>
@endsection