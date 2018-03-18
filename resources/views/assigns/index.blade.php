@extends('admin_template')
@section('title','| Assign')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
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
						<a href="{{ route('assigns.create') }}" class="btn green darken-3"><i class="material-icons">add</i></a>
						<a href="{{route('speacialAssign.create')}}" class="btn green darken-3"><i class="material-icons">account_box</i></a>
						<table class="table responsive-table" id="assigns">
							<thead>
								<tr class="green darken-3 white-text">
									<td>ACADEMIC YEAR</td>
									<td>COURSE</td>
									<td>INSTRUCTOR</td>
									<td>SUBJECT</td>
									<td>SCHEDULE</td>
									<td>ACTION</td>
								</tr>
							</thead>
							<tbody>
								@foreach($assigns as $assign)
								<tr class="light-green lighten-5">
									<td>{{ $assign->classroom->academic_year }}</td>
									<td>{{ $assign->classroom->course->course_name }}
									{{ $assign->classroom->year }}
									{{ $assign->classroom->section }}</td>
									<td>{{ $assign->professor->last_name}} {{ $assign->professor->first_name}}</td>
									<td>{{ $assign->subject ->subj_description}}</td>
									<td>{{ $assign->day->name.' '.$assign->startTime.' to '.$assign->endTime}}
									</td>
									<td><a href="{{ route('assigns.show',$assign->id) }}" class="btn white orange-text lighten-2"><i class="material-icons">pageview</i></a>
									 <a href="{{ route('assigns.edit',$assign->id) }}" class="btn white blue-text lighten-2"><i class="material-icons">edit</i></td>
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