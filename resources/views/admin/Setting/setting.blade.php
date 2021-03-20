@extends('admin.admin_layouts')
@section('admin_content')

@php
	$setting = DB::table('settings')->first();
@endphp

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous" />
<div class="sl-mainpanel">
<nav class="breadcrumb sl-breadcrumb">
  <a class="breadcrumb-item" href="{{ url('admin/home') }}">Home</a>
  <span class="breadcrumb-item active">Settings</span>
</nav>
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Update Setting</h6><br>
  <form action="{{ url('Update/Setting/'.$setting->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-layout">
      <div class="row mg-b-25">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Company Name: </label>
            <input class="form-control" type="text" name="company_name" value="{{$setting->company_name}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Phone: </label>
            <input class="form-control" type="text" name="phone" value="{{$setting->phone}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Address: </label>
            <input class="form-control" type="text" name="address" value="{{$setting->address}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Location: </label>
            <input class="form-control" type="text" name="location" value="{{$setting->location}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Email: </label>
            <input class="form-control" type="email" name="email" value="{{$setting->email}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Skype: </label>
            <input class="form-control" type="text" name="skype_link" value="{{$setting->skype_link}}">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label">Facebook: </label>
            <input class="form-control" type="text" name="fb_link" value="{{$setting->fb_link}}">
          </div>
        </div>

        <div class="col-lg-4">
          <lebel>Comapny Logo</lebel>
          <label class="custom-file">
            <input type="file" id="file" class="custom-file-input" name="company_logo" onchange="readURL(this);"  accept="image">
            <input type="hidden" name="old_logo" value="{{ $setting->company_logo }}">
            <span class="custom-file-control"></span>
            <img src="" id="previewLogo" >
          </label>
        </div>
        <div class="col-lg-4">
            <p>Current Logo</p>
            <img src="{{ asset($setting->company_logo) }}" style="height: 50px;width: 146px">
        </div>
      
      </div>
      <br><br>
      </div>
      <div class="form-layout-footer">
        <button class="btn btn-info mg-r-5" type="submit">Update</button>
      </div>
    </form>
    </div>
</div>

<div class="sl-mainpanel">
<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">Update Banner Photo</h6>
  <form action="{{ url('update/banner/photo/'.$setting->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-sm-6">
          <lebel>Listing Banner</lebel><br>
          <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="listing_banner" onchange="readURL(this);" accept="image">
          <input type="hidden" name="old_one" value="">
          <span class="custom-file-control"></span><br>
          <img src="" id="one" ><br><br>
          </label>
        </div>
        <div class="col-lg-6 col-sm-6">
          <img src="{{ asset($setting->listing_banner) }}" style="height: 100px;width: 200px">
        </div>
    </div><br>

    <div class="row">
        <div class="col-lg-6 col-sm-6">
          <lebel>Property Details Banner</lebel><br>
          <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="property_details_banner" onchange="readURL1(this);" accept="image">
          <input type="hidden" name="old_two" value="">
          <span class="custom-file-control"></span><br>
          <img src="" id="two" ><br><br>
          </label>
        </div>
        <div class="col-lg-6 col-sm-6">
          <img src="{{ asset($setting->property_details_banner) }}" style="height: 100px;width: 200px">
        </div>
    </div><br>

    <div class="row">
        <div class="col-lg-6 col-sm-6">
          <lebel>Agent Banner</lebel><br>
          <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="agent_banner" onchange="readURL2(this);"  accept="image">
          <input type="hidden" name="old_three" value="">
          <span class="custom-file-control"></span><br>
          <img src="" id="three" ><br><br>
          </label>
        </div>
        <div class="col-lg-6 col-sm-6">
          <img src="{{ asset($setting->agent_banner) }}" style="height: 100px;width: 200px">
        </div>
    </div>
    <button type="submit" class="btn btn-sm btn btn-warning">Update Banner Photo</button>
  </form>
</div>
</div>

<div class="sl-pagebody">
</div>    
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#previewLogo')
                .attr('src', e.target.result)
                .width(146)
                .height(50);
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
              $('#one')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(100);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
  <script type="text/javascript">
  function readURL1(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#two')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(100);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>
  <script type="text/javascript">
  function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#three')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(100);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>

@endsection