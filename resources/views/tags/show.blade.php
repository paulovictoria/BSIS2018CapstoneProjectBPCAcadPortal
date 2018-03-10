@extends('main')
@section('title',"| $tag->name Tag")
@section('content')
<div class="container">
<div class="row">
	<div class="col s12 push-s2">
		<div class="card">
			<div class="card-content">
	<h3>{{ $tag->name }} Tag <small>{{ $tag->events()->count()}}</small> events</h3>
			</div>
			<div class="card-action">
		{!! Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
		<a href="{{ route('tags.edit', $tag->id)}}" class="btn blue-darken-1">Edit</a>
		{{ Form::submit('Delete',['class'=>'btn red darken-1'])}}
		{!! Form::close() !!}
			</div>
		</div>
	</div>	

	<div class="col s12 push-s2">
		<div class="card">
		<table class="bordered">
			<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Tags</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
				@foreach($tag->events as $event)
				<tr>
				 <td>{{ $event->id }}</td>
				 <td>{{ $event->title }}</td>
				 <td>
				 	@foreach($event->tags as $tag) 
				 	<span>{{$tag->name}}</span>
					 @endforeach
				</td>
				<td><a href="{{ route('tags.show',$event->id )}}" class="btn pink">View</a></td>
				</tr>	
				@endforeach
			</tbody>	
		</table>
		</div>	
	</div>	

</div>	
</div>
@endsection
