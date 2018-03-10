@extends('professor_template')
@section('title','| Dashboard')
@section('content') 
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col m9 offset-m3 ">
					<div class="section"></div>
						<div class="row">
							<div class="col s6 m6">
								<div class="card">
									<div class="card-content orange lighten-2">
										<div class="card-title">
										<div class="card-list"><i class="icon-book"></i></div>CLASSROOM</div>
									</div>	
								</div>
							</div>
							<div class="col s6 m6">
								<div class="card">
									<div class="card-content blue lighten-2">
										<div class="card-title">
										<div class="card-folder"><i class="icon-watch"></i></div>FILES</div>
									</div>	
								</div>
							</div>	
							<div class="col s6 m6">
								<div class="card">
									<div class="card-content red lighten-2">
										<div class="card-title">
										<div class="card-image"><i class="icon-book"></i></div>GRADE BOOK</div>
									</div>	
								</div>
							</div>	
							<div class="col s6 m6">
								<div class="card">
									<div class="card-content green lighten-2">
										<div class="card-title">
										<div class="card-image"><i class="icon-watch"></i></div>SCHEDULE</div>
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
			<div class="card-action"></div>
		</div>
	</div>	
</div>       
@endsection
