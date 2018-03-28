<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>
  <body>
    <div class="section green darken-3 white-text center-align">
        <h5>Bulacan Polytechnic College</h5>
        <h6>{{$title}}</h6>
    </div>
    <div class="divider"></div>
    <div class="card grey lighten-2">
        <div class="card-content">
            <table class="table bordered striped center-align">
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
        </div>
    </div>

   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>