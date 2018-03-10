@extends('main')
@section('title','| Edit $tag->name Tag')
@section('content')
<div class="container">
	<div class="row">
		<div class="col s12 push-s2">
			<div class="card">
				<div class="card-content">
					{!! Form::model($tag,['route'=>['tags.update',$tag->id],'method'=>'PUT']) !!}

						{{ Form::label('name','Name:') }}
						{{ Form::text('name',null,['class'=>'form-control']) }}

						{{ Form::submit('Save changes',['class'=>'btn green darken-1']) }}
					{!! Form::close() !!}
				</div>	
			</div>	
		</div>	
	</div>	
</div>	
@endsection
