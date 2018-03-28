@extends('admin_template')
@section('title','| Assign')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.professor {
		width: 500%;
	}
	.subject {
		width: 500%;
	}
	.day {
		width: 500%;
	}
	.room {
		width: 500%;
	}	
</style>
@endsection
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
						{!! Form::open(['route'=>'assigns.store']) !!}
						                       
						@if ($errors->has('class_subj'))
                                <span>
                                     <strong class="red-text lighten-1">Already Assign the Subject to the Classroom</strong>
                                </span>
                         @endif  

								{{ Form::label('classroom_id','Classroom')}}
								<input type="hidden" name="classroom_id" value="{{$classroom->id}}">
								<input type="text" name="classroom_name" value="{{$classroom->course->course_name.' '.$classroom->year.' '.$classroom->section}}" disabled="true">
								<br>

						<div class="section"></div>
						{{ Form::label('professor_id','Instructor ')}}
						<select class="professor" name="professor_id">
									<option>Select Instructor</option>
							@foreach($professors as $professor)
									<option value="{{ $professor->id }}">
									{{ $professor->last_name }}
									{{ $professor->first_name }}
									{{ $professor->midle_name }}
								</option>
							@endforeach						
						</select>
						 @if ($errors->has('professor_id'))
                                <span>
                                     <strong class="red-text lighten-1">Instructor Field is Required</strong>
                                </span>
                          @endif 							
						<div class="section"></div>
						{{ Form::label('subject_id','Subject')}}
							<select class="subject" name="subject_id">
								<option>Select Subject</option>
								@foreach($subjects as $subject)
									<option value="{{ $subject->id }}">
										Course:{{'"'.$subject->course->course_name.'"' }}
										Year:{{ '"'.$subject->year.'"' }} 
										Sem:@if($subject->sem==1)
										 "First Sem" 
										@else
										 "Second Sem" 
										@endif
										Subject:{{'"'.$subject->subj_description.'"' }}

									</option>
								@endforeach
							</select>
						 @if ($errors->has('subject_id'))
                                <span>
                                     <strong class="red-text lighten-1">Subject Field is Required</strong>
                                </span>
                          @endif 
						<div class="section"></div>
						{{ Form::label('day_id','Day') }}
						<select class="day" name="day_id">
								<option>Select Day</option>
								@foreach($days as $day)
									<option value="{{ $day->id }}">{{ $day->name }}</option>
								@endforeach
							</select>
						 @if ($errors->has('day'))
                                <span>
                                     <strong class="red-text lighten-1">Day Field is Required</strong>
                                </span>
                          @endif 						
						<div class="section"></div>
						<div class="row">	
							<div class="col s5">
								{{ Form::label('startTime','Start Time')}}
								{{ Form::text('startTime',null,['class'=>'timepicker']) }}
								 @if ($errors->has('startTime'))
		                                <span>
		                                     <strong class="red-text lighten-1">Start Time Field is Required</strong>
		                                </span>
		                          @endif 
							</div>	
							<div class="col s2 center-align "><h5>&</h5></div>
							<div class="col s5">
								{{ Form::label('endTime','End Time')}}
								{{ Form::text('endTime',null,['class'=>'timepicker']) }}
								 @if ($errors->has('endTime'))
		                                <span>
		                                     <strong class="red-text lighten-1">End Time Field is Required</strong>
		                                </span>
		                          @endif								
							</div>

						</div>
						{{Form::label('room','Room')}}
						<select class="room" name="room_id">
							<option>Select Room</option>
							@foreach($rooms as $room)
								<option value="{{ $room->id }}" class="circle">
								{{ $room->room_code }}
								</option>
							@endforeach
						</select>
						 @if ($errors->has('room_id'))
                                <span>
                                     <strong class="red-text lighten-1">Room Field is Required</strong>
                                </span>
                          @endif		
						<div class="section"></div>
						<div class="right">
						{{ Form::submit('Save',['class'=>'btn green darken-3']) }}			
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
	$('.professor').select2();
	$('.subject').select2();
	$('.room').select2();
	$('.day').select2();
</script>
@endsection