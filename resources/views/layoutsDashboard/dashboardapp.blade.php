
<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('layoutsDashboard/head')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layoutsDashboard/sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layoutsDashboard/topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

         @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('layoutsDashboard/footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  {{-- javascipte --}}
  @include('layoutsDashboard/javascript')


</body>

</html>
