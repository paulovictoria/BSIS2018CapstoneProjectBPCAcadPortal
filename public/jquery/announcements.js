/*form add*/
$(document).ready(function(){
 $('#modalAnnouncement').modal();
 });
/*call Model then changes buttons this part is for editing */
$(document).on('click','#editButton', function(event){
			$('#add').hide();
			$('#delete').hide();
			$('#save').show('400');
		var id=$(this).find('#itemId').val();
		var title=$(this).find('#itemTitle').val();
		var description=$(this).find('#itemDescription').val();
		var date=$(this).find('#itemDate').val();
		$('#id').val(id);	
		$('#title').val(title);
		$('#description').val(description);
		$('#datepicker').val(date);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');

});
/*call Model then changes buttons this part is for  deleting*/
$(document).on('click','#deleteButton', function(event){
		$('#save').hide();
		$('#add').hide();
		$('#delete').show('400');
		var id=$(this).find('#itemId').val();
		var title=$(this).find('#itemTitle').val();
		var description=$(this).find('#itemDescription').val();
		$('#id').val(id);	
		$('#title').val(title);
		$('#description').val(description);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');
});
/*model for Posting*/
$(document).on('click','#create', function(event){
			$('#title').val('');
			$('#description').val('');
			$('#datepicker').val('');
			$('#delete').hide();
			$('#save').hide();
			$('#add').show('400');
			$('.success_title').text('');
			$('.error_title').text('');
		    $('.error_description').text('');
});



/*to save*/
$('#add').click(function() {
	$.ajax({
		type: 'POST',
		url: 'addAnnouncements',
		data: {
			'_token': $('input[name=_token]').val(),
			'title': $('input[name=title]').val(),
			'description': $('textarea[name=description]').val(),
			'date': $('input[name=datepicker]').val(),
		},
		success: function(data){
			if((data.errors)) {
				$('.error_title').text(data.errors.title);
				$('.error_description').text(data.errors.description);
				$('.error_datepicker').text(data.errors.datepicker);
				$('.success_title').text('');
			
			} else {
				$('.success_title').text('Added Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		       $('#announcementsCard').load(location.href + ' #announcementsCard');
		       $('#modalAnnouncement').modal('close');
			}
		},
		
	});
	$('#title').val('');
	$('#description').val('');
});

/*Delete announcements*/
$('#delete').click(function(event){
	var id=$('#id').val();
	console.log(id);
	$.ajax({
		type: 'POST',
		url: 'deleteAnnouncements',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#id').val(),
			'title': $('#title').val(),
			'description': $('#description').val(),
		},
		success: function(data){
				$('.success_title').text('Deleted Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		        $('#announcementsCard').load(location.href + ' #announcementsCard');
				$('#modalAnnouncement').modal('close');
		},

	});
	$('#title').val('');
	$('#description').val('');
});
/*Update announcements*/
$('#save').click(function(event){
	$.ajax({
		type: 'POST',
		url: 'updateAnnouncements',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#id').val(),
			'title': $('#title').val(),
			'description': $('textarea[name=description]').val(),
			'date': $('input[name=datepicker]').val(),
		},
		success: function(data){
			if((data.errors)) {
				$('.error_title').text(data.errors.title);
				$('.error_description').text(data.errors.description);
				$('.success_title').text('');
			
			} else {
				$('.success_title').text('Updated Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		        $('#announcementsCard').load(location.href + ' #announcementsCard');
		        $('#modalAnnouncement').modal('close');
			}
		},
	});	
});

