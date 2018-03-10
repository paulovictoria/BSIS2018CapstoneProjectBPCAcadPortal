@extends('main')
@section('title',"| $category->name Category")
@section('content')
<div class="section"></div>
<div class="container">	
<div class="row">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
	<h5>{{ $category->name }} Category <small>{{ $category->events()->count()}}</small> events</h5>
			</div>
			<div class="card-action">
			{!! Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE']) !!}

			<a href="{{ route('categories.edit', $category->id)}}" class="btn blue-darken-1">Edit</a>
			{{ Form::submit('Delete',['class'=>'btn red darken-1'])}}
			{!! Form::close() !!}
			</div>	
		</div>
	</div>	
	<div class="col s12 push-s2">
		<table class="bordered">
			<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Category</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
				@foreach($category->events as $event)
				<tr>
				 <td>{{ $event->id }}</td>
				 <td>{{ $event->title }}</td>
				 <td>{{ $event->category->name }}</td>
				<td><a href="{{ route('categories.show',$event->id )}}" class="btn pink">View</a></td>
				</tr>	
				@endforeach
			</tbody>	
		</table>	
	</div>	
</div>
</div>	
@endsection
