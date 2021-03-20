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
               <li><a href="#.">Properties</a></li>
               <li class="active">Blog</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- Page Banner End -->

<!-- Agent-Profile Start -->
<section id="news" class="news-section-details padding_bottom_half padding_top">
  <div class="container">
    <div class="row">
    @foreach($blog as $row)
      <div class="col-md-4 col-sm-6 col-xs-12 heading_space">
        <div class="sim-lar-p">
          <div class="image bottom20"><img src="{{ asset($row->image_one)}}" alt="image"></div>
          <div class="sim-lar-text">
            <h3 class="bottom10"><a href="{{ url('blog-details/'.$row->id) }}">{{ $row->title }}</a></h3>
            <p><span>By:</span> Admin <span>|</span> <span>Date:</span> {{ $row->date }}</p>
            <p class="bottom20">{!!  substr(strip_tags($row->description1), 0, 90) !!}..…</p>
            <a class="btn-more" href="{{ url('blog-details/'.$row->id) }}">
            <i><img alt="arrow" src="{{ asset('public/frontend/images/arrowl.png')}}"></i><span>More Details</span><i><img alt="arrow" src="{{ asset('public/frontend/images/arrowr.png')}}"></i>
            </a>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
@endsection