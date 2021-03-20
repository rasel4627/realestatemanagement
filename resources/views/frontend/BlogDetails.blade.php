@extends('layouts.app')
@section('content')
<!-- Page Banner Start-->
@php
 $banner = DB::table('settings')->first();
@endphp
<section class="page-banner padding" style="background-image: url({{asset($banner->listing_banner)}} )">
<div class="container">
  <div class="row">
     <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Blog classic</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="#">Properties</a></li>
           <li class="active">Blog</li>
        </ol>
     </div>
  </div>
</div>
</section>
<!-- Page Banner End -->

<!-- News Details Start -->
<section id="news-section-1" class="news-section-details property-details padding_top">
<div class="container">  
<div class="row heading_space">
  <div class="col-md-8">
  	<div class="row">
    	<div class="news-1-box clearfix">
        	<div class="col-md-12 col-sm-12 col-xs-12">
            	<img src="{{ asset($details->image_one)}}" alt="image" class="img-responsive"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 top30">
            	<div class="news-details bottom10">
                	<span><i class="icon-icons230"></i> by Martin Moore</span>
            		<span><i class="icon-icons228"></i>{{ $details->created_at }}</span>
                </div>
            	<h3>Easy your wat to the Global sotck</h3>
                <p>{!! $details->description1 !!}</p>
               
                
                 <p class=" top30 bottom30">Duis mattis laoreet neque, et ornare neque sollicitudin at. 
                 Proin sagittis dolor sed mi elementum pretium. 
                 Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. 
                 Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                 Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. 
                 Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula.
                  Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
                <h3>Get the best property in Town</h3>
                 <p class="bottom20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. 
                Quisque bibendum orci ac nibh facilisis, at malesuada orci congue.</p>
            </div>
        </div>
     </div>
    <div class="row">
        <div class="news-1-box clearfix">
        	<div class="col-md-6 col-sm-6 col-xs-12">
            	<img src="{{ asset($details->image_two)}}" alt="image"  class="img-responsive bottom15"/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 padding-left-25">
            	 <p>{!! $details->description2 !!}</p>
                 
            </div>
            <div class="col-md-12">
            	
            </div>
        </div>
      </div>
   
    <div class="row heading_space">
      <div class="news-2-tag">
      <div class="col-md-5 col-sm-5 col-xs-12 top15">
        <h4>Tags:</h4>
        <p class="p-font-15">house , bedroom, bed</p>
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12 text-right">
        <div class="social-icons">
          <h4>Share:</h4>
          <ul class="social_share">
              <li><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
              <li><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
              <li><a href="#." class="google"><i class="icon-google4"></i></a></li>
              <li><a href="#." class="linkden"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#." class="vimo"><i class="icon-vimeo3"></i></a></li>
           </ul>
        </div>
      </div>
      </div>     
   </div>
  
     <div class="row heading_space">
    	<div class="col-md-12 bottom10">
        	<h2 class="text-uppercase">Comments</h2>
          <div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="8"></div>
        </div>
     </div>



     <!-- <div class="row bottom10">
    	<div class="col-md-2 col-sm-2 col-xs-12">
        	<img src="{{ asset('public/frontend/images/news-comnts-1.jpg')}}" alt="image"/>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-12">
        	<div class="news-comnts-text">
            	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
            </div>	
        </div>
     </div>
     <hr>


     <div class="row padding-b-10 bottom10">
    	<div class="col-md-3 col-sm-3 col-xs-12 bottom20 text-right">
        	<img src="{{ asset('public/frontend/images/news-comnts-1.jpg')}}" alt="image"/>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12 bottom20">
        	<div class="news-comnts-text margin-0">
            	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales</p>
            </div>	
        </div>
     </div>
     <hr>

     <div class="row bottom10">
    	<div class="col-md-2 col-sm-2 col-xs-12 bottom20">
        	<img src="{{ asset('public/frontend/images/news-comnts-1.jpg')}}" alt="image"/>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-12 bottom20">
        	<div class="news-comnts-text">
            	<h4>Alison Johnson <span>Feb 22, 2017</span></h4>
                <a href="#">Reply <i class="icon-arrow-right2"></i></a>
                <p class="p-font-15">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
            </div> 	
        </div>
     </div> -->




    <!-- <hr>
    <div class="row">
    	<div class="col-md-12 margin40">
        	<h2 class="text-uppercase bottom20">LEAVE A COMMENT</h2>
        </div>
     </div>

        <form class="callus padding_bottom" action="{{ url('Store/Comment') }}" method="post">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" required="">
                <input type="hidden" name="blog_id" value="{{ $details->id }}">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone Number" name="phone"
                required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Message" name="comment"></textarea>
              </div>
            </div>
            <div class="col-sm-12 row">
              <div class="row">
                <div class="col-sm-3">
                  <input type="submit" class="btn-blue uppercase border_radius" value="submit now">
                </div>
              </div>
            </div>
          </div>
        </form> -->


   </div>

  <aside class="col-md-4 col-xs-12">
    <form class="form-search" method="get" id="news-search" action="/">
                <div class="input-append">
                    <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                    <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                </div>
            </form>
    <h3>Categories</h3>
    <ul class="pro-list padding-t-20">
            	<li>
                	Air Conditioning
                </li>
                <li>
                	Barbeque
                </li>
                <li>
                	Dryer
                </li>
                <li>
                	Laundry
                </li>
                <li>
                	Refrigerator
                </li>
                <li>
                	Swimming Pool
                </li>
            </ul>

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

    <div class="row padding-t-55">
      <div class="col-md-12 padding-b-20">
        <h3>Tages</h3>
      </div>
      <div class="col-md-12">
      	<div class="news-tag">
        	<a href="#">Planning</a>
            <a href="#">Apartments</a>
            <a href="#">Reality Home</a>
        </div>
        <div class="news-tag">
        	<a href="#">Luxury</a>
            <a href="#">Finance</a>
            <a href="#">Agents</a>
            <a href="#">Ideas</a>
        </div>
        <div class="news-tag">
        	<a href="#">Themeforest</a>
            <a href="#">Family Homes</a>
        </div>
      </div>
    </div>


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
<!-- News Details End -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="LwlAvLOo"></script> 
@endsection