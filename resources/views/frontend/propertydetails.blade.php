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
    <h1 class="text-uppercase">Property Details</h1>
    <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
    <ol class="breadcrumb text-center">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="#">Properties</a></li>
      <li class="active">Property Details</li>
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
    <h2 class="text-uppercase">{{ $details->title }}</h2>
    <p class="bottom30">{{ $details->address }}, {{ $details->location }}, {{ $details->city }}</p>
    <div id="property-d-1" class="owl-carousel single">
      <div class="item"><img src="{{ asset($details->image_one)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_two)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_three)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_four)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_five)}}" alt="image"/></div>
    </div>
    <div id="property-d-1-2" class="owl-carousel single">
      <div class="item"><img src="{{ asset($details->image_one)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_two)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_three)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_four)}}" alt="image"/></div>
      <div class="item"><img src="{{ asset($details->image_five)}}" alt="image"/></div>
    </div>
    <div class="property_meta bg-black bottom40">
      <span><i class="icon-select-an-objecto-tool"></i>{{ $details->area }} sq ft</span>
      <span><i class=" icon-bed"></i>{{ $details->bedrooms }} BedRooms</span>
      <span><i class="icon-safety-shower"></i>{{ $details->bathrooms }} Bathroom</span>
      <span><i class="icon-old-television"></i>TV Lounge</span>
      <span><i class="icon-garage"></i>{{ $details->garage }} Garage</span>
    </div>
    <h2 class="text-uppercase">Property Description</h2>
    <p class="bottom30">{!! $details->description !!}</p>
    <p class="bottom30">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis et metus in libero sollicitudin venenatis eu sed enim. Nam felis lorem, suscipit ac nisl ac, iaculis dapibus tellus. Cras ante justo, aliquet quis placerat nec, molestie id turpis. </p>
    <div class="text-it-p bottom40">
      <p>{!! $details->description !!}</p>
    </div>
    <h2 class="text-uppercase bottom20">Quick Summary</h2>
    <div class="row property-d-table bottom40">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <table class="table table-striped table-responsive">
          <tbody>
            <tr>
              <td><b>Property Id</b></td>
              <td class="text-right">{{ $details->id }}</td>
            </tr>
            <tr>
              <td><b>Price</b></td>
              <td class="text-right">{{ $details->price }} TK / month</td>
            </tr>
            <tr>
              <td><b>Property Size</b></td>
              <td class="text-right">{{ $details->area }} ft2</td>
            </tr>
            <tr>
              <td><b>Bedrooms</b></td>
              <td class="text-right">{{ $details->bedrooms }}</td>
            </tr>
            <tr>
              <td><b>Bathrooms</b></td>
              <td class="text-right">{{ $details->bathrooms }}</td>
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
              <td class="text-right">{{ $details->property_status }}</td>
            </tr>
            <tr>
              <td><b>Year Built</b></td>
              <td class="text-right">{{ $details->built_year }}</td>
            </tr>
            <tr>
              <td><b>Garages</b></td>
              <td class="text-right">{{ $details->garage }}</td>
            </tr>
            <tr>
              <td><b>Floors</b></td>
              <td class="text-right">{{ $details->floor_type }}</td>
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

    <h2 class="text-uppercase bottom20">Contact Agent</h2>
    <div class="row">
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="{{ asset($details->image)}}" alt="Agents">
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <h3>{{ $details->name }}</h3>
          <p class="bottom30">{!! $details->about !!}</p>
          <table class="agent_contact table">
            <tbody>
              <tr class="bottom10">
                <td><strong>Phone:</strong></td>
                <td class="text-right">{{ $details->phone }}</td>
              </tr>
              <tr class="bottom10">
                <td><strong>Telephone:</strong></td>
                <td class="text-right">{{ $details->telephone }}</td>
              </tr>
              <tr>
                <td><strong>Email Adress:</strong></td>
                <td class="text-right"><a href="">{{ $details->email }}</a></td>
              </tr>
              <tr>
                <td><strong>Skype:</strong></td>
                <td class="text-right"><a href="#.">{{ $details->skype }}</a></td>
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
      <div class="col-sm-4 bottom40">

        <form class="callus">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" placeholder="Message"></textarea>
          </div>
          <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
        </form>

      </div>


@php
  $similar = DB::table('properties')
          ->join('propertystatus','propertystatus.id','properties.property_status')
          ->join('city','city.id','properties.city')
          ->join('categories','categories.id','properties.property_type')
          ->join('users','users.id','properties.agent_id')
          ->select('properties.*','propertystatus.property_status','city.city','categories.property_type','users.*')
          ->where('propertystatus.property_status',$similar_property)
          ->get();
@endphp

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-sm-10">
        <h2 class="text-uppercase top20">Similar Properties</h2>
        <p class="bottom30">We have Properties in these Areas View a list of Featured Properties.</p>
        </div>
        <div  class="three-item owl-carousel">
        @foreach($similar as $row)
          <div class="item">
            <div class="property_item heading_space">
              <div class="image">
                <a href="{{ url('Property/Details/'.$row->id) }}"><img src="{{ asset($row->image_one)}}" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">{{ $row->price }} Per Month</span>
                </div>
                <span class="tag_t">For {{ $row->property_status }}</span> 
                <span class="tag_l">Featured</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="{{ url('Property/Details/'.$row->id) }}">{{ $row->title }}</a></h3>
                  <p>{{ $row->address }}, {{ $row->location }}, {{ $row->city }}</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>{{ $row->area }} sq ft</span> 
                  <span><i class="icon-bed"></i>{{ $row->bedrooms }} BedRooms</span> 
                  <span><i class="icon-safety-shower"></i>{{ $row->bathrooms }} Bathroom</span>   
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>{{ $row->garage }} Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left"><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                  <ul class="pull-right">
                    <li><a href="#."><i class="icon-like"></i></a></li>
                    <li><a href="#six" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="six">
                  <ul>
                    <li><a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                    <li><a href="#." class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                    <li><a href="#." class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        

        </div>
      </div>
      <div class="col-sm-12 text-center">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<!--  Property Detail End -->
@endsection