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
                                 <h3>Login</h3>
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
                                 <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Register') }}">
                                   @csrf




                                     <div class="form-group">
                                          <input type="email" class="form-control" placeholder="Email"  name='email' required/>
                                          <span><i class="fa fa-envelope"></i></span>
                                     </div>


                                     <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Password" name='password'  required/>
                                          <span><i class="fa fa-lock"></i></span>
                                     </div>

                                     <div class="checkbox">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                           {{ __('Remember Me') }}
                                       </label>
                                      </div>

                                     <input type="submit" class="btn btn-orange btn-block" value="Login"/>
                                 </form>

                                 <div class="other-links">
                                    	<p class="link-line">New Here ? <a href="{{ route('register') }}">Signup</a></p>
                                        <a class="simple-link" href="{{ route('password.request') }}">Forgot Password ?</a>
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
