@extends('admin_template')
@section('title','| Subjects')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<a href="{{ route('subjects.create') }}" class="btn btn-floating green darken-3 btn-large"><i class="material-icons">add</i></a>
						<table class="bordered" id="subject">
							<thead>
								<tr class="green darken-3 white-text">
									<td>CODE</td>
									<td>DESCRIPTION</td>
									<td>UNITS</td>
									<td>SEM</td>
									<td>YEAR</td>
									<td>COURSE</td>
									<td>ACTION</td>
								</tr>	
							</thead>
							<tbody>
								@foreach($subjects as $subject)
								<tr class="light-green lighten-5">
									<td>{{$subject->subj_code}}</td>
									<td>{{$subject->subj_description}}</td>
									<td>{{$subject->subj_units}}</td>
									<td>{{$subject->sem}}</td>
								    <td>{{$subject->year}}</td>
								    <td>{{$subject->course->course_name}}</td>
								    <td><a href="{{route('subjects.edit',$subject->id)}}" class="btn white blue-text lighten-2"><i class="material-icons">edit</i></a></td>
								</tr>
								@endforeach
							</tbody>
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
  $(document).ready(function() {
    $('#subject').DataTable();
    
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
