@extends('registrar_template')
@section('title','| Edit Class')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section">
							@if(count($errors)>0)
								<div class="col s12 center">
									<div class="red darken-3">
										@foreach($errors->all() as $error)
										<p class="flow-text white-text">{{ $error }}</p>
										@endforeach
									</div>
								</div>
							@endif
							<div class="row">
							{!! Form::model($classroom,['route'=>['classrooms.update',$classroom->id], 'method' => 'PUT'])!!}
								<div class="col s12 center-align">
							    	<input name="sem" type="radio" id="test1" value="1st Semester" />
							      	<label for="test1">First Sem</label>
							      	<input name="sem" type="radio" id="test2" value="2nd Semester" />
							      	<label for="test2">Second Sem</label>
							    </div>
							    <div class="col s12">
							    {{ Form::label('academic_year','Academic Year:') }}
							    {{ Form::text('academic_year',null,['class'=>'form-control','id'=>'academic_year','placeholder'=>'0000-0000']) }}
								</div>
								<div class="col s12">
						        {{ Form::label('course_id','Course')}}
						        {{Form::select('course_id',$courses,null,['class'=>'course','style'=>'width:100%;' ])}}
								</div>
								<div class="col s12">		 
								{{ Form::label('year','Year')}}
								<select class="form-control year" name="year">
									<option value="First Year">First Year</option>
									<option value="Second Year">Second Year</option>
									<option value="Third Year">Third Year</option>
									<option value="Fourth Year">Fourth Year</option>	
								</select>
								</div>
								<div class="col s12">
								{{ Form::label('section','Section')}}	
								<select class="form-control class-section" name="section">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>	
									<option value="F">F</option>
									<option value="G">G</option>		
								</select>
							  </div>
							  <div class="col s12">
						        {{ Form::label('students','Tag Students')}}
						        {{ Form::select('students[]',$students,null,['class'=>'select2-student', 'multiple' => 'multiple','style'=>'width:100%;'])}}
			    			</div>    

			       			<div class="section"></div>
			       			<div class="col s12 right-align">
			       				<div class="section"></div>
			        		{{ Form::submit('Update',['class'=>'btn green darken-2']) }}
			        		</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection
@section('script')
{!! Html::script('js/select2.min.js')!!}

<script type="text/javascript">
	$('.course').select2();
	$('.select2-student').select2();
	$('.select2-student').select2()
	.val({!!
		json_encode($classroom->students()->pluck('student_id'))
		!!}).trigger('change');
</script>
@endsection