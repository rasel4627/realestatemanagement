@extends('admin.admin_layouts')
@section('admin_content')
  <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Property Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Property List</h6>
          <br>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Property ID</th>
                  <th class="wd-15p">Property Title</th>
                  <th class="wd-15p">Agent</th>
                  <th class="wd-15p">Address</th>
                  <th class="wd-15p">City</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($property as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->title}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->address}}</td>
                  <td>{{$row->city}}</td>
                  <td>
                      @if($row->status == 1)
                      <span class="badge badge-success">Active</span>
                      @else
                      <span class="badge badge-danger">Inactive</span>
                      @endif
                  </td>

                  <td>
                  	<a href="{{url('delete/property/'.$row->id)}}" class="btn btn-sm btn-danger" title="delete" id="delete"><i class="fa fa-trash"></i></a>
                    <a href="{{url('view/property/'.$row->id)}}" class="btn btn-sm btn-warning" title="view"><i class="fa fa-eye"></i></a>

                    @if($row->status == 1)
                      <a href="{{url('inactive/property/'.$row->id)}}" class="btn btn-sm btn-danger" title="Inactive"><i class="fa fa-thumbs-down"></i></a>
                    @else
                      <a href="{{url('active/property/'.$row->id)}}" class="btn btn-sm btn-success" title="Active"><i class="fa fa-thumbs-up"></i></a>
                    @endif
          
                  </td>
                </tr>  
              @endforeach    
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
</div>
@endsection