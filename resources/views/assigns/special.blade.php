@extends('admin_template')
@section('title','| Assign Classroom')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.student{
		width: 70%;
	}
	.assign{
		width: 70%;
	}

</style>
@endsection
@section('content')
<div class="col s12">					
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Individual Assign</h3>
						<div class="section">
@if(Session::has('success'))
	<div class="col s12 p">
		<div class="light-green darken-1">
			<strong>Success:</strong> {{ Session::get('success')}}
		</div>
	</div>
@endif
@if(count($errors)>0)
	<div class="col s12">
		<div class="red darken-1">
			<strong>Errors:</strong>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
	</div>
@endif
						</div>
						{!! Form::open(['route'=>'speacialAssign.store']) !!}

						{{ Form::label('student_id','Student Name') }}
						<select class="student" name="student_id">
							<option value="null">Select Student</option>
							@foreach($students as $student)
							<option value="{{$student->id}}">
							{{$student->sid}}
							{{$student->last_name}}
							{{$student->first_name}}
							{{$student->midle_name}}
							</option>
							@endforeach
						</select>	
						                       
						{{ Form::label('failed_assign','Failed Subject ')}}
						<select class="assign" name="failed_assign">
								<option value="null">Select Failed Subject</option>
							@foreach($assigns as $assign)
								<option value="{{ $assign->id }}" class="circle">
									{{$assign->classroom->academic_year.'Year'}}
									{{$assign->classroom->sem.'Sem'}}
									{{$assign->subject->subj_code}}
									{{$assign->professor->last_name.' '.$assign->professor->first_name.' '.$assign->professor->midle_name}}
								</option>
							@endforeach
						</select>

						{{ Form::label('assign_id','Re Assign')}}
						<select class="assign" name="assign_id">
								<option value="null">Select Failed Subject</option>
							@foreach($assigns as $assign)
								<option value="{{ $assign->id }}" class="circle">
									{{$assign->classroom->academic_year.'Year'}}
									{{$assign->classroom->sem.'Sem'}}
									{{$assign->subject->subj_code}}
									{{$assign->professor->last_name.' '.$assign->professor->first_name.' '.$assign->professor->midle_name}}
								</option>
							@endforeach
						</select>
	
						<div class="section"></div>
						<div class="right">
						{{ Form::submit('Save',['class'=>'btn light-green darken-2']) }}			
						</div>
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
	$('.assign').select2();
	$('.student').select2();
</script>
@endsection