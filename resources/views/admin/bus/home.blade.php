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
                              <h2>Bus <span>  Ticketting</span></h2>


                              <!--====================start of tab==========================-->
                                <ul class="nav nav-tabs">
                                  <li class="active"><a data-toggle="tab" href="#home">View Bus Coaches</a></li>
                                  <li><a data-toggle="tab" href="#menu2">Add Coach</a></li>
                                  <li><a data-toggle="tab" href="#menu3">Add User</a></li>
                                  <li><a data-toggle="tab" href="#menu1">View Users</a></li>

                                </ul>

                                <div class="tab-content">
                                  <div id="home" class="tab-pane fade in active">

<!--======================start of grid=================================-->
<div class="dashboard-listing recent-activity"  style='padding:10px;'>
  <h3 class="dash-listing-heading">Recent Coaches</h3>

  <table id="companybustable" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>

            @foreach ($bus_company as $bus_companyRow)
              <tr>
                  <td>{{$bus_companyRow->company_name}}</td>
                  <td>{{$bus_companyRow->contact}}</td>
                  <td>{{$bus_companyRow->address}}</td>
                  <td><button type="button" class="btn btn-orange" id='{{$bus_companyRow->company_id}}'>Delete</button>
                </td>
              </tr>
               @endforeach

          </tbody>
        </table>

</div><!-- end recent-activity -->



<!--======================end og grid==================================-->

                                      </div>

                                      <div id="menu2" class="tab-pane fade">
                                  <!--===============start of add coach=====================-->
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                                        <form class="lg-booking-form">
                                  <div class="lg-booking-form-heading">

                                  <h3>Add Bus Company Details</h3>
                                  </div><!-- end lg-bform-heading -->

                                  <div class="payment-tabs">
                                  <ul class="nav nav-tabs">
                                      <li class="active"><a href="#tab-credit-card" data-toggle="tab"> Company Details</a></li>

                                    </ul>

                                    <div class="tab-content">
                                      <div id="tab-credit-card" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                          <input type="text" class="form-control" id='company_name' required/>

                                                    </div>
                                                </div><!-- end columns -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="text" id='contact' class="form-control" required/>
                                                    </div>
                                                </div><!-- end columns -->
                                            </div><!-- end row -->

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" id='address' required></textarea>
                                                    </div>
                                                </div><!-- end columns -->


                                            </div><!-- end row -->
                                            <button type="button" class="btn btn-orange" id='addcompany'>Add Company</button>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        </div><!-- end tab -->


                                    </div><!-- end tab-content -->
                                  </div><!-- end payment-tabs -->


                                  </form>

                                  <!--=============================================================-->

                                  <!--============================================================-->


                                  </div>


                                  <!--===============end of add coach======================-->

                                        </div>



                                        <div id="menu3" class="tab-pane fade">
                                        <!--===============start of add coach=====================-->
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                                          <form class="lg-booking-form" method="POST" action="{{url('add-bus-user')}}">
                                        <div class="lg-booking-form-heading">

                                        <h3>Add User</h3>
                                        </div><!-- end lg-bform-heading -->

                                        <div class="payment-tabs">
                                        <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-credit-card" data-toggle="tab"> User Details</a></li>

                                        </ul>

                                        <div class="tab-content">
                                        <div id="tab-credit-card" class="tab-pane fade in active">
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label>Full Name</label>
                                                            <input type="text" class="form-control" name='user_fullname' required/>

                                                      </div>
                                                  </div><!-- end columns -->

                                                  <div class="col-sm-4">
                                                      <div class="form-group">
                                                          <label>Contact</label>
                                                          <input type="text" name='user_contact' class="form-control" required/>
                                                      </div>
                                                  </div><!-- end columns -->
                                                  <div class="col-sm-2">
                                                      <div class="form-group">
                                                          <label>Gender</label>
                                                          <select class="form-control" name='user_gender' required>
                                                              <option value=''>----Select ---</option>
                                                              <option value='M'>Male</option>
                                                              <option value='F'>Female</option>

                                                           </select>
                                                      </div>
                                                  </div><!-- end columns -->
                                              </div><!-- end row -->

                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label>Email</label>
                                                        <input type="text" name='user_email' class="form-control" required/>
                                                      </div>
                                                  </div><!-- end columns -->

                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label>Company</label>
                                                          <select class="form-control" name='user_company' required>
                                                              <option value=''>----Select Company----</option>
                                                               @foreach ($bus_company as $bus_companyRow)
                                                               <option value='{{$bus_companyRow->company_id}}'>{{$bus_companyRow->company_name}}</option>
                                                               @endforeach
                                                           </select>
                                                      </div>
                                                  </div><!-- end columns -->


                                              </div><!-- end row -->
                                              <button type="submit" class="btn btn-orange" id='adduser'>Add Company</button>
                                              <input type="hidden" name="_token" value="{{csrf_token()}}">

                                          </div><!-- end tab -->


                                        </div><!-- end tab-content -->
                                        </div><!-- end payment-tabs -->


                                        </form>

                                        <!--=============================================================-->

                                        <!--============================================================-->


                                        </div>


                                        <!--===============end of add coach======================-->

                                          </div>

                                  <div id="menu1" class="tab-pane fade">
                                    <div class="dashboard-listing recent-activity"  style='padding:10px;'>
                                      <h3 class="dash-listing-heading">Recent Users</h3>

                                      <table id="companybustable" class="table table-striped table-bordered" style="width:100%">
                                              <thead>
                                                  <tr>
                                                      <th>Image</th>
                                                      <th>Name</th>
                                                      <th>Contact</th>
                                                      <th>Email</th>
                                                      <th>Gender</th>
                                                      <th>Company</th>
                                                      <th>Status</th>
                                                      <th></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($bus_user as $bus_userRow)
                                                  <tr>
                                                      <td>{{$bus_userRow->image}}</td>
                                                      <td>{{$bus_userRow->name}}</td>
                                                      <td>{{$bus_userRow->mobile}}</td>
                                                      <td>{{$bus_userRow->email}}</td>
                                                      <td>{{$bus_userRow->gender}}</td>
                                                      <td>{{$bus_userRow->company_name}}</td>
                                                      <td>{{$bus_userRow->status}}</td>

                                                      <td><button type="button" class="btn btn-orange" id='{{$bus_companyRow->id}}'>Delete</button>
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
