@extends('registrar_template')
<?php $classroomClass = htmlspecialchars($classroom->class_code); ?>
@section('title',"| $classroomClass ")
@section('content')
<main>
    <div class="section light-green"><h4 class="center-align white-text">Classroom</h4></div>
    <br><br>
    <div class="divider"></div> 
	<div class="row">
		<div class="col l10 offset-l2">		
			<div class="card">
				<div class="card-content">
					<div class="card-title">
						<h6>ACADEMIC YEAR</h6><p class="flow-text"> {{ $classroom->academic_year }}</p>
					<h6>Course Year and Section</h6>
					<p class="flow-text">
						{{ $classroom->course->course_name}}
						{{ $classroom->year }}
						{{ $classroom->section }}
					</p>					
					</div>
					<table class="table table-responsive" id="showClassroom" cellspacing="0">
						<thead>
							<tr>
								<th>SID #</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Midle Name</th>
								<th>Image</th>
							</tr>
						</thead>
						<tbody>
							@foreach($classroom->students as $student) 
							 <tr>
							 	<td>{{$student->sid}}</td>
							 	<td>{{$student->last_name}}</td>
							 	<td>{{$student->first_name}}</td>
							 	<td>{{$student->midle_name}}</td>
								<td>  <a href=" "><img class="circle" src="{{route('user.image',['filename'=>$student->sid. '-' .$student->id. '.jpg'])}}" width="50"></a></td>			 	
							 </tr>
							@endforeach
						</tbody>
					</table>	
				</div>	
			</div>
		</div>	
	</div>	
</main>			
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