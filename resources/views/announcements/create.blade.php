@extends('admin_template')
@section('title','| Create Announcement')
@section('stylesheets')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
tinymce.init({
 selector:'textarea',
 plugins: 'link',
 menubar: false
});
</script>
@endsection
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

						<h3 class="light-green-text darken-2 card-title">Create New Announcement</h3>
						{!! Form::open(['route'=>'announcements.store' ,'files'=>'true' ]) !!}

							@foreach($students as $student)
								<input type="hidden" name="students[]" value="{{$student->mobile}}">
							@endforeach
							@foreach($professors as $professor)
								<input type="hidden" name="professors[]" value="{{$professor->mobile}}">
							@endforeach

							{{ Form::label('title','Title')}}
							{{ Form::text('title',null,['class'=>'form-control']) }}
							{{ Form::label('description','Description')}}
							{{ Form::textarea('description',null,['class'=>'form-control']) }}				

		                    <div class="file-field input-field">
		                       <div class="btn">
		                           <span>Image</span>
		                           <input type="file" id="banner" name="banner">
		                       </div>
		                       <div class="file-path-wrapper">
		                        <input class="file-path validate" type="text">
		                      </div>
		                    </div>
		                    <div class="right-align">
							{{ Form::submit('Post',['class'=>'btn green darken-3']) }}
							</div>
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
<script>
	CKEDITOR.replace( 'description' );
</script>
@endsection