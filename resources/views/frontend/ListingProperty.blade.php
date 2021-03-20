@extends('layouts.app')
@section('content')
<!-- Page Banner Start-->
@php
  $banner = DB::table('settings')->first();
  $city = DB::table('city')->get();
  $type = DB::table('categories')->get();
  $status = DB::table('propertystatus')->get();
  $property = DB::table('properties')
            ->join('propertystatus','propertystatus.id','properties.property_status')
            ->join('city','city.id','properties.city')
            ->join('categories','categories.id','properties.property_type')
            ->select('properties.*','propertystatus.property_status','city.city','categories.property_type')
            ->get();
@endphp

<section class="page-banner padding" style="background-image: url( {{asset($banner->agent_banner)}} )">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Listing Properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li class="active">Listing</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- Listing Start -->
<section id="listing1" class="listing1 padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-md-9">
            <h2 class="uppercase">PROPERTY LISTINGS</h2>
            <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
          </div>
          <div class="col-md-3">
          <form class="callus">
            <div class="single-query">
            </div>
            </form>
          </div>
        </div>

     
        <div class="row">
          @foreach($property as $row)
          <div class="col-sm-6">
            <div class="property_item heading_space">
              <div class="image">
                <a href="{{ url('Property/Details/'.$row->id) }}"><img src="{{ asset($row->image_one)}}" alt="latest property" class="img-responsive"></a>
                <div class="price clearfix"> 
                  <span class="tag pull-right">{{$row->price}} TK Per Month</span>
                </div>
                <span class="tag_t">For {{$row->property_status}}</span> 
                <span class="tag_l">Featured</span>
              </div>
              <div class="proerty_content">
                <div class="proerty_text">
                  <h3 class="captlize"><a href="{{ url('Property/Details/'.$row->id) }}">{{$row->title}}</a></h3>
                  <p>{{$row->address}}, {{$row->location}}, {{$row->city}}</p>
                </div>
                <div class="property_meta transparent"> 
                  <span><i class="icon-select-an-objecto-tool"></i>{{$row->area}} sq ft</span>
                  <span><i class="icon-bed"></i>{{$row->bedrooms}} Bedrooms</span> 
                  <span><i class="icon-safety-shower"></i>{{$row->bathrooms}} Bathrooms</span>
                </div>
                <div class="property_meta transparent bottom30">
                  <span><i class="icon-old-television"></i>TV Lounge</span>
                  <span><i class="icon-garage"></i>{{$row->garage}} Garage</span>
                  <span></span>
                </div>
                <div class="favroute clearfix">
                  <p class="pull-md-left">5 Days ago &nbsp; <i class="icon-calendar2"></i></p>
                  <ul class="pull-right">
                    <li><a href="#."><i class="icon-like"></i></a></li>
                    <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                  </ul>
                </div>
                <div class="toggle_share collapse" id="one">
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
     
        
        <div class="padding_bottom text-center">
          <ul class="pager">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>
      </div>

      <aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Advanced Search</h3>
          </div>

         <form class="callus" action="{{ route('Property/Search') }}" method="post">
           @csrf
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="city">
                  <option class="active">Location</option>
                    @foreach($city as $row)
                      <option value="{{$row->id}}">{{$row->city}}</option>
                    @endforeach
              </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="property_type">
                  <option class="active">Property Type</option>
                    @foreach($type as $row)
                      <option value="{{$row->id}}">{{$row->property_type}}</option>
                    @endforeach
              </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select name="property_status">
                  <option class="active">Property Status</option>
                    @foreach($status as $row)
                      <option value="{{$row->id}}">{{$row->property_status}}</option>
                    @endforeach
              </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 form-group">
              <button type="submit" class="btn-blue border_radius">Search</button>
            </div>
          </form>
        </div>

@php
  $property = DB::table('properties')
            ->join('propertystatus','propertystatus.id','properties.property_status')
            ->join('city','city.id','properties.city')
            ->join('categories','categories.id','properties.property_type')
            ->select('properties.*','propertystatus.property_status','city.city','categories.property_type')
            ->limit(4)
            ->get();
@endphp

        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Featured Properties</h3>
          </div>
        </div>
       @foreach($property as $row)
        <div class="row bottom20">
          <div class="col-md-4 col-sm-4 col-xs-6 p-image">
            <img src="{{ asset($row->image_one)}}" alt="image"/>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-6">
            <div class="feature-p-text">
              <h4><a href="{{ url('Property/Details/'.$row->id) }}">{{$row->title}}</a></h4>
              <p class="bottom15">{{$row->address}}, {{$row->location}}, {{$row->city}}</p>
              <a href="">{{$row->price}} TK</a>
            </div>
          </div>
        </div>
      @endforeach

@php
  $property = DB::table('properties')
            ->join('propertystatus','propertystatus.id','properties.property_status')
            ->join('city','city.id','properties.city')
            ->join('categories','categories.id','properties.property_type')
            ->select('properties.*','propertystatus.property_status','city.city','categories.property_type')
            ->get();
@endphp

        <div class="row">
          <div class="col-md-12">
            <h3 class="margin40 bottom20">Featured Properties</h3>
          </div>
          <div class="col-md-12">
            <div id="agent-2-slider" class="owl-carousel">

            @foreach($property as $row)
              <div class="item">
                <div class="property_item heading_space">
                  <div class="image">
                    <a href="{{ url('Property/Details/'.$row->id) }}"><img src="{{ asset($row->image_one)}}" alt="listin" class="img-responsive"></a>
                    <div class="feature"><span class="tag-2">For {{$row->property_status}}</span></div>
                    @if($row->property_status == 'Rent')
                      <div class="price clearfix"><span class="tag pull-right">{{$row->price}} TK Per Month - <small>For {{$row->property_type}}</small></span></div>
                    @elseif($row->property_status == 'Sale')
                      <div class="price clearfix"><span class="tag pull-right">{{$row->price}} TK Selling Price - <small>For {{$row->property_type}}</small></span></div>
                    @endif
                  </div>
                </div>
              </div>
            @endforeach
              
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
<!-- Listing end -->
@endsection