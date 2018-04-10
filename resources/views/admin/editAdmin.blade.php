@extends('admin_template')
@section('title','| Admins')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3 m9 offset-m3">
						<div class="section"></div>
							{!! Form::model($admin,['route'=>['admin.adminUpdate',$admin->id],'method'=>'PUT']) !!}

							{{ Form::label('name','Name') }}
							{{ Form::text('name',null,['class'=>'form-control']) }}

							{{ Form::label('email','Email') }}
							{{ Form::text('email',null,['class'=>'form-control']) }}

							{{ Form::label('password','New Password') }}
							{{ Form::text('newpassword',null,['class'=>'form-control']) }}	

							{{Form::submit('save',['class'=>'btn  green darken-4 right'])}}

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
