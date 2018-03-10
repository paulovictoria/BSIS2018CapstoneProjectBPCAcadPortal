@extends('admin_template')
@section('title','| Dashboard')
@section('content')	
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Dashboard</h3>
						<div class="section"></div>
						<div class="row">
							<div class="col s12 m4">
								<div class="card">
									<div class="card-content">
										<div class="card-title">
										<div class="card-image"><i class="icon-graduation-cap"></i></div>{{$students->count()}} STUDENTS</div>
									</div>	
								</div>
							</div>
							<div class="col s12 m4">
								<div class="card">
									<div class="card-content">
										<div class="card-title">
										<div class="card-image"><i class="icon-graduation-cap"></i></div>{{$professors->count()}} INSTRUCTORS</div>
									</div>	
								</div>
							</div>	
							<div class="col s12 m4">
								<div class="card">
									<div class="card-content">
										<div class="card-title">
										<div class="card-image"><i class="icon-graduation-cap"></i></div>{{$courses->count()}} COURSES</div>
									</div>	
								</div>
							</div>														
						</div>
						<div class="row">
							<div class="col s12 m12">
								<div class="card">
									<div class="card-content"></div>
								</div>	
							</div>	
						</div>
					</div>
				</div>
			</div>
			 <div class="card-action">
			</div>
		</div>
	</div>	
</div>							     	
@endsection
