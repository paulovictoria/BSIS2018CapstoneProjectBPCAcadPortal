@extends('professor_template')
@section('title','Show')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col m9 offset-m3">
                      	<div class="card-content">
                      		<div class="card-tile">
                      			<h5>Course: <span>{{$assign->classroom->course->course_name.' '.$assign->classroom->year.' '.$assign->classroom->section}}</span></h5>
                      			<h5>Subject: <span>{{$assign->subject->subj_code}}</span></h5>
                      			<h5>Description: <span>{{$assign->subject->subj_description}}</span></h5>
                    
                           <a href="{{ route('professor.exportAssign',$assign->id) }}" class="btn">Download CSV</a>
                      		</div>
                      		<table class="bordered" id="showClassroom">
                      			<thead>
                      				<tr>
                      					<th>SID</th>
                      					<th>Name</th>
                      					<th>email</th>
                      					<th>gender</th>
                      				</tr>
                      			</thead>
                      			<tbody>
                      				@foreach($assign->classroom->students as $assStud)
                      					<tr>
                      						<td>{{$assStud->sid}}</td>
                      						<td>{{$assStud->last_name.' '.$assStud->first_name.' '.$assStud->midle_name}}</td>
                      						<td>{{$assStud->email}}</td>
                      						<td>{{$assStud->gender}}</td>
                      					</tr>
                      				@endforeach
                      			</tbody>
                      		</table>
                      	</div>
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
    $('#showClassroom').DataTable();
    
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