@extends('admin_template')
@section('title','| Subjects')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Subjects</h3>
						<div class="section"></div>
						<a href="{{ route('subjects.create') }}" class="btn btn-floating light-green btn-large darken-1"><i class="icon-add-to-list"></i></a>
						<table class="bordered" id="subject">
							<thead>
								<tr>
									<th>ID</th>
									<th>Subject Code</th>
									<th>Subject Description</th>
									<th>Subject Units</th>
									<th>Sem</th>
									<th>Year</th>
								</tr>	
							</thead>
							<tbody></tbody>
						</table>
						</div>
					</div>
				</div>
			 <div class="card-action center">
			</div>
		</div>
	</div>	
</div>
@endsection
@section('script')
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready(function () {
        $('#subject').DataTable({
            "processing": true,
            "serverSide": true,
          	"ajax": "{{route('allsubjects')}}",
          	"columns":[
          		{"data":"id"},
          		{"data":"subj_code"},
          		{"data":"subj_description"},
          		{"data":"subj_units"},
          		{"data":"sem"},
          		{"data":"year"}
          	]		 
        });
    });
</script>  
@endsection
