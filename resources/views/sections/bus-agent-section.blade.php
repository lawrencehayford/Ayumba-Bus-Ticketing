<section class="innerpage-wrapper" style='margin-top:-50px;'>
  <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="dashboard-wrapper">
                      <div class="row">

                          @include('sections.link.bus-agent-link')

                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                            <h2>Welcome <span>  {{ Auth::user()->name }}</span></h2>
                                <div class="row info-stat">

                                  <div class="col-sm-6 col-md-3">
                                      <div class="stat-block">
                                          <span><i class="fa fa-tachometer"></i></span>
                                            <h3>1548</h3>
                                            <p>Bus Registered</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                      <div class="stat-block">
                                          <span><i class="fa fa-globe"></i></span>
                                            <h3>12</h3>
                                            <p> Routes</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                      <div class="stat-block">
                                          <span><i class="fa fa-building"></i></span>
                                            <h3>312</h3>
                                            <p>Booking / Day</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                      <div class="stat-block">
                                          <span><i class="fa fa-paper-plane"></i></span>
                                            <h3>102</h3>
                                            <p>Agents</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->


                                <div class="dashboard-listing invoices">
                                  <h3 class="dash-listing-heading">Recent Bookings</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                                                    <td class="dash-list-text invoice-text">
                                                      <h4 class="invoice-title">Professional Plan</h4>
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
                                                      <h4>Basic Plan</h4>
                                                      <ul class="list-unstyled list-inline invoice-info">
                                                            <li class="invoice-status green">Paid</li>
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
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->
