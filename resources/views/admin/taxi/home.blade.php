@extends('layouts.master')

@section('title')
Ayumba | Home
@endsection

@section('header')
@endsection

@section('content')

<section class="flexslider-container" id="flexslider-container-3">
@if(!Auth::check())
      <script>window.location = "/login";</script>
@endif

@include('layouts.nav')
</section>

<!--===== PAGE REDIRECTION DEPENDING ON USER TYPE ====-->
<section class="innerpage-wrapper" style='margin-top:-50px;'>
  <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="dashboard-wrapper">
                      <div class="row">

                          @include('sections.link.admin-link')

                          <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                              <h2>Taxi <span>  Hiring</span></h2>


                              <!--====================start of tab==========================-->
                                <ul class="nav nav-tabs">
                                  <li class="active"><a data-toggle="tab" href="#home">View Company</a></li>
                                  <li><a data-toggle="tab" href="#menu1">View Agents</a></li>
                                  <li><a data-toggle="tab" href="#menu2">Add/Edit Company</a></li>
                                  <li><a data-toggle="tab" href="#menu3">Add / Edit Agents</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div id="home" class="tab-pane fade in active">

<!--======================start of grid=================================-->
<div class="dashboard-listing recent-activity">
  <h3 class="dash-listing-heading">Recent Bus Booking</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bars"></i></td>
                    <td class="dash-list-text recent-ac-text">Your listing <span>The Star Travel</span> has been approved!</td>
                    <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                </tr>

                <tr>
                    <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                    <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>The Star Travel</span></td>
                    <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                </tr>

                <tr>
                    <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                    <td class="dash-list-text recent-ac-text">Someone bookmarked your Norma <span>Spa Center</span> listing!</td>
                    <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                </tr>

                <tr>
                    <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                    <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>Auto Repair Shop</span></td>
                    <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                </tr>

                <tr>
                    <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                    <td class="dash-list-text recent-ac-text">Someone bookmarked your <span>The Star Apartment</span> listing!</td>
                    <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                </tr>
            </tbody>
        </table>
    </div><!-- end table-responsive -->
</div><!-- end recent-activity -->


    <div class="dashboard-listing recent-activity">
      <h3 class="dash-listing-heading">Recent Bus Booking</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bars"></i></td>
                        <td class="dash-list-text recent-ac-text">Your listing <span>The Star Travel</span> has been approved!</td>
                        <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                        <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>The Star Travel</span></td>
                        <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                        <td class="dash-list-text recent-ac-text">Someone bookmarked your Norma <span>Spa Center</span> listing!</td>
                        <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                        <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>Auto Repair Shop</span></td>
                        <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                        <td class="dash-list-text recent-ac-text">Someone bookmarked your <span>The Star Apartment</span> listing!</td>
                        <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- end table-responsive -->
    </div><!-- end recent-activity -->

    <div class="dashboard-listing invoices">
      <h3 class="dash-listing-heading">Invoices</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                        <td class="dash-list-text invoice-text">
                          <h4 class="invoice-title">Professional Plan</h4>
                            <ul class="list-unstyled list-inline invoice-info">
                              <li class="invoice-status red">Unpaid</li>
                                <li class="invoice-order"> Order: #00214</li>
                                <li class="invoice-date"> Date: 25/08/2017</li>
                            </ul>
                        </td>
                        <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                        <td class="dash-list-text invoice-text">
                          <h4>Extended Plan</h4>
                            <ul class="list-unstyled list-inline invoice-info">
                              <li class="invoice-status green">Paid</li>
                                <li class="invoice-order"> Order: #00214</li>
                                <li class="invoice-date"> Date: 25/08/2017</li>
                            </ul>
                        </td>
                        <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                        <td class="dash-list-text invoice-text">
                          <h4>Extended Plan</h4>
                            <ul class="list-unstyled list-inline invoice-info">
                              <li class="invoice-status red">Unpaid</li>
                                <li class="invoice-order"> Order: #00214</li>
                                <li class="invoice-date"> Date: 25/08/2017</li>
                            </ul>
                        </td>
                        <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                    </tr>

                    <tr>
                        <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                        <td class="dash-list-text invoice-text">
                          <h4>Basic Plan</h4>
                          <ul class="list-unstyled list-inline invoice-info">
                              <li class="invoice-status red">Unpaid</li>
                                <li class="invoice-order"> Order: #00214</li>
                                <li class="invoice-date"> Date: 25/08/2017</li>
                            </ul>
                        </td>
                        <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- end table-responsive -->
    </div><!-- end invoices -->

<!--======================end og grid==================================-->

                                      </div>
                                  <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                  </div>
                                  <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                  </div>
                                  <div id="menu3" class="tab-pane fade">
                                    <h3>Menu 3</h3>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                  </div>
                                </div>
                              <!--====================end of tab============================-->



                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->


@endsection

@section('script')
@endsection
