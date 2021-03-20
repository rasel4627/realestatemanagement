@extends('admin.admin_layouts')
@section('admin_content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous" />
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{ url('admin/home') }}">Home</a>
    <span class="breadcrumb-item active">Agent Section</span>
  </nav>
  <div class="sl-pagebody">
  <div class="card pd-20 pd-sm-40">
      <p class="mg-b-20 mg-sm-b-30">Agent Details</p>
      <div class="form-layout">
        <div class="row mg-b-25">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Name: </label><br>
              <strong>{{ $view->name }}</strong>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Phone: </label><br>
              <strong>{{ $view->phone }}</strong>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label">Telephone: </label>
              <br>
               <strong>{{ $view->telephone }}</strong>
            </div>
          </div>

           <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Email: </label>
              <br>
               <strong>{{ $view->email }}</strong>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Facebook: </label>
              <br>
               <strong>{{ $view->fb }}</strong>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Skype: </label>
              <br>
               <strong>{{ $view->skype }}</strong>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Twitter: </label>
              <br>
               <strong>{{ $view->twitter }}</strong>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div class="form-group"  style="border:1px solid gray;padding: 10px">
                <label class="form-control-label">Description: </label>
                <br>
                 <strong>{!! $view->about !!}</strong>
            </div>
          </div>

          <div class="col-lg-3">
            <lebel>Image :</lebel><br>
            <label class="custom-file">
              <img src="{{ asset($view->image)}}" style="height: 190px;width: 180px" >
            </label>
          </div>
          
        </div>
        <br><br>
    </div>
  </div>    
</div>
@endsection
