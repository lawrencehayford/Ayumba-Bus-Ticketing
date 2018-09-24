@extends('layouts.master')

@section('title')
Ayumba | Register
@endsection

@section('header')
@endsection

@section('content')

<section class="flexslider-container" id="flexslider-container-3">

  @include('layouts.nav')
</section>


<!--===== REGISTER-WRAPPER ====-->
     <section class="innerpage-wrapper">
       <div id="registration" class="innerpage-section-padding">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12">

                       <div class="flex-content">
                             <div class="custom-form custom-form-fields">
                                 <h3>Sign Up Now</h3>
                                 @if ($errors->has('name'))
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                     <br/>
                                 @endif
                                 @if ($errors->has('email'))
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                      <br/>
                                 @endif
                                 @if ($errors->has('password'))
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                      <br/>
                                 @endif
                                 <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                   @csrf


                                     <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Full Name" name='name'  required/>
                                          <span><i class="fa fa-user"></i></span>
                                     </div>

                                     <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email"  name='email' required/>
                                          <span><i class="fa fa-envelope"></i></span>
                                     </div>
                                     <div class="form-group">
                                          <select class="form-control"  name='sex' required/>
                                            <option value=''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ---Select Gender---  </option>
                                              <option value='M'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Male  </option>
                                              <option value='F'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Female  </option>
                                        </select>
                                          <span><i class="fa fa-user"></i></span>
                                     </div>
                                     <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Contact"  name='contact' required/>
                                          <span><i class="fa fa-mobile"></i></span>
                                     </div>

                                     <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Password" name='password'  required/>
                                          <span><i class="fa fa-lock"></i></span>
                                     </div>

                                     <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Confirm Password" name='password_confirmation'  required/>
                                          <span><i class="fa fa-lock"></i></span>
                                     </div>

                                     <input type="submit" class="btn btn-orange btn-block" value="Register"/>
                                 </form>

                                 <div class="other-links">
                                   <p class="link-line">Already Have An Account ? <a  href="{{ route('login') }}">Login Here</a></p>
                                 </div><!-- end other-links -->
                             </div><!-- end custom-form -->

                             <div class="flex-content-img custom-form-img">
                               <img src="{{asset('images/registration.jpg')}}" class="img-responsive" alt="registration-img" />
                           </div><!-- end custom-form-img -->
                         </div><!-- end form-content -->

                     </div><!-- end columns -->
                 </div><!-- end row -->
             </div><!-- end container -->
         </div><!-- end registration -->
     </section><!-- end innerpage-wrapper -->
@endsection

@section('script')
@endsection
