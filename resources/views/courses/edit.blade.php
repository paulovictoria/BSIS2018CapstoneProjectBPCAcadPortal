@extends('admin_template')
@section('title','| Room')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Room</h3>
						<div class="section"></div>
							{!! Form::model($course,['route'=>['courses.update',$course->id],'method'=>'PUT','files'=>'true' ]) !!}
						<p class="left-align">
					     <input name="degree" type="radio" id="test1" value="1" />
					      <label for="test1">Degree</label>

					      <input name="degree" type="radio" id="test2" value="0" />
					      <label for="test2">Tech. Vocational</label>
					    </p>
					    <br>
						{{ Form::label('course_code','Course Code:') }}
						{{ Form::text('course_code',null,['class'=>'form-control']) }}

						{{ Form::label('course_name','Course Name:') }}
						{{ Form::text('course_name',null,['class'=>'form-control']) }}				
						{{ Form::label('course_description','Class Description:') }}
						{{ Form::text('course_description',null,['class'=>'form-control']) }}
						<div class="right-align">
							{{ Form::submit('Update',['class'=>'btn light-green darken-1']) }}
						</div>	
						{!! Form::close() !!}
	
						</div>
					</div>
				</div>
			 <div class="card-action center">
			</div>
		</div>
	</div>	
</div>
@endsection


