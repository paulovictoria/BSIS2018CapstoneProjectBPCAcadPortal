@extends('admin_template')
@section('title','| Show Event')
@section('content')
<main>
  	<div class="section light-green"><h4 class="center-align white-text">Events</h4></div>
		<br><br>
		<div class="divider"></div>
		<div class="row">
			<div class="col l10 offset-l2 ">
				<div class="card" id="eventsCard">
				@if(Session::has('success'))
					<div class="col s12 p">
						<div class="light-green darken-1">
							<strong>Success:</strong> {{ Session::get('success')}}
						</div>
					</div>
				@endif
				@if(count($errors)>0)
					<div class="col s12">
						<div class="red darken-1">
							<strong>Errors:</strong>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</div>
					</div>
				@endif
				 	<div class="card-content">
				 		<h5>Title: <span>{{$event->title}}</span></h5>
				 		<p class="flow-text">{{$event->description}}</p>
				 		<h5>Date: <span>{{$event->date}}</span></h5>
						<h5>{{$event->startTime}}</h5>
						<h5>{{$event->endTime}}</h5>
						<h5>{{$event->place}}</h5>
						<h5>{{ date('M j,Y',strtotime($event->created_at)) }}</h5>
				 	</div>
				</div>
			</div>	
		</div>	 		
</main>
@endsection
