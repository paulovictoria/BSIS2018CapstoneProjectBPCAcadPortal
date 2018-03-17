@extends('admin_template')
@section('title','| Create Event')
@section('stylesheets')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
 selector:'textarea',
 plugins: 'link',
 menubar: false

});
</script>
@endsection
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Create New Event</h3>	
						{!! Form::open(['route'=>'events.store' ,'files'=>'true' ]) !!}
							{{ Form::label('title','Title')}}
							{{ Form::text('title',null,['class'=>'form-control']) }}
							{{ Form::label('description','Description')}}
							{{ Form::textarea('description',null,['class'=>'form-control']) }}				
							{{ Form::label('date','Date')}}
							{{ Form::text('date',null,['class'=>'datepicker']) }}
							<div class="row">	
								<div class="col s6">
									{{ Form::label('startTime','Start Time')}}
									{{ Form::text('startTime',null,['class'=>'timepicker']) }}
								</div>
								<div class="col s6">
									{{ Form::label('endTime','End Time')}}
									{{ Form::text('endTime',null,['class'=>'timepicker']) }}
								</div>
							</div>	
							{{ Form::label('place','Destination')}}
							{{ Form::text('place',null,['class'=>'form-control']) }}
		                    <div class="file-field input-field">
		                       <div class="btn">
		                           <span>Banner</span>
		                           <input type="file" id="banner" name="banner">
		                       </div>
		                       <div class="file-path-wrapper">
		                        <input class="file-path validate" type="text">
		                      </div>
		                    </div>
		                    <div class="right-align">
							{{ Form::submit('Post',['class'=>'btn light-green darken-1']) }}
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
