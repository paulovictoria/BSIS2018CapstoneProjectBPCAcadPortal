@extends('registrar_template')
@section('title','| Edit Class')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
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
						
						<h3 class="light-green-text darken-2 card-title">Edit Class</h3>
					{!! Form::model($classroom,['route'=>['classrooms.update',$classroom->id], 'method' => 'PUT'])!!}

					{{ Form::label('sem', 'Sem:') }}
					{{ Form::text('sem', null, ["class" => 'form-control']) }}

					{{ Form::label('academic_year','Academic Year:') }}
			        {{ Form::text('academic_year',null,['class'=>'form-control']) }}

			        {{ Form::label('course_id','Course')}}
			        {{Form::select('course_id',$courses,null)}}
			        <br>
			        {{ Form::label('year','Year')}}
			        {{Form::text('year',null,['class'=>'form-control'])}}
			        <br>
 					{{ Form::label('section','Section')}}
			        {{Form::text('section',null,['class'=>'form-control'])}}
			        <br>
			        {{ Form::label('students','Tag Students')}}
			        {{ Form::select('students[]',$students,null,['class'=>'select2-student', 'multiple' => 'multiple'])}}

			        {{ Form::submit('Update',['class'=>'btn light-green darken-1']) }}

					{!! Form::close() !!}
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection
@section('script')
{!! Html::script('js/select2.min.js')!!}

<script type="text/javascript">
	$('.select2-student').select2();
	$('.select2-student').select2()
	.val({!!
		json_encode($classroom->students()->pluck('student_id'))
		!!}).trigger('change');
</script>
@endsection