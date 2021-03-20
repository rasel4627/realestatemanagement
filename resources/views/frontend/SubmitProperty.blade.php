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
    <h1 class="text-uppercase">Submit Property</h1>
    <ol class="breadcrumb text-center">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li class="active">Submit property</li>
    </ol>
  </div>
</div>
</div>
</section>
<!-- Page Banner End -->

<!-- My Properties  -->
<section id="property" class="padding listing1">
<div class="container">
<div class="row">
  <div class="col-md-12 text-center">
    <ul class="f-p-links margin_bottom">
      <li><a href="{{ url('/home') }}"><i class="icon-icons230"></i>Profile</a></li>
      <li><a href="{{ url('/My-Property/'.Auth::id()) }}"><i class="icon-icons215"></i> My Properties</a></li>
      <li><a href="{{ url('/Submit-Property') }}" class="active"><i class="icon-icons215"></i> Submit Property</a></li>
      <!-- <li><a href="{{ url('/Property-Favorite') }}"><i class="icon-icons43"></i> Favorite Properties</a></li> -->
      <li><a href="{{ url('logout') }}"><i class="icon-lock-open3"></i>Logout</a></li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-sm-1 col-md-2"></div>
  <div class="col-sm-10 col-md-8">
  <h2 class="text-uppercase bottom40">Add Your Property</h2>

  <form action="{{ url('Store/Property') }}" class="callus clearfix border_radius submit_property" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-6">
        <div class="single-query form-group bottom20">
        <label>Title<span style="color: red">*</span></label>
          <input type="text" class="keyword-input" placeholder="Enter your property title" name="title" required="">
          <input type="hidden" value="{{ Auth::id() }}" name="agent_id">
        </div>
      </div>

      <div class="col-sm-6">
        <div class="single-query form-group bottom20">
          <label>Address<span style="color: red">*</span></label>
        <input type="text" class="keyword-input" placeholder="Enter Proprty Address" name="address" required="">
        </div>
      </div>

      <div class="col-sm-4">
        <div class="single-query form-group bottom20">
          <label>Location<span style="color: red">*</span></label>
        <input type="text" class="keyword-input" placeholder="Enter Proprty Location" name="location" required="">
        </div>
      </div>

      <div class="col-sm-4">
        <div class="single-query form-group bottom20">
          <label>Price<span style="color: red">*</span></label>
        <input type="text" class="keyword-input" placeholder="Enter Proprty Price" name="price" required="">
        </div>
      </div>

      <div class="col-sm-4">
        <div class="single-query form-group bottom20">
        <label>Area</label>
      	  <input type="text" class="keyword-input" placeholder="Sq Ft" name="area" required="">
        </div>
      </div>

      <div class="col-sm-4">
          <div class="single-query form-group bottom20">
            <label>City<span style="color: red">*</span></label>
            <div class="intro">
              <select name="city" required="">
                @foreach($city as $row)
                  <option value="{{$row->id}}">{{$row->city}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
            <label>Property Type<span style="color: red">*</span> </label>
            <div class="intro">
              <select name="property_type" required=""> 
                @foreach($type as $row)
                  <option value="{{$row->id}}">{{$row->property_type}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
            <label>Property Status<span style="color: red">*</span> </label>
            <div class="intro">
              <select name="property_status" required="">
                @foreach($status as $row)
                  <option value="{{$row->id}}">{{$row->property_status}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
          <label>Bedrooms<span style="color: red">*</span></label>
            <input class="keyword-input" type="number" min="0" max="4" step="1" value="1" name="bedrooms"required="">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
          <label>Bathrooms<span style="color: red">*</span></label>
            <input class="keyword-input" type="number" min="0" max="4" step="1" value="1" required="" name="bathrooms">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
          <label>Garages</label>
            <input class="keyword-input" type="number" min="0" max="4" step="1" value="1" name="garage">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
          <label>Built Year</label>
            <input class="keyword-input" placeholder="Sq Ft" type="number" min="1990" max="2021" step="1" value="2021" name="built_year">
          </div>
        </div>

        <div class="col-sm-4">
          <div class="single-query form-group bottom20">
            <label>Floor Type </label>
            <div class="intro">
              <select name="floor_type">
                <option>Tiles</option>
                <option>Carpet</option>
              </select>
            </div>
          </div>
        </div>

        <div class="col-sm-12">
          <h3 class="bottom15 margin40">Video Presentation</h3>
          <div class="single-query form-group bottom15">
            <label>Youtube URL</label>
              <input type="text" class="keyword-input" placeholder="https://youtube.com" name="video">
          </div>
        </div>

        <div class="row">


          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="belcony" value="1">
              <span>Balcony</span>
            </label>
          </div>

          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="dinning" value="1">
              <span>Dinning Room</span>
            </label>
          </div>

          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="drawing" value="1">
              <span>Drawing Room</span>
            </label>
          </div>

          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="ac" value="1">
              <span>Air Conditioning</span>
            </label>
          </div>


          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="swimming_pool" value="1">
              <span>Swimming Pool</span>
            </label>
          </div>

          <div class="col-lg-12">
            <label class="ckbox">
              <input type="checkbox" name="cable_tv" value="1">
              <span>Cable TV</span>
            </label>
          </div>
        </div>

        <div class="col-lg-12">
          <h3 class="bottom15 margin40">Property Description </h3>
          <textarea id="txtEditor" name="description">
            
          </textarea> 
        </div>

        <div class="col-sm-6">
          <div class="single-query form-group bottom20">
            <label>Image One<span style="color: red">*</span></label>
              <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image">
              <span class="custom-file-control"></span>
              <img src="" id="one" >
          </div>
        </div>

        <div class="col-sm-6">
          <div class="single-query form-group bottom20">
            <label>Image Two<span style="color: red">*</span></label>
              <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL(this);" required="" accept="image">
              <span class="custom-file-control"></span>
              <img src="" id="two" >
          </div>
        </div>

        <div class="col-sm-6">
          <div class="single-query form-group bottom20">
            <label>Image Three<span style="color: red">*</span></label>
              <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL(this);" required="" accept="image">
              <span class="custom-file-control"></span>
              <img src="" id="three" >
          </div>
        </div>

        <div class="col-sm-6">
          <div class="single-query form-group bottom20">
            <label>Image Four<span style="color: red">*</span></label>
              <input type="file" id="file" class="custom-file-input" name="image_four" onchange="readURL(this);" required="" accept="image">
              <span class="custom-file-control"></span>
              <img src="" id="four" >
          </div>
        </div>

        <div class="col-sm-6">
          <div class="single-query form-group bottom20">
            <label>Image Five<span style="color: red">*</span></label>
              <input type="file" id="file" class="custom-file-input" name="image_five" onchange="readURL(this);" required="" accept="image">
              <span class="custom-file-control"></span>
              <img src="" id="five" >
          </div>
        </div>

      <div class="col-md-12">
         <button type="submit" class="btn-blue border_radius margin40">Submit Property</button>
      </div>
    </div>
  </form>

  </div>
  <div class="col-sm-1 col-md-2"></div>
  <div class="col-sm-4">
  </div>
</div>
</div>
</section>
<!-- My Properties End -->

<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#four')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#five')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(180);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection