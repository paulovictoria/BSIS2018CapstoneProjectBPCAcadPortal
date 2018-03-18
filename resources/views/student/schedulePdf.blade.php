<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">

</style>
  </head>
  <body>
  	<div class="section light-green darken-2 white-text center-align">
	  	<h5>Bulacan Polytechnic College</h5>
	  	<h6>First Semester Schedule</h6>
	</div>
  	<div class="divider"></div>
  	<div class="card grey lighten-2">
  		<div class="card-content">
		    <table class="table bordered striped center-align">
                          <thead>
                            <tr>
                              <th>Day</th>
                              <th>Start</th>
                              <th>End</th>
                              <th>Room</th>
                              <th>Subject</th>
                              <th>Instructor</th>
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
		</div>
	</div>
  	<div class="section light-green darken-2 white-text center-align">
	  	<h5>Bulacan Polytechnic College</h5>
	  	<h6>First Semester Schedule</h6>
	</div>
  	<div class="divider"></div>
  	<div class="card grey lighten-2">
  		<div class="card-content">
		    <table class="table bordered striped center-align">
                          <thead>
                            <tr>
                              <th>Day</th>
                              <th>Start</th>
                              <th>End</th>
                              <th>Room</th>
                              <th>Subject</th>
                              <th>Instructor</th>
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
		</div>
	</div>

   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>