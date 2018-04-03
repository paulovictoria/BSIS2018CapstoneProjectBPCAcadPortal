@extends('admin_template')
@section('title','Manage Room')
@section('content')
<div class="col s12">		
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3 m9 offset-m3">
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
						</div> 
							<h3 class="light-green-text darken-2 card-title">Manage New Room</h3>
								<div class="section"></div>
								{!! Form::open(['route'=>'rooms.store']) !!}
									{{ Form::label('room_code','Room Code') }}
									{{ Form::text('room_code',null,['class'=>'form-control']) }}

									{{ Form::label('room_description','Room Description') }}
									{{ Form::text('room_description',null,['class'=>'form-fontrol']) }}

									{{ Form::label('capacity','Room Capacity') }}
									{{ Form::text('capacity',null,['class'=>'form-control'])}}

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