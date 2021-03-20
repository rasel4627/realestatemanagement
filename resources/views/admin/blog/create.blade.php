@extends('admin.admin_layouts')
@section('admin_content')
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Starlight</a>
    <span class="breadcrumb-item active">Blog Section</span>
  </nav>
  <div class="sl-pagebody">
  	   <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">New Post Add <a href="" class="btn btn-success btn-sm pull-right">All Post</a></h6>
      <p class="mg-b-20 mg-sm-b-30">New Post add form</p>
      <form action="{{ url('store/post') }}" method="post" enctype="multipart/form-data">
      	@csrf
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Post Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title"  >
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="date" name="date"  >
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Description One<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote" name="description1">
                   	
                   </textarea>
                </div>	
              </div>

              <div class="col-lg-12">
              	<div class="form-group">
                  <label class="form-control-label">Description Two<span class="tx-danger">*</span></label>
                   <textarea class="form-control" id="summernote1" name="description2">
                   	
                   </textarea>
                </div>	
              </div>
             
              <div class="col-lg-4">
              	<lebel>Blog Image One<span class="tx-danger">*</span></lebel>
              	<label class="custom-file">
      				  <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);" required="" accept="image">
      				  <span class="custom-file-control"></span>
      				  <img src="#" id="one" >
      				</label>
              </div>

              <div class="col-lg-4">
                <lebel>Blog Image Two<span class="tx-danger">*</span></lebel>
                <label class="custom-file">
                <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL(this);" required="" accept="image">
                <span class="custom-file-control"></span>
                <img src="#" id="two" >
              </label>
              </div>
             
            </div><!-- row -->
            <br><hr>

            <br><br><hr>
            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
      </form>
    </div><!-- card -->
   
  </div><!-- sl-pagebody --> 
</div><!-- sl-mainpanel -->





<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#one')
              .attr('src', e.target.result)
              .width(180)
              .height(140);
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
              .width(180)
              .height(140);
      };
      reader.readAsDataURL(input.files[0]);
  }
}
</script>

@endsection
