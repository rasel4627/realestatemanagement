@extends('layouts.app')
@section('content')
<!-- Page Banner Start-->
@php
 $banner = DB::table('settings')->first();
@endphp
<section class="page-banner padding"  style="background-image: url({{asset($banner->property_details_banner)}} )">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1 class="p-white text-uppercase">testimonials</h1>
            <p class="p-white">Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            <ol class="breadcrumb text-center">
               <li><a href="{{ url('/') }}">Home</a></li>
               <li><a href="#">Pages</a></li>
               <li class="active">Testimonials</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- Page Banner End --> 

<!-- testimonials Start -->
<section id="testinomila_page" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="text-uppercase heading_space">Customer feedback</h2>
         </div>
      </div>
      <div id="testinomial-masonry" class="cbp">
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. Innovativeness is 
                        the pledge of our stable development. We tap into the most successful international management data, forestalling market.
                     </p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.
                        Innovativeness is the pledge of our stable development. We tap into successful.
                     </p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. Innovativeness is the 
                        pledge of our stable development. We tap into the most successful international management data, forestalling market.
                     </p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.
                        Innovativeness is the pledge of our stable development. We tap into successful.
                     </p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="cbp-item">
            <div class="cbp-caption-defaultWrap">
               <div class="testinomial_box">
                  <div class="testinomial_desc blue_dark  text-center">
                     <p>We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling. We offer the most complete house renovating services in the country, from kitchen design to bathroom remodeling.</p>
                     <img src="{{ asset('public/frontend/images/quote.png')}}" alt="quote" class="quote">
                  </div>
                  <div class="testinomial_author">
                     <img src="{{ asset('public/frontend/images/testinomils.png')}}" alt="testinomial" width="59">
                     <h4 class="color">SAM NICHOLSON</h4>
                     <span class="post_img">( NorthMarq Capital  )</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- testimonials End --> 
@endsection