@extends('main')
@section('title','| Tags')
@section('content')
<div class="container">
<div class="container">	
	<div class="row">
		<div class="col s12 push-s2">	
			<div class="card">
				<div class="card-action">
					{!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
					<h6>Create New Tag</h6>
					{{ Form::label('name','Name')}}
					{{ Form::text('name',null,['class'=>'form-control'])}}
					{{ Form::submit('Create New Tag',['class'=>'btn blue darken-1']) }}
					{!! Form::close() !!}
				</div>	
			</div>	
		</div>
		<div class="col s12 push-s2">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">Tags</h4>
					<table class="bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td><a href="{{ route('tags.show',$tag->id)}}" class="btn pink">View</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>	
			</div>	
		</div>	
	</div>
</div>
	
@endsection