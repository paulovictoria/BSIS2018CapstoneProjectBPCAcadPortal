<!DOCTYPE html>
<html lang="en">
<head>
  
<link rel="stylesheet" href="{{ asset('css/materialize.css?v=' . env('ASSET_VERSION', 1)) }}">
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
 <!--Let browser know website is optimized for mobile-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BPCAP | News</title>


</head>
<body>
<header>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">STUDENT</a></li>
  <li><a href="#!">FACULTY</a></li>
  <li><a href="#!">REGISTRAR</a></li>
</ul>  
 <nav>
    <div class="nav-wrapper grey lighten-5">
      <a href="#" class="brand-logo black-text">BPCAP</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="" class=" black-text">HOME</a></li>
        <li><a href="" class=" black-text">ABOUT</a></li>
        <li><a href="" class=" black-text">NEWS</a></li>
        <li><a href="" class=" black-text">CONTACT US</a></li>
         <li><a class="dropdown-button black-text" href="#!" data-activates="dropdown1">ACADEMIC PORTAL</a></li>
      </ul>
    </div>
  </nav>
</header> 
<main>

  <div class="container">
    <div class="col s12">
          <div class="card">
            <div class="card-image">
              <img src="{{ asset('images/boracay.jpg') }}">
            </div>
            <div class="card-content">
              <h5>{{ $announcement->title}}</h5>
              <h5>{{ $announcement->date}}</h5>
              <p class="flow-text">{{$announcement->description}}</p>  
            </div>   
          </div>
    </div>  
  </div>   

</main>  

        <footer class="page-footer grey">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">BPC ACademic Portal</h5>
                <p class="grey-text text-lighten-4">Lorem ipsum blah blah blah balh baah.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 BPC Academic Portal Copyright
            </div>
          </div>
        </footer>
            

<script>
$(document).ready(function(){
  $(".dropdown-button").dropdown();
});
</script>
<script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('jquery/jquery-ui.js') }}"></script>
<script src="{{ asset('js/materialize.js') }}"></script>
<script src="{{ asset('jquery/prelim.js') }}"></script>
<script src="{{ asset('jquery/announcements.js') }}"></script>
<script src="{{ asset('jquery/news.js') }}"></script>
<script src="{{ asset('jquery/events.js') }}"></script>
<script src="{{ asset('jquery/markasread.js') }}"></script>

</body>
</html>

