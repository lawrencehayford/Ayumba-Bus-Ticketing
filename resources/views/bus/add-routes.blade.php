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

                          @include('sections.link.bus-agent-link')

                          <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                              <h2>View <span>Routes</span></h2>


                              <!--====================start of tab==========================-->
                                <ul class="nav nav-tabs">
                                  <li class="active"><a data-toggle="tab" href="#home">View Bus Routes</a></li>
                                  <li ><a data-toggle="tab" href="#viewbus">View Avialable Buses</a></li>
                                  <li ><a data-toggle="tab" href="#addroutes">Add Routes</a></li>
                                  <li ><a data-toggle="tab" href="#addbuses">Add Buses</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div id="home" class="tab-pane fade in active">

<!--======================start of grid=================================-->
<div class="dashboard-listing recent-activity"  style='padding:10px;'>
  <h3 class="dash-listing-heading">Recent Routes</h3>

  <table id="companybustable" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>#ID</th>
                  <th>Boarding Point</th>
                  <th>Dropping Point</th>
                  <th>Boarding Time</th>
                  <th>Dropping Time</th>
                  <th>Fare</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>

            @foreach ($bus_route as $bus_routeRow)
              <tr>
                  <td>{{$bus_routeRow->id}}</td>
                  <td>{{$bus_routeRow->board_point}}</td>
                  <td>{{$bus_routeRow->drop_point	}}</td>
                  <td>{{$bus_routeRow->board_time}}</td>
                  <td>{{$bus_routeRow->drop_time}}</td>
                  <td>{{$bus_routeRow->fare}}</td>
                  <td><button class="btn btn-orange" onclick="deleteRoute('{{$bus_bookingRow->id}}')">Delete</button></td>
                </td>
              </tr>
               @endforeach

          </tbody>
        </table>

</div><!-- end recent-activity -->


                                      </div>



                                      <div id="viewbus" class="tab-pane fade in">

                                    <!--======================start of grid=================================-->
                                    <div class="dashboard-listing recent-activity"  style='padding:10px;'>
                                    <h3 class="dash-listing-heading">Recent Buses Added</h3>

                                    <table id="companybustable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                    <th>#ID</th>
                                    <th>Bus Name</th>
                                    <th>Reg No</th>
                                    <th>Max Seats</th>
                                    <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($bus_type as $bus_typeRow)
                                    <tr>
                                    <td>{{$bus_typeRow->bus_type_id}}</td>
                                    <td>{{$bus_typeRow->bus_name}}</td>
                                    <td>{{$bus_typeRow->bus_reg_no	}}</td>
                                    <td>{{$bus_typeRow->max_seats}}</td>
                                    <td><button class="btn btn-orange" onclick="deleteBusType('{{$bus_typeRow->id}}')">Delete</button></td>
                                    </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                    </table>

                                    </div><!-- end recent-activity -->


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
<script>
$('#addcompany').click(function () {

  var company_name=$('#company_name').val();
  var address=$('#address').val();
  var contact=$('#contact').val();

  if(company_name.length <1 || address.length <1 || contact.length <1){
    alert('Please fill all required fields');
    return;
  }
  var mydata = {
    company_name:company_name,
    address: address,
    contact: contact
    };
        document.getElementById("addcompany").disabled = true;
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.post("addbuscompany",
              mydata,
                function(data,status){
                      console.log(data);
                      console.log(status);
                      //var obj = JSON.parse(data);
                      if(status!="success"){
                        enablebtn();
                        alert('An error has occured. Please try again');
                        return;
                      }
                      if(data.success!=0){
                        enablebtn();
                        alert('An error has occured. Please try again');
                        return;
                      }
                      if(data.success==0){
                        //success
                          alert(data.message);
                          enablebtn();
                          return;
                      }
                      //error
                        alert(data.message);
                        enablebtn();

              });
      });
      function enablebtn(){
          document.getElementById("addcompany").disabled = false;
          $('#company_name').val("");
          $('#address').val("");
          $('#contact').val("");
          return;
      }
      $(document).ready(function() {
            $('.table').DataTable();
        } );
</script>
@endsection
