<!doctype html>
<html lang="en">
{{-- head --}}
    @include('layoutsDashboard/head')

  <body id="page-top">
    {{-- navbar --}}
    @include('home/template/navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
      @include('layoutsDashboard/footer')



   {{-- logout --}}
   @include('layoutsDashboard/logout-modal')
  
   {{-- javascript --}}
   @include('layoutsDashboard/javascript')
  </body>
  
</html>