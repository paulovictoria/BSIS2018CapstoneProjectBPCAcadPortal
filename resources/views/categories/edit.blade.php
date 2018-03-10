@extends('main')
@section('title','| $category->name Category')
@section ('content')
<div class="container">	
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
		{!! Form::model($category,['route'=>['categories.update',$category->id],'method'=>'PUT']) !!}
			{{ Form::label('name','Name:') }}
			{{ Form::text('name',null,['class'=>'form-control'])}}

			{{ Form::submit('Save Changes',['class'=>'btn green darken-1'])}}
		{!! Form::close() !!}
			</div>
	    </div>
	</div>	
</div>	
@endsection