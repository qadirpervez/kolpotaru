<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._seller-dashboard-head')
  @yield('stylesheets')
</head>
<body>
    <div id="wrapper">
      @include('partials._seller-dashboard-header')
      @yield('content')
        <!-- /#page-wrapper -->
    </div>
    @include('partials._seller-dashboard-scripts')
    @yield('scripts')
</body>
</html>
