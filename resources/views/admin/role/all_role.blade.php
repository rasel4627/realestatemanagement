@extends('admin.admin_layouts')
@section('admin_content')
<div class="sl-mainpanel">
<div class="sl-pagebody">
<div class="sl-page-title">
  <h5>Admin Table</h5>
</div>
<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title">Admin List
  	<a href="{{ route('create-admin') }}" class="btn btn-sm btn-warning" style="float: right;" >Add New</a>
  </h6>
  <br>
  <div class="table-wrapper">
    <table id="datatable1" class="table display responsive nowrap">
      <thead>
        <tr>
          <th class="wd-15p">Name</th>
          <th class="wd-15p">Phone</th>
          <th class="wd-15p">Access</th>
          <th class="wd-20p">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($admin as $row)
        <tr>
          <td>{{ $row->name }}</td>
          <td>{{ $row->phone }}</td>
          <td>
              @if($row->city == 1)
          	     <span class="badge badge-danger">city</span>
              @else
              @endif

              @if($row->property_type == 1)
                 <span class="badge badge-success">Property Type</span>
              @else
              @endif 

              @if($row->status == 1)
                 <span class="badge badge-info">Property Status</span>
              @else
              @endif 

              @if($row->agent == 1)
                 <span class="badge badge-warning">Agents</span>
              @else
              @endif 

              @if($row->blog == 1)
                 <span class="badge badge-primary">Blog</span>
              @else
              @endif

              @if($row->other == 1)
                 <span class="badge badge-danger">Other</span>
              @else
              @endif

              @if($row->role == 1)
                 <span class="badge badge-success">Role</span>
              @else
              @endif

              @if($row->setting == 1)
                 <span class="badge badge-success">Setting</span>
              @else
              @endif
          </td>
          <td>
          	<a href="{{ url('edit/admin/'.$row->id) }}" class="btn btn-sm btn-info">edit</a>
          	<a href="{{ url('delete/admin/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection