@extends('layouts.master-studio')
@section('title', 'Search Result')
@section('content')
<section class="innerpage-wrapper">
    <div id="search-result-page" class="top-section-padding">
        <div class="container">
            <h1 style="text-align: center;">
                Oppss... Sorry :( <br>
                The Studio you were looking for <br>
                could not be found.
            </h1>
            <div class="col-md-4 col-sm-12" style="float: none;margin: 0 auto; position: relative;display: block; padding-bottom: 105px; padding-top: 35px;" >
                <a href="home" class="btn btn-orange" style="float: none;margin: 0 auto; position: relative;display: block;">Change Search</a>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection