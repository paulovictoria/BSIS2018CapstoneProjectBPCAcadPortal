<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">
div.background {
  background: url(https://www.bulacan.gov.ph/bpc//images/bpclogo.png);
  background-repeat: no-repeat;
  background-position: center 185px;
  background-size: contain;
  width: 500px;
  height: 500px;
  resize: both;
  overflow: scroll;
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
		  	<h6>First Semester Subjects</h6>
		</div>
	    	<table class="table bordered center-align black-text">
			    <thead>
			    	<tr>	
						<th>SUBJECT CODE</th>
						<th>SUBJECT DESCRIPTION</th>
						<th>UNITS</th>
					</tr>	
			    	</thead>	
			        <tbody>
			         @foreach($subjects as $subject)  
				      @if($subject->sem=="1st Semester")
				      <tr>
				        <td>{{$subject->subj_code}}</td>
				    	<td>{{$subject->subj_description}}</td>
				    	<td>{{$subject->subj_units}}</td>
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
		  	<h6>First Semester Subjects</h6>
		</div>
	    	<table class="table bordered center-align black-text">
			    <thead>
			    	<tr>	
						<th>SUBJECT CODE</th>
						<th>SUBJECT DESCRIPTION</th>
						<th>UNITS</th>
					</tr>	
			    	</thead>	
			        <tbody>
			         @foreach($subjects as $subject)  
				      @if($subject->sem=="2nd Semester")
				      <tr>
				        <td>{{$subject->subj_code}}</td>
				    	<td>{{$subject->subj_description}}</td>
				    	<td>{{$subject->subj_units}}</td>
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