@extends('layouts.app')
@section('title', 'Selamat Datang')
@section('content')

<section>
    <div class="colored-border"></div>
    <div id="full-page-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="forgot-password">
                        <div class="custom-form custom-form-fields">
                            <h3>Forgot Password</h3>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <p>{{ session('status') }}</p>
                                </div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <input id="email" type="email" class="form-control" name="email" placeholder="Your E-Mail Address" value="{{ old('email') }}" required>
                                    <span><i class="fa fa-envelope"></i></span>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                <button class="btn btn-orange btn-block">Send Password Reset Link</button>
                            </form>
                                
                            <div class="other-links">
                                <p class="link-line">Already Have An Account ? <a href="{{ route('login') }}">LOG-IN Here</a></p>
                                <p class="link-line">New Here ? <a href="{{ route('register') }}">Join Us</a></p>
                            </div><!-- end other-links -->
                        </div><!-- end custom-form -->
                    </div><!-- end forgot-password -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end full-page-form -->
</section>

@include('layouts.footer')
@endsection
