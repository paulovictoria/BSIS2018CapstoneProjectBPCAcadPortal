@extends('professor_template')
@section('title','| Grade Individual')

@section('content')
<div class="container">

	{!! Form::model($student,['route'=>['grades.store']]) !!}
		<div class="row">
			<div class="col s12 offset-s2">
				<div class="card">
				 	<div class="card-content">
						{{ Form::text('sid',null,['class'=>'form-control']) }}
						{{ Form::text('last_name',null,['class'=>'form-control']) }}
						{{ Form::text('first_name',null,['class'=>'form-control']) }}
						{{ Form::text('sid',null,['class'=>'form-control']) }}	
						<br>	
						<select class="form-control" name="student_id">
						<option value="{{ $student->id }}">{{ $student->id }}</option>
						</select>

						<br>
						<!-- subject goes here -->
				 	 	 @foreach($student->classrooms as $stud)
				 	 		@foreach($stud->assigns as $sub)
				 	 			<select class="form-control" name="subject_id">
								<option value="{{ $sub->subject->id }}">{{ $sub->subject->subj_description}}</option>
								</select>
				 	 		@endforeach	
				 	 	@endforeach 
		


						<br>
						{{ Form::text('grade',null,['class'=>'form-control']) }}

					</div>

				    <div class="card-action">			 

						{{ Form::submit('Save Changes',['class'=>'btn green darken-1']) }}
					
					</div>	
				</div>
			</div>
			{!! Form::close() !!}
	</div>
</div>
@endsection