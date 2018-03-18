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
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="shortcut icon" href="{{asset('images/green_link.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
       <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Bpcians Portal</title>
    <style type="text/css">
.image{
  height: 270px;
}
    </style>
  </head>
  <body>
    <main>
<div class="section blue-grey darken-2">
  <div class="col s12 m12">
    <div class="card z-depth-5">
      <div class="card-content">
          <h5 class="center">ABOUT</h5>
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
                <img class="image" src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/21034380_1112301812247585_1200671050443925263_n.jpg?_nc_eui2=v1%3AAeEvmSMijXqRtObXenj7yYtxzRSH_gltPeS0dYZW2PtA-S-gsFx0fDKlHjTq7m_gRumiedii0cDvx4lcKYncvxt-hl36pjYRQ_FFVwUky6wDdg&oh=4250140097974cbb03e7abfa25615256&oe=5B4501A6">
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
                <img class="image" src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.0-9/16298680_1088513397943107_4288637216489519693_n.jpg?_nc_eui2=v1%3AAeGkH5_WdAwyu9HoFHuTBTqs8Hq-iQrjXpq6k2WdakSnY3VBHnWCg4NZ1sPV_vNOkVC3YDTiONQ1ZLYygMGZG76j5-6Gh5BOrCk7htegU99fCg&oh=fa75dbd837ff5d34f3c2d77f2ddac274&oe=5B398ED4">
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
</div>  
    </main>
 <!--    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
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

