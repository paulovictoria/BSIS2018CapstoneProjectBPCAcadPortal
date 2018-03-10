@extends('registrar_template')
@section('title','Students')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                        <h3 class="light-green-text darken-2 card-title"></h3>
                    <!-- Dropdown Trigger -->
                       <a class="dropdown-button btn light-green darken-2" href="#" data-activates="courseSelect">Course</a>
                              <!-- Dropdown Structure -->
                            
                        <ul id="courseSelect" class="dropdown-content">
                         @foreach($courses as $course)     
                            <li><a href="{{route('registrar.studentIndex')}}/?course_id={{$course->id}} ">{{$course->course_name}}</a></li> 
                         @endforeach  
                        </ul>    
            			<table class="table table-responsive" id="students">
            				<thead>
            					<tr>
            						<td>SID</td>
            						<td>Last Name</td>
            						<td>First Name</td>
            						<td>Midle Name</td>
            						<td>email</td>
            						<td>Course</td>
                                    <td>View</td>
            					</tr>	
            				</thead>
            				<tbody>
            					@foreach($students as $student)
                                @if($student->course_id != 0)
            					<tr>
            						<td>{{$student->sid}}</td>
            						<td>{{$student->last_name}}</td>
            						<td>{{$student->first_name}}</td>
            						<td>{{$student->midle_name}}</td>
            						<td>{{$student->email}}</td>
            						<td>{{$student->course->course_name}}</td>
            						<td><a href="{{route('registrar.studentShow',$student->id)}}" class="btn orange darken-2"><i class="icon-monitor"></i> View</a></td>
            					</tr>
                                @endif
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
    $('#students').DataTable();
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