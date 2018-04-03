@extends('admin_template')
@section('title','| Request for Approval')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-4 light-green lighten-5">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3 m9 offset-m3">
						<div class="section">
							@if(Session::has('success'))
								<div class="col s12 p">
									<div class="yellow darken-4 white-text">
										<p class="flow-text">{{ Session::get('success')}}</p>
									</div>
								</div>
							@endif							
						</div>
					<table id="approvalIndex" class="table responsive-table" cellspacing="0">
						<thead>
							<tr class="green darken-3 white-text">
								<th>EID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Approved</th>
								<th>Denied</th>
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
								<td><a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>$professor->filename])}}" width="50"></a></td>
								
									<td>{!! Form::model($professor,['route'=>['professorsApproved',$professor->id],'method'=>'PUT'])!!}
									<button class="btn blue lighten-2"><span class="icon-check"></span></button>
									{!! Form::close() !!}</td>

									<td>		{!! Form::open(['route'=>['professorsDenied',$professor->id],'method'=>'DELETE']) !!}
									<button class="btn grey lighten-1"><span class="icon-cross"></span></button>
									{!! Form::close() !!}</td>
								
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
    $('#approvalIndex').DataTable();
    
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