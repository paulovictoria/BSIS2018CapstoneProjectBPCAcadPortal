<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">

</style>
  </head>
  <body>
 	<div class="row">
 		<div class="col s6 m6">
 			<table class="bordered">
 				<thead>
 					<tr>
 						<td>SUBJECT CODE</td>
 						<td>SUBJECT DESCRIPTION</td>
 						<td>GRADE</td>
 						<td>EVALUATION</td>
 						<td>SEMESTER</td>
 					</tr>
 				</thead>
 				<tbody>
 					@foreach($records as $record)
 					 @if($record->year=="First Year")
 					<tr>
                        <td>{{$record->subj_code}}</td>
                        <td>{{$record->subj_description}}</td>
                        <td>{{$record->grade}}</td>
                        @if($record->grade==0)
                        <td class="grey-text">No Grade</td>
                        @elseif($record->grade<=3)
                        <td class="green-text">Passed</td>
                        @elseif($record->grade<=4)
                        <td class="orange-text">INC</td>
                        @else
                        <td class="red-text">Failed</td>
                        @endif 
                        <td>{{$record->sem}}</td>   
 					</tr>
 					@endif
 					@endforeach
 				</tbody>
 			</table>
 		</div>
 		<div class="col s6 m6">
 			<table class="bordered">
 				<thead>
 					<tr>
 						<td>SUBJECT CODE</td>
 						<td>SUBJECT DESCRIPTION</td>
 						<td>GRADE</td>
 						<td>EVALUATION</td>
 						<td>SEMESTER</td>
 					</tr>
 				</thead>
 				<tbody>
 					@foreach($records as $record)
 					 @if($record->year=="Second Year")
 					<tr>
                        <td>{{$record->subj_code}}</td>
                        <td>{{$record->subj_description}}</td>
                        <td>{{$record->grade}}</td>
                        @if($record->grade==0)
                        <td class="grey-text">No Grade</td>
                        @elseif($record->grade<=3)
                        <td class="green-text">Passed</td>
                        @elseif($record->grade<=4)
                        <td class="orange-text">INC</td>
                        @else
                        <td class="red-text">Failed</td>
                        @endif 
                        <td>{{$record->sem}}</td>   
 					</tr>
 					@endif
 					@endforeach
 				</tbody>
 			</table>
 		</div>
 		<div class="col s6 m6">
 			<table class="bordered">
 				<thead>
 					<tr>
 						<td>SUBJECT CODE</td>
 						<td>SUBJECT DESCRIPTION</td>
 						<td>GRADE</td>
 						<td>EVALUATION</td>
 						<td>SEMESTER</td>
 					</tr>
 				</thead>
 				<tbody>
 					@foreach($records as $record)
 					 @if($record->year=="Third Year")
 					<tr>
                        <td>{{$record->subj_code}}</td>
                        <td>{{$record->subj_description}}</td>
                        <td>{{$record->grade}}</td>
                        @if($record->grade==0)
                        <td class="grey-text">No Grade</td>
                        @elseif($record->grade<=3)
                        <td class="green-text">Passed</td>
                        @elseif($record->grade<=4)
                        <td class="orange-text">INC</td>
                        @else
                        <td class="red-text">Failed</td>
                        @endif 
                        <td>{{$record->sem}}</td>   
 					</tr>
 					@endif
 					@endforeach
 				</tbody>
 			</table>
 		</div>
 		<div class="col s6 m6">
 			<table class="bordered">
 				<thead>
 					<tr>
 						<td>SUBJECT CODE</td>
 						<td>SUBJECT DESCRIPTION</td>
 						<td>GRADE</td>
 						<td>EVALUATION</td>
 						<td>SEMESTER</td>
 					</tr>
 				</thead>
 				<tbody>
 					@foreach($records as $record)
 					 @if($record->year=="Fourth Year")
 					<tr>
                        <td>{{$record->subj_code}}</td>
                        <td>{{$record->subj_description}}</td>
                        <td>{{$record->grade}}</td>
                        @if($record->grade==0)
                        <td class="grey-text">No Grade</td>
                        @elseif($record->grade<=3)
                        <td class="green-text">Passed</td>
                        @elseif($record->grade<=4)
                        <td class="orange-text">INC</td>
                        @else
                        <td class="red-text">Failed</td>
                        @endif 
                        <td>{{$record->sem}}</td>   
 					</tr>
 					@endif
 					@endforeach
 				</tbody>
 			</table>
 		</div> 		 		 		 		 		
 	</div>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  </body>
</html>