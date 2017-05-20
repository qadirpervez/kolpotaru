<!doctype html>
<html>
  <head>
    @include('partials._registerHead')
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
    @include('partials._registerFooter')
    @include('partials._registerScript')
  </body>
</html>
