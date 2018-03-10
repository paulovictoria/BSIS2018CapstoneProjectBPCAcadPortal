@extends('main')
@section('title','| Approval')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
				<div class="card">
				 	<div class="card-content">
						<h6>SID: <span>{{ $student->sid }}</span></h6>
					    <h6>Name: <span>{{ $student->last_name }} {{ $student->first_name }}
					    </span></h6>
					    <h6>Course: <span>{{ $student->course->course_name}}</span></h6>
					     <h6>email: <span>{{ $student->email}}</span></h6>
					@if($student->approved == 0) 
					{!! Form::model($student,['route'=>['studentsApproved',$student->id],'method'=>'PUT'])!!}
					<label>Approved</label>
					<button class="btn btn-floating green"><span class="icon-check"></span></button>
					
					<label>Denied</label>
					<a href="{{route('admin.dashboard')}}" class="btn btn-floating red"><span class="icon-cross"></span></a>
					{!! Form::close() !!}
					@else
					This students Approved already
					<label>Back</label>
					<a href="{{route('admin.dashboard')}}" class="btn btn-floating red"><span class="icon-arrow"></span></a>
					@endif
				    </div>
				    <div class="card-action">			 
				    </div>	
				</div>
			</div>	
	</div>	
</div>	
@endsection