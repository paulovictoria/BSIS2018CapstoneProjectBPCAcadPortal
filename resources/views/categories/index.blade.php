@extends('main')
@section('title','| Categories')
@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">	
			<div class="card">
				<div class="card-action">
					{!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
					<h6>Create Category</h6>
					{{ Form::label('name','Name')}}
					{{ Form::text('name',null,['class'=>'form-control'])}}
					{{ Form::submit('Create New Category',['class'=>'btn blue darken-1']) }}
					{!! Form::close() !!}
				</div>	
			</div>	
		</div>
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<h4 class="card-title center">Categories</h4>
					<table class="bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td><a href="{{ route('categories.show',$category->id)}}" class="btn pink">View</a></td>
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