<!Doctype html>
<html lang="en">
  <head>
    @include('partials._head')
    <title>@yield('title')</title>
    @yield('stylesheets')
    <style type="text/css">
    body{
      height: 660px;
      background-image:url("https://temperedglass.ee/wp-content/uploads/2016/09/Background-opera-speeddials-community-web-simple-backgrounds.jpg");
      background-repeat: repeat-x;
    }
    </style>
  </head>

  <body>
    @include('partials.registrar_navigation')
    @yield('content')
    @include('partials._javascript')
    @yield('script')
  </body> 
</html>