@extends('admin_template')
@section('title','BPC Rooms')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 center">
									<div class="green darken-3">
										<p class="flow-text white-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif
						</div>
				 		<a id="createRoom" class="waves-effect waves-light btn btn-floating btn-large modal-trigger green darken-4 tooltipped" data-position="bottom" data-tooltip="Create New Room" href="{{route('rooms.create')}}"><i class="material-icons">add_circle</i></a>		
				 		<div class="section"></div>						
								<table class="table responsive-table" id="rooms">
									<thead>
										<tr class="green darken-3 white-text">
											<th>ROOM CODE</th>
											<th>ROOM DESCRIPTION</th>
											<th>ROOM CAPACITY</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										@foreach($rooms as $room)
										<tr class="light-green lighten-5">
											<td>{{ $room->room_code }}</td>
											<td>{{ $room->room_description }}</td>
											<td>{{ $room->capacity }}</td>
											<td>
												<a href="#" class="btn white orange-text lighten-2"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="View Room">pageview</i></a>
												<a href="{{route('rooms.edit',$room->id)}}" class="btn white green-text darken-2 tooltipped"  data-position="bottom" data-tooltip="Edit Room"><i class="material-icons">edit</i></a>
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