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
.image{
  height: 270px;
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
      <nav class="blue-grey darken-2"> <a href="#" data-activates="slide-out" class="button-collapse show-on-med-and-down left"><i class="material-icons">menu</i></a>
      <div class="container nav-wrapper blue-grey darken-2">
        <a href="#" class="brand-logo" id="logo">
        <span width="30" style="vertical-align: middle;margin-bottom:10px;margin-right:10px;"></span><span style="font-weight:400;font-size:1.5rem;"><i class="material-icons" style="margin-right:1px; ">link</i>BPC Portal</span>
        </a> 
        <ul class="rightnav right hide-on-med-and-down">
          <li><a class="waves-effect" href="{{route('home')}}">HOME</a></li>
          <li><a class="waves-effect" href="{{route('about')}}" active>ABOUT</a></li>
          <li><a class="waves-effect" href="#!">GETTING STARTED</a></li>
       </ul>
      </div>
      </nav>
    </div>
    <main>
 
<div class="section blue-grey darken-2">
  <div class="col s12 m12">
    <div class="card">
      <div class="card-content">
          <span class="card-title center-align">The Proponents</span>
       <div class="row">
        <div class="col s12 m4">
            <div class="card horizontal z-depth-5 blue-grey darken-2 white-text">
              <div class="card-image">
                <img class="image" src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/27971970_1645259625568623_1841709745374485910_n.jpg?_nc_eui2=v1%3AAeHf8nu6z5HIeSXm3WDMplC5dtRWgkRSV6C52HzTbkWRfDMFcz1cxz2B7IC1hxSbDYwKi5N3hjvHbKDnmh4Eifk-SLOZXcywk2BgBhu_b18-NQ&oh=1d2bc10ff9d7d4376e5562f2c45e6ad1&oe=5B02A70F">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4>Paul Adrian Reyes</h4>
                  <span class="blue-text">System Analyst</span>
                </div>
                <div class="card-action">
                    <i class="fab fa-linkedin" style="font-size:23px;"></i>
                    <i class="fab fa-github-square" style="font-size:23px;"></i>
                    <i class="fas fa-envelope" style="font-size:23px;"></i>
                </div>
              </div>
            </div>
          </div>

        <div class="col s12 m4">
            <div class="card horizontal z-depth-5 blue-grey darken-2 white-text">
              <div class="card-image">
                <img class="image" src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/23722439_407058473061436_1493902858471524239_n.jpg?_nc_eui2=v1%3AAeH-pcJW8PiOqhxHoM7om7exaDGz0VcAsVaGfnq71pMYpfG7DqzOxca5OdbDL60UAUFEQmFq0h0qemBzwWGF1tm-wrUmlH-fXd29XN_yonWHHg&oh=efe42dd6f5f02b21657fc77664f7e352&oe=5B33C8A3">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4>Rica Pica Blasabas</h4>
                  <span class="blue-text">Researcher</span>
                </div>
                <div class="card-action">
                    <i class="fab fa-linkedin" style="font-size:23px;"></i>
                    <i class="fab fa-github-square" style="font-size:23px;"></i>
                    <i class="fas fa-envelope" style="font-size:23px;"></i>
                </div>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card horizontal z-depth-5 blue-grey darken-2 white-text">
              <div class="card-image">
                <img class="image" src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/17353440_1132157450245368_1603364581301346998_n.jpg?_nc_eui2=v1%3AAeE5joU4Tr4l7YEzzri0nB2ljkaEMdqpjJKVVTRqU4RJtI-BWwoD_40SBvAva_2O07Al_ugQl8cZ8ttg4SBKds3lV_XAFmFFmJXlsL9fwGZBgg&oh=900feb0c2d9d5569ef50c1f7262f2586&oe=5B3A8BB0">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4>Michael Centeno Velayo</h4>
                  <span class="blue-text">Programmer</span>
                </div>
                <div class="card-action">
                    <i class="fab fa-linkedin" style="font-size:23px;"></i>
                    <i class="fab fa-github-square" style="font-size:23px;"></i>
                    <i class="fas fa-envelope" style="font-size:23px;"></i>
                </div>
              </div>
            </div>
          </div>  
       </div>
    </div>    
  </div>
</div>
</div></main>
    <footer class="page-footer blue-grey darken-2">
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
