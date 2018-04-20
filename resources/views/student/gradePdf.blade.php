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
		  	<h6>First Semester Grades</h6>
		</div>
		<table class="table bordered center-align black-text">
											    <thead>
											        <tr>
											        	<th>SUBJECT CODE</th>
											            <th>SUBJECT DESCRIPTION</th>
											            <th>GRADE</th>
											            <th>EVALUATION</th>
											        </tr>
											    </thead>
												<tbody>
														@foreach($grades as $grade)
														 @if($grade->sem=="1st Semester")
														<tr>
														<td>{{$grade->subj_code}}</td>
														<td>{{$grade->subj_description}}</td>
								                              @if($grade->grade==6)
								                              <td>No Grade</td>
								                              @else
								                              <td>{{$grade->grade}}</td>
								                              @endif
								                              @if($grade->grade==0)
								                               <td class="grey-text">NO GRADE</td>
								                               @elseif($grade->grade<=3)
								                               <td class="green-text">PASSED</td>
								                               @elseif($grade->grade<=4.75)
								                               <td class="orange-text">INC</td>
								                               @elseif($grade->grade==5)
								                               <td class="red-text">FAILED</td>
								                               @elseif($grade->grade==6)
                               								<td class="red-text">DROPPED</td>
								                               @endif						
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
		  	<h6>Second Semester Grades</h6>
		</div>
	    	<table class="table bordered center-align black-text">
										    <thead>
										        <tr>
										        	<th>SUBJECT CODE</th>
										            <th>SUBJECT DESCRIPTION</th>
										            <th>GRADE</th>
										            <th>EVALUATION</th>
										        </tr>
										    </thead>
											<tbody>
													@foreach($grades as $grade)
													 @if($grade->sem=="2nd Semester")
														<tr>
														<td>{{$grade->subj_code}}</td>
														<td>{{$grade->subj_description}}</td>
								                              @if($grade->grade==6)
								                              <td>No Grade</td>
								                              @else
								                              <td>{{$grade->grade}}</td>
								                              @endif
								                              @if($grade->grade==0)
								                               <td class="grey-text">NO GRADE</td>
								                               @elseif($grade->grade<=3)
								                               <td class="green-text">PASSED</td>
								                               @elseif($grade->grade<=4.75)
								                               <td class="orange-text">INC</td>
								                               @elseif($grade->grade==5)
								                               <td class="red-text">FAILED</td>
								                               @elseif($grade->grade==6)
                               								<td class="red-text">DROPPED</td>
								                               @endif						
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