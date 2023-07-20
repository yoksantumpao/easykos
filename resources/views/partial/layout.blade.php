<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partial.head')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        @include('partial.navbar')
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('partial.sidebar')
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            {{-- @include('partial.header') --}}
            <!-- Page Title Header Ends-->
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
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
    <script src="{{asset ('src/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset ('src/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset ('src/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset ('src/assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset ('src/assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    {{-- <script src="{{asset ('src/assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script> --}}
  </body>
</html>