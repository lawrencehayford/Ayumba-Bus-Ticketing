<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
  <ul class="nav nav-tabs nav-stacked text-center">
      <li class="active"><a href="{{url('/home')}}"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
        <li><a href="{{url('/view-bus-booking/'.Auth::user()->companyid)}}"><span><i class="fa fa-bus"></i></span>View Bookings</a></li>
          <li><a href="{{url('/view-routes/'.Auth::user()->companyid)}}"><span><i class="fa fa-car"></i></span>Add Route / Bus</a></li>
          <li><a href="#"><span><i class="fa fa-user"></i></span>Manage Agents</a></li>
          <li><a href="#"><span><i class="fa fa-bar-chart"></i></span>Statistics</a></li>
      </ul>
  </div><!-- end columns -->
