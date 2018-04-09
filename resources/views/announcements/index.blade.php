@extends('admin_template')
@section('title','| Announcements')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5"">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3 m9 offset-m3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 center">
									<div class="yellow darken-3">
										<p class="flow-text white-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif
						</div>            		
				 		<a id="createEvent" class="waves-effect waves-light btn btn-floating btn-large modal-trigger green darken-4 tooltipped" data-position="bottom" data-tooltip="Create New Announcement" href="{{route('announcements.create')}}"><i class="material-icons">add_circle</i></a>
				 		<table class="table responsive-table" id="announcements">
						<thead>
							<tr class="green darken-3 white-text">
								<td>NO.</td>
								<td>TITLE</td>
								<td>DESCRIPTION</td>
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
								<td>{{ date('M j,Y',strtotime($announcement->created_at)) }}</td>
								<td><a href="#"><img class="circle" src="{{route('socials.image',['filename'=>$announcement->filename])}}" width="50"></a></td>
								<td class="right">
									<a id="editButtonEvent"  class="btn white blue-text lighten-2 tooltipped" data-position="bottom" data-tooltip="Edit Announcement" href="{{route('announcements.edit',$announcement->id)}}">
									<i class="material-icons">edit</i>
									</a>
									{!! Form::open(['route'=>['announcements.destroy',$announcement->id],'method'=>'DELETE']) !!}
									<button class="btn white red-text lighten-2 waves-effect waves-light tooltipped" data-position="bottom" data-tooltip="Delete Announcement"><i class="material-icons">delete_forever</i></button>
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
  <div id="modal1" class="modal1 bottom-sheet">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
@endsection
@section('script')
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script>
	  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal1').modal('open');
  });
       
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