<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('melody/vendors/css/vendor.bundle.addons.css')}}">

  <link href="{{ asset('fullcalender/css/main.css') }}" rel="stylesheet">

  <script type="text/javascript">
    var baseURL = {!! json_encode(url('/'))!!}

    
</script>
 

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('melody/css/style.css')}}">
  @yield('styles')
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/logo.ico')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            @yield('empresa')
       
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
      
        <ul class="navbar-nav navbar-nav-right">
        @yield('create')
        <li class="nav-item nav-profile dropdown">
            @yield('imgu')
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
              aria-labelledby="profileDropdown">
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"
              onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                  <i class="fas fa-power-off text-primary"></i>
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
          @yield('options')
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
        @yield('preference')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    
        @include('layouts._nav')
    
      <!-- partial -->
      <div class="main-panel">
        @if (session('info'))
    
          <div class="alert alert-fill-success" role="alert">
              <i class="far fa-check-circle"></i>
              {{session('info')}}
          </div>
    
        @endif
        
        @yield('content')

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
         
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('melody/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('melody/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('melody/js/off-canvas.js')}}"></script>
  <script src="{{asset('melody/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('melody/js/misc.js')}}"></script>
  <script src="{{asset('melody/js/settings.js')}}"></script>
  <script src="{{asset('melody/js/todolist.js')}}"></script>
  
  <script src="{{asset('melody/js/dashboard.js')}}"></script>



  @include('sweetalert::alert')
  <!-- End custom js for this page-->
  @yield('scripts')
</body>


</html>
