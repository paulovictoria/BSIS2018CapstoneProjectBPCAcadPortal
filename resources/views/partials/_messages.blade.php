@if(Session::has('success'))
	<div class="col s12 p">
		<div class="light-green darken-1">
			<strong>Success:</strong> {{ Session::get('success')}}
		</div>
	</div>
@endif
<!-- @if(count($errors)>0)
	<div class="col s12">
		<div class="red darken-1">
			<strong>Errors:</strong>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
	</div>
@endif -->
