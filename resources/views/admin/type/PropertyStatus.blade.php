@extends('admin.admin_layouts')
@section('admin_content')
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Property Status</h5>
        </div>
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Property Status
          	<a href="#" class="btn btn-sm btn-warning" style="float: right;" data-toggle="modal" data-target="#modaldemo3">Add New</a>
          </h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Property Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($status as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->property_status }}</td>
                  <td>
                  	<a href="{{ url('edit/property/status/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
                  	<a href="{{ url('delete/property/status/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Property Status Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form method="post" action="{{ url('store/property/status') }}">
              @csrf
              <div class="modal-body pd-20">
                <div class="form-group">
                  <label for="exampleInputEmail1">Property Status</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" name="property_status">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
            </form>
            </div>
          </div>
        </div>
@endsection