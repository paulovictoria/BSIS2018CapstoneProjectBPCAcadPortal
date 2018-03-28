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
	  	<h6>Report Grades</h6>
	</div>
  	<div class="divider"></div>
  	<div class="card grey lighten-2">
  		<div class="card-content">
		    <table class="table bordered striped center-align">
											    <thead>
											        <tr>
											        	<th>Name</th>
											            <th>Grade</th>
											            <th>EVALUATION</th>
											        </tr>
											    </thead>
												<tbody>
														@foreach($assigns as $assign)
													<tr>	
													 <td>{{$assign->last_name.' '.$assign->first_name.' '.$assign->midle_name}}</td>
													 <td>{{$assign->grade}}</td>
														@if($assign->grade==0)
						                               <td class="grey-text">NO GRADE</td>
						                               @elseif($assign->grade<=3)
						                               <td class="green-text">PASSED</td>
						                               @elseif($assign->grade<=4.75)
						                               <td class="orange-text">INC</td>
						                               @elseif($assign->grade==5)
						                               <td class="red-text">FAILED</td>
						                               @endif
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