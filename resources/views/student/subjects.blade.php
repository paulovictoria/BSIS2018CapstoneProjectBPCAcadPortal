@extends('student_template')
@section('title','My Subject')
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
					<li><a href="{{route('student.subjects')}}/?year=First Year">1st Year</a></li>
					<li><a href="{{route('student.subjects')}}/?year=Second Year">2nd Year</a></li>
					<li><a href="{{route('student.subjects')}}/?year=Third Year">3rd Year</a></li>	
					<li><a href="{{route('student.subjects')}}/?year=Fourth Year">4th Year</a></li>
				</ul>
				@else
				<ul id="yearSelect" class="dropdown-content">
					<li><a href="{{route('student.subjects')}}/?year=First Year">1st Year</a></li>
					<li><a href="{{route('student.subjects')}}/?year=Second Year">2nd Year</a></li>
				</ul>
				@endif

				@if(Auth::user()->course->degree==1)  
				<ul id="downloadSelect" class="dropdown-content">
					<li><a href="{{action('StudentDashboardController@downloadPDF','First Year')}}">1st Year</a></li>
					<li><a href="{{action('StudentDashboardController@downloadPDF','Second Year')}}">2nd Year</a></li>
					<li><a href="{{action('StudentDashboardController@downloadPDF','Third Year')}}">3rd Year</a></li>	
					<li><a href="{{action('StudentDashboardController@downloadPDF','Fourth Year')}}">4th Year</a></li>
				</ul>
				 
				@else
				<ul id="downloadSelect" class="dropdown-content">
					<li><a href="{{action('StudentDashboardController@downloadPDF','First Year')}}">1st Year</a></li>
					<li><a href="{{action('StudentDashboardController@downloadPDF','Second Year')}}">2nd Year</a></li>
				</ul>
				@endif
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                    	<span class="card-title center">FIRST SEMESTER</span>

										<table class="table bordered striped" id="subject">
										    <thead>
										        <tr>
										            <td>SUBJECT CODE</td>
										            <td>SUBJECT DESCRIPTION</td>
										            <td>UNITS</td>
										        </tr>
										    </thead>
											<tbody>
							                    @foreach($subjects as $subj)
								                    @if($subj->sem=="1st Semester")
								                        <tr>
								                        <td>{{$subj->subj_code}}</td>
								                        <td>{{$subj->subj_description}}</td>
								                        <td>{{$subj->subj_units}}</td>			
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
										<table class="table bordered striped" id="subject">
										    <thead>
										        <tr>
										            <td>SUBJECT CODE</td>
										            <td>SUBJECT DESCRIPTION</td>
										            <td>UNITS</td>
										        </tr>
										    </thead>
											<tbody>
							                    @foreach($subjects as $subj)
							                    @if($subj->sem=="2nd Semester")		                    
							                        <tr>
							                        <td>{{$subj->subj_code}}</td>
							                        <td>{{$subj->subj_description}}</td>
							                        <td>{{$subj->subj_units}}</td>
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