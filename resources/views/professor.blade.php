@extends('professor_template')
@section('title','Dashboard')
@section('content')
<div class="col m12">				
	<div class="row">
					<div class="col m9 offset-m3 ">
					<div class="section"></div>
						<div class="row">
							<div class="col s6 m6">
								<div class="card z-depth-4">
									<div class="card-content white">
										<div class="card-title">
										<i class="material-icons">collections_bookmark</i>
									   Classroom</div>
									</div>	
								</div>
							</div>
							<div class="col s6 m6">
								<div class="card z-depth-4">
									<div class="card-content white">
										<div class="card-title">
										<i class="material-icons">schedule</i>SCHEDULE</div>
									</div>	
								</div>
							</div>	
							<div class="col s6 m6">
								<div class="card z-depth-4">
									<div class="card-content white">
										<div class="card-title">
										<i class="material-icons">folder_open</i>FILES</div>
									</div>	
								</div>
							</div>	
							<div class="col s6 m6">
								<div class="card z-depth-4">
									<div class="card-content white">
										<div class="card-title">
										<i class="material-icons">library_books</i>GRADE BOOK</div>
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
@endsection
@section('script')
<script type="text/javascript">
	 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection