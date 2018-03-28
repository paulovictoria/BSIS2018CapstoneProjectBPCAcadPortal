@extends('admin_template')
@section('title','| Class')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">                    
						<a class="dropdown-button btn green darken-3" href="#" data-activates="courseSelect">Select Course</a>
                        <ul id="courseSelect" class="dropdown-content">
                         @foreach($courses as $course)     
                            <li><a href="{{route('byCourseAssignIndex',$course->id)}} ">{{$course->course_name}}</a></li> 
                         @endforeach  
                        </ul>  
                        <div class="row">
                        	@foreach($courses as $course)  
                        	<div class="col s4">
	                        	<div class="card horizontal z-depth-5">
					              <div class="card-image">
					              </div>
					              <div class="card-stacked">
					                <div class="card-content">
					                  <h5 class=" green-text">{{$course->course_name}}</h5>
					                  <h6 class=" green-text">{{$course->course_description}}</h6>
					                </div>
					                <div class="card-action">
					                <a href="{{route('byCourseAssignIndex',$course->id)}} ">View</a>
					                </div>
					              </div>
	                        	</div>
                        	</div>
                        	 @endforeach 
                        </div> 

					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection
