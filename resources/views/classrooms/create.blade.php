@extends('registrar_template')
@section('title','| Create Class')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.students {
		width: 70%;
	}
</style>
@endsection
@section('content')
		<div class="col s12">
			<div class="section center">
			</div>
			<div class="section center">
			</div>	
			<div class="section center">
			</div>					
			<div class="section">
				<div class="card z-depth-1">
					<div class="card-content">
						<div class="row">
							<div class="col s9 offset-s3">
								<h3 class="light-green-text darken-2 card-title">Manage Classroom</h3>
								<div class="section"></div>				{!! Form::open(['route'=>'classrooms.store']) !!}
				<p class="center">
			     <input name="sem" type="radio" id="test1" value="1" />
			      <label for="test1">First Sem</label>

			      <input name="sem" type="radio" id="test2" value="2" />
			      <label for="test2">Second Sem</label>
			    </p>
			    {{ Form::label('academic_year','Academic Year:') }}
			    {{ Form::text('academic_year',null,['class'=>'form-control']) }}
			    <br> 
				{{ Form::label('course_id','Course')}}
				<select class="form-control" name="course_id">
					@foreach($courses as $course)
						<option value="{{ $course->id }}">{{ $course->course_name }}</option>
					@endforeach
				</select>
				<br>
				{{ Form::label('year','Year')}}
				<select class="form-control" name="year">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>	
				</select>
				<br>
				{{ Form::label('section','Section')}}
				<select class="form-control" name="section">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>	
					<option value="F">F</option>
					<option value="G">G</option>		
				</select>
				<br>	

				{{ Form::label('student','Tag Students')}}
				<select class="students" name="students[]" multiple="multiple">
					@foreach($students as $student)
						<option value="{{ $student->id }}" data-icon="{{asset('images/anonymous.jpg')}}" class="circle">
						SID:{{ $student->sid }}
						Name:{{ $student->last_name}} {{ $student->first_name}}>
						</option>
					@endforeach
				</select>	
				<br>


			{{ Form::submit('Save',['class'=>'btn light-green darken-1']) }}			
				{!! Form::close() !!}
							</div>
						</div>
					</div>
					<div class="card-action">
					</div>
				</div>
			</div>	
		</div>
@endsection
@section('script')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
	$('.students').select2();
</script>
@endsection