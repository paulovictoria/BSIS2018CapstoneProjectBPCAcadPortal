@extends('registrar_template')
@section('title','| Create Class')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.students {
		width: 70%;
	}
	.year {
		width: 70%;
	}
	.class-section {
		width: 70%;
	}
	.course {
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
								<div class="section"></div>		
										{!! Form::open(['route'=>'classrooms.store']) !!}
								<p class="center">
							     <input name="sem" type="radio" id="test1" value="1st Semester" />
							      <label for="test1">First Sem</label>

							      <input name="sem" type="radio" id="test2" value="2nd Semester" />
							      <label for="test2">Second Sem</label>
							     <br> 
							    @if ($errors->has('sem'))
                                <span>
                                     <strong class="red-text lighten-1">Sem Field is Required</strong>
                                </span>
                         		@endif  	      
							    </p>

							    {{ Form::label('academic_year','Academic Year:') }}
							
							    {{ Form::text('academic_year',null,['class'=>'form-control','id'=>'academic_year','placeholder'=>'0000-0000']) }}
							    <br>
							    @if ($errors->has('academic_year'))
                                <span>
                                     <strong class="red-text lighten-1">Academic Year Field is Required</strong>
                                </span>
                         		@endif  

								{{ Form::label('course_id','Course')}}
								<input type="hidden" name="course_id" value="{{$course->id}}">
								<input type="text" name="course_name" value="{{$course->course_name}}" disabled="true">
								<br>	

								{{ Form::label('year','Year')}}
								@if($course->degree!=0)
								<select class="form-control year" name="year">
									<option value="First Year">First Year</option>
									<option value="Second Year">Second Year</option>
									<option value="Third Year">Third Year</option>
									<option value="Fourth Year">Fourth Year</option>	
								</select>
								@else
								<select class="form-control year" name="year">
									<option value="First Year">First Year</option>
									<option value="Second Year">Second Year</option>
								</select>
								@endif
								<br>
								@if ($errors->has('year'))
                                <span>
                                     <strong class="red-text lighten-1">Year Field is Required</strong>
                                </span>
                         		@endif 							
								{{ Form::label('section','Section')}}
								<select class="form-control class-section" name="section">
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>	
									<option value="F">F</option>
									<option value="G">G</option>
									<option value="H">H</option>
									<option value="I">I</option>
									<option value="J">J</option>
									<option value="K">K</option>	
									<option value="L">L</option>			
								</select>
								<br>	
							    @if ($errors->has('section'))
                                <span>
                                     <strong class="red-text lighten-1">Section Field is Required</strong>
                                </span>
                         		@endif 
								{{ Form::label('student','Tag Students')}}
								<select class="students" name="students[]" multiple="multiple">
									@foreach($students as $student)
										<option value="{{ $student->id }}" data-icon="{{asset('images/anonymous.jpg')}}" class="circle">
										SID:{{ $student->sid }}
										Name:{{ $student->last_name}} {{ $student->first_name}}>
										</option>
									@endforeach
								</select>
	
								<div class="section"></div>

								<div class="col s12 right-align">
							{{ Form::submit('Save',['class'=>'btn green darken-3']) }}			
								{!! Form::close() !!}</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">
	$('.students').select2();
	$('.year').select2();
	$('.class-section').select2();
	$('.course').select2();
	$(document).ready(function(){ 
       $('#academic_year').mask('0000-0000');
    });
</script>
@endsection