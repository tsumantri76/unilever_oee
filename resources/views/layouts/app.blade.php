<!DOCTYPE html>
<html>
<head>
    @include('layouts.header')
    @stack('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('layouts.navbar')
  </header>
  
  <aside class="main-sidebar">
    @include('layouts.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('layouts.footer')
  </footer>
</div>

    @include('layouts.script')
</body>
</html>