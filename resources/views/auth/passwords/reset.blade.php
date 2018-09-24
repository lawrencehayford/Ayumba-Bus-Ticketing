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
                                 <h3>Reset Password</h3>
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
                                 <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Register') }}">
                                   @csrf




                                     <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email"  name='email' required/>
                                          <span><i class="fa fa-envelope"></i></span>
                                     </div>

                                     <div class="form-group">
                                         <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                         <div class="col-md-6">
                                             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                             @if ($errors->has('password'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                             @endif
                                         </div>
                                     </div>



                                     <input type="submit" class="btn btn-orange btn-block" value="Reset"/>
                                 </form>


                             </div><!-- end custom-form -->

                             <div class="flex-content-img custom-form-img">
                                 <img src="images/registration.jpg" class="img-responsive" alt="registration-img" />
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
