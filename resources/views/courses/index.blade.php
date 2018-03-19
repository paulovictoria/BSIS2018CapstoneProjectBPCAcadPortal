@extends('admin_template')
@section('title','| Courses')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 center">
									<div class="yellow darken-3">
										<p class="flow-text white-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif
						</div>
					<a href="{{ route('courses.create') }}" class="btn btn-floating green darken-3 btn-large"><i class="material-icons">add</i></a>
					<table class="bordered">
						<thead>
							<tr class="green darken-3 white-text">
								<td>COURSE</td>
								<td>DESCRIPTION</td>
								<td>TYPE</td>
								<td># SUBJECTS</td>
								<td>ACTION</td>
							</tr>	
						</thead>
						<tbody>
							@foreach($courses as $course)
							<tr class="light-green lighten-5">
								{!! Form::open( ['route'=>['courses.destroy',$course->id], 'method'=>'DELETE'] ) !!}
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
								<td><a href="{{ route('courses.show',$course->id)}}" class="btn white orange-text lighten-2"><i class="material-icons">pageview</i></a>
								<a href="{{route('courses.edit',$course->id)}}" class="btn white blue-text lighten-2"><i class="material-icons">edit</i></a>	
								
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