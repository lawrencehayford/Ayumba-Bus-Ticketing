
<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" id="cpswitch" href="{{ asset('css/red.css')}}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css')}}">

        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/flexslider.css')}}" type="text/css" />

        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="{{ asset('css/datepicker.css')}}">

        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

        <script type="text/javascript"
         src="https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places">
       </script>

       <script src="{{ asset('js/jquery.min.js')}}"></script>
       <script src="{{ asset('js/jquery.placepicker.js') }}"></script>
       <script>

             $(document).ready(function() {

               // Basic usage
               $(".placepicker").placepicker();

               // Advanced usage
               $("#advanced-placepicker").each(function() {
                 var target = this;
                 var $collapse = $(this).parents('.form-group').next('.collapse');
                 var $map = $collapse.find('.another-map-class');

                 var placepicker = $(this).placepicker({
                   map: $map.get(0),
                   placeChanged: function(place) {
                     console.log("place changed: ", place.formatted_address, this.getLocation());
                   }
                 }).data('placepicker');
               });

             }); // END document.ready

           </script>

        <style>
        #top-bar.tb-text-grey #links ul li a, #top-bar.tb-text-grey #info ul li, #top-bar.tb-text-grey .form-group select, #top-bar.tb-text-grey .form-group .fa {
              color: #ffffff;
          }
          .main-navbar .nav > li > a {
              font-size: 14px;
          }
          .btn-select {
              color: #fff;
              background-color: #fff;
              border-color: #fff;
          }
          .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0);
            box-shadow: inset 0 3px 5px rgba(0,0,0,0);
          }


          .pac-container{background-color:#fff;position:absolute!important;z-index:1000;border-radius:2px;border-top:1px solid #d9d9d9;font-family:Arial,sans-serif;box-shadow:0 2px 6px rgba(0,0,0,0.3);-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;overflow:hidden}.pac-logo:after{content:"";padding:1px 1px 1px 0;height:16px;text-align:right;display:block;);background-position:right;background-repeat:no-repeat;background-size:120px 14px}.hdpi.pac-logo:after{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images)}.pac-item{cursor:default;padding:0 4px;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;line-height:30px;text-align:left;border-top:1px solid #e6e6e6;font-size:11px;color:#999}.pac-item:hover{background-color:#fafafa}.pac-item-selected,.pac-item-selected:hover{background-color:#ebf2fe}.pac-matched{font-weight:700}.pac-item-query{font-size:13px;padding-right:3px;color:#000}.pac-icon{width:15px;height:20px;margin-right:7px;margin-top:6px;display:inline-block;vertical-align:top;background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons.png);background-size:34px}.hdpi .pac-icon{background-image:url(https://maps.gstatic.com/mapfiles/api-3/images/autocomplete-icons_hdpi.png)}.pac-icon-search{background-position:-1px -1px}.pac-item-selected .pac-icon-search{background-position:-18px -1px}.pac-icon-marker{background-position:-1px -161px}.pac-item-selected .pac-icon-marker{background-position:-18px -161px}.pac-placeholder{color:gray}

        </style>
        @yield('header')


    </head>


    <body id="hotel-homepage">

        <!--====== LOADER =====-->
        <div class="loader"></div>


    	<!--======== SEARCH-OVERLAY =========-->
        <div class="overlay">
            <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
            <div class="overlay-content">
                <div class="form-center">
                    <form>
                    	<div class="form-group">
                        	<div class="input-group">
                        		<input type="text" class="form-control" placeholder="Search..." required />
                            	<span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                            </div><!-- end input-group -->
                        </div><!-- end form-group -->
                    </form>
                </div><!-- end form-center -->
            </div><!-- end overlay-content -->
        </div><!-- end overlay -->


        <!--============= TOP-BAR ===========-->
        <div id="top-bar" class="tb-text-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="info">
                            <ul class="list-unstyled list-inline">
                                <li><span><i class="fa fa-map-marker"></i></span>Mallam junction opposite Goil Filling Station</li>
                                <li><span><i class="fa fa-phone"></i></span>+233 20 222 0126 </li>
                            </ul>
                        </div><!-- end info -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="links">
                            <ul class="list-unstyled list-inline">
                              @if (Route::has('login'))

                                       @auth
                                            <li> <a href="{{ url('/home') }}"><span><i class="fa fa-home"></i></span>Home</a><font color='white'> |  </font></li>
                                            <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}

                                              </a>
                                            </li>

                                            </li>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                       @else
                                            <li><a  href="{{ route('login') }}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                                          <li><a  href="{{ route('register') }}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                                       @endauth

                               @endif


                                           <li>
                                               <div class="form-group language">
                                                   <span><i class="fa fa-angle-down"></i></span>
                                                   <select class="form-control">
                                                       <option value="">EN</option>
                                                   </select>
                                               </div><!-- end form-group -->
                                           </li>




                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->

