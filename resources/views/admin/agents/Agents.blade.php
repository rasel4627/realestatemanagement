@extends('admin.admin_layouts')
@section('admin_content')
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Agents Table</h5>
    </div>
    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Agents List</h6>
      <br>
      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-15p">Agent ID</th>
              <th class="wd-15p">Agent Name</th>
              <th class="wd-15p">Phone</th>
              <th class="wd-15p">Email</th>
              <th class="wd-15p">Image</th>
              <th class="wd-15p">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($agents as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->phone}}</td>
              <td><img src="{{ asset($row->image)}}" height="70px" width="65px"></td>
              <td>
              	<!-- <a href="" class="btn btn-sm btn-info" title="edit"><i class="fa fa-edit"></i></a> -->
              	<a href="{{ url('delete/agent/'.$row->id) }}" class="btn btn-sm btn-danger" title="delete" id="delete"><i class="fa fa-trash"></i></a>
                <a href="{{ url('view/agent/'.$row->id) }}" class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>
              </td>
            </tr>  
          @endforeach    
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection