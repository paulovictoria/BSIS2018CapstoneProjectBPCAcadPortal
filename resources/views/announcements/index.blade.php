@extends('admin_template')
@section('title','| Announcements')
@section('stylesheets')

<link href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
@endsection
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">

            		<h3 class="light-green-text darken-2 card-title">Announcements</h3>
				 		<a id="createEvent" class="waves-effect waves-light btn btn-floating btn-large modal-trigger light-green darken-1" href="{{route('announcements.create')}}"><i class="icon-add-to-list"></i></a>
				 		<table class="table responsive-table" id="announcements">
						<thead>
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Description</th>
								<th>Date</th>
								<th>Created At</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>	
						<tbody>
							{{csrf_field()}}
							<?php $no=1; ?>
							@foreach($announcements as $announcement)
							<tr>
								<td>{{$no++}}</td>
								<td id="itemTitleEvent">{{$announcement->title}}</td>
								<td id="itemDescriptionEvent">{{ substr($announcement->description,0,20)}} {{ strlen($announcement->description) > 50 ? "..." : "" }}</td>
								<td>{{$announcement->date}}</td>
								<td>{{ date('M j,Y',strtotime($announcement->created_at)) }}</td>
								<td><a href="#"><img class="circle" src="{{route('socials.image',['filename'=>$announcement->filename])}}" width="50"></a></td>
								<td class="right">
									<a id="editButtonEvent"  class="btn btn-floating blue lighten-2" href="{{route('announcements.edit',$announcement->id)}}">
									<i class="icon-pencil"></i>
									</a>
									{!! Form::open(['route'=>['announcements.destroy',$announcement->id],'method'=>'DELETE']) !!}
									<button class="btn btn-floating red lighten-2 waves-effect waves-light"><span class="icon-trash"></span></button>
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

<script type="text/javascript" src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>  
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
</script>  
@endsection