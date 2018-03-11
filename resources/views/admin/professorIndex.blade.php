@extends('admin_template')
@section('title','| Instructors')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Instructors</h3>
						<div class="section"></div>
					<table class="table responsive-table" id="professorIndex" cellspacing="0">
						<thead>
							<tr>
								<th>EID</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Midle Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Action</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($professors as $professor)
							<tr>
								<td>{{$professor->eid}}</td>
								<td>{{$professor->last_name}}</td>
								<td>{{$professor->first_name}}</td>
								<td>{{$professor->midle_name}}</td>
								<td>{{$professor->email}}</td>
								<td>  <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>$professor->filename])}}" width="50"></a></td>
								<td>
									<a href="{{route('professorShow',$professor->id)}}" class="btn btn-floating orange lighten-2"><i class="material-icons">pageview</i></a>
									<a href="#" class="btn btn-floating blue lighten-2"><i class="material-icons">edit</i></a>
								</td>
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
    $('#professorIndex').DataTable();
    
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