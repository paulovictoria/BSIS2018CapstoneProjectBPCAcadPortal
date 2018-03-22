@extends('admin_template')
@section('title','| Instructors')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<div class="section"></div>
					<table class="table responsive-table" id="professorIndex" cellspacing="0">
						<thead>
							<tr class="green darken-3 white-text">
								<th>EID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Action</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($professors as $professor)
							<tr class="light-green lighten-5">
								<td>{{$professor->eid}}</td>
								<td>{{$professor->last_name}}
								{{$professor->first_name}}
								{{$professor->midle_name}}</td>
								<td>{{$professor->email}}</td>
								<td>  <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>$professor->filename])}}" width="50"></a></td>
								<td>
								<a href="{{route('professorShow',$professor->id)}}" class="btn white orange-text lighten-2"><i class="material-icons">pageview</i></a>
								<a href="#" class="btn white blue-text lighten-2"><i class="material-icons">edit</i></a>
								@if($professor->status==0)
									<td>{!! Form::model($professor,['route'=>['admin.enableProfessor',$professor->id],'method'=>'PUT'])!!}
									<button class="btn blue lighten-2"><span class="icon-check"></span></button>
									{!! Form::close() !!}</td>
									@else
									<td>{!! Form::model($professor,['route'=>['admin.disableProfessor',$professor->id],'method'=>'PUT'])!!}
									<button class="btn grey lighten-1"><span class="icon-cross"></span></button>
									{!! Form::close() !!}</td>
									@endif

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
    $('#professorIndex').DataTable();
    
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