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
                              <h2>Recent <span> Bus Bookings</span></h2>


                              <!--====================start of tab==========================-->
                                <ul class="nav nav-tabs">
                                  <li class="active"><a data-toggle="tab" href="#home">View Recent Bookings</a></li>

                                </ul>

                                <div class="tab-content">
                                  <div id="home" class="tab-pane fade in active">

<!--======================start of grid=================================-->
<div class="dashboard-listing recent-activity"  style='padding:10px;'>
  <h3 class="dash-listing-heading">Recent Bookings</h3>

  <table id="companybustable" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Time</th>
                  <th>Seat No</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Status</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>

            @foreach ($bus_booking as $bus_bookingRow)
              <tr>
                  <td>{{$bus_bookingRow->booking_id}}</td>
                  <td>{{$bus_bookingRow->name}}</td>
                  <td>{{$bus_bookingRow->board_point}}</td>
                  <td>{{$bus_bookingRow->drop_point}}</td>
                  <td>{{$bus_bookingRow->board_time}}-{{$bus_bookingRow->drop_time}}</td>
                  <td>{{$bus_bookingRow->seat_no}}</td>
                  <td>{{$bus_bookingRow->amount}}</td>
                  <td>{{$bus_bookingRow->quantity}}</td>
                  <td>{{$bus_bookingRow->total}}</td>
                  <td>{{$bus_bookingRow->status}}</td>
                  <td><button class="btn btn-orange" onclick="invoice('{{$bus_bookingRow->booking_id}}')">View Invoice</button></td>
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
