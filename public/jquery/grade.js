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