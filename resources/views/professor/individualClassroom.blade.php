@extends('professor_template')
@section('title','| Grade') 
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                      <h3 class="light-green-text darken-2 card-title"></h3>  
                    <table class="bordered" id="individualClassroom">
                        <thead>
                          <tr class="light-green white-text">
                            <th>Last_Name</th>
                            <th>First_Name</th>
                            <th>Midle_Name</th>
                            <th>Grade</th>
                            <th>Evaluation</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($assigns as $assign)
                            <tr>
                              <td>{{$assign->last_name}}</td>
                              <td>{{$assign->first_name}}</td>
                              <td>{{$assign->midle_name}}</td>
                              <td>{{$assign->grade}}</td>
                               @if($assign->grade==1)
                               <td class="green-text">Passed</td>
                               @elseif($assign->grade==2)
                               <td class="light-green-text">Passed</td>
                               @elseif($assign->grade==3)
                               <td class="light-green-text">Passed</td>
                               @elseif($assign->grade==4)
                               <td class="orange-text">INC</td>
                               @else
                               <td class="red-text">Failed</td>
                               @endif
                              
                              <td><a class="btn btn-floating light-green modal-trigger" href="#modalGrade" id="editButton"><span class="icon-pencil"></span>
                              <input type="hidden" id="stud_lastname" value="{{$assign->last_name}}">
                              <input type="hidden" id="stud_firstname" value="{{$assign->first_name}}">
                              <input type="hidden" id="stud_midlename" value="{{$assign->midle_name}}">
                              <input type="hidden" id="assstud_id" value="{{$assign->id}}">  
                              <input type="hidden" id="stud_id" value="{{$assign->student_id}}">
                              <input type="hidden" id="ass_id" value="{{$assign->assign_id}}">
                              <input type="hidden" id="assgrade" value="{{$assign->grade}}">
                              </a></td>
                             </tr> 
                            @endforeach
                        </tbody>  
                      </table>  
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>    
</div>
<div id="modalGrade" class="modal">
  <div class="modal-content">
    <a class="modal-close right"><span class="icon-cross grey-text"></span></a>
    <form class="form-horizontal" role="form">
           <label>Name:</label>
           <label id="last_name"></label>
           <label id="first_name"></label>
           <label id="midle_name"></label>
           <input type="hidden" name="assignStudent" id="assignStudent">
           <input type="hidden" name="student_id" id="student_id">
           <input type="hidden" name="assign_id" id="assign_id">

           <input type="text" name="grade" id="grade">
            <label for="grade">Grade is:</label>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn blue" type="submit" id="updateGrade">Update</button>
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
<script>
  $(document).ready(function() {
    $('#individualClassroom').DataTable();
    
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

$(document).ready(function(){
 $('#modalGrade').modal();
 });
$(document).on('click','#editButton', function(event){
    $('#updateGrade').show('400');
    var id=$(this).find('#assstud_id').val();
    var student=$(this).find('#stud_id').val();
    var assign_id=$(this).find('#ass_id').val();
    var gradeoriginal=$(this).find('#assgrade').val();
    var last_name=$(this).find('#stud_lastname').val();
    var first_name=$(this).find('#stud_firstname').val();
    var midle_name=$(this).find('#stud_midlename').val();
    $('#assignStudent').val(id);  
    $('#student_id').val(student);
    $('#assign_id').val(assign_id);
    $('#grade').val(gradeoriginal);
    $('#last_name').text(last_name);
    $('#first_name').text(first_name);
    $('#midle_name').text(midle_name);
});

//Update Grade
$('#updateGrade').click(function(event){
  $.ajax({
    type: 'POST',
    url: '/updateGrade',
    data: {
      '_token': $('input[name=_token]').val(),
      'id':$('#assignStudent').val(),
      'student_id':$('input[name=student_id]').val(),
      'assign_id':$('input[name=assign_id]').val(),
      'grade':$('input[name=grade]').val(),
    },
    success: function(data){
      if((data.errors)) {
        $('.student_id').text(data.errors.student_id);
        $('.subject_id').text(data.errors.subject_id);
        $('.grade').text(data.errors.grade);
        console.log(data.errors.id);
        console.log(data.errors.student_id);
        console.log(data.errors.assign_id);
        console.log(data.errors.grade);
      
      } else {
         $('#individualClassroom').load(location.href + ' #individualClassroom');
           $('#modalGrade').modal('close');
           $('#individualClassroom').load(location.href + ' #individualClassroom');
      }
    },

  });

});
</script>
@endsection