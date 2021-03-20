@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous" />
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Starlight</a>
        <span class="breadcrumb-item active">Property Section</span>
      </nav>
      <div class="sl-pagebody">
      <div class="card pd-20 pd-sm-40">
          <p class="mg-b-20 mg-sm-b-30">Property Details</p>
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Property ID: </label><br>
                  <strong>{{ $property->id }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Property Title: </label><br>
                  <strong>{{ $property->title }}</strong>
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Agent:</label>
                  <br>
                   <strong>{{ $property->name }}</strong>
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Address: </label>
                  <br>
                   <strong>{{ $property->address }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Location: </label>
                  <br>
                   <strong>{{ $property->location }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">City: </label>
                  <br>
                   <strong>{{ $property->city }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Property Type: </label>
                  <br>
                   <strong>{{ $property->property_type }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Property Status: </label>
                  <br>
                   <strong>{{ $property->property_status }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
              <div class="form-group">
                  <label class="form-control-label">Area: <span class="tx-danger">*</span></label>
                  <br>
                   <strong>{{ $property->area }} sq ft</strong>
              </div>
              </div><!-- col-4 -->
               <div class="col-lg-12">
              <div class="form-group"  style="border:1px solid gray;padding: 10px">
                  <label class="form-control-label">Details: </label>
                  <br>
                   <p>{!! $property->description !!}</p>
              </div>
              </div><!-- col-4 -->
      
              <div class="col-lg-3">
                <lebel>Image One</lebel>
                <label class="custom-file">
                  <img src="{{URL::to($property->image_one)}}" style="height: 110px;width: 200px" >
                </label>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <lebel>Image Two</lebel>
                <label class="custom-file">
                  <img src="{{URL::to($property->image_two)}}" style="height: 110px;width: 200px" >
                </label>
              </div><!-- col-4 -->
              <div class="col-lg-3">
                <lebel>Image Three</lebel>
                <label class="custom-file">
                  <img src="{{URL::to($property->image_three)}}" style="height: 110px;width: 200px" >
                </label>
              </div><!-- col-4 -->
            </div><!-- row -->
            <br><br>


            
      
        </div><!-- card -->
      </div><!-- sl-pagebody -->     
    </div><!-- sl-mainpanel -->

@endsection
