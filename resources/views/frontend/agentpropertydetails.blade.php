@extends('layouts.app')
@section('content')
<!-- Page Banner Start-->
@php
 $banner = DB::table('settings')->first();
@endphp
<section class="page-banner padding" style="background-image: url({{asset($banner->agent_banner)}} )">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
    <h1 class="text-uppercase">My Property Details</h1>
    <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
    <ol class="breadcrumb text-center">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/My-Property/'.Auth::id()) }}">Properties</a></li>
      <li class="active">My Property Details</li>
    </ol>
  </div>
</div>
</div>
</section>
<!-- Page Banner End -->

<!-- Property Detail -->
<section id="property" class="padding">
<div class="container">
<div class="row">
  <div class="col-md-12 listing1 property-details">
    <h2 class="text-uppercase">{{ $agentPropertydetails->title }}</h2>
    <p class="bottom30">{{ $agentPropertydetails->address }}, {{ $agentPropertydetails->location }}, {{ $agentPropertydetails->city }}</p>
    <div id="property-d-1" class="owl-carousel single">
      <div class="item"><img src="{{ asset($agentPropertydetails->image_one)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_two)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_three)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_four)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_five)}}" alt="image"/></div>
    </div>
    <div id="property-d-1-2" class="owl-carousel single">
      <div class="item"><img src="{{ asset($agentPropertydetails->image_one)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_two)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_three)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_four)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($agentPropertydetails->image_five)}}" alt="image"/></div>
    </div>
    <div class="property_meta bg-black bottom40">
      <span><i class="icon-select-an-objecto-tool"></i>{{ $agentPropertydetails->area }} sq ft</span>
      <span><i class=" icon-bed"></i>{{ $agentPropertydetails->bedrooms }} BedRooms</span>
      <span><i class="icon-safety-shower"></i>{{ $agentPropertydetails->bathrooms }} Bathroom</span>
      <span><i class="icon-old-television"></i>TV Lounge</span>
      <span><i class="icon-garage"></i>{{ $agentPropertydetails->garage }} Garage</span>
    </div>
    <h2 class="text-uppercase">Property Description</h2>
    <p class="bottom30">{!! $agentPropertydetails->description !!}</p>
    <p class="bottom30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. </p>
    <div class="text-it-p bottom40">
      <p>{!! $agentPropertydetails->description !!}</p>
    </div>
    <h2 class="text-uppercase bottom20">Quick Summary</h2>
    <div class="row property-d-table bottom40">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <table class="table table-striped table-responsive">
          <tbody>
            <tr>
              <td><b>Property Id</b></td>
              <td class="text-right">{{ $agentPropertydetails->id }}</td>
            </tr>
            <tr>
              <td><b>Price</b></td>
              <td class="text-right">{{ $agentPropertydetails->price }} TK / month</td>
            </tr>
            <tr>
              <td><b>Property Size</b></td>
              <td class="text-right">{{ $agentPropertydetails->area }} ft2</td>
            </tr>
            <tr>
              <td><b>Bedrooms</b></td>
              <td class="text-right">{{ $agentPropertydetails->bedrooms }}</td>
            </tr>
            <tr>
              <td><b>Bathrooms</b></td>
              <td class="text-right">{{ $agentPropertydetails->bathrooms }}</td>
            </tr>
            <tr>
              <td><b>Available From</b></td>
              <td class="text-right">12-03-2021</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <table class="table table-striped table-responsive">
          <tbody>
            <tr>
              <td><b>Status</b></td>
              <td class="text-right">{{ $agentPropertydetails->property_status }}</td>
            </tr>
            <tr>
              <td><b>Year Built</b></td>
              <td class="text-right">{{ $agentPropertydetails->built_year }}</td>
            </tr>
            <tr>
              <td><b>Garages</b></td>
              <td class="text-right">{{ $agentPropertydetails->garage }}</td>
            </tr>
            <tr>
              <td><b>Floors</b></td>
              <td class="text-right">{{ $agentPropertydetails->floor_type }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <h2 class="text-uppercase bottom20">Features</h2>
    <div class="row bottom40">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="pro-list">
          <li>
            Air Conditioning
          </li>
          <li>
            Quiet Neighbourhood
          </li>
          <li>
            TV Cable & WIFI
          </li>
          <li>
            Swimming Pool
          </li>
        </ul>
      </div>
    </div>

    <h2 class="text-uppercase bottom20">Video Presentation</h2>
    <div class="row bottom40">
      <div class="col-md-12 padding-b-20">
        <div class="pro-video">
          <figure class="wpf-demo-gallery">
            <video  class="video" controls>
              <source src="public/frontend/video/video.mp4" type="video/mp4">
              <source src="public/frontend/video/video.ogg" type="video/ogg">
            </video>
          </figure>
        </div>
      </div>
    </div>

    <h2 class="text-uppercase bottom20">My Contact</h2>
    <div class="row">
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="{{ asset($agentPropertydetails->image)}}" alt="Agents">
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <h3>{{ $agentPropertydetails->name }}</h3>
          <p class="bottom30">{!! $agentPropertydetails->about !!}</p>
          <table class="agent_contact table">
            <tbody>
              <tr class="bottom10">
                <td><strong>Phone:</strong></td>
                <td class="text-right">{{ $agentPropertydetails->phone }}</td>
              </tr>
              <tr class="bottom10">
                <td><strong>Telephone:</strong></td>
                <td class="text-right">{{ $agentPropertydetails->telephone }}</td>
              </tr>
              <tr>
                <td><strong>Email Adress:</strong></td>
                <td class="text-right"><a href="">{{ $agentPropertydetails->email }}</a></td>
              </tr>
              <tr>
                <td><strong>Skype:</strong></td>
                <td class="text-right"><a href="#.">{{ $agentPropertydetails->skype }}</a></td>
              </tr>
            </tbody>
          </table>
          <div style="border-bottom:1px solid #d3d8dd;" class="bottom15"></div>
          <ul class="social_share">
            <li><a href="" class="facebook"><i class="icon-facebook-1"></i></a></li>
            <li><a href="" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <li><a href="" class="google"><i class="icon-google4"></i></a></li>
            <li><a href="" class="linkden"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      
      
    </div>
  </div>
</div>
</div>
</section>
<!--  Property Detail End -->
@endsection