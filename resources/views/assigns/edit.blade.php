@extends('admin_template')
@section('title','Edit Assign')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.classroom{
		width: 70%;
	}
	.professor {
		width: 70%;
	}
	.subject {
		width: 70%;
	}
	.day {
		width: 70%;
	}
	.room {
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
								<h3 class="light-green-text darken-2 card-title">Edit Classrom</h3>
								<div class="section"></div>
					{!! Form::model($assign,['route'=>['assigns.update',$assign->id],'method'=>'PUT']) !!}

					{{ Form::label('classroom_id','Class') }}
					{{ Form::select('classroom_id',$classrooms,null,['class'=>'classroom']) }}

					{{ Form::label('professor_id','Instructor') }}
					{{ Form::select('professor_id',$professors,null,['class'=>'professor']) }}	

					{{ Form::label('subject_id','Subject') }}
					{{ Form::select('subject_id',$subjects,null,['class'=>'professor']) }}						

					{{ Form::label('schedule','Schedule') }}
					<br>
					{{ Form::label('day_id','Day') }}
					{{ Form::select('day_id',$days,null,['class'=>'day']) }}
								 @if ($errors->has('day'))
		                                <span>
		                                     <strong class="red-text lighten-1">Day Field is Required</strong>
		                                </span>
		                          @endif 
						<div class="row">	
							<div class="col s6">
								{{ Form::label('startTime','Start Time')}}
								{{ Form::text('startTime',null,['class'=>'timepicker']) }}
								 @if ($errors->has('startTime'))
		                                <span>
		                                     <strong class="red-text lighten-1">Start Time Field is Required</strong>
		                                </span>
		                          @endif 
							</div>							
							<div class="col s6">
								{{ Form::label('endTime','End Time')}}
								{{ Form::text('endTime',null,['class'=>'timepicker']) }}
								 @if ($errors->has('endTime'))
		                                <span>
		                                     <strong class="red-text lighten-1">End Time Field is Required</strong>
		                                </span>
		                          @endif 								
							</div>
						</div>						

					{{ Form::label('room_id','Room') }}
					{{ Form::select('room_id',$rooms,null,['class'=>'room']) }}						
					<div class="section"></div>
					<div class="right">
					{{ Form::submit('Save Canges',['class'=>'btn light-green darken-2']) }}		
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
{!! Html::script('js/select2.min.js')!!}

<script type="text/javascript">
	$('.classroom').select2();
	$('.professor').select2();
	$('.subject').select2();
	$('.day').select2();
	$('.room').select2();
</script>
@endsection