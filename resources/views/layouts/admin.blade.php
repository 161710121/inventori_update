<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('p.style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('p.head')
  <!-- Left side column. contains the logo and sidebar -->
  @include('p.leftbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <main class="py-4">
        @include('layouts._flash')
        @yield('content')
    </main>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('p.foot')

  <!-- Control Sidebar -->
@include('p.rightbar')
</div>
<!-- ./wrapper -->

@include('p.script')

</body>
</html>
