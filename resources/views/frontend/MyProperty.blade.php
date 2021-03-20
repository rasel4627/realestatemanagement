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
        <h1 class="text-uppercase">My properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="">Pages</a></li>
          <li class="active">My properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="{{ url('/home') }}"><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="{{ url('/My-Property/'.Auth::id()) }}" class="active"><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="{{ url('/Submit-Property') }}"><i class="icon-icons215"></i> Submit Property</a></li>
          <!-- <li><a href="{{ url('/Property-Favorite') }}"><i class="icon-icons43"></i> Favorite Properties</a></li> -->
          <li><a href="{{ url('logout') }}"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="row bottom30">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase">My Properties</h2>
      </div>
    </div>
  </div>
  <div class="container  list-t-border">
  @foreach($MyProperty as $row)
    <div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="{{ asset($row->image_one)}}" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4><a href="{{ url('Agent/Property/Details/'.$row->id) }}">{{$row->title}}</a></h4>
            <p>{{$row->address}}, {{$row->location}}, {{$row->city}}</p>
            <span><b>Status:</b>  For {{$row->property_status}}</span><br>
            <div class="button-my-pro-list">
              <a href="">{{$row->price}} TK</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="{{ url('Edit/Property/'.$row->id) }}"><i class="icon-pen2"></i></a>
            <a href="{{ url('Delete/Property/'.$row->id) }}"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  </div>
  <div class="container">
    <div class="row padding_top">
      <div class="col-md-12">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- My - Property end -->
@endsection