<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">

</style>
  </head>
  <body>
  	<div class="section green darken-3 white-text center-align">
	  	<h5>Bulacan Polytechnic College</h5>
	  	<h6>First Semester Subjects</h6>
	</div>
  	<div class="divider"></div>
  	<div class="card grey lighten-2">
  		<div class="card-content">
		    <table class="table bordered striped center-align">
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
															<td>{{$grade->grade}}</td>
								                            @if($grade->grade==0)
                              								<td class="grey-text">No Grade</td>
                              								 @elseif($grade->grade<=3)
                              	 							<td class="green-text">Passed</td>
                               								@elseif($grade->grade<=4)
                               								<td class="orange-text">INC</td>
                               								@else
                               								<td class="red-text">Failed</td>
                              								 @endif								
															</tr>
														@endif  
														@endforeach
												</tbody>
		    </table>
		</div>
	</div>

  	<div class="section green darken-3 white-text center-align">
	  	<h5>Bulacan Polytechnic College</h5>
	  	<h6>Second Semester Subjects</h6>
	</div>
  	<div class="divider"></div>
  	<div class="card grey lighten-2">
  		<div class="card-content">
		    <table class="table bordered striped center-align">
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
														<td>{{$grade->grade}}</td>
								                            @if($grade->grade==0)
                              								<td class="grey-text">No Grade</td>
                              								 @elseif($grade->grade<=3)
                              	 							<td class="green-text">Passed</td>
                               								@elseif($grade->grade<=4)
                               								<td class="orange-text">INC</td>
                               								@else
                               								<td class="red-text">Failed</td>
                              								 @endif								
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