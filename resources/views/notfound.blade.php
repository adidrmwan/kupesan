@extends('layouts.app')
@section('title', 'Search Result')
@section('content')
<section class="innerpage-wrapper">
    <div id="search-result-page" class="top-section-padding">
        <div class="container">
            <h2 style="text-align: center;">
               <b> Oppss... Sorry :(</b> <br>
                The keyword you were looking for <br>
                could not be found.
            </h2>
            <div class="col-md-4 col-sm-12" style="float: none;margin: 0 auto; position: relative;display: block; padding-bottom: 75px; padding-top: 31px;" >
                <a href="{{route('home')}}" class="btn btn-orange" style="float: none;margin: 0 auto; position: relative;display: block;">Change Search</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection