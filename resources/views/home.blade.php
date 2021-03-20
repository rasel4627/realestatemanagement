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
        <h1 class="text-uppercase">Profile</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- Profile Start -->
<section id="agent-2-peperty" class="profile padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="{{ url('/home') }}" class="active"><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="{{ url('/My-Property/'.Auth::id()) }}"><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="{{ url('/Submit-Property') }}"><i class="icon-icons215"></i> Submit Property</a></li>
          <!-- <li><a href="{{ url('/Property-Favorite') }}"><i class="icon-icons43"></i> Favorite Properties</a></li> -->
          <li><a href="{{ url('logout') }}"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-3">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2 class="text-uppercase bottom30">my profile</h2>
        <div class="agent-p-img">

      <form action="{{ url('Update/Profile/Photo'.Auth::id()) }}" method="post" enctype="multipart/form-data">
          @csrf
          <img src="{{ asset(Auth::user()->image)}}" class="img-responsive" alt="image"/>
          <input type="file" id="file" class="custom-file-input" name="image" onchange="readURL(this);" required="" accept="image">
          <input type="hidden" name="old_img" value="{{ Auth::user()->image }}">
          <img src="" id="one" >
          <br>
         <button type="submit" class="btn-blue border_radius">Update Profile Picture</button>
      </form>

        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-form">
          <div class="row">

            <form action="{{ url('Update/Agent/Profile'.Auth::id()) }}" method="post" class="callus">
              @csrf
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Your Name:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="name"  class="keyword-input" value="{{ Auth::user()->name }}">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Phone:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" name="phone"  class="keyword-input" value="{{ Auth::user()->phone }}">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Telephone:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" class="keyword-input" name="telephone" value="{{ Auth::user()->telephone }}">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Email Adress:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text"  class="keyword-input" value="{{ Auth::user()->email }}" name="email">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="single-query">
                  <label>About:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <textarea  class="form-control" name="about">
                    {{ Auth::user()->about }}
                  </textarea>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <button type="submit" class="btn-blue border_radius">Save Changes</button>
            </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class="bottom30 margin40">My Social Network</h3>
        <div class="row">

          <form action="{{ url('Update/Agent/Profile/Social'.Auth::id()) }}" method="post" class="callus">
            @csrf
            <div class="col-sm-4">
              <div class="single-query">
                <label>Facebook:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text"  class="keyword-input" value="{{ Auth::user()->fb }}" name="fb">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Twitter:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" value="{{ Auth::user()->twitter }}" name="twitter">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Skype:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" value="{{ Auth::user()->skype }}" name="skype">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <button type="submit" class="btn-blue border_radius">Save Changes</button>
            </div>
          </form>

        </div>
      </div>
      <div class="col-md-2 hidden-xs"></div>
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class=" bottom30 margin40">Change Your Password</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>Current Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>New Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Confirm Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a class="btn-blue border_radius" href="">Save Changes</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Profile end -->
 <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(130)
                  .height(135);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
@endsection