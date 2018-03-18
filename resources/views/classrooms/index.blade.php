@extends('registrar_template')
@section('title','| Class')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
					<a href="{{ route('classrooms.create') }}" class="btn green darken-4"><i class="material-icons">create_new_folder</i> Create</a>
					<table class="table table-responsive" id="indexClassroom" width="100%">
						<thead>
							<tr class="green darken-3 white-text">
								<th>ACADEMIC YEAR</th>
								<th>Sem</th>
								<th>COURSE</th>						
								<th># STUDENTS</th>
								<th># ASSIGNS</th>
								<th>VIEW</th>
								<th>EDIT</th>
								<th>DELETE</th>
								<th>DOWNLOAD</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($classrooms as $classroom)
							<tr class="light-green lighten-5">
								<td>{{ $classroom->academic_year }}</td>
								@if($classroom->sem==1)
								<td>FIRST SEM</td>
								@else
								<td>SECOND SEM</td>
								@endif
								<td>{{ $classroom->course->course_name}}{{ $classroom->year }}{{ $classroom->section }}
								</td>
								<td>{{ $classroom->students->count() }}</td>
								<td>{{ $classroom->assigns->count() }}</td>
								<td><a href="{{ route('classrooms.show',$classroom->id)}}" class="btn white orange-text lighten-2"><i class="material-icons">pageview</i></a></td>
								<td><a href="{{ route('classrooms.edit',$classroom->id)}}" class="btn white blue-text lighten-2"><i class="material-icons">edit</i></a></td>
								<td>{!! Form::open(['route' => ['classrooms.destroy', $classroom->id], 'method' => 'DELETE']) !!}
								<button class="btn white red-text lighten-2"><i class="material-icons">delete_forever</i></button>
								{!! Form::close() !!}</td>
								<td><a href="#" class="btn white yellow-text darken-2"><i class="material-icons">file_download</i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection
@section('script')
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script>
  $(document).ready(function() {
    $('#indexClassroom').DataTable();
    
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