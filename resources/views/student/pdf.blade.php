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
  	<h6>First Semester</h6>
</div>
  	</div>
  	<div class="divider"></div>
  	<div class="col s12">
  	<div class="card grey lighten-2">
  		<div class="card-content">
    <table class="table bordered striped center-align">
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
</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  	<div class="section grey lighten-2 center-align">
  	<h5>Bulacan Polytechnic College</h5>
  	<h6>Second Semester</h6>
  	</div>
  	<div class="divider"></div>
   <table class="table bordered center-align">
    	<thead>
    	<tr>	
			<th>Subject Code</th>
			<th>Subject Description</th>
			<th>Units</th>
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

   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>