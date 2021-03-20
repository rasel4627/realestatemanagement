@extends('admin.admin_layouts')
@section('admin_content')
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Property Status Update</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Property Status Update
          </h6>
          <br>
          <div class="table-wrapper">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ url('update/property/status/'.$edit->id) }}">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                	{{-- <input type="hidden" name="id" value="{{$id }}"> --}}
                  <label for="exampleInputEmail1">Property Status</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit->property_status }}" name="property_status">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
@endsection