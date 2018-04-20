<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">
div.background {
  background: url(https://www.bulacan.gov.ph/bpc//images/bpclogo.png);
  background-repeat: no-repeat;
  background-position: center 185px;
  background-size: 500px 500px;

}

div.transbox {
  margin: 10px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.tablefooter {
  width: 97%;
  margin-right: auto;
  margin-left: auto;
font-family: Verdana, sans-serif;
}
</style>
  </head>
  <body>
  <div class="background">
    <div class="transbox">
      <div class="section green darken-4 white-text center-align">
        <h5>Bulacan Polytechnic College<br><span>city of {{Auth::user()->campus->campus_name}} Bulacan</span></h5>
        <h6>{{$title}}</h6>
    </div>
        <table class="table bordered center-align black-text">
                <thead>
                <tr>
                    <td>COURSE <span>Year/Section</span></td>
                    <td>SUBJECT_CODE</td>
                    <td>ROOM_CODE</td>
                    <td>DAY</td>
                    <td>START</td>
                    <td>END</td>   
                </tr>
                </thead>
                <tbody>
                 @foreach($assigns as $assign)
                  <tr class=" light-green lighten-5">  

                    <td>{{$assign->course_name.' '.$assign->year.' '.$assign->section}}</td> 
                    <td>{{$assign->subj_code}}</td>   
                    <td>{{$assign->room_code}}</td>                     
                    <td>{{$assign->name}}</td>
                    <td>{{$assign->startTime}}</td>
                    <td>{{$assign->endTime}}</td>        
                  </tr>               
                 @endforeach 
                </tbody>
      </table>
      <div class="section green darken-4 white-text">
          <div class="tablefooter">

        </div>
      </div>
      </div>
  </div>

   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>