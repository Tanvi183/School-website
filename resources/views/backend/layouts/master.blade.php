<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.partials.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('public/backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('backend.partials.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('backend.partials.footer')
</div>
<!-- ./wrapper -->


@include('backend.partials.js')
@yield('js')
</body>
</html>
