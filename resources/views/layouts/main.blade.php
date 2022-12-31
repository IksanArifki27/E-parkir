
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashbord Admin E parkir</title>
    @include('layouts.inc.inc-css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 @include('layouts.inc.navbar');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="/admin" class="brand-link">
      <img src="/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashbord Admin</span>
    </a> --}}

    <!-- Sidebar -->
  @include('layouts.inc.sidebar');
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    @yield('content-header')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        @yield('content-main')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('layouts.inc.footer')


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.inc.inc-js');
</body>
</html>
