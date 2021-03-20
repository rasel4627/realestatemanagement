<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Admin Panel</title>
    <link href="{{ asset('public/backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/starlight.css') }}">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">
    <link href="{{ asset('public/backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/lib/summernote/summernote-bs4.css') }}" rel="stylesheet">
  </head>
  <body>
     @guest

     @else
        
    <div class="sl-logo"><a href="{{ url('admin/home') }}"><i class="icon ion-android-star-outline"></i> Admin Panel</a></div>
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{ url('admin/home') }}" class="sl-menu-link {{ request()->is('admin/home*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div>
        </a>
      @if(Auth::user()->city == 1)
        <a href="#" class="sl-menu-link {{ request()->is('city*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">City</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('city') }}" class="nav-link {{ request()->is('property/type*') ? 'active' : '' }}">City</a></li>
        </ul>
      @else
      @endif

      @if(Auth::user()->property_type == 1)
        <a href="#" class="sl-menu-link {{ request()->is('property/type*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Property Type</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('property/type') }}" class="nav-link {{ request()->is('property/type*') ? 'active' : '' }}">Type</a></li>
        </ul>
      @else
      @endif

      @if(Auth::user()->status == 1)
        <a href="#" class="sl-menu-link {{ request()->is('property/status*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Property Status</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('property/status') }}" class="nav-link {{ request()->is('property/status*') ? 'active' : '' }}">Status</a></li>
        </ul>
      @else
      @endif

      <a href="#" class="sl-menu-link {{ request()->is('all/property*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-24"></i>
            <span class="menu-item-label">Property</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('all/property') }}" class="nav-link {{ request()->is('all/property') ? 'active' : '' }}">Property</a></li>
        </ul>

      @if(Auth::user()->agent == 1)
        <a href="#" class="sl-menu-link {{ request()->is('agent*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Agents</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('agent') }}" class="nav-link {{ request()->is('agent') ? 'active' : '' }}">Agents</a></li>
        </ul>
      @else
      @endif

      @if(Auth::user()->blog == 1)
        <a href="#" class="sl-menu-link {{ request()->is('blogpost*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Blogs</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('blogpost/add') }}" class="nav-link">Add Post</a></li>
          <li class="nav-item"><a href="{{ url('blogpost/all') }}" class="nav-link">All Post</a></li>
        </ul>
      @else
      @endif

      <a href="#" class="sl-menu-link {{ request()->is('comment*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Comment</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <!-- <li class="nav-item"><a href="{{ url('comment/add') }}" class="nav-link">Add Post</a></li> -->
          <li class="nav-item"><a href="{{ url('comment/all') }}" class="nav-link">All Comment</a></li>
        </ul>

      @if(Auth::user()->other == 1)
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Others</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="{{ url('admin.newslater') }}" class="nav-link">Newslater</a></li>
        </ul>
      @else
      @endif

      @if(Auth::user()->role == 1)
        <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
              <span class="menu-item-label">Sub Admin</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div>
          </a>
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('create-admin') }}" class="nav-link">Create User</a></li>
            <li class="nav-item"><a href="{{ route('create-user-role') }}" class="nav-link">All User</a></li>
          </ul>
      @else
      @endif

      @if(Auth::user()->setting == 1)
        <a href="{{ url('settings') }}" class="sl-menu-link {{ request()->is('settings*') ? 'active' : '' }}">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Settings</span>
          </div>
        </a>
      @else
      @endif

      </div>
      <br>
    </div>
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div>
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}<span class="hidden-md-down"></span></span>
              <img src="{{ asset('public/backend/img/images.jfif') }}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="{{ route('admin.password.change') }}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div>
          </div>
        </nav>
       <!--  <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <span class="square-8 bg-danger"></span>
          </a>
        </div> -->
      </div>
    </div>

     @endguest

     @yield('admin_content')
   
    <script src="{{ asset('public/backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('public/backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('public/backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('public/backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/backend/lib/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/backend/lib/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/starlight.js') }}"></script>
    <script src="{{ asset('public/backend/lib/medium-editor/medium-editor.js') }}"></script>
    <script>
      $(function(){
        'use strict';
        var editor = new MediumEditor('.editable');
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    <script>
      $(function(){
        'use strict';
        var editor = new MediumEditor('.editable');
        $('#summernote1').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>
    <script>
      $(function(){
        'use strict';
        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });
        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
      });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{ asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('public/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script> 
    <script src="{{ asset('public/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('public/backend/js/dashboard.js')}}"></script>
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>
  </body>
</html>
