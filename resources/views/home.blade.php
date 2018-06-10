@extends('layouts.app')

@section('content')

    <!-- END OF SLIDER WRAPPER -->
<div class="contain-wrapp padding-bot30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Tabs -->
                    <div class="custom-tabs tabs-icon">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#first2" data-toggle="tab">
                                    <i class="fa fa-plane"></i>
                                    Filght ticket
                                </a>
                            </li>
                            <li>
                                <a href="#second2" data-toggle="tab">
                                    <i class="fa fa-hotel"></i>
                                    Find hotel
                                </a>
                            </li>
                            <li>
                                <a href="#third2" data-toggle="tab">
                                    <i class="fa fa-train"></i>
                                    Train ticket
                                </a>
                            </li>
                            <li>
                                <a href="#fourth2" data-toggle="tab">
                                    <i class="fa fa-map"></i>
                                    Find destination
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="first2">
                                <form class="custom-form white-form marginbot-clear">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>1. Flight Destination</h5>
                                                </div>
                                                <div class="col-md-12 marginbot5">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>From</option>
                                                        <optgroup label="INDONESIA">
                                                            <option value="bali">Bali/Denpasar</option>
                                                            <option value="jak">Jakarta</option>
                                                            <option value="mak">Makassar</option>
                                                            <option value="med">Medan</option>
                                                            <option value="sur">Surabaya</option>
                                                            <option value="yog">Yogyakarta</option>
                                                        </optgroup>
                                                        <optgroup label="SINGAPORE">
                                                            <option value="sing">Singapore</option>
                                                        </optgroup>
                                                        <optgroup label="MALAYSIA">
                                                            <option value="johor">Johor Bahru</option>
                                                            <option value="kota">Kota Kinabalu</option>
                                                            <option value="kuala">Kuala Lumpur</option>
                                                            <option value="kuch">Kuching</option>
                                                            <option value="pen">Penang</option>
                                                        </optgroup>
                                                        <optgroup label="THAILAND">
                                                            <option value="bang">Bangkok</option>
                                                            <option value="hat">Hat Yai</option>
                                                            <option value="phu">Phuket</option>
                                                        </optgroup>
                                                        <optgroup label="AUSTRALIA">
                                                            <option value="mel">Melbourne</option>
                                                            <option value="per">Perth</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 text-center marginbot5">
                                                    <i class="fa fa-long-arrow-up fa-2x primary"></i>
                                                    <i class="fa fa-long-arrow-down fa-2x primary"></i>
                                                </div>
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>To</option>
                                                        <optgroup label="INDONESIA">
                                                            <option value="bali">Bali/Denpasar</option>
                                                            <option value="jak">Jakarta</option>
                                                            <option value="mak">Makassar</option>
                                                            <option value="med">Medan</option>
                                                            <option value="sur">Surabaya</option>
                                                            <option value="yog">Yogyakarta</option>
                                                        </optgroup>
                                                        <optgroup label="SINGAPORE">
                                                            <option value="sing">Singapore</option>
                                                        </optgroup>
                                                        <optgroup label="MALAYSIA">
                                                            <option value="johor">Johor Bahru</option>
                                                            <option value="kota">Kota Kinabalu</option>
                                                            <option value="kuala">Kuala Lumpur</option>
                                                            <option value="kuch">Kuching</option>
                                                            <option value="pen">Penang</option>
                                                        </optgroup>
                                                        <optgroup label="THAILAND">
                                                            <option value="bang">Bangkok</option>
                                                            <option value="hat">Hat Yai</option>
                                                            <option value="phu">Phuket</option>
                                                        </optgroup>
                                                        <optgroup label="AUSTRALIA">
                                                            <option value="mel">Melbourne</option>
                                                            <option value="per">Perth</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>2. Date of Flight</h5>
                                                </div>
                                                <div class="col-md-12 marginbot30">
                                                    <input type="text" class="form-control default_datetimepicker" placeholder="Departure" />
                                                </div>
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option value="a1">One-way</option>
                                                        <option value="a1">Return</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>3. Search Flights</h5>
                                                </div>
                                                <div class="col-md-4 marginbot30">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Adult</option>
                                                        <option value="a1">1</option>
                                                        <option value="a2">2</option>
                                                        <option value="a3">3</option>
                                                        <option value="a4">4</option>
                                                        <option value="a5">5</option>
                                                        <option value="a6">6</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 marginbot30">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Child</option>
                                                        <option value="ch1">1</option>
                                                        <option value="ch2">2</option>
                                                        <option value="ch3">3</option>
                                                        <option value="ch4">4</option>
                                                        <option value="ch5">5</option>
                                                        <option value="ch6">6</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 marginbot30">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Infant</option>
                                                        <option value="in1">1</option>
                                                        <option value="in2">2</option>
                                                        <option value="in2">3</option>
                                                        <option value="in4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Choose seat class</option>
                                                        <option value="eco">Economy</option>
                                                        <option value="buss">Business</option>
                                                        <option value="exe">Executive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 marginbot10">
                                            <button class="btn btn-default btn-lg btn-3d btn-icon-right icon-divider" type="submit">
                                                Search Flights <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="second2">
                                <form class="custom-form white-form marginbot-clear">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-7">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>1. Destination/Hotel Name</h5>
                                                </div>
                                                <div class="col-md-12 marginbot30">
                                                    <input type="text" class="form-control" placeholder="Find city, hotel, or place to go" />
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>2. Duration of Stay</h5>
                                                </div>
                                                <div class="col-md-4 marginbot10">
                                                    <label>Check-in:</label>
                                                    <input type="text" class="form-control default_datetimepicker" placeholder="Check-in date" />
                                                </div>
                                                <div class="col-md-4 marginbot10">
                                                    <label>Durations:</label>
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option value="1night">1 night</option>
                                                        <option value="2night">2 night</option>
                                                        <option value="3night">3 night</option>
                                                        <option value="4night">4 night</option>
                                                        <option value="5night">5 night</option>
                                                        <option value="6night">6 night</option>
                                                        <option value="7night">7 night</option>
                                                        <option value="8night">8 night</option>
                                                        <option value="9night">9 night</option>
                                                        <option value="10night">10 night</option>
                                                        <option value="11night">11 night</option>
                                                        <option value="12night">12 night</option>
                                                        <option value="13night">13 night</option>
                                                        <option value="14night">14 night</option>
                                                        <option value="15night">15 night</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 marginbot10">
                                                    <label>Check-out:</label>
                                                    <input type="text" class="form-control default_datetimepicker" placeholder="Check-out date" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>3. Search hotels</h5>
                                                </div>
                                                <div class="col-md-6 marginbot30">
                                                    <label>Guest</label>
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option value="gue1">1</option>
                                                        <option value="gue2">2</option>
                                                        <option value="gue3">3</option>
                                                        <option value="gue4">4</option>
                                                        <option value="gue5">5</option>
                                                        <option value="gue6">6</option>
                                                        <option value="gue7">7</option>
                                                        <option value="gue8">8</option>
                                                        <option value="gue9">9</option>
                                                        <option value="gue10">10</option>
                                                        <option value="gue11">11</option>
                                                        <option value="gue12">12</option>
                                                        <option value="gue13">13</option>
                                                        <option value="gue14">14</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 marginbot30">
                                                    <label>Rooms</label>
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option value="rm1">1</option>
                                                        <option value="rm2">2</option>
                                                        <option value="rm3">3</option>
                                                        <option value="rm4">4</option>
                                                        <option value="rm5">5</option>
                                                        <option value="rm6">6</option>
                                                        <option value="rm7">7</option>
                                                        <option value="rm8">8</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 marginbot10">
                                                    <button class="btn btn-default btn-lg btn-3d btn-icon-right icon-divider" type="submit">
                                                        Search Hotels <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="third2">
                                <form class="custom-form white-form marginbot-clear">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>1. Train Destination</h5>
                                                </div>
                                                <div class="col-md-12 marginbot5">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>From</option>
                                                        <optgroup label="INDONESIA">
                                                            <option value="bali">Bali/Denpasar</option>
                                                            <option value="jak">Jakarta</option>
                                                            <option value="mak">Makassar</option>
                                                            <option value="med">Medan</option>
                                                            <option value="sur">Surabaya</option>
                                                            <option value="yog">Yogyakarta</option>
                                                        </optgroup>
                                                        <optgroup label="SINGAPORE">
                                                            <option value="sing">Singapore</option>
                                                        </optgroup>
                                                        <optgroup label="MALAYSIA">
                                                            <option value="johor">Johor Bahru</option>
                                                            <option value="kota">Kota Kinabalu</option>
                                                            <option value="kuala">Kuala Lumpur</option>
                                                            <option value="kuch">Kuching</option>
                                                            <option value="pen">Penang</option>
                                                        </optgroup>
                                                        <optgroup label="THAILAND">
                                                            <option value="bang">Bangkok</option>
                                                            <option value="hat">Hat Yai</option>
                                                            <option value="phu">Phuket</option>
                                                        </optgroup>
                                                        <optgroup label="AUSTRALIA">
                                                            <option value="mel">Melbourne</option>
                                                            <option value="per">Perth</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 text-center marginbot5">
                                                    <i class="fa fa-long-arrow-up fa-2x primary"></i>
                                                    <i class="fa fa-long-arrow-down fa-2x primary"></i>
                                                </div>
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>To</option>
                                                        <optgroup label="INDONESIA">
                                                            <option value="bali">Bali/Denpasar</option>
                                                            <option value="jak">Jakarta</option>
                                                            <option value="mak">Makassar</option>
                                                            <option value="med">Medan</option>
                                                            <option value="sur">Surabaya</option>
                                                            <option value="yog">Yogyakarta</option>
                                                        </optgroup>
                                                        <optgroup label="SINGAPORE">
                                                            <option value="sing">Singapore</option>
                                                        </optgroup>
                                                        <optgroup label="MALAYSIA">
                                                            <option value="johor">Johor Bahru</option>
                                                            <option value="kota">Kota Kinabalu</option>
                                                            <option value="kuala">Kuala Lumpur</option>
                                                            <option value="kuch">Kuching</option>
                                                            <option value="pen">Penang</option>
                                                        </optgroup>
                                                        <optgroup label="THAILAND">
                                                            <option value="bang">Bangkok</option>
                                                            <option value="hat">Hat Yai</option>
                                                            <option value="phu">Phuket</option>
                                                        </optgroup>
                                                        <optgroup label="AUSTRALIA">
                                                            <option value="mel">Melbourne</option>
                                                            <option value="per">Perth</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>2. Date of Travel</h5>
                                                </div>
                                                <div class="col-md-12 marginbot30">
                                                    <input type="text" class="form-control default_datetimepicker" placeholder="Departure" />
                                                </div>
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option value="a1">One-way</option>
                                                        <option value="a1">Return</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 marginbot30">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>3. Search Train</h5>
                                                </div>
                                                <div class="col-md-6 marginbot30">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Adult</option>
                                                        <option value="a1">1</option>
                                                        <option value="a2">2</option>
                                                        <option value="a3">3</option>
                                                        <option value="a4">4</option>
                                                        <option value="a5">5</option>
                                                        <option value="a6">6</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 marginbot30">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Infant</option>
                                                        <option value="in1">1</option>
                                                        <option value="in2">2</option>
                                                        <option value="in2">3</option>
                                                        <option value="in4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                        <option>Choose seat class</option>
                                                        <option value="eco">Economy</option>
                                                        <option value="buss">Business</option>
                                                        <option value="exe">Executive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 marginbot10">
                                            <button class="btn btn-default btn-lg btn-3d btn-icon-right icon-divider" type="submit">
                                                Search Flights <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="fourth2">
                                <form class="custom-form white-form marginbot-clear">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5>1. Search Destinations</h5>
                                        </div>
                                        <div class="col-md-5 col-sm-5 marginbot10">
                                            <input type="text" class="form-control" placeholder="Find city, hotel, or place to go" />
                                        </div>
                                        <div class="col-md-4 col-sm-4 marginbot10">
                                            <select class="form-control" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                                <option>Choose categories</option>
                                                <option value="adv">Adventure</option>
                                                <option value="cul">Culture</option>
                                                <option value="bea">Beach</option>
                                                <option value="vil">Village</option>
                                                <option value="mou">Mountain</option>
                                                <option value="tem">Temple</option>
                                                <option value="res">Restaurant</option>
                                                <option value="bet">Baths</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 col-sm-3 marginbot10">
                                            <button class="btn btn-default btn-lg btn-3d btn-icon-right icon-divider btn-block" type="submit">
                                                Search <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                    <!-- End Tabs -->
                </div>
            </div>
        </div>
    </div>
    <div class="parallax padding-bot20" data-background="dist/img/parallax/bg18.jpg" data-speed="0.5" data-size="50%">
        <div class="overlay"></div>
        <div class="container">
            <div class="content-parallax">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading text-center">
                        <h5>How it work</h5>
                        <p><strong>Completed</strong> everything <strong>with 3 easy</strong> steps</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="process-3colum">
                        <li>
                            <i class="fa fa-search icon-circle icon-mandy fa-6x"></i>
                            <h5>Find</h5>
                            <p>
                            Mea ad purto aperiam maluisset. At vidit officiis sed, eleifend convenire usu ut, nominati pertinacia in usu. No ius tollit commodo. 
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-dollar icon-circle icon-primary fa-6x"></i>
                            <h5>Buy</h5>
                            <p>
                            Mea ad purto aperiam maluisset. At vidit officiis sed, eleifend convenire usu ut, nominati pertinacia in usu. No ius tollit commodo. 
                            </p>
                        </li>
                        <li>
                            <i class="fa fa-plane icon-circle icon-picton fa-6x"></i>
                            <h5>Travel</h5>
                            <p>
                            Mea ad purto aperiam maluisset. At vidit officiis sed, eleifend convenire usu ut, nominati pertinacia in usu. No ius tollit commodo. 
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- End parallax -->

    <!-- Start contain wrapp -->
    <div class="contain-wrapp gray-container padding-bot40">
        <div class="container">
            <div class="row marginbot40">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="section-heading text-center">
                        <h5>Our features</h5>
                        <p>Why book with <strong>Bacotna</strong> travel ?</p>
                    </div>
                    <p>
                    No mei agam partiendo conceptam, novum euismod imperdiet ius ad. Nam et habemus fabellas, vim suas libris civibus ut, suscipit argumentum te nam. Id tantas ponderum antiopam sea, in est quis fabulas civibus. In cetero delectus vim, usu essent atomorum suscipiantur ei, elit partem vix id.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="icon-center-top">
                        <div class="icon-box-content">
                            <i class="fa fa-dollar icon-circle icon-stroke fa-4x icon-primary"></i>
                            <h5>Best Price Guarantee</h5>
                            <p>
                            Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut qui detracto deserunt ea.
                            </p>
                        </div>
                        <i class="fa fa-dollar bg-icon"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-center-top">
                        <div class="icon-box-content">
                            <i class="fa fa-lock icon-circle icon-stroke fa-4x icon-primary"></i>
                            <h5>Secure Online Transaction</h5>
                            <p>
                            Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut qui detracto deserunt ea.
                            </p>
                        </div>
                        <i class="fa fa-lock bg-icon"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-center-top">
                        <div class="icon-box-content">
                            <i class="fa fa-credit-card icon-circle icon-stroke fa-4x icon-primary"></i>
                            <h5>Various Payment Options</h5>
                            <p>
                            Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut qui detracto deserunt ea.
                            </p>
                        </div>
                        <i class="fa fa-credit-card bg-icon"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-center-top">
                        <div class="icon-box-content">
                            <i class="fa fa-tags icon-circle icon-stroke fa-4x icon-primary"></i>
                            <h5>Prices Include Taxes & Fees</h5>
                            <p>
                            Eam affert vivendo ea, quo et vero vituperatoribus, duo oporteat eleifend ut qui detracto deserunt ea.
                            </p>
                        </div>
                        <i class="fa fa-tags bg-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End contain wrapp -->
    
    <!-- Start contain wrapp -->
    <div class="contain-wrapp padding-clear">
        <div class="counter-wrapp counter-inverse count">
            <div class="counter-content">
                <i class="fa fa-users fa-4x"></i>
                <div class="count-value" data-count="5024"><span class="start-count">0</span></div>
                <p>Members</p>
            </div>
                
            <div class="counter-content">
                <i class="fa fa-eye fa-4x"></i>
                <div class="count-value" data-count="6870"><span class="start-count">0</span></div>
                <p>Viewer</p>
            </div>
                
            <div class="counter-content">
                <i class="fa fa-thumbs-up fa-4x"></i>
                <div class="count-value" data-count="4678"><span class="start-count">0</span></div>
                <p>Likes</p>
            </div>

            <div class="counter-content">
                <i class="fa fa-share-alt fa-4x"></i>
                <div class="count-value" data-count="3321"><span class="start-count">0</span></div>
                <p>Share</p>
            </div>
        </div>
    </div>
    <!-- End contain wrapp -->
    <div class="clearfix"></div>
    
    <!-- Start contain wrapp -->
    <div class="contain-wrapp padding-bot30">
        <div class="container">
            <div class="row">
                <div class="col-md-4 marginbot30">
                    <h5>Hotel By Partners</h5>  
                    <ul class="link-list">
                        <li class="col-md-6"><a href="#">Jakarta Hotels</a></li>
                        <li class="col-md-6"><a href="#">Bali Hotels</a></li>
                        <li class="col-md-6"><a href="#">Yogyakarta Hotels</a></li>
                        <li class="col-md-6"><a href="#">Melbourne Hotels</a></li>
                        <li class="col-md-6"><a href="#">Bangkok Hotels</a></li>
                        <li class="col-md-6"><a href="#">Singapore Hotels</a></li>
                        <li class="col-md-6"><a href="#">Macau Hotels</a></li>
                        <li class="col-md-6"><a href="#">Kuala Lumpur Hotels</a></li>
                        <li class="col-md-6"><a href="#">Kuching Hotels</a></li>
                        <li class="col-md-6"><a href="#">Hong Kong Hotels</a></li>
                        <li class="col-md-6"><a href="#">Bandung Hotels</a></li>
                        <li class="col-md-6"><a href="#">Yogyakarta Hotels</a></li>
                        <li class="col-md-6"><a href="#">Bogor Hotels</a></li>
                        <li class="col-md-6"><a href="#">Surabaya Hotels</a></li>
                        <li class="col-md-6"><a href="#">Semarang Hotels</a></li>
                        <li class="col-md-6"><a href="#">Manila Hotels</a></li>
                        <li class="col-md-6"><a href="#">Malang Hotels</a></li>
                        <li class="col-md-6"><a href="#">Palembang Hotels</a></li>
                    </ul>
                </div>
                <div class="col-md-4 marginbot30">
                    <h5>Recent Article</h5>
                    <div class="single-dotted-nav owl-carousel owl-theme">
                        <!-- Start item 1 -->
                        <div class="item">
                            <div class="img-wrapper marginbot20">
                                <a href="#"><img src="img/blog/570x200/img01.jpg" class="img-responsive" alt="" /></a>
                            </div>
                            <div class="recent-post-half-content sm-column">
                                <h5><a href="#">Regione lobortis reprimique cum, sea eu quem albucius suscipit</a></h5>
                                <p><a href="#" class="btn btn-default btn-sm">Read more</a></p>
                            </div>
                        </div>
                        <!-- End item 1 -->
                        
                        <!-- Start item 2 -->
                        <div class="item">
                            <div class="img-wrapper marginbot20">
                                <a href="#"><img src="img/blog/570x200/img02.jpg" class="img-responsive" alt="" /></a>
                            </div>
                            <div class="recent-post-half-content sm-column">
                                <h5><a href="#">Has legere utroque in, impedit periculis ad quo mea graecout</a></h5>
                                <p><a href="#" class="btn btn-default btn-sm">Read more</a></p>
                            </div>
                        </div>
                        <!-- End item 2 -->
                        
                        <!-- Start item 3 -->
                        <div class="item">
                            <div class="img-wrapper marginbot20">
                                <a href="#"><img src="img/blog/570x200/img03.jpg" class="img-responsive" alt="" /></a>
                            </div>
                            <div class="recent-post-half-content sm-column">
                                <h5><a href="#">Ei indoctum ullamcorper conclusi veniam feugait ad eum</a></h5>
                                <p><a href="#" class="btn btn-default btn-sm">Read more</a></p>
                            </div>
                        </div>
                        <!-- End item 3 -->
                    </div>
                </div>
                <div class="col-md-4 marginbot30">
                    <h5>Testimoni</h5>
                    <div class="single-dotted-nav owl-carousel owl-theme">
                        <!-- Start item 1 -->
                        <div class="item">
                            <div class="testimoni-wrapp">
                                <div class="testimoni">
                                    <blockquote>
                                    <p>
                                    Cu nec salutandi voluptatibus. Ceteros definitionem ad ius, ut eam unum volutpat, omnium gloriatur te mei.
                                    </p>
                                    </blockquote>
                                </div>
                                <div class="testimoni-author">
                                    <a href="#" class="avatar"><img src="img/testimoni/avatar01.jpg" alt="" /></a>
                                    <h6>Neng <span>ebrod</span></h6>
                                    <p>CFO - <a href="#">99webpage.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End item 1 -->
                        
                        <!-- Start item 2 -->
                        <div class="item">
                            <div class="testimoni-wrapp">
                                <div class="testimoni">
                                    <blockquote>
                                    <p>
                                    Ea has amet epicuri salutatus. No has euismod intellegam. Te novum graeco urbanitas atqui dictas quaestio.
                                    </p>
                                    </blockquote>
                                </div>
                                <div class="testimoni-author">
                                    <a href="#" class="avatar"><img src="img/testimoni/avatar02.jpg" alt="" /></a>
                                    <h6>Asep <span>jebot</span></h6>
                                    <p>Marketing - <a href="#">99webpage.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End item 2 -->
                        
                        <!-- Start item 3 -->
                        <div class="item">
                            <div class="testimoni-wrapp">
                                <div class="testimoni">
                                    <blockquote>
                                    <p>
                                    Pro ei quidam habemus copiosae, no nisl mazim corpora eam. Sea esse maiorum apeirian ne. Ei indoctum veniam.
                                    </p>
                                    </blockquote>
                                </div>
                                <div class="testimoni-author">
                                    <a href="#" class="avatar"><img src="img/testimoni/avatar03.jpg" alt="" /></a>
                                    <h6>Ujang <span>bako</span></h6>
                                    <p>Designer - <a href="#">99webpage.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End item 3 -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="single-line-heading"><h5>Our Official Partners</h5></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo01.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo02.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo03.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo04.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo05.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 marginbot30">
                            <div class="clients-logo">
                                <a href="#"><img src="img/clients/logo06.png" class="img-responsive" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End contain wrapp -->
   
@endsection
