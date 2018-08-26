@extends('layouts.app')
@section('title', 'Register')
@section('content')
<section>
            <div class="colored-border"></div>
            <div id="full-page-form" class="full-page-form-user">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">                            
                            <div class="custom-form custom-form-fields">
                                <h3>Register</h3>
                                <form class="form-horizontal" method="POST" action="{{route('register')}}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                                  <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>

                                                    @if ($errors->has('first_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                    @endif
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>   
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                                  <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>

                                                    @if ($errors->has('last_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                 <span><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group {{ $errors->has('birth_date') ? ' has-error' : '' }} " id="datetimepicker" >
                                                  <input id="birth_date" type="date" class="form-control" name="birth_date" placeholder="Birth Date" value="{{ old('birth_date') }}" data-date-format="yyyy-mm-dd" required >

                                                    @if ($errors->has('birth_date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('birth_date') }}</strong>
                                                        </span>
                                                    @endif
                                                 <span><i class="fa fa-birthday-cake"></i></span>
                                            </div>        
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                  <input id="email" type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                 <span><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                                  <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required autofocus>

                                                    @if ($errors->has('phone_number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                                        </span>
                                                    @endif
                                                 <span><i class="fa fa-phone"></i></span>
                                            </div>        
                                        </div>
                                    </div>
            

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                 <input id="password" type="password" class="form-control" name="password" placeholder="Password"required>
                                                 <span class="text-muted"><small>The password must be contain at least 8 characters.</small></span>

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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                                 <span><i class="fa fa-lock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    
    
                                    
                                    <button class="btn btn-orange btn-block" type="submit">Register</button>
                                </form>
                                
                                <div class="other-links">
                                    <p class="link-line">Already Have An Account ? <a href="{{route('login')}}">LOG-IN Here</a></p>
                                    <p>By registering, I agree with Terms & Conditions and Privacy Policy of Kupesan.</p>
                                </div><!-- end other-links -->
                            </div><!-- end custom-form -->
                            
                            
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end full-page-form -->
            
        </section>
        @include('layouts.footer')
@endsection
