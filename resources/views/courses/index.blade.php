@extends('admin_template')
@section('title','| Course')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Courses</h3>
						<div class="section"></div>
					<a href="{{ route('courses.create') }}" class="btn btn-floating light-green btn-large darken-1"><i class="material-icons">add</i></a>
					<table class="bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Course Name</th>
								<th>Course Description</th>
								<th>Type</th>
								<th>Subjects</th>
								<th>Action</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($courses as $course)
							<tr>
								{!! Form::open( ['route'=>['courses.destroy',$course->id], 'method'=>'DELETE'] ) !!}
								<td>{{ $course->id }}</td>
								<td>{{ $course->course_name }}</td>
								<td>{{ $course->course_description }}</td>
								@if($course->degree==1)
								<td>Degree</td>
								@else
								<td>Tech. Voc</td>
								@endif
								<td>{{ $course->subjects()->count() }}</td>
								<!--<td>
							 	@foreach($course->subjects as $subject) 
							 	<span>{{$subject->subj_description}}</span>
								 @endforeach
								</td> -->
								<td><a href="{{ route('courses.show',$course->id)}}" class="btn btn-floating orange lighten-2"><i class="material-icons">pageview</i></a>
								<a href="{{route('courses.edit',$course->id)}}" class="btn btn-floating blue lighten-2"><i class="material-icons">edit</i></a>	
								
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
						</div>
					</div>
				</div>
			 <div class="card-action">
			</div>
		</div>
	</div>	
</div>
@endsection