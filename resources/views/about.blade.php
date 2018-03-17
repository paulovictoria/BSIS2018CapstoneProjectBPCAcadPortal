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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="shortcut icon" href="{{asset('images/green_link.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Bpcians Portal | About</title>
    <style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans);

body {
  background-color: antiquewhite;
}

.card {
  background-color: #f4f4f4;
  width: 300px;
  margin: 10px auto;
  box-shadow: 1px 1px 10px 1px rgba(0,0,0,0.7);
}
.card-image{
  height: 100%;
  width: 100%;
}

.card-content {
  width: 85%;
  margin: 35px auto;
}

.card-content h3 {
  font-size: 25px;
  margin-bottom: 0;
  color: #303F9F;
  font-family: 'Montserrat', sans-serif;
}

.card-content h4 {
  font-size: 14px;
  margin-top: 0;
  color: #FF5252;
  font-family: 'Montserrat', sans-serif;
}

.card-footer {
  border-top: solid 1px #B6B6B6;
  padding: 5px;
}

.card-footer ul {
  padding: 0;
  width: 90%;
  margin: auto;
  text-align: center;
}

.card-footer ul li{
  display: inline-block;
  list-style: none;
  margin: 5px;
}

.card-footer ul li i {
  font-size: 2em;
  color: #3F51B5;
}
    </style>
  </head>
  <body>
    <ul id="slide-out" class="side-nav">
      <li><a class="waves-effect" href="{{route('home')}}">Home</a></li>
      <li><a class="waves-effect" href="#!">About</a></li>
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
      <nav class="light-green darken-2"> <a href="#" data-activates="slide-out" class="button-collapse show-on-med-and-down left"><i class="material-icons">menu</i></a>
      <div class="container nav-wrapper light-green darken-2">
        <a href="#" class="brand-logo" id="logo">
        <span width="30" style="vertical-align: middle;margin-bottom:10px;margin-right:10px;"></span><span style="font-weight:400;font-size:1.5rem;"><i class="material-icons" style="margin-right:1px; ">link</i>BPC Portal</span>
        </a> 
        <ul class="rightnav right hide-on-med-and-down">
          <li><a class="waves-effect" href="{{route('home')}}">HOME</a></li>
          <li><a class="waves-effect" href="#!">ABOUT</a></li>
          <li><a class="waves-effect" href="#!">GETTING STARTED</a></li>
       </ul>
      </div>
      </nav>
    </div>
    <main>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col s12 m4">      
              <div class="card">
                <div class="card-image">
                  <img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/27971970_1645259625568623_1841709745374485910_n.jpg?oh=c592c651b6ba8665aeb2615b7d8c1866&oe=5B02A70F"/>
                </div>
                <div class="card-content">
                  <h3>Frank the Pug</h3>
                  <h4>The sexiest "Men (dog) in Black" </h4>
               
                </div>
                <div class="card-footer">
                  <ul>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><i class="far fa-user"></i></li>
                </div>
              </div>
            </div>
            <div class="col s12 m4">      
              <div class="card">
                <div class="card-image">
                  <img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/23722439_407058473061436_1493902858471524239_n.jpg?oh=2612b5f958889aaf91bd0ded99d75556&oe=5B33C8A3"/>
                </div>
                <div class="card-content">
                  <h3>Frank the Pug</h3>
                  <h4>The sexiest "Men (dog) in Black" </h4>
               
                </div>
                <div class="card-footer">
                  <ul>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><i class="far fa-user"></i></li>
                </div>
              </div>
            </div>
            <div class="col s12 m4">      
              <div class="card">
                <div class="card-image">
                  <img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/27971970_1645259625568623_1841709745374485910_n.jpg?oh=c592c651b6ba8665aeb2615b7d8c1866&oe=5B02A70F"/>
                </div>
                <div class="card-content">
                  <h3>Frank the Pug</h3>
                  <h4>The sexiest "Men (dog) in Black" </h4>
               
                </div>
                <div class="card-footer">
                  <ul>
                    <li><i class="fab fa-facebook-square"></i></li>
                    <li><i class="far fa-user"></i></li>
                </div>
              </div>
            </div>                        
          </div>
        </div>
      </div>
    </main>  
    <footer class="page-footer light-green darken-2">
     <div class="container">
       <div class="row">
        <div class="col s12 m6">
          <h5 class="white-text" data-aos="zoom-out">Get in touch</h5>
          <form class="col s12" action="#">
            <div class="row">
              <div class="input-field col s6" data-aos="zoom-out">
                <input id="name" name="name" type="text" class="white-text">
                <label for="name" class="white-text">Name</label>
              </div>
              <div class="input-field col s6" data-aos="zoom-out">
                <input id="email" name="email" type="email" class="white-text">
                <label for="email" class="white-text">Email Address</label>
              </div>
              <div class="input-field col s12" data-aos="zoom-out">
                <input id="message" name="message" type="text" class="white-text">
                <label for="message" class="white-text">Message</label>
              </div> 
              <div class="col s5 offset-s9" data-aos="zoom-out">
                <button class="btn white light-green-text darken-1">SUBMIT</button>
              </div>                           
            </div>  
          </form>  
        </div>  
        <div class="col s12 m6" style="text-align: right;">
          <h5 class="white-text" data-aos="zoom-out">Contact</h5>
         <ul>
            <li>
              <span class="white-text" data-aos="zoom-out">BPC Main Campus, Bulihan, City of Malolos, <br>Bulacan, Philippines 3000</span>
            </li>
            <li>
              <span class="white-text" data-aos="zoom-out">Telefax: +63(044)-791-3048</span>
            </li> 
            <li>
              <span class="white-text" data-aos="zoom-out">Email Address: 
                     <br>bpc@bulacan.gov.ph 
                    <br>bulpolycol@gmail.com 
                     <br>bulpolycol@yahoo.com</span>
            </li>                        
          </ul>
        </div>  
       </div> 
     </div>
      <div class="footer-copyright">
          <div class="container">
            © 2018 BPC Portal Copyright
            <div class="right">
                <a href="https://www.facebook.com/bulpolycol" class="btn btn-floating blue darken-1"><i class="icon-facebook"></i></a>
                <a href="#" class="btn btn-floating light-blue"><i class="icon-twitter"></i></a>
                <a href="#" class="btn btn-floating brown darken-1"><i class="icon-instagram"></i></a>
                <a href="https://www.bulpolycol@gmail.com" class="btn btn-floating red darken-1"><i class="icon-mail2"></i></a> 
            </div>
          </div>
      </div>
    </footer>
    <div id="modalChoose" class="modal">
      <div class="modal-content">
          <a class="modal-close right"><span class="icon-cross grey-text"></span></a>
          <div class="section"></div>
          <h5 class="text-primarycolor center-align">ARE YOU A?</h5>
          <div class="row">
            <div class="col s6 m3">
              <div class="card z-depth-4">
                <div class="card-content light-green darken-2">
                  <span class="card-title center">
                  <img width="75" height="75" src="{{asset('images/student.png')}}"></span>
                  <a href="{{route('student.login')}}" class="center-align"><h5 class="white-text">STUDENT</h5></a>
                </div>
               </div>
            </div> 
           <div class="col s6 m3">
              <div class="card z-depth-4">
                <div class="card-content light-green darken-2">
                  <span class="card-title center">
                  <img width="75" height="75" src="{{asset('images/teacher.png')}}"></span>
                  <a href="{{route('professor.login')}}" class="center-align"><h5 class="white-text">INSTRUCTOR</h5></a>                  
                </div>
               </div>
            </div>
           <div class="col s6 m3">
              <div class="card z-depth-4">
                <div class="card-content light-green darken-2">
                  <span class="card-title center">
                  <img width="75" height="75" src="{{asset('images/clerk.png')}}"></span>
                  <a href="{{route('registrar.login')}}" class="center-align"><h5 class="white-text">REGISTRAR</h5></a>                  
                </div>
               </div>
            </div>
           <div class="col s6 m3">
              <div class="card z-depth-4">
                <div class="card-content light-green darken-2">
                  <span class="card-title center">
                  <img width="75" height="75" src="{{asset('images/manager.png')}}">
                 </span>
                  <a href="{{route('admin.login')}}" class="center-align"><h5 class="white-text">ADMIN</h5></a>               
                </div>
               </div>
            </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
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

