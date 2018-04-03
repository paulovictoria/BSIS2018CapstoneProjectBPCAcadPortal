@extends('professor_template')
@section('title','My Schedule')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
<div class="col m12">       
  <div class="section">
    <div class="card z-depth-4 light-green lighten-5">
      <div class="card-content">
        <div class="row">
          <div class="col s9 offset-s3 m9 offset-m3">
              {!! Form::open(['route'=>'professor.exportProfessorSchedule']) !!}
              <div class="row">
                <div class="col s6">
                {{ Form::label('sem','Sem:') }}
                 <select class="sem" name="sem" style="width:100%">
                    <option value="null">Sem</option>
                    <option value="1st Semester" class="circle">First Sem</option>
                    <option value="2nd Semester" class="circle">Second Sem</option>
                  </select>
                </div>
                <div class="col s6">
                  {{ Form::label('academic_year','Academic Year:') }}
                  <select class="academic_year" name="academic_year" style="width:100%">
                      <option value="null">Select Academic Year</option>
                    @foreach($classrooms as $classroom)
                      <option value="{{ $classroom->academic_year }}" class="circle">
                      {{ $classroom->academic_year }}
                      </option>
                    @endforeach
                  </select>
                </div>
                <div class="col s12">
                  <div class="section"></div>
                    {{ Form::submit('Download',['class'=>'btn green darken-3']) }}
                </div>    
                </div>    
              {!! Form::close() !!}
               <table class="table table-responsive" id="professorSchedule" width="100%">
                 <thead>
                  <tr class="green darken-3 white-text">
                    <td>ACADEMIC YEAR</td>
                    <td>SEM</td>
                    <td>COURSE <span>Year/Section</span></td>
                    <td>SUBJECT</td>
                    <td>DAY</td>
                    <td>START</td>
                    <td>END</td>
                    <td>ROOM</td>
                  </tr>
                 </thead>
                 <tbody>
                 @foreach($assigns as $assign)
                  <tr class=" light-green lighten-5">  
                    <td>{{$assign->classroom->academic_year}}</td>
                    <td>{{$assign->classroom->sem}}</td>  
                    <td>{{$assign->classroom->course->course_name.' '.$assign->classroom->year.' '.$assign->classroom->section}}</td>  
                    <td>{{$assign->room->room_code}}</td>                     
                    <td>{{$assign->day->name}}</td>
                    <td>{{$assign->startTime}}</td>
                    <td>{{$assign->endTime}}</td>
                    <td>{{$assign->subject->subj_code}}</td>          
                  </tr>               
                 @endforeach 
                 </tbody>
               </table>
               <div class="section"></div>
          </div>
        </div>
      </div>
      <div class="card-action"></div>
    </div>
  </div>  
</div>
@endsection
@section('script')
<style type="text/css">
  .modal{
    width: 30%;
  }
</style>
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script src="{{ asset('js/select2.min.js') }}"></script>

<script type="text/javascript">
  $('.sem').select2();
  $('.academic_year').select2();
</script>

<script>
  $(document).ready(function() {
    $('#professorSchedule').DataTable();
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

