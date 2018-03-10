@extends('professor_template')
@section('title','Professor')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col m9 offset-m3">
                        <h3 class="light-green-text darken-2 card-title">Classes</h3>
                        <table class="table table-responsive" id="files">    
                           <thead>
                            <tr>
                             <th>Year</th>
                             <th>Sem</th>
                             <th>Course</th>
                             <th># Files</th>
                             <th>Action</th>
                            </tr>
                           </thead> 
                            <tbody>
                             @foreach($assigns as $assign)
                            <tr>
                             <td>{{$assign->classroom->year}}</td>
                             <td>{{$assign->classroom->sem}}</td>
                             <td>{{$assign->classroom->course->course_name.' '.$assign->classroom->year.' '.$assign->classroom->section}}</td>  
                             <td>Total files</td>
                            <td><a href="{{route('uploadIndex',$assign->id)}}" class="btn orange darken-2"><i class="icon-archive"></i></a>
                            </td>
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
    $('#files').DataTable();
    
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