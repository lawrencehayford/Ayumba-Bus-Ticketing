@extends('layouts.master')

@section('title')
Ayumba
@endsection

@section('header')
@endsection

@section('content')
<!--========================= FLEX SLIDER =====================-->
    <section class="flexslider-container" id="flexslider-container-3">

@include('layouts.nav')
        <div class="flexslider slider" id="slider-3">
            <ul class="slides">

                <li class="item-1 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/beach.jpg) 50% 65%;
background-size:cover;
height:100%;">
                </li><!-- end item-1 -->

                <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/car4.jpg) 50% 65%;
background-size:cover;
height:100%;">
                </li><!-- end item-2 -->


                <li class="item-2 back-size" style="background:			linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/car2.jpg) 50% 65%;
background-size:cover;
height:100%;">
              </li><!-- end item-3 -->

            </ul>
        </div><!-- end slider -->

        <div class="search-tabs" id="search-tabs-3" style='bottom: 248px;'>
          <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">

                        <ul class="nav nav-tabs">
                            <li class="active" onclick="changeText('bus')"><a href="#busticket" data-toggle="tab"><span><i class="fa fa-bus"></i></span><span class="st-text">Bus Ticketing</span></a></li>
                            <li  onclick="changeText('taxi')"><a href="#taxi" data-toggle="tab"><span><i class="fa fa-car"></i></span><span class="st-text">Taxi Hiring</span></a></li>
                            <li  onclick="changeText('services')"><a href="#services" data-toggle="tab"><span><i class="fa fa-rocket"></i></span><span class="st-text">Services</span></a></li>

                        </ul>

                        <div class="tab-content">

                            <div id="busticket" class="tab-pane in active">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <label>From</label>
                                                        <select class="form-control selectpicker"   data-show-subtext="true" data-live-search="true">
                                                          <option value=''>Region or City</option>
                                                          @if(Session::has('cities'))

                                                          @foreach (json_decode(Session::get('cities')) as $citiesRow)
                                                            <option value='{{$citiesRow->city_id}}'>{{$citiesRow->city_name}} - {{$citiesRow->region}}</option>

                                                         @endforeach
                                                         @endif
                                                        </select>
                                                        <!--<input type="text" class="form-control" placeholder="City, Country" >-->

                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="form-group left-icon">
                                                        <label>To</label>
                                                        <select class="form-control selectpicker" >
                                                          <option value=''>Region or City</option>
                                                          @if(Session::has('cities'))

                                                          @foreach (json_decode(Session::get('cities')) as $citiesRow)

                                                          <option value='{{$citiesRow->city_id}}'>{{$citiesRow->city_name}} - {{$citiesRow->region}}</option>

                                                         @endforeach
                                                         @endif
                                                        </select>
                                                        <!--<input type="text" class="form-control" placeholder="City, Country" >-->

                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="row">

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <br/>
                                                    <div class="form-group left-icon">
                                                        <label>Check In</label>
                                                        <input type="text" class="form-control dpd1" placeholder="mm/dd/yy" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <br/>
                                                    <div class="form-group left-icon">
                                                        <label>Return</label>
                                                        <input type="text" class="form-control dpd2" placeholder="mm/dd/yy" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->

                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group right-icon">
                                                <label>Adults</label>
                                              <input class='form-control' type='number' value='1' min="1">

                                            </div>
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                            <button class="btn btn-orange">Search Available Buses</button>
                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end flights -->

                            <div id="taxi" class="tab-pane ">
                                <form>
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12">
                                                    <div class="form-group left-icon">
                                                        <label>Pick Up Time</label>
                                                        <input type="text" class="form-control dpd1" placeholder="Check In" >
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </div><!-- end columns -->



                                            </div><!-- end row -->
                                        </div><!-- end columns -->

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="form-group right-icon">
                                                        <label>Enter Your Destination</label>
                                                        <input class='placepicker form-control' type='text' >

                                                    </div>
                                                </div><!-- end columns -->





                                            </div><!-- end row -->

                                        </div><!-- end columns -->

                                        

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                        <button class="btn btn-orange">Search Taxi</button>
                                        <br/><br/><br/>
                                        <br/><br/><br/>

                                        </div><!-- end columns -->

                                    </div><!-- end row -->
                                </form>
                            </div><!-- end hotels -->
                            <div id="services" class="tab-pane ">
                              <div class="row">
                                  <div class="col-md-6">
                                      <ul>

                                          <li >Professional /<span>Artisan Services</span></li>
                                          @if(Session::has('services_type1'))

                                          @foreach (json_decode(Session::get('services_type1')) as $services_type1Row)
                                                                    <li><a href="{{$services_type1Row->service_id}}">{{$services_type1Row->service_name}}</a></li>

                                         @endforeach
                                         @endif
                                      </ul>
                                  </div>

                                  <div class="col-md-6">
                                      <ul>
                                          <li >Moving into <span>a new Home?</span></li>
                                          @if(Session::has('services_type2'))

                                          @foreach (json_decode(Session::get('services_type2')) as $services_type2Row)
                                          <li><a href="{{$services_type2Row->service_id}}">{{$services_type2Row->service_name}}</a></li>

                                         @endforeach
                                         @endif
                                      </ul>
                                  </div>

                              </div>
                            </div>

                        </div><!-- end tab-content -->

                    </div><!-- end columns -->

                    <div class="hidden-xs hidden-sm col-md-6 no-pd-l">
                        <div class="welcome-message">
                            <h2>Book Your Bus Ticket Now</h2>
                            <p>Book your Bus tickets to any destination across Ghana.</p>
                            <p>Its simple, easy and convenient.</p>
                            <p style='color:#000;'>.</p>
                            <p  style='color:#000;'>.</p>
                            <br/>

                            <a href="#" class="btn btn-w-border">Learn More</a>

                        </div>
                     </div>

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end search-tabs -->

    </section><!-- end flexslider-container -->


    <!--======================= BEST FEATURES ======================-->
    <section id="best-features" class="banner-padding orange-features">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
                  <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                      <h3>Lowest Price Guarantee</h3>
                      <p>We guarantee lowest price and there is no exaggeration in it</p>

                    </div><!-- end b-feature-block -->
               </div><!-- end columns -->

               <div class="col-sm-6 col-md-3">
                  <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                      <h3>Safe and Secure </h3>
                      <p>Our site is SSL potected  when doing transaction</p>

                    </div><!-- end b-feature-block -->
               </div><!-- end columns -->

               <div class="col-sm-6 col-md-3">
                  <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                      <h3>Transparent Pricing</h3>
                      <p>Going one step further, we even try to bring transparency in the prices we quote</p>


                    </div><!-- end b-feature-block -->
               </div><!-- end columns -->

               <div class="col-sm-6 col-md-3">
                  <div class="b-feature-block">
                    <span><i class="fa fa-tablet"></i></span>
                      <h3>Excellent Customer Service</h3>
                        <p>it is only rarely that you phone us and we do not pick up your call</p>

                    </div><!-- end b-feature-block -->
               </div><!-- end columns -->
            </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end best-features -->

    <!--===== INNERPAGE-WRAPPER ====-->
           <section class="innerpage-wrapper">
           	<div id="pricing-table-page" class="innerpage-section-padding pricing-table-1">
                   <div class="container">
                       <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               <div class="page-heading">
                                   <h2>Our Packages</h2>
                                   <hr class="heading-line" />
                               </div><!-- end page-heading -->

                               <div class="row">

                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-10 col-lg-offset-1">

                                       <div class="row">
                                           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r">
                                               <div class="package hotel-package">
                                                   <div class="h-pkg-heading">
                                                       <h2 class="h-pkg-title">Taxi Driver</h2>
                                                       <h2 class="h-pkg-price">₵100<span>year</span></h2>
                                                   </div><!-- end h-pkg-heading -->

                                                   <div class="pkg-features">
                                                       <ul class="list-unstyled text-center">
                                                           <li>Unlimited Booking </li>
                                                           <li>option 2</li>
                                                           <li>option 3</li>
                                                           <li>option 4</li>
                                                           <li>option 5</li>
                                                           <li>option 6</li>
                                                       </ul>
                                                   </div><!-- end features -->
                                                   <button class="btn">Select This Service</button>
                                               </div><!-- end hotel-package -->
                                           </div><!-- end columns -->

                                           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r no-pd-l">
                                               <div class="package hotel-package best-package">
                                                   <div class="h-pkg-heading">
                                                       <h2 class="h-pkg-title">Professional Artisan</h2>
                                                       <h2 class="h-pkg-price">₵200<span>year</span></h2>
                                                   </div><!-- end h-pkg-heading -->

                                                   <div class="pkg-features">
                                                       <ul class="list-unstyled text-center">
                                                           <li>Unlimited Booking</li>
                                                           <li>option 2</li>
                                                           <li>option 3</li>
                                                           <li>option 4</li>
                                                           <li>option 5</li>
                                                           <li>option 6</li>
                                                       </ul>
                                                   </div><!-- end features -->
                                                    <button class="btn">Select This Service</button>
                                               </div><!-- end hotel-package -->
                                           </div><!-- end columns -->

                                           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-l">
                                               <div class="package hotel-package">
                                                   <div class="h-pkg-heading">
                                                       <h2 class="h-pkg-title">Other Service</h2>
                                                       <h2 class="h-pkg-price">$199<span>night</span></h2>
                                                   </div><!-- end h-package-heading -->

                                                   <div class="pkg-features">
                                                       <ul class="list-unstyled text-center">
                                                         <li>Unlimited Booking</li>
                                                         <li>option 2</li>
                                                         <li>option 3</li>
                                                         <li>option 4</li>
                                                         <li>option 5</li>
                                                         <li>option 6</li>
                                                       </ul>
                                                   </div><!-- end features -->
                                                  <button class="btn">Select This Service</button>
                                               </div><!-- end hotel-package -->
                                           </div><!-- end columns -->

                                       </div><!-- end row -->
                                   </div><!-- end columns -->
                               </div><!-- end row -->
                           </div><!-- end columns -->
                       </div><!-- end row -->
                   </div><!-- end container -->
               </div><!-- end pricing-table-page -->
           </section><!-- end innerpage-wrapper -->


    <!--=============== HOTEL OFFERS ===============-->
    <section id="hotel-offers" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
                  <div class="page-heading white-heading">
                      <h2>Available Buses</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">

                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                  <a href="#">
                                      <img src="images/vip.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                      <ul class="list-unstyled list-inline offer-price-1">
                                          <li class="price">GHS35.00<span class="divider">|</span><span class="pkg">1.00PM</span></li>
                                            <li class="rating">
                                              <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                  <div class="arrow">
                                      <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                  <div class="main-title hotel-title">
                                        <a href="#">VIP BUS</a>
                                        <p>From: Accra  To: Kumasi</p>
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                  <a href="#">
                                      <img src="images/vip.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                      <ul class="list-unstyled list-inline offer-price-1">
                                          <li class="price">GHS35.00<span class="divider">|</span><span class="pkg">1.00PM</span></li>
                                            <li class="rating">
                                              <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                  <div class="arrow">
                                      <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                  <div class="main-title hotel-title">
                                        <a href="#">VIP BUS</a>
                                        <p>From: Accra  To: Kumasi</p>
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                  <a href="#">
                                      <img src="images/stc.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                      <ul class="list-unstyled list-inline offer-price-1">
                                          <li class="price">GHS35.00<span class="divider">|</span><span class="pkg">1.00PM</span></li>
                                            <li class="rating">
                                              <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                  <div class="arrow">
                                      <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                  <div class="main-title hotel-title">
                                        <a href="#">STC BUS</a>
                                        <p>From: Accra  To: Kumasi</p>
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                  <a href="#">
                                      <img src="images/stc.jpg" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                      <ul class="list-unstyled list-inline offer-price-1">
                                          <li class="price">GHS35.00<span class="divider">|</span><span class="pkg">1.00PM</span></li>
                                            <li class="rating">
                                              <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end offer-img -->

                                <div class="main-info hotel-info">
                                  <div class="arrow">
                                      <a href="#"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                  <div class="main-title hotel-title">
                                        <a href="#">STC BUS</a>
                                        <p>From: Accra  To: Kumasi</p>
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div><!-- end hotel-block -->
                        </div><!-- end item -->



                    </div><!-- end owl-hotel-offers -->

                    <div class="view-all text-center">
                      <a href="#" class="btn btn-orange">View All</a>
                    </div><!-- end view-all -->
                </div><!-- end columns -->
            </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end hotel-offers -->



    <!--=============== TESTIMONIALS ===============-->
    <section id="testimonials" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
                  <div class="page-heading white-heading">
                      <h2>Why Not Choose Us</h2>
                        <hr class="heading-line" />
                    </div><!-- end page-heading -->

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <div class="carousel-inner text-center">

                            <div class="item active">
                                <blockquote>Value for Money travel deals, I will strongly recommend to my friends and family.Ayumba.com has a user-friendly search engine that is easy to navigate.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Lawrence Hayford</small>
                            </div><!-- end item -->

                            <div class="item">
                                <blockquote>I use Ayumba regularly to book my bus tickets , as they have most pocket friendly rates.</blockquote>
                                <div class="rating">
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star orange"></i></span>
                                    <span><i class="fa fa-star lightgrey"></i></span>
                                </div><!-- end rating -->

                                <small>Bill</small>
                            </div><!-- end item -->


                        </div><!-- end carousel-inner -->

                        <ol class="carousel-indicators">
                            <li style='width:10px;height:10px;' data-target="#quote-carousel" data-slide-to="0" class="active">

                            </li>
                            <li style='width:10px;height:10px;' data-target="#quote-carousel" data-slide-to="1">

                            </li>

                        </ol>

                    </div><!-- end quote-carousel -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end testimonials -->


    <!--============== HIGHLIGHTS =============-->
    <section id="highlights" class="highlights-2">
        <div class="container">
          <div class="page-heading white-heading">
              <h2 style='color:#000'>We Accept</h2>
                <hr class="heading-line" />
            </div><!-- end page-heading -->
            <div class="row">

                <center>  <img src="{{asset('images/payment_types.png')}}" width='50%'></center>
            </div><!-- end row -->
            </div><!-- end columns -->

    </section><!-- end highlights -->
@endsection

@section('script')
<script>
function changeText(where)
{
  switch(where)
  {
    case 'taxi':
    {
      $(".welcome-message").html("<h2>Book a Taxi Now</h2>"
                            +"<p>Find the nearest taxi close by using our platform.</p>"
                            +"<p>Its simple, easy and convenient.</p>"
                            +"<p style='color:#000;'>.</p>"
                            +"<p  style='color:#000;'>.</p>"
                            +"<br/><a href='#' class='btn btn-w-border'>Learn More</a>");
      break;
    }
    case 'bus':
    {
      $(".welcome-message").html("<h2>Book Your Bus Ticket Now</h2>"
                            +"<p>Book your Bus tickets to any destination across Ghana.</p>"
                            +"<p>Its simple, easy and convenient.</p>"
                            +"<p style='color:#000;'>.</p>"
                            +"<p  style='color:#000;'>.</p>"
                            +"<br/><a href='#' class='btn btn-w-border'>Learn More</a>");
      break;
    }
  }
}



</script>

@endsection
