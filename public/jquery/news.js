/*form add*/
$(document).ready(function(){
 $('#modalNews').modal();
 });
/*call Model then changes buttons this part is for editing */
$(document).on('click','#editButtonNews', function(event){
			$('#addNews').hide();
			$('#deleteNews').hide();
			$('#saveNews').show('400');
		var id=$(this).find('#itemIdNews').val();
		var title=$(this).find('#itemTitleNews').val();
		var description=$(this).find('#itemDescriptionNews').val();
		var author=$(this).find('#itemAuthorNews').val();
		$('#idNews').val(id);	
		$('#titleNews').val(title);
		$('#descriptionNews').val(description);
		$('#authorNews').val(author);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');
		$('.error_author').text('');
});
/*call Model then changes buttons this part is for  deleting*/
$(document).on('click','#deleteButtonNews', function(event){
		$('#saveNews').hide();
		$('#addNews').hide();
		$('#deleteNews').show('400');
		var id=$(this).find('#itemIdNews').val();
		var title=$(this).find('#itemTitleNews').val();
		var description=$(this).find('#itemDescriptionNews').val();
		var author=$(this).find('#itemAuthorNews').val();
		$('#idNews').val(id);	
		$('#titleNews').val(title);
		$('#descriptionNews').val(description);
		$('#authorNews').val(author);
		$('.success_title').text('');
		$('.error_title').text('');
		$('.error_description').text('');
		$('.error_author').text('');

});
/*model for Posting*/
$(document).on('click','#createNews', function(event){
			$('#titleNews').val('');
			$('#descriptionNews').val('');
			$('#authorNews').val('');
			$('#deleteNews').hide();
			$('#saveNews').hide();
			$('#addNews').show('400');
			$('.success_title').text('');
			$('.error_title').text('');
			$('.error_description').text('');
			$('.error_author').text('');
});



/*to save*/
$('#addNews').click(function() {
	$.ajax({
		type: 'POST',
		url: 'addNews',
		data: {
			'_token': $('input[name=_token]').val(),
			'title': $('input[name=titleNews]').val(),
			'description': $('textarea[name=descriptionNews]').val(),
			'author': $('input[name=authorNews]').val(),
		},
		success: function(data){
			if((data.errors)) {
				$('.error_title').text(data.errors.title);
				$('.error_description').text(data.errors.description);
				$('.error_author').text(data.errors.author);
				$('.success_title').text('');
			} else {
				$('.success_title').text('Added Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
				$('.error_author').text('');
		       	$('#newsCard').load(location.href + ' #newsCard');
		        $('#modalNews').modal('close');
			}
		},
		
	});
	$('#titleNews').val('');
	$('#descriptionNews').val('');
	$('#authorNews').val('');
});

/*Delete news*/
$('#deleteNews').click(function(event){
	var id=$('#idNews').val();
	console.log(id);
	$.ajax({
		type: 'POST',
		url: 'deleteNews',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#idNews').val(),
			'title': $('#titleNews').val(),
			'description': $('#descriptionNews').val(),
		},
		success: function(data){
				$('.success_title').text('Deleted Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
		        $('#newsCard').load(location.href + ' #newsCard');
				$('#modalNews').modal('close');
		},
	});
	$('#titleNews').val('');
	$('#descriptionNews').val('');
	$('#authorNews').val('');
});
/*Update News*/
$('#saveNews').click(function(event){
	$.ajax({
		type: 'POST',
		url: 'updateNews',
		data: {
			'_token': $('input[name=_token]').val(),
			'id': $('#idNews').val(),
			'title': $('#titleNews').val(),
			'description': $('textarea[name=descriptionNews]').val(),
			'author': $('input[name=authorNews]').val(),
		},
		success: function(data){
			if((data.errors)) {
				$('.error_title').text(data.errors.title);
				$('.error_description').text(data.errors.description);
				$('.error_author').text(data.errors.author);
				$('.success_title').text('');
			
			} else {
				$('.success_title').text('Updated Successfully!.');
				$('.error_title').text('');
				$('.error_description').text('');
				$('.error_author').text('');
		        $('#newsCard').load(location.href + ' #newsCard');
		        $('#modalNews').modal('close');	
			}
		},
	});
});

