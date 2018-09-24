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
@if (Auth::user()->usertype=="Admin")
  @include('sections.admin-section')
@elseif(Auth::user()->usertype=="normal" && Auth::user()->user_category=="other")
  @include('sections.normal-user-section')
@elseif(Auth::user()->usertype=="agent")
  @include('sections.company-agent-section')
@elseif(Auth::user()->usertype=="normal" && Auth::user()->user_category=="bus")
  @include('sections.bus-agent-section')
@endif

@endsection

@section('script')
@endsection
