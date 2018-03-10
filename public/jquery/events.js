/*form add*/
$(document).ready(function(){
 $('#modalEvent').modal();
 });
/*call Model then changes buttons this part is for editing */
$(document).on('click','#editButtonEvent', function(event){
			$('#addEvent').hide();
			$('#deleteEvent').hide();
			$('#saveEvent').show('400');
		var id=$(this).find('#itemIdEvent').val();
		var title=$(this).find('#itemTitleEvent').val();
		var description=$(this).find('#itemDescriptionEvent').val();
		var date=$(this).find('#itemdatepickerEvent').val();
		var start=$(this).find('#itemstarttimepickerEvent').val();
		var end=$(this).find('#itemendtimepickerEvent').val();
		var place=$(this).find('#itemplaceEvent').val();
		$('#idEvent').val(id);	
		$('#titleEvent').val(title);
		$('#descriptionEvent').val(description);
		$('#datepickerEvent').val(date);
		$('#starttimepickerEvent').val(start);
		$('#endtimepickerEvent').val(end);
		$('#placeEvent').val(place);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');

});
/*call Model then changes buttons this part is for  deleting*/
$(document).on('click','#deleteButtonEvent', function(event){
		$('#saveEvent').hide();
		$('#addEvent').hide();
		$('#deleteEvent').show('400');
		var id=$(this).find('#itemIdEvent').val();
		var title=$(this).find('#itemTitleEvent').val();
		var description=$(this).find('#itemDescriptionEvent').val();
		var date=$(this).find('#itemdatepickerEvent').val();
		var start=$(this).find('#itemstarttimepickerEvent').val();
		var end=$(this).find('#itemendtimepickerEvent').val();
		var place=$(this).find('#itemplaceEvent').val();
		$('#idEvent').val(id);	
		$('#titleEvent').val(title);
		$('#descriptionEvent').val(description);
		$('#datepickerEvent').val(date);
		$('#starttimepickerEvent').val(start);
		$('#endtimepickerEvent').val(end);
		$('#placeEvent').val(place);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');
});
/*model for Posting*/
$(document).on('click','#createEvent', function(event){
			$('#titleEvent').val('');
			$('#descriptionEvent').val('');
			$('#deleteEvent').hide();
			$('#saveEvent').hide();
			$('#addEvent').show('400');
			$('.success_title').text('');
			$('.error_title').text('');
			$('.error_description').text('');
});



/*to save*/
$('#addEvent').click(function() {

	var postData =new FormData($("#modal_form_id")[0]);
	
	console.log(postData);
	$.ajax({
		type: 'POST',
		url: 'addEvents',
		data: {
			'_token': $('input[name=_token]').val(),
			'title': $('input[name=titleEvent]').val(),
			'description': $('textarea[name=descriptionEvent]').val(),
			'date': $('input[name=datepickerEvent]').val(),
			'startTime': $('input[name=starttimepickerEvent]').val(),
			'endTime': $('input[name=endtimepickerEvent]').val(),
			'place': $('input[name=placeEvent]').val(),
			'image':postData.val(),
	
		},
		success: function(data){
			if((data.errors)) {
				$('.error_title').text(data.errors.title);
				$('.error_description').text(data.errors.description);
				$('.error_image').text(data.errors.image);
				$('.success_title').text('');
			} else {
				$('.success_title').text('Added Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		        $('#eventsCard').load(location.href + ' #eventsCard');
		        $('#modalEvent').modal('close');
		        console.log(data.image);

			}
		},
		
	});
	$('#titleEvent').val('');
	$('#descriptionEvent').val('');
});

/*Delete Event*/
$('#deleteEvent').click(function(event){
	var id=$('#idEvent').val();
	console.log(id);
	$.ajax({
		type: 'POST',
		url: 'deleteEvents',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#idEvent').val(),
			'title': $('#titleEvent').val(),
			'description': $('#descriptionEvent').val(),
		},
		success: function(data){
				$('.success_title').text('Deleted Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		        $('#eventsCard').load(location.href + ' #eventsCard');
				$('#deleteEvent').hide();
				$('#modalEvent').modal('close');
		},		

	});
	$('#titleEvent').val('');
	$('#descriptionEvent').val('');
});
/*Update Event*/
$('#saveEvent').click(function(event){
	$.ajax({
		type: 'POST',
		url: 'updateEvents',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#idEvent').val(),
			'title': $('#titleEvent').val(),
			'description': $('textarea[name=descriptionEvent]').val(),
			'date': $('input[name=datepickerEvent]').val(),
			'startTime': $('input[name=starttimepickerEvent]').val(),
			'endTime': $('input[name=endtimepickerEvent]').val(),
			'place': $('input[name=placeEvent]').val(),
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
				$('#eventsCard').load(location.href + ' #eventsCard');
				 $('#modalEvent').modal('close');		
			}
		}	
	});
});

