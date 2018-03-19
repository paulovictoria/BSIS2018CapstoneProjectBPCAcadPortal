@extends('registrar_template')
@section('title','Students')
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
					<table id="approvalIndex" class="table responsive-table" cellspacing="0">
						<thead>
							<tr class="green darken-3 white-text">
								<td>SID</td>
								<td>NAME</td>
								<td>EMAIL</td>
								<td>IMAGE</td>
								<td>APPROVE</td>
								<td>DENY</td>
							</tr>	
						</thead>
						<tbody>
							@foreach($students as $student)
							<tr class="light-green lighten-5">
								<td>{{$student->sid}}</td>
								<td>{{$student->last_name}}
								    {{$student->first_name}}
							        {{$student->midle_name}}</td>
								<td>{{$student->email}}</td>
								<td><a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>$student->filename])}}" width="50"></a></td>
								
									<td>{!! Form::model($student,['route'=>['studentsApproved',$student->id],'method'=>'PUT'])!!}
									<button class="btn white blue-text lighten-2"><i class="material-icons">check_circle</i></button>
									{!! Form::close() !!}</td>

									<td>		{!! Form::open(['route'=>['studentsDenied',$student->id],'method'=>'DELETE']) !!}
									<button class="btn white grey-text lighten-1"><i class="material-icons">close</i></button>
									{!! Form::close() !!}</td>
								
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
