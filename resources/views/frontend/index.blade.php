@extends('layouts.app')
@section('content')
@include('layouts.slider')

@php
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

<!--Advance Search-->
<section class="property-query-area bg_light">
  <div class="container">
    <div class="row">

      <form class="callus" action="{{ route('Property/Search') }}" method="post">
        @csrf
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="city">
                <option class="active">Location</option>
                @foreach($city as $row)
                  <option value="{{$row->id}}">{{$row->city}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="property_type">
                <option class="active">Property Type</option>
                @foreach($type as $row)
                  <option value="{{$row->id}}">{{$row->property_type}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-query form-group">
            <div class="intro">
              <select name="property_status">
                <option class="active">Property Status</option>
                @foreach($status as $row)
                  <option value="{{$row->id}}">{{$row->property_status}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="row search-2">
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bedrooms">
                    <option class="active">Min Beds</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select name="bathrooms">
                    <option class="active">Min Baths</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-4 text-right form-group">
              <button type="submit" class="btn-blue border_radius top15">Search</button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</section>

<!--Advance Search-->

@php
  $city = DB::table('city')->get();
  $type = DB::table('categories')->get();
  $status = DB::table('propertystatus')->get();
  $feature = DB::table('properties')
            ->join('propertystatus','propertystatus.id','properties.property_status')
            ->join('city','city.id','properties.city')
            ->join('categories','categories.id','properties.property_type')
            ->select('properties.*','propertystatus.property_status','city.city','categories.property_type')
            ->where('properties.id',5)
            ->first();
@endphp

<!--Featured Property-->
<section id="feature_property" class="padding">
  <div class="container feature3">
  
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h2 class="uppercase">Featured Property</h2>
        <h4 class="bottom30">{{$feature->address}}, {{$feature->location}}, {{$feature->city}}</h4>
        <p class="bottom30">{!! $feature->description !!}</p>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="feature_list">
              <li>Quiet Neighbourhood</li>
              <li>Quiet Area</li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-6">
            <ul class="feature_list">
              <li>Beautiful Scenery</li>
              <li>Charmly Entertainment</li>
            </ul>
          </div>
        </div>
        <div class="property_meta">
          <span><i class="icon-select-an-objecto-tool"></i>{{$feature->area}} sq ft</span> <span><i class="icon-bed"></i>{{$feature->bedrooms}} Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bathrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>{{$feature->garage}} Garage</span> 
        </div>
        <a href="{{ url('Property/Details/'.$feature->id) }}" class="uppercase btn-blue border_radius space30">view all detail</a>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="feature_main">
          <img src="{{ asset($feature->image_one)}}" alt="featured" class="img-responsive">
          <div class="bottom clearfix">
            <span class="pull-left">For {{$feature->property_status}}</span>
            <h4 class="pull-right">{{$feature->price}} TK Per Month - <small>Family {{$feature->property_type}}</small></h4>
          </div>
        </div>
      </div>
    </div>
 

  </div>
</section>
<!--Featured Property Ends-->



<!--Best Deals-->
<section id="deals" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
      @foreach($property as $row)
        <div class="item feature_item">
          <div class="image"><a href="{{ url('Property/Details/'.$row->id) }}"> <img src="{{ asset($row->image_one)}}" alt="Featured Property"></a> 
            <span class="price default_clr">For {{ $row->property_status }}</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="{{ url('Property/Details/'.$row->id) }}">{{ $row->title }}</a></h3>
              <p>{!!  substr(strip_tags($row->description), 0, 90) !!}..…</p>
              @if($row->property_status == 'Rent')
               <h4 class="top15">{{ $row->price }} TK Per Month - <small>{{ $row->property_type }}</small></h4>
              @elseif($row->property_status == 'Sale')
               <h4 class="top15">{{ $row->price }} TK - <small>{{ $row->property_type }}</small></h4>
              @endif
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">{{ $row->area }} sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>Bedrooms</td>
                  <td class="text-right">{{ $row->bedrooms }}</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>Bathrooms</td>
                  <td class="text-right">{{ $row->bathrooms }}</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">{{ $row->garage }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </div>
</section>
<!--Best Deal Ends-->

@php
  $city = DB::table('city')->get();
  $type = DB::table('categories')->get();
  $status = DB::table('propertystatus')->get();
  $latestproperty = DB::table('properties')
            ->join('propertystatus','propertystatus.id','properties.property_status')
            ->join('city','city.id','properties.city')
            ->join('categories','categories.id','properties.property_type')
            ->select('properties.*','propertystatus.property_status','city.city','categories.property_type')
            ->orderBy('properties.id', 'DESC')
            ->get();
@endphp

<!-- Latest Property -->
<section id="property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-10">
        <h2 class="uppercase">latest Properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable 
          prices. 
        </p>
      </div>
    </div>
    <div class="row">
      <div id="two-col-slider" class="owl-carousel">
      @foreach($latestproperty as $row)
        <div class="item">
          <div class="property_item heading_space">
            <div class="image"> <a href="{{ url('Property/Details/'.$row->id) }}"><img src="{{ asset($row->image_two)}}" alt="latest property" class="img-responsive"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For {{ $row->property_status }}</span>
              @if($row->property_status == 'Rent')
               <h4 class="pull-right">{{ $row->price }} TK Per Month - <small>{{ $row->property_type }}</small></h4>
              @elseif($row->property_status == 'Sale')
               <h4 class="pull-right">{{ $row->price }} TK - <small>{{ $row->property_type }}</small></h4>
              @endif
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="{{ url('Property/Details/'.$row->id) }}">{{ $row->title }}</a></h3>
                <p>{!!  substr(strip_tags($row->description), 0, 200) !!}...</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">{{ $row->address }}, {{ $row->location }}, {{ $row->city }}</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>{{ $row->area }} sq ft</span> <span><i class="icon-bed"></i>{{ $row->bedrooms }} Bedrooms</span> <span><i class="icon-safety-shower"></i>{{ $row->bathrooms }} Bathrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>{{ $row->garage }} Garage</span> </div>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </div>
</section>
<!-- Latest Property Ends -->

@php
 $banner = DB::table('settings')->first();
@endphp

<!--Testinomials-->
<section id="testinomial" class="padding" style="background-image: url({{asset($banner->listing_banner)}} )">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Happy Customers</h2>
        <p class="heading_space">Our happiest customers give their feedback by using our real estate property magnagement website.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="testinomial-slider" class="owl-carousel">
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="{{ asset('public/frontend/images/author.png')}}" alt="happy client" class="bottom15">
              <h4 class="uppercase">Jahid Hasan</h4>
              <span class="smmery bottom15">( Dhaka  )</span>
              <img src="{{ asset('public/frontend/images/stars.png')}}" alt="rating" class="bottom30">
              <p>Best website I have ever seen.Users can easily find their desirable property for rent or buy.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="{{ asset('public/frontend/images/author.png')}}" alt="happy client" class="bottom15">
              <h4 class="uppercase">Jahid Hasan</h4>
              <span class="smmery bottom15">( Dhaka  )</span>
              <img src="{{ asset('public/frontend/images/stars.png')}}" alt="rating" class="bottom30">
              <p>Best website I have ever seen.Users can easily find their desirable property for rent or buy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 text-center">
      <a href="javascript:void(0)" class="cd-see-all btn-white border_radius margin40"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
    </div>
  </div>
</section>



<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
        <div class="cd-author">
          <img src="{{ asset('public/frontend/images/author.png')}}" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
    </ul>
  </div>
  <!-- cd-testimonials-all-wrapper -->
  <a href="javascript:void(0)" class="close-btn">Close</a>
</div>
<!--Testinomials Ends-->



@php
  $agent = DB::table('users')->get();
  $blog = DB::table('blog')->get();
@endphp

<!--Agents-->
<section id="layouts" class="padding_top">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 margin_bottom">
        <h2 class="uppercase">Latest news</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      @foreach($blog as $row)
        <div class="media news_media">
          <div class="media-left">
            <a href="{{ url('blog-details/'.$row->id) }}">
            <img class="media-object border_radius" src="{{ asset($row->image_one)}}" style="height: 152px;width: 140px" alt="Latest news">
            </a>
          </div>
          <div class="media-body">
            <h3><a href="{{ url('blog-details/'.$row->id) }}">{{ $row->title }}</a></h3>
            <span class="bottom15"><i class="icon-clock4"></i>{{ $row->date }}</span>
            <p class="bottom15">{!!  substr(strip_tags($row->description1), 0, 140) !!}..…
            </p>
            <a href="{{ url('blog-details/'.$row->id) }}" class="btn-more">
            <i><img src="{{ asset('public/frontend/images/arrowl.png')}}" alt="arrow"></i>
            <span>Contact Me</span>
            <i><img src="{{ asset('public/frontend/images/arrowr.png')}}" alt="arrow"></i>
            </a>
          </div>
        </div>
      @endforeach
        

      </div>
      <div class="col-sm-4 margin_bottom">
        <h2 class="uppercase"> Our Agents</h2>
        <p class="heading_space">We have Properties in these Areas.</p>
        <div id="agent-slider" class="owl-carousel">

        @foreach($agent as $row)
          <div class="item">
            <div class="image bottom15">
              <img src="{{ asset($row->image)}}" alt="Our Agents" class="border_radius">
            </div>
            <div class="item-bottom">
              <div class="row">
                <div class="col-sm-5 bottom15">
                  <h3>{{ $row->name }}</h3>
                  <small>Agent</small>
                </div>
                <div class="col-sm-7 bottom15">
                  <a href=""><i class="icon-icons142"></i> {{ $row->email }}</a>
                </div>
              </div>
              <p class="bottom15">{{ $row->about }}</p>
              <a class="uppercase btn-blue border_radius" href="{{ url('Property/Agent/Profile/'.$row->id) }}">Contact me</a>
            </div>
          </div>
        @endforeach 

        </div>
      </div>
    </div>
    <div style="border-bottom:1px solid #d3d8dd;"></div>
  </div>
</section>
<!--Agents Ends-->


<!--Partners-->
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="partner-slider" class="owl-carousel">
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo1.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo2.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo3.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo4.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo5.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo1.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo2.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo3.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo4.png')}}" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="{{ asset('public/frontend/images/logo5.png')}}" alt="Featured Partner">
        </div>
      </div>
    </div>
  </div>
</section>
<!--Partner Ends-->
@endsection