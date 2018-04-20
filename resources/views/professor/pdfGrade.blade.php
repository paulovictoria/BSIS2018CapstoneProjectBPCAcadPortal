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
		  	<h6>Report Grades</h6>
		</div>
	    	<table class="table bordered center-align black-text">
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
						                              @if($assign->grade==6)
						                              <td>No Grade</td>
						                              @else
						                              <td>{{$assign->grade}}</td>
						                              @endif
						                              @if($assign->grade==0)
						                               <td class="grey-text">NO GRADE</td>
						                               @elseif($assign->grade<=3)
						                               <td class="green-text">PASSED</td>
						                               @elseif($assign->grade<=4.75)
						                               <td class="orange-text">INC</td>
						                               @elseif($assign->grade==5)
						                               <td class="red-text">FAILED</td>
						                               @elseif($assign->grade==6)
						                               <td class="red-text">DROPPED</td>
						                               @endif
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