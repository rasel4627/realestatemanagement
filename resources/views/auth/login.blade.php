@extends('layouts.app')
@section('content')
<!-- Page Banner Start-->
@php
 $banner = DB::table('settings')->first();
@endphp
<section class="page-banner padding" style="background-image: url({{asset($banner->property_details_banner)}} )">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Agent Login</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Login</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End --> 

<!-- Login -->
<section id="login" class="padding">
  <div class="container">
    <h3 class="hidden">hidden</h3>
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="profile-login">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content padding_half">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
              <div class="agent-p-form">

                <form action="{{ url('login') }}" method="post" class="callus clearfix">
                  @csrf
                  <div class="single-query form-group col-sm-12">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email Or Phone" required="">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="single-query form-group  col-sm-12">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" required="" name="password" aria-describedby="emailHelp" placeholder="Password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="col-sm-6">
                        <div class="search-form-group white form-group text-left">
                          <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                          <span>Remember Me</span>
                        </div>
                      </div>
                      <div class="col-sm-6 text-right">
                        <a href="{{ route('password.request') }}" class="lost-pass">Lost your password?</a>
                      </div>
                    </div>
                  </div>
                  <div class=" col-sm-12">
                    <input type="submit" value="Login" class="btn-slide border_radius"> 
                  </div>
                </form>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="agent-p-form">

                <form class="callus clearfix" action="{{ url('register') }}" method="post">
                  @csrf
                    <div class="single-query col-sm-12 form-group">
                      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Full Name*" name="name" required="">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Email*" required="">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" aria-describedby="emailHelp" placeholder="Phone*" required="">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Password" name="password" required="">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Re-Type Password" name="password_confirmation" required="">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <div class="query-submit-button">
                        <input type="submit" value="Creat an Account" class="btn-slide">
                      </div>
                    </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login end -->
@endsection