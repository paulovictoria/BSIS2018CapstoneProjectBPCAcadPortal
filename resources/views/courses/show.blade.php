@extends('admin_template')
@section('title','| Course')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section"></div>
						<div class="card-content">
							<h5 class="sample">{{ $course->course_name}}</h5>
							<p class="flow-text">{{ $course->course_description }}</p>	
							<p>{{ $course->subjects()->count() }}<span> subjects</span></p>
							
					    </div>
						</div>
					</div>
				</div>
			 <div class="card-action">
			</div>
		</div>
	</div>	
</div>
@endsection