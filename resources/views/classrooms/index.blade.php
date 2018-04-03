@extends('registrar_template')
@section('title','| Class')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 center">
									<div class="yellow darken-3">
										<p class="flow-text white-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif
						</div>  
					<a href="{{ route('classrooms.create') }}" class="btn green darken-3"><i class="material-icons">add_circle</i></a>
					<a class="dropdown-button btn green darken-3" href="#" data-activates="courseSelect">Create by Course</a>
                              <!-- Dropdown Structure -->
                            
                        <ul id="courseSelect" class="dropdown-content">
                         @foreach($courses as $course)     
                            <li><a href="{{route('byCourseCreate',$course->id)}} ">{{$course->course_name}}</a></li> 
                         @endforeach  
                        </ul>   
					<table class="table table-responsive" id="indexClassroom" width="100%">
						<thead>
							<tr class="green darken-3 white-text">
								<th>ACADEMIC YEAR</th>
								<th>Sem</th>
								<th>COURSE Year/Section</th>						
								<th># STUDENTS</th>
								<th># ASSIGNS</th>
								<th>ACTION</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($classrooms as $classroom)
							<tr class="light-green lighten-5">
								<td>{{ $classroom->academic_year }}</td>
								@if($classroom->sem==1)
								<td>FIRST SEM</td>
								@else
								<td>SECOND SEM</td>
								@endif
								<td>{{ $classroom->course->course_name.' '.' ' }}
								{{ $classroom->year.' '}}
								{{ $classroom->section}}</td>
								<td>{{ $classroom->students->count() }}</td>
								<td>{{ $classroom->assigns->count() }}</td>
								<td><a href="{{ route('classrooms.show',$classroom->id)}}" class="btn white green-text darken-2 tooltipped" data-position="bottom" data-tooltip="View Classroom"><i class="material-icons">pageview</i></a>
								<a href="{{ route('classrooms.edit',$classroom->id)}}" class="btn white blue-text lighten-2 tooltipped" data-position="bottom" data-tooltip="Edit Classroom"><i class="material-icons">edit</i></a>
								<a href="#" class="btn white yellow-text darken-2 tooltipped" data-position="bottom" data-tooltip="Download Classroom"><i class="material-icons">file_download</i></a></td>
							</tr>
							@endforeach
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
    $('#indexClassroom').DataTable();
    
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