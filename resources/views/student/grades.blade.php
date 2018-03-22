@extends('student_template')
@section('title','My Grades')
@section('content')
<div class="col m12">				
	<div class="section">
		<div class="card transparent">
			<div class="card-content">
				<div class="row">
					<div class="col l9 offset-l3">
						 <div class="row">
						 	<div class="col s6">	
   							 <a class="dropdown-button btn green darken-3" href="#" data-activates="yearSelect">Select Academic Year</a>
   							 <a class="dropdown-button btn green darken-3" href="#" data-activates="downloadSelect">Download PDF</a>
							</div>
						  </div>
				 <!-- Dropdown Structure -->
					@if(Auth::user()->course->degree==1)  
					<ul id="yearSelect" class="dropdown-content">
						<li><a href="{{route('student.grades')}}/?year=First Year">1st Year</a></li>
						<li><a href="{{route('student.grades')}}/?year=Second Year">2nd Year</a></li>
						<li><a href="{{route('student.grades')}}/?year=Third Year">3rd Year</a></li>	
						<li><a href="{{route('student.grades')}}/?year=Fourth Year">4th Year</a></li>
					</ul>
					@else
					<ul id="yearSelect" class="dropdown-content">
						<li><a href="{{route('student.grades')}}/?year=First Year">1st Year</a></li>
						<li><a href="{{route('student.grades')}}/?year=Second Year">2nd Year</a></li>
					</ul>
					@endif	
	              @if(Auth::user()->course->degree==1)  
	              <ul id="downloadSelect" class="dropdown-content">
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','First Year')}}">1st Year</a></li>
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','Second Year')}}">2nd Year</a></li>
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','Third Year')}}">3rd Year</a></li> 
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','Fourth Year')}}">4th Year</a></li>
	              </ul>              
	              @else
	              <ul id="downloadSelect" class="dropdown-content">
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','First Year')}}">1st Year</a></li>
	                <li><a href="{{action('StudentDashboardController@gradedownloadPDF','Second Year')}}">2nd Year</a></li>
	              </ul>
	              @endif					
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                    	<span class="card-title center">FIRST SEMESTER</span>
										<table class="table bordered" id="grade">
											    <thead>
											        <tr>
											        	<td>SUBJECT CODE</td>
											            <td>SUBJECT DESCRIPTION</td>
											            <td>GRADE</td>
											            <td>EVALUATION</td>
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
                            </div>
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                    	<span class="card-title center">SECOND SEMESTER</span>
										<table class="table bordered" id="grade">
										    <thead>
										        <tr>
										        	<td>SUBJECT CODE</td>
										            <td>SUBJECT DESCRIPTION</td>
										            <td>GRADE</td>
										            <td>EVALUATION</td>
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
                            </div>                                                     
                        </div>				
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection
@section('script')
<script type="text/javascript">
	 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection