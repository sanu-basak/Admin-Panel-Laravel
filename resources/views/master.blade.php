@guest
  @include('welcome')
@else

<!DOCTYPE html>
<html>

@include('layouts.partials.htmlHeader')
<body class="hold-transition skin-red sidebar-mini fixed">
<div class="wrapper">

  @include('layouts.partials.mainheader')
  
  @include('layouts.partials.sidebar')
  
    @yield('content')
  
  @include('layouts.partials.footer')

  @include('layouts.partials.controlSidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<!-- ./wrapper -->
@include('layouts.partials.script')
@yield('footer-script')

</body>
</html>
@endguest