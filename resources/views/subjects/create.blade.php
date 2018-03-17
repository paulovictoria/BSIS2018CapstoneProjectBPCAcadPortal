@extends('admin_template')
@section('title','| Create Subjects')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Create New Subject</h3>
						{!! Form::open(['route'=>'subjects.store','method'=>'POST']) !!}
						{{ Form::label('subj_code','Subject Code')}}
						{{ Form::text('subj_code',null,['class'=>'form-control'])}}

						{{ Form::label('subj_description','Subject Description')}}
						{{ Form::text('subj_description',null,['class'=>'form-control'])}}

						{{ Form::label('subj_units','Units')}}
						{{ Form::text('subj_units',null,['class'=>'form-control'])}}
						{{ Form::label('sem','Sem')}}
						<select class="form-control" name="sem">
							<option value="1st Semester">1st Semester</option>
							<option value="2nd Semester">2nd Semester</option>
						</select>
						
						<br>
						{{ Form::label('year','Year')}}
						<select class="form-control" name="year">
							<option value="First Year">First Year</option>
							<option value="Second Year">Second Year</option>
							<option value="Third Year">Third Year</option>
							<option value="Fourth Year">Fourth Year</option>
						</select>
						<br>
						{{ Form::label('course_id','Course')}}
						<select class="form-control" name="course_id">
							@foreach($courses as $course)
								<option value="{{ $course->id }}">{{ $course->course_name }}</option>
							@endforeach
						</select>
						<div class="right-align">
						{{ Form::submit('Create New Subject',['class'=>'btn blue darken-1']) }}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection