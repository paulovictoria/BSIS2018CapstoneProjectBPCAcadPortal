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
<!--     <ul id="slide-out" class="side-nav">
      <li><a class="waves-effect" href="{{route('home')}}">Home</a></li>
      <li><a class="waves-effect" href="#!">About</a></li>
      <li><a class="waves-effect" href="#!">Getting Started</a></li>
      <li><a class="waves-effect" href="#!">Extension Campuses</a></li>
      <li><a class="dropdown-button" href='#' data-activates='logAs'>Sign In</a></li>
      <li><a class="dropdown-button" href="#" data-activates='signAs'>Sign Up</a></li>
     
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
    </div> -->

    <main> 
      <div class="section white">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 center">
              <h3 class="start text-primarycolor">Are You a?</h3> 
            </div>  
            <div class="col s12 m12 center">
              <div class="row">
                <div class=" col s6 m3">
                  <div class="card z-depth-5">
                    <div class="card-content">
                      <div class="card-image"><img src="{{asset('images/material_man1.png')}}" class="circle"></div>
                      <span class="card-title">Student</span>
                    </div>
                    <div class="card-action">
                      <a href="#" class=" ">Sign in</a><a href="#" class="">Sign up</a>
                    </div>
                  </div>
                </div>
                <div class=" col s6 m3">
                  <div class="card z-depth-5">
                    <div class="card-content">
                      <div class="card-image"><img src="{{asset('images/material_man2.png')}}" class="circle"></div>
                      <span class="card-title">Instructor</span>
                    </div>
                    <div class="card-action">
                      <a href="#" class=" ">Sign in</a><a href="#" class="">Sign up</a>
                    </div>
                  </div>
                </div>
                <div class=" col s6 m3">
                  <div class="card z-depth-5">
                    <div class="card-content">
                      <div class="card-image"><img src="{{asset('images/material_man3.png')}}" class="circle"></div>
                      <span class="card-title">Registrar</span>
                    </div>
                    <div class="card-action">
                      <a href="#" class=" ">Sign in</a><a href="#" class=" ">No Acount?</a>
                    </div>
                  </div>
                </div>
                <div class=" col s6 m3">
                  <div class="card z-depth-5">
                    <div class="card-content">
                      <div class="card-image"><img src="{{asset('images/material_man1.png')}}" class="circle"></div>
                      <span class="card-title">Admin</span>
                    </div>
                    <div class="card-action">
                      <a href="#" class=" ">Sign in</a><a href="#" class=" ">No Acount?</a>
                    </div>
                  </div>
                </div>                                
              </div>
            </div>                   
          </div>  
        </div>
      </div>  
    </main>  
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

