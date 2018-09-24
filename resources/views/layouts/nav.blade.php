<div class="header-absolute">
    <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" id="mynavbar">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" id="menu-button">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="header-search hidden-lg">
                    <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
                </div>
                <a href="/" class="navbar-brand"><span><i class="fa fa-shopping-cart"></i>AYUM</span><font class='ba'>BA</font></a>
            </div><!-- end navbar-header -->

            <div class="collapse navbar-collapse" id="myNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/">Main Page</a></li>
                            <li><a href="/#pricing-table-page">Our Packages</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bus Ticketing<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">View Available Buses</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Taxi Hiring<span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">View Available Taxis</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span><i class="fa fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu mega-dropdown-menu row">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled">

                                                            <li class="dropdown-header">Professional /<span>Artisan Services</span></li>
                                                      @if(Session::has('services_type1'))

                                                      @foreach (json_decode(Session::get('services_type1')) as $services_type1Row)
                                                                                <li><a href="{{$services_type1Row->service_id}}">{{$services_type1Row->service_name}}</a></li>

                        														 @endforeach
                                                     @endif
                                                        </ul>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-header">Moving into <span>a new Home?</span></li>
                                  @if(Session::has('services_type2'))

                                  @foreach (json_decode(Session::get('services_type2')) as $services_type2Row)
                                  <li><a href="{{$services_type2Row->service_id}}">{{$services_type2Row->service_name}}</a></li>

    														 @endforeach
                                 @endif
                                                        </ul>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </li>






                </ul>
            </div><!-- end navbar collapse -->
        </div><!-- end container -->
     </nav><!-- end navbar -->
</div><!-- end header-absolute -->
