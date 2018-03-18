@extends('professor_template')
@section('title','| Grade')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

<style type="text/css">
  .name {
    font-size:1rem;
  }
  .grade {
    width: 500px;
  }   
</style>
@endsection
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
                          <tr class="green darken-3 white-text">
                 
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Evaluation</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($assigns as $assign)
                            <tr>

                              <td>{{$assign->last_name}}
                              {{$assign->first_name}}
                              {{$assign->midle_name}}
                              <td>{{$assign->grade}}</td>
                              @if($assign->grade==0)
                               <td class="grey-text">NO GRADE</td>
                               @elseif($assign->grade<=3)
                               <td class="green-text">PASSED</td>
                               @elseif($assign->grade<=4)
                               <td class="orange-text">INC</td>
                               @else
                               <td class="red-text">FAILED</td>
                               @endif
                              
                              <td><a class="btn white green-text modal-trigger" href="#modalGrade" id="editButton"><i class="material-icons">edit</i>
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
    <form class="form-horizontal" role="form">
           <label class="name">Name:</label>
           <label class="name" id="last_name"></label>
           <label class="name" id="first_name"></label>
           <label class="name" id="midle_name"></label>
           <div class="section"></div>
           <div class="divider"></div>
           <input type="hidden" name="assignStudent" id="assignStudent">
           <input type="hidden" name="student_id" id="student_id">
           <input type="hidden" name="assign_id" id="assign_id">
           
            <select class="grade" name="grade">
              <option>Grade</option>
                <option value="1.00" class="circle">
                1.00
                </option>
                  <option value="1.25" class="circle">
                1.25
                </option>
                  <option value="1.50" class="circle">
                1.50
                </option>                
                  <option value="1.75" class="circle">
                1.75
                </option>
                  <option value="2.00" class="circle">
                2.00
                </option>
                  <option value="2.25" class="circle">
                2.25
                </option>
                  <option value="2.50" class="circle">
                2.50
                </option>                
                  <option value="2.75" class="circle">
                2.75
                </option>
                  <option value="3.00" class="circle">
               3.00
                </option>  
                  <option value="3.25" class="circle">
               3.25
                </option>   
                  <option value="3.50" class="circle">
               3.50
                </option> 
                  <option value="3.75" class="circle">
               3.75
                </option>
                  <option value="4.00" class="circle">
               4.00
                </option> 
                  <option value="4.25" class="circle">
               4.25
                </option> 
                  <option value="4.50" class="circle">
               4.50
                </option> 
                  <option value="4.75" class="circle">
               4.75
                </option> 
                  <option value="5.00" class="circle">
               5.00
                </option>                                                                                       
            </select>
           <!-- <input type="text" name="grade" id="grade">
            <label for="grade">Grade is:</label> -->
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn green darken-3 " type="submit" id="updateGrade"><i class="material-icons white-text">check_circle</i></button>
     <a class="modal-close btn red darken-3"><i class="material-icons white-text">close</i></a>
  </div>
</div>            
@endsection
@section('script')

<style type="text/css">
  .modal{
    width: 40%;
  }  
</style>

<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
$('.grade').select2();


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
    type: "POST",
    url: "{{route('updateGrade.Student')}}",
    data: {
      '_token': $('input[name=_token]').val(),
      'id':$('#assignStudent').val(),
      'student_id':$('input[name=student_id]').val(),
      'assign_id':$('input[name=assign_id]').val(),
      'grade':$('select[name=grade]').val(),
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