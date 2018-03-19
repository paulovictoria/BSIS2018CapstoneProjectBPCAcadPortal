<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!--   <link rel="stylesheet" href="{{ asset('css/materialize.css?v=' . env('ASSET_VERSION', 1)) }}"> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="shortcut icon" href="{{asset('images/green_link.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <title>Bpcians Portal</title>
    <style type="text/css">

      .modal {
        width: 75%;
      }
    </style>
  </head>
  <body>
    <ul id="slide-out" class="side-nav">
      <li><a class="waves-effect" href="{{route('home')}}">Home</a></li>
      <li><a class="waves-effect" href="{{route('about')}}">About</a></li>
      <li><a class="waves-effect" href="#!">Getting Started</a></li>
      <li><a class="dropdown-button" href='#' data-activates='logAs'>Sign Up</a></li>
      <!-- Dropdown Structure -->
      <ul id="logAs" class="dropdown-content">
        <li><a href="{{route('student.login')}}">Student</a></li>
        <li><a href="{{route('professor.login')}}">Instructor</a></li>
        <li><a href="{{route('registrar.login')}}">Registrar</a></li>
        <li><a href="{{route('admin.login')}}">Academic</a></li>
      </ul>
    </ul>
    <div class="navbar-fixed">
      <nav class="green darken-4"> <a href="#" data-activates="slide-out" class="button-collapse show-on-med-and-down left"><i class="material-icons">menu</i></a>
      <div class="container nav-wrapper green darken-4">
        <a href="#" class="brand-logo" id="logo">
        <span width="30" style="vertical-align: middle;margin-bottom:10px;margin-right:10px;"></span><span style="font-weight:400;font-size:1.5rem;"><i class="material-icons" style="margin-right:1px; ">link</i>BPC Portal</span>
        </a> 
        <ul class="rightnav right hide-on-med-and-down">
          <li><a class="waves-effect" href="{{route('home')}}">HOME</a></li>
          <li><a class="waves-effect" href="{{route('about')}}">ABOUT</a></li>
          <li><a class="waves-effect" href="#!">GETTING STARTED</a></li>
       </ul>
      </div>
      </nav>
    </div>
    <main>   
<div class="container">
  <div class="section"></div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card">
        <div class="card-content z-depth-2">
          <div class="section white" id="undecided">
              <h5 class="start text-primarycolor center-align">Announcements</h5> 
              <div class="divider"></div>
                <div class="row">
                    @foreach($moreannouncements as $announcement)
                    <div class="col s12 m12">
                      <div class="col s3 m3 l3">
                        <img width="75" height="75" src="{{route('socials.image',$announcement->filename)}}" class="circle">
                      </div>         
                      <div class="col s9 m8 l9">
                        <blockquote >
                          <p class="grey-text text-darken-3">   
                        <span style="font-weight:500;">{{$announcement->title}}</span>.
                        {{ substr(strip_tags($announcement->description),0,80) }}
                        {{ strlen(strip_tags($announcement->description)) > 50 ? "..." : ""}}
                        </p>
                        <p style="font-weight:300;"><a href="{{route('announcement.single',$announcement->id)}}" class="text-primarycolor">Continue Reading...</a></p>
                        <div class="divider"></div>
                        </blockquote>
                      </div>
                    </div> 
                    @endforeach
              </div>  
            </div>  
        </div> 
      </div>  
    </div>   
  </div>
</div>
    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
 <!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script -->>
    <script src="{{ asset('jquery/aos.js') }}"></script>
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
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }
    );
  // START OPEN
    $('.button-collapse').sideNav('hide');
    });
    $(document).ready(function(){
    $('.carousel').carousel();
    });
    $(document).ready(function(){
     $('#modalChoose').modal();
     });
    AOS.init({
      duration:1200,
    });
   </script> 
  </body>
</html>
