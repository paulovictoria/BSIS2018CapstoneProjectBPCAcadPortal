@extends('admin_template')
@section('title','| Assign')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Assigns Index</h3>
						<div class="section"></div>
						<a href="{{ route('assigns.create') }}" class="btn btn-floating light-green btn-large darken-1"><i class="icon-area-graph"></i></a>
						<table class="table responsive-table" id="assigns">
							<thead>
								<tr>
									<th>Academic Year</th>
									<th>Class Course</th>
									<th>Year</th>
									<th>Section</th>
									<th>Instructor</th>
									<th>Subject</th>
									<th>Schedule</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($assigns as $assign)
								<tr>
									<td>{{ $assign->classroom->academic_year }}</td>
									<td>{{ $assign->classroom->course->course_name }}</td>
									<td>{{ $assign->classroom->year }}</td>
									<td>{{ $assign->classroom->section }}</td>
									<td>{{ $assign->professor->last_name}} {{ $assign->professor->first_name}}</td>
									<td>{{ $assign->subject ->subj_description}}</td>
									<td>{{ $assign->schedule }}</td>
									<td><a href="{{ route('assigns.show',$assign->id) }}" class="btn btn-floating orange lighten-2"><i class="icon-head"></i></a>
									 <a href="{{ route('assigns.edit',$assign->id) }}" class="btn btn-floating blue lighten-2"><i class="icon-pencil"></i></td>
								</tr>
								@endforeach
							</tbody>	
					    </table>
						</div>
					</div>
				</div>
			 <div class="card-action">
			</div>
		</div>
	</div>	
</div>	
@endsection
@section('script')
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script>
  $(document).ready(function() {
    $('#assigns').DataTable();
    
    var table = $('#data-table-row-grouping').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    });
 
    // Order by the grouping
    $('#data-table-row-grouping tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );
</script>  
@endsection