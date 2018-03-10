<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('css/materialize.css?v=' . env('ASSET_VERSION', 1)) }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Bpcians Portal</title>
  </head>
  <body>
    <ul id="slide-out" class="side-nav">
      <li><a class="waves-effect" href="{{route('home')}}">Home</a></li>
      <li><a class="waves-effect" href="#!">About</a></li>
      <li><a class="waves-effect" href="#!">Getting Started</a></li>
      <li><a class="waves-effect" href="#!">Extension Campuses</a></li>
      <li><a class="dropdown-button" href='#' data-activates='logAs'>Sign In</a></li>
      <li><a class="dropdown-button" href="#" data-activates='signAs'>Sign Up</a></li>
      <!-- Dropdown Structure -->
      <ul id="logAs" class="dropdown-content">
        <li><a href="{{route('student.login')}}">Student</a></li>
        <li><a href="{{route('professor.login')}}">Instructor</a></li>
        <li><a href="{{route('registrar.login')}}">Registrar</a></li>
        <li><a href="{{route('admin.login')}}">Academic</a></li>
      </ul>
      <ul id="signAs" class="dropdown-content">
        <li><a href="{{route('student.registration')}}">Student</a></li>
      </ul>  
    </ul>
    <div class="navbar-fixed">
      <nav class="light-green darken-2">   <a href="#" data-activates="slide-out" class="button-collapse show-on-large right"><i class="icon-menu"></i></a>
      <div class="container nav-wrapper light-green darken-2">
        <a href="#" class="brand-logo" id="logo">
        <span class="icon-link2" width="30" style="vertical-align: middle;margin-bottom:10px;margin-right:10px;"></span><span style="font-weight:400;font-size:1.5rem;">BpciansPortal</span>
        </a> 
      </div>
      </nav>
    </div>

    <main>  
      <div class="section" id="undecided">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <div class="card z-depth-5">
                <div class="card-content">
              <h5 class="start text-primarycolor">News</h5> 
              <p class="start-paragraph-text ">We provide a FREE and a PRO version, the free version has a limited number of functions but can be used as a fully functional demo by enabling the demo setting.</p>
              <ul style="margin-bottom: 16px;padding-left: 16px;">
              <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;" class="text-primarycolor">
                BPC will be having a blah blah blah
              </li>
              <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;" class="text-primarycolor">
                Post public feature requests
              </li>
              <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;" class="text-primarycolor">
                Speak to us via live chat
              </li>
              <li style="margin: 14px 0;padding: 0;list-style: initial;font-size:14px;" class="text-primarycolor">
                Speak to us via live chat
              </li>
            </ul>
            <p class="right-align"><a href="https://kioskbrowser.userecho.com/" target="_blank" class="btn light-green darken-2 white-text">READ MORE</a></p>
               </div>
              </div>            </div>  
            <div class="col s12 m6">
              <img src="{{asset('images/pro_green_illustration.png')}}" class="responsive-img">
            </div>              
          </div>  
        </div>  
      </div>  
    </main>  
    <footer class="page-footer light-green darken-2">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">The Bpcians Portal</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Bulihan city of Malolos Bulacan</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"></a></li>
            </ul>          
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Social Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Fb</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">twitter</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">bulpolycol@gmail.com </a></li>
              <li><a class="grey-text text-lighten-3" href="#!">bulpolycolyahoo.com </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
          <div class="container">
            © 2018 BPCians Academic Portal Copyright
          </div>
      </div>
    </footer>
    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script>
    $(document).ready(function(){
    $('.carousel.carousel-slider').carousel({
          fullWidth: true });
          setInterval(function(){
    $('.carousel').carousel('next');
    },3000);
    });
    $(document).ready(function(){
    $('.button-collapse').sideNav({
        menuWidth: 200, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }
    );
  // START OPEN
    $('.button-collapse').sideNav('hide');
    });
    $(document).ready(function(){
    $('.materialboxed').materialbox();
    });
    $(document).ready(function(){
    $('.carousel').carousel();
    });
    </script> 
  </body>
</html>

