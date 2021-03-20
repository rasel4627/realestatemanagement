<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Real Estate</title>
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/reality-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/bootsnav.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/cubeportfolio.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/owl.transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/range-Slider.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/search.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/editor.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/css/dropzone.min.css')}}">
<link rel="icon" href="{{ asset('public/frontend/images/icon.png')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>
<body>
<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 
<!--Header-->
<header class="layout_default">
  <div class="topbar grey">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>We are Best in Town With 40 years of Experience.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
            @guest
            <li><a href="{{ url('login') }}"><i class="icon-icons179"></i>Login / Register</a></li>
            @else
            <!-- <li><a href="{{ url('/Property-Favorite') }}"><i class="icon-icons43"></i>Favorites</a></li> -->
            <li><a href="{{ url('/Submit-Property') }}"><i class="icon-icons215"></i>Submit Property</a></li>
            <li><a href="{{ url('/My-Property/'.Auth::id()) }}"><i class="icon-icons215"></i>My Property</a></li>
            <li><a href="{{ url('/home') }}"><i class="icon-icons230"></i>{{ Auth::user()->name }}</a></li>
            @endguest
            
          </ul>
        </div>
      </div>
    </div>
  </div>

@php
  $setting = DB::table('settings')->first();
@endphp

  <div class="header-upper">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo"><a href="{{ url('/') }}"><img title="Homestate" alt="" src="{{ asset( $setting->company_logo )}}"></a></div>
        </div>
        <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
              <li>{{ $setting->phone }}</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Real Estate</strong></li>
              <li>{{ $setting->address }}, {{ $setting->location }}</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
              <li><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="attr-nav">
            <ul class="social_share clearfix">
              <li><a href="http://www.facebook.com::{{ $setting->fb_link }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{ $setting->skype_link }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand sticky_logo" href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/logo-white.png')}}" class="logo" alt=""></a>
          </div> <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
              <li class="dropdown {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
              <li class="dropdown {{ request()->is('Listing-Property') ? 'active' : '' }}"><a href="{{ url('/Listing-Property') }}">Listing</a></li>
              <li class="dropdown megamenu-fw {{ request()->is('Property*') ? 'active' : '' }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                <ul class="dropdown-menu megamenu-content bg" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTY LISTINGS</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="{{ url('/Listing-Property') }}">List</a></li>
                          </ul>
                        </div>
                      </div>
                      <!-- <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTY DETAIL</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="{{ url('/Property-Details') }}">Property Detail</a></li>
                          </ul>
                        </div>
                      </div> -->
                      <div class="col-menu col-md-3">
                        <h5 class="title">OTHER PAGES</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li class="dropdown">
                              <a href="{{ url('/Property-Agent') }}">Property Agents</a>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                            <li><a href="{{ url('/Property-Testimonial') }}">Testimonials</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown {{ request()->is('Features*') ? 'active' : '' }}">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                      <a href="{{ url('/Features-Blog') }}">BLOG</a>
                  </li>
                  <li class="dropdown">
                    <a href="{{ url('/Property-Agent') }}">Property Agents</a>
                  </li>
                  <li class="dropdown">
                    <a href="{{ url('/Property-Testimonial') }}">Testimonials</a>
                  </li>
                  <li class="dropdown">
                    <a href="{{ url('/Features-Faqs') }}">FAQ's</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->


  @yield('content')



<!--Footer-->
<footer class="padding_top footer2">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <a href="{{ url('/') }}" class="logo bottom30"><img src="{{ asset('public/frontend/images/logo-white.png')}}" alt="logo"></a>
          <p class="bottom15">This is a Agents and Users type website for sale and rent estate property.
          </p>
          <p class="bottom15">If you are interested in Realestate do not wait and BUY IT NOW!</p>
          <ul class="social_share">
            <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i></a></li>
          </ul>
        </div>
      </div>

@php
   $city = DB::table('city')->limit(5)->get();
   $agent = DB::table('users')->get();
   $blog = DB::table('blog')->get();
@endphp

      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Search by Area</h4>
          <ul class="area_search">
          @foreach($city as $row)
            <li><a href="javascript:void(0)"><i class="icon-icons74"></i>{{ $row->city }}</a></li>
          @endforeach
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Latest News</h4>
        @foreach($blog as $row)
          <div class="media">
            <a class="media-object"><img src="{{ asset($row->image_one)}}" style="height: 60px;width: 100px" alt="news"></a>
            <div class="media-body">
              <a href="">{{ $row->title }}</a>
              <span><i class="icon-clock4"></i>{{ $row->date }}</span>
            </div>
          </div>
        @endforeach
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="footer_panel bottom30">
          <h4 class="bottom30">Get in Touch</h4>
          <ul class="getin_touch">
            <li><i class="icon-telephone114"></i>{{ $setting->phone }}</li>
            <li><a href=""><i class="icon-icons142"></i>{{ $setting->email }}</a></li>
            <li><a href=""><i class="icon-browser2"></i>www.realestate.com</a></li>
            <li><i class="icon-icons74"></i>{{ $setting->address }},{{ $setting->location }}</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--CopyRight-->
<div class="copyright index2">
  <div class="copyright_inner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <p>Copyright &copy; 2021 <span>Castle</span>. All rights reserved.</p>
        </div>
        <div class="col-md-5 text-right">
          <p>Developed by <a href="">Rasel & Juwel</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" language="javascript">
function myMap() {
  var mapCanvas = document.getElementById("single_map");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
  animation:google.maps.Animation.BOUNCE,
    icon: "images/map_marker.png"
  });
  marker.setMap(map);
}

</script>

<script src="{{ asset('public/frontend/js/jquery-2.1.4.js')}}"></script> 
<script src="{{ asset('public/frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('public/frontend/js/bootsnav.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.appear.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery-countTo.js')}}"></script>
<script src="{{ asset('public/frontend/js/masonry.pkgd.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/range-Slider.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/owl.carousel.min.js')}}"></script> 
<script src="{{ asset('public/frontend/js/selectbox-0.2.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/zelect.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('public/frontend/js/dropzone.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('public/frontend/js/functions.js')}}"></script>
<script src="{{ asset('public/frontend/js/gmaps.js.js')}}"></script>
<script src="{{ asset('public/frontend/js/contact.js')}}"></script>
<script src="{{ asset('public/frontend/js/google-map.js')}}"></script> 
<script src="{{ asset('public/frontend/js/custom.js')}}"></script>
<script src="{{ asset('public/frontend/js/neary-by-place.js')}}"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script> 
<script src="{{ asset('public/frontend/js/editor.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">
   $("#txtEditor").Editor();
   $('[data-toggle="tooltip"]').tooltip(); 
</script>

<script>

      @if(Session::has('message'))

        var type = "{{Session::get('alert-type','info')}}";

        switch(type){

          case 'info':

            toastr.info("{{ Session::get('message') }}");

            break;

          case 'success':

            toastr.success("{{ Session::get('message') }}");

            break;

          case 'warning':

            toastr.warning("{{ Session::get('message') }}");

            break;

          case 'error':

            toastr.error("{{ Session::get('message') }}");

            break;

      }

      @endif

  </script>

</body>
</html>

