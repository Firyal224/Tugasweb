
<!DOCTYPE html>
<html lang="en">

{{-- head (1)--}} 
@include('layoutsDashboard/head') 

<body id="page-top">
    @include('home/template/navbar')
  
     @yield('content')

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
