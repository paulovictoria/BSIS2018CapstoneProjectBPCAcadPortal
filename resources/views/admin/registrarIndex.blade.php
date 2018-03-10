@extends('admin_template')
@section('title','| Registrars')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Registrars</h3>
						<div class="section"></div>
						<a href="{{route('registrar.registration')}}" class="btn btn-floating btn-large light-green darken-1"><i class="icon-add-user"></i></a>
						<table class="table responsive-table" id="registrarIndex" cellspacing="0">
							<thead>
								<tr>
									<th>EID</th>
									<th>Last Name</th>
									<th>First Name</th>
									<th>Midle Name</th>
									<th>Email</th>
									<th>Image</th>
									<th>Action</th>
								</tr>	
							</thead>
							<tbody>
								@foreach($registrars as $registrar)
								<tr>
									<td>{{$registrar->eid}}</td>
									<td>{{$registrar->last_name}}</td>
									<td>{{$registrar->first_name}}</td>
									<td>{{$registrar->midle_name}}</td>
									<td>{{ substr($registrar->email,0,20)}} {{ strlen($registrar->email) > 30 ? "..." : ""}}</td>
									<td><a href="#!user"><img class="circle" src="{{route('user.image',$registrar->filename)}}" width="50"></a>
									</td>
									<td>
									<a href="{{route('registrarShow',$registrar->id)}}" class="btn btn-floating orange lighten-2"><i class="icon-head"></i></a>
									<a href="#" class="btn btn-floating blue lighten-2"><i class="icon-pencil"></i></a>
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
<script>
  $(document).ready(function() {
    $('#registrarIndex').DataTable();
    
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