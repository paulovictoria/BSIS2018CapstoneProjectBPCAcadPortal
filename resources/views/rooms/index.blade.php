@extends('admin_template')
@section('title','BPC Rooms')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Rooms</h3>
				 		<a id="createRoom" class="waves-effect waves-light btn btn-floating btn-large modal-trigger light-green darken-1" href="{{route('rooms.create')}}"><i class="material-icons">edit</i></a>								
								<div class="section"></div>
								<table class="table responsive-table" id="rooms">
									<thead>
										<tr>
											<th>Room Code</th>
											<th>Room Description</th>
											<th>Room Capacity</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rooms as $room)
										<tr>
											<td>{{ $room->room_code }}</td>
											<td>{{ $room->room_description }}</td>
											<td>{{ $room->capacity }}</td>
											<td>
												<a href="#" class="btn btn-floating orange lighten-2"><i class="material-icons">pageview</i></a>
												<a href="{{route('rooms.edit',$room->id)}}" class="btn btn-floating blue lighten-2"><i class="material-icons">edit</i></a>
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
    $('#rooms').DataTable();
    
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