@extends('professor_template')
@section('title','My Classes')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card z-depth-4 light-green lighten-5">
            <div class="card-content">
                <div class="row">
                    <div class="col m9 offset-m3">
                        <table class="table table-striped table-bordered" id="classroom" width="100%">    
                           <thead>
                            <tr class="green darken-3 white-text">
                             <td>YEAR</td>
                             <td>SEM</td>
                             <td>COURSE</td>
                             <td># Students</td>
                             <td>SUBJECT CODE</td>
                             <td>ACTION</td>
                            </tr>
                           </thead> 
                            <tbody>
                            @foreach($assigns as $assign)
                            <tr class=" light-green lighten-5">  
                            <td>{{ $assign->classroom->academic_year}}</td>
                            @if($assign->classroom->sem==1)
                            <td>First Sem</td>
                            @else
                            <td>Second Sem</td>
                            @endif  
                            <td>{{ $assign->classroom->course->course_name.' '.$assign->classroom->year.' '.$assign->classroom->section}}</td>
                            <td>{{ $assign->classroom->students->count() }}</td>
                            <td>{{ $assign->subject->subj_code }}</td>
                            <td><a href="{{route('classroomsAssign.show',$assign->id)}}" class="btn btn-large green-text darken-2 white"><i class="material-icons">pageview</i></a>
                             <a href="{{route('individual.classroom',$assign->id)}}" class="btn blue-text btn-large lighten-1 white"><i class="material-icons">edit</i></a>
                              <a href="{{route('uploadIndex',$assign->id)}}" class="btn btn-large yellow-text darken-2 white"><i class="material-icons">folder_open</i></a>
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
    $('#classroom').DataTable();
    
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