<!--=======================START  CONTENT =======================-->
    <div id='content'>
      @if (Route::getCurrentRoute()->uri() != '/' )


      <style>
      .main-navbar.navbar-transparent .navbar-nav > li > a {
              color: #000;
          }
      .ba{
        color: #000;
      }
      #flexslider-container-3, #slider-3 .slides, #slider-3 .flex-viewport {
          height: 10px;
      }

        .dashboard-content .btn {
            color: #ffffff;
        }
        .dashboard-nav .nav-tabs li a {
          font-size: 16px;
          /*background: #000000;*/
      }
      </style>


      @endif



      @yield('content')



    </div>
  <!--=======================END  CONTENT =======================-->

  <!--======================= FOOTER =======================-->
      <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

          <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
              <div class="container">
                  <div class="row">

                      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                          <h3 class="footer-heading">CONTACT US</h3>
                          <ul class="list-unstyled">
                            <li><span><i class="fa fa-map-marker"></i></span>Mallam junction opposite Goil Filling Station</li>
                            <li><span><i class="fa fa-phone"></i></span>+233 20 222 0126</li>
                              <li><span><i class="fa fa-envelope"></i></span>info@ayumba.com</li>
                          </ul>
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                          <h3 class="footer-heading">COMPANY</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Bus Ticketing</a></li>
                              <li><a href="#">Taxi Hring</a></li>
                              <li><a href="#">Professional Services</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Refund Policy</a></li>
                          </ul>
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                        <h3 class="footer-heading">RESOURCES</h3>
                          <ul class="list-unstyled">
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact Us</a></li>
                              <li><a href="{{ route('login') }}">Login</a></li>
                              <li><a href="{{ route('register') }}">Register</a></li>
                              <li><a href="#">Site Map</a></li>
                          </ul>
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                          <h3 class="footer-heading">ABOUT US</h3>
                          <p>Ayumba is an online platform that offers bus ticketing, taxi hiring and Professional services</p>
                          <ul class="social-links list-inline list-unstyled">
                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                              <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                              <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                              <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                              <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                              <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                          </ul>
                      </div><!-- end columns -->

                  </div><!-- end row -->
              </div><!-- end container -->
          </div><!-- end footer-top -->

          <div id="footer-bottom" class="ftr-bot-black">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                          <p>© <?php echo date('Y')?> <a href="#">Ayumba</a>. All rights reserved.</p>
                      </div><!-- end columns -->

                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                          <ul class="list-unstyled list-inline">
                            <li><a href="#">Terms & Condition</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                          </ul>
                      </div><!-- end columns -->
                  </div><!-- end row -->
              </div><!-- end container -->
          </div><!-- end footer-bottom -->

      </section><!-- end footer -->


        <!-- Page Scripts Starts -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/jquery.flexslider.js')}}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('js/custom-navigation.js')}}"></script>
        <script src="{{ asset('js/custom-flex.js')}}"></script>
        <script src="{{ asset('js/custom-owl.js')}}"></script>
        <script src="{{ asset('js/custom-date-picker.js')}}"></script>
        <script src="{{ asset('js/custom-gallery.js')}}"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
        <script>
        $('.selectpicker').selectpicker({
          style: 'btn-select',
         size: 4
        });
        </script>
        <!-- Page Scripts Ends -->
        @yield('script')
    </body>
</html>
