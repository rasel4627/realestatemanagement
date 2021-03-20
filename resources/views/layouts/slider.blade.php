@php
  $property = DB::table('properties')->join('propertystatus','propertystatus.id','properties.property_status')->join('city','city.id','properties.city')->select('properties.*','propertystatus.property_status','city.city')->get();
@endphp

<!--Slider-->
<div class="rev_slider_wrapper">
  <div id="rev_slider_third" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
  @foreach($property as $row)
      <li data-transition="fade">
        <img src="{{ asset($row->image_one)}}" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
         data-start="1300"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on" 
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
      data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <div class="price">For {{ $row->property_status }}</div>
          <h2>{{ $row->title }}</h2>
          <p class="bottom30">{!!  substr(strip_tags($row->description), 0, 80) !!}...</p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>{{ $row->area }} sq ft</span> 
            <span><i class="icon-bed"></i>{{ $row->bedrooms }} Bedrooms</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>{{ $row->garage }} Garage</span>
            <span><i class="icon-safety-shower"></i>{{ $row->bathrooms }} bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>{{ $row->address }}, {{ $row->location }}, {{ $row->city }}</span></div>
            <div class="col-sm-6"><span>{{ $row->price }} Tk Per Month -<small> Apartment</small></span></div>
          </div>
        </div>
      </li>
  @endforeach
     
    </ul>
  </div>
  <!-- END REVOLUTION SLIDER -->
</div>