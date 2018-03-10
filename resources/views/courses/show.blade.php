@extends('admin_template')
@section('title','| View Course')
@section('content')
<main>
	<div class="section light-green"><h4 class="center-align white-text">Course</h4></div>
		<br><br>
		<div class="divider"></div>	
    <div class="row">
        <div class="col l10 offset-l2">
			<div class="card">
				<div class="card-content">
					<h5 class="sample">{{ $course->course_name}}</h5>
					<p class="flow-text">{{ $course->course_description }}</p>	
					<p>{{ $course->subjects()->count() }}</p>
					<a href="#" class="btn light-green darken-1">Back</a>
			    </div>
				<div class="card-action">			 
				</div>	
			</div>
		</div>	
	</div>	
</div>	
</main>
@endsection