@extends('student_template')
@section('title','My Subject')
@section('content')
<div class="col m12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col l9 offset-l3">
						<h3 class="light-green-text darken-2 card-title center">SUBJECTS</h3>
				  <!-- Dropdown Trigger -->
				  <a class="dropdown-button btn light-green" href="#" data-activates="yearSelect">Choose</a><br>
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
				  <br>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="card">
                                    <div class="card-content">
                                    	<span class="card-title center">1st Semester</span>
										<table class="table bordered" id="subject">
										    <thead>
										        <tr>
										            <th>Subject Code</th>
										            <th>Subject Description</th>
										            <th>Units</th>
										            <th>Sem</th>
										        </tr>
										    </thead>
											<tbody>
							                    @foreach($subjects as $subj)
								                    @if($subj->sem=="1st Semester")
								                        <tr>
								                        <td>{{$subj->subj_code}}</td>
								                        <td>{{$subj->subj_description}}</td>
								                        <td>{{$subj->subj_units}}</td>
								                        <td>{{$subj->sem}}</td>
								                        </tr>  
								                    @endif           
							                    @endforeach
											</tbody>
										</table>
                                    </div>  
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card">
                                    <div class="card-content">
                                    	<span class="card-title center">2nd Semester</span>
										<table class="table bordered" id="subject">
										    <thead>
										        <tr>
										            <th>Subject Code</th>
										            <th>Subject Description</th>
										            <th>Units</th>
										            <th>Sem</th>
										        </tr>
										    </thead>
											<tbody>
							                    @foreach($subjects as $subj)
							                    @if($subj->sem=="2nd Semester")		                    
							                        <tr>
							                        <td>{{$subj->subj_code}}</td>
							                        <td>{{$subj->subj_description}}</td>
							                        <td>{{$subj->subj_units}}</td>
							                        <td>{{$subj->sem}}</td>
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
