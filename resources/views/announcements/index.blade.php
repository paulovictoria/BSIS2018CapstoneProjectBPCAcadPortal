@extends('admin_template')
@section('title','| Announcements')

@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5"">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 p">
									<div class="light-green darken-1">
										<strong>Success:</strong> {{ Session::get('success')}}
									</div>
								</div>
							@endif
						</div>            		
				 		<a id="createEvent" class="waves-effect waves-light btn btn-floating btn-large modal-trigger green darken-4" href="{{route('announcements.create')}}"><i class="material-icons">add_a_photo</i></a>
				 		<table class="table responsive-table" id="announcements">
						<thead>
							<tr class="green darken-3 white-text">
								<td>NO.</td>
								<td>TITLE</td>
								<td>DESCRIPTION</td>
								<td>DATE</td>
								<td>CREATED AT</td>
								<td>IMAGE</td>
								<td>ACTION</td>
							</tr>
						</thead>	
						<tbody>
							{{csrf_field()}}
							<?php $no=1; ?>
							@foreach($announcements as $announcement)
							<tr class="light-green lighten-5">
								<td>{{$no++}}</td>
								<td id="itemTitleEvent">{{$announcement->title}}</td>
								<td id="itemDescriptionEvent">{{ substr(strip_tags($announcement->description),0,20)}} {{ strlen(strip_tags($announcement->description)) > 50 ? "..." : "" }}</td>
								<td>{{$announcement->date}}</td>
								<td>{{ date('M j,Y',strtotime($announcement->created_at)) }}</td>
								<td><a href="#"><img class="circle" src="{{route('socials.image',['filename'=>$announcement->filename])}}" width="50"></a></td>
								<td class="right">
									<a id="editButtonEvent"  class="btn white blue-text lighten-2" href="{{route('announcements.edit',$announcement->id)}}">
									<i class="material-icons">edit</i>
									</a>
									{!! Form::open(['route'=>['announcements.destroy',$announcement->id],'method'=>'DELETE']) !!}
									<button class="btn white red-text lighten-2 waves-effect waves-light"><i class="material-icons">delete_forever</i></button>
									{!! Form::close() !!}
									
							
								</td>
							</tr>
							@endforeach()					
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
    $('#announcements').DataTable();
    
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