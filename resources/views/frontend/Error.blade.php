@extends('layouts.app')
@section('content')

<!-- Page Banner Start-->
<!-- <section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="p-white text-uppercase">ERROR PAGE</h1>
        <p class="p-white">The page you are looking for was moved, removed, renamed or might never existed.</p>
        <ol class="breadcrumb text-center">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">404-Error</li>
        </ol>
      </div>
    </div>
  </div>
</section> -->
<!-- Page Banner End --> 


<!-- 404 Error Start -->
<section id="error-404" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="error-image">
          <img src="{{ asset('public/frontend/images/404.png')}}" alt="image" class="img-responsive"/>
        </div>
        <div class="error-text">
          <h1>Opps!!</h1>
          <h3>Looks like something went wrong.</h3>
          <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
          <div class="erro-button">
            <a href="#." class="btn-blue">go back to home page</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 404 Error End -->
@endsection