<!Doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    <title>@yield('title')</title>
    @yield('stylesheets')
  </head>

  <body>
    @include('partials._messages')
    @include('partials.professor_navigation')
    @yield('content')
    @include('partials._javascript')
    @yield('script')
  </body> 
</html>