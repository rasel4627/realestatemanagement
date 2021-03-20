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
        <h1 class="text-uppercase">Agents</h1>
        <!-- <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->
        <ol class="breadcrumb text-center ">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('/Property-Agent') }}">Agent</a></li>
          <li class="active">Agents</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- Agent Start -->
<section id="agent-2" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
    @foreach($agent as $row)
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="{{ asset($row->image)}}" alt="Agents">
            <div class="img-info">
              <h3>{{ $row->name }}</h3>
              <span>Agent</span>
              <p class="top20 bottom30">{{ $row->about }}</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">{{ $row->phone }}</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="">{{ $row->email }}</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="{{ url('Property/Agent/Profile/'.$row->id) }}">
              <i><img alt="arrow" src="{{ asset('public/frontend/images/arrow-yellow.png')}}"></i><span>Full Profile</span><i><img alt="arrow" src="{{ asset('public/frontend/images/arrow-yellow.png')}}"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</section>
<!-- Agent End -->
@endsection