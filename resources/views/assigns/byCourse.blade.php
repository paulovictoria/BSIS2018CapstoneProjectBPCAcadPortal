@extends('admin_template')
@section('title','| Assign')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
	.professor {
		width: 500%;
	}
	.subject {
		width: 500%;
	}
	.day {
		width: 500%;
	}
	.room {
		width: 500%;
	}	
</style>
@endsection
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
									<div class="yellow darken-3">
										<p class="flow-text white-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif
							@if(count($errors)>0)
							<div class="col s12">
								<div class="red darken-1">
									<strong>Errors:</strong>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</div>
							</div>
							@endif 
						</div>
						<a href="{{ route('assigns.create') }}" class="btn green darken-3"><i class="material-icons">add</i></a>
						<a href="{{route('speacialAssign.create')}}" class="btn green darken-3"><i class="material-icons">account_box</i></a>
						<table class="table responsive-table" id="assigns">
							<thead>
								<tr class="green darken-3 white-text">
									<th>ACADEMIC YEAR</th>
									<th>SEM</th>
									<th>COURSE <span>year/section</span></th>
									<th># ASSIGNS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								@foreach($classrooms as $classroom)
								<tr class="light-green lighten-5">
									<td>{{ $classroom->academic_year }}</td>
									@if($classroom->sem==1)
									<td>First Semester</td>
									@else
									<td>Second Semester</td>
									@endif
									<td>{{ $classroom->course->course_name }}
									{{ $classroom->year }}
									{{ $classroom->section }}</td>
									<td>{{$classroom->assigns->count()}}</td>
									<td>
									<a href="{{route('byCourseAssignCreate',$classroom->id)}}" class="btn white orange-text darken-2" id="buttonAssign">assign
										</a>
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
<script src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
	$('.professor').select2();
	$('.subject').select2();
	$('.room').select2();
	$('.day').select2();
</script>
<script>

  $(document).ready(function() {
    $('#assigns').DataTable();
    
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