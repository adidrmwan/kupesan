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
                            <form>   
                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Your Email"  required/>
                                     <span><i class="fa fa-envelope"></i></span>
                                </div>
                                
                                <button class="btn btn-orange btn-block">Send</button>
                            </form>
                                
                            <div class="other-links">
                                <p class="link-line">Already Have An Account ? <a href="{{ route('login') }}">Login Here</a></p>
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
