@extends('admin_template')
@section('title','| Approval')
@section('content')
 <main>
  	<div class="section light-green"><h4 class="center-align white-text">Instructor Approval</h4></div>
		<br><br>
		<div class="divider"></div> 
	<div class="row">
		<div class="col l10 offset-l2 ">
			<div class="card">
				<div class="card-content">
					<table id="approvalIndex" class="table responsive-table" cellspacing="0">
						<thead>
							<tr>
								<th>EID</th>
								<th>Last Name</th>
								<th>First Name</th>
								<th>Midle Name</th>
								<th>Email</th>
								<th>Image</th>
								<th>Approved</th>
								<th>Denied</th>
							</tr>	
						</thead>
						<tbody>
							@foreach($professors as $professor)
							<tr>
								<td>{{$professor->sid}}</td>
								<td>{{$professor->last_name}}</td>
								<td>{{$professor->first_name}}</td>
								<td>{{$professor->midle_name}}</td>
								<td>{{$professor->email}}</td>
								<td><a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>$professor->sid. '-' .$professor->id. '.jpg'])}}" width="50"></a></td>
								
									<td>{!! Form::model($professor,['route'=>['professorsApproved',$professor->id],'method'=>'PUT'])!!}
									<button class="btn btn-floating green"><span class="icon-check"></span></button>
									{!! Form::close() !!}</td>

									<td>		{!! Form::open(['route'=>['professorsDenied',$professor->id],'method'=>'DELETE']) !!}
									<button class="btn btn-floating red"><span class="icon-cross"></span></button>
									{!! Form::close() !!}</td>
								
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