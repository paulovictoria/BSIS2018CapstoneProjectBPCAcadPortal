<!Doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    @yield('stylesheets')
    <title>@yield('title')</title>
  </head>

  <body>
    @include('partials._messages')
    @include('partials.registrar_navigation')
    @yield('content')
    @include('partials._javascript')
    @yield('script')
  </body> 
</html>