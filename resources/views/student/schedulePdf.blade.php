<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">
div.background {
  background: url(https://www.bulacan.gov.ph/bpc//images/bpclogo.png);
  background-repeat: no-repeat;
  background-position: center 400px;
  background-size: 1000px 1000px;

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
        <h6>First Semester Schedule</h6>
    </div>
        <table class="table bordered center-align black-text">
                          <thead>
                            <tr>
                              <th>DAY</th>
                              <th>START</th>
                              <th>END</th>
                              <th>ROOM</th>
                              <th>SUBJECT</th>
                              <th>INSTRUCTOR</th>
                            </tr>
                          </thead>
                          <tbody>
                                @foreach($schedules as $schedule)
                                    @if($schedule->sem=="1st Semester")
                            <tr>
                              <td>{{$schedule->name}}</td>
                              <td>{{$schedule->startTime}}</td>
                              <td>{{$schedule->endTime}}</td>
                              <td>{{$schedule->room_code}}</td>
                              <td>{{$schedule->subj_code}}</td>
                              <td>{{$schedule->last_name.' '.$schedule->first_name.' '.$schedule->midle_name}}</td>
                            </tr>
                                     @endif
                                  @endforeach
                              </tbody>
      </table>
      <div class="section green darken-4 white-text">
          <div class="tablefooter">
          <div class="col s12">
            <p class="right-align">{{ Auth::user()->course->course_description}}</p>
          </div>  
        </div>
      </div>
      </div>
  </div>
  <div class="background">
    <div class="transbox">
      <div class="section green darken-4 white-text center-align">
        <h5><span>Bulacan Polytechnic College</span><br>city of {{Auth::user()->campus->campus_name}} Bulacan</h5>
        <h6>First Semester Schedule</h6>
    </div>
        <table class="table bordered center-align black-text">
                          <thead>
                            <tr>
                              <th>DAY</th>
                              <th>START</th>
                              <th>END</th>
                              <th>ROOM</th>
                              <th>SUBJECT</th>
                              <th>INSTRUCTOR</th>
                            </tr>
                          </thead>
                          <tbody>
                                @foreach($schedules as $schedule)
                                    @if($schedule->sem=="2nd Semester")
                            <tr>
                              <td>{{$schedule->name}}</td>
                              <td>{{$schedule->startTime}}</td>
                              <td>{{$schedule->endTime}}</td>
                              <td>{{$schedule->room_code}}</td>
                              <td>{{$schedule->subj_code}}</td>
                              <td>{{$schedule->last_name.' '.$schedule->first_name.' '.$schedule->midle_name}}</td>
                            </tr>
                                     @endif
                                  @endforeach
                              </tbody>
      </table>
      <div class="section green darken-4 white-text">
          <div class="tablefooter">
          <div class="col s12">
            <p class="right-align">{{ Auth::user()->course->course_description}}</p>
          </div>  
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