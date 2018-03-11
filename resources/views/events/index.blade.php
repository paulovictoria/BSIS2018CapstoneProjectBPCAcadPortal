@extends('admin_template')
@section('title','| Events')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Events</h3>	
				 		<a id="createEvent" class="waves-effect waves-light btn btn-floating btn-large modal-trigger light-green darken-1" href="{{route('events.create')}}"><i class="material-icons">add_a_photo</i></a>
				 		<table class="table responsive-table" id="events">
						<thead>
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Description</th>
								<th>Date</th>
								<th>Start Time</th>
								<th>End Time</th>
								<th>Place</th>
								<th>Created At</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>	
						<tbody>
							{{csrf_field()}}
							<?php $no=1; ?>
							@foreach($events as $event)
							<tr>
								<td>{{$no++}}</td>
								<td id="itemTitleEvent">{{$event->title}}</td>
								<td id="itemDescriptionEvent">{{ substr($event->description,0,20)}} {{ strlen($event->description) > 50 ? "..." : "" }}</td>
								<td>{{$event->date}}</td>
								<td>{{$event->startTime}}</td>
								<td>{{$event->endTime}}</td>
								<td>{{$event->place}}</td>
								<td>{{ date('M j,Y',strtotime($event->created_at)) }}</td>
								<td>
								
								<a href="#!event"><img class="circle" src="{{route('socials.image',['filename'=>$event->filename])}}" width="50"></a>
							
								</td>
								<td class="right">
									<a id="editButtonEvent"  class="btn btn-floating blue lighten-2" href="{{route('events.edit',$event->id)}}">
									<i class="material-icons">edit</i>
									</a>
									{!! Form::open(['route'=>['events.destroy',$event->id],'method'=>'DELETE']) !!}
									<button class="btn btn-floating red lighten-2"><i class="material-icons">delete_forever</i></button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach()					
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
    $('#events').DataTable();
    
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