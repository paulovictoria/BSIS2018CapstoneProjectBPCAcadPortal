@extends('admin_template')
@section('title','| Subjects')
@section('content')
<div class="col s12">			
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Subjects</h3>
						<div class="section"></div>
						<a href="{{ route('subjects.create') }}" class="btn btn-floating light-green btn-large darken-1"><i class="icon-add-to-list"></i></a>
						<table class="bordered" id="subject">
							<thead>
								<tr>
									<th>ID</th>
									<th>Subject Code</th>
									<th>Subject Description</th>
									<th>Subject Units</th>
									<th>Sem</th>
									<th>Year</th>
									<th>Action</th>
								</tr>	
							</thead>
							<tbody></tbody>
						</table>
						</div>
					</div>
				</div>
			 <div class="card-action center">
			</div>
		</div>
	</div>	
</div>
  <div id="subjModal" class="modal bottom-sheet">
  	  <form method="post" id="student_form">
    <div class="modal-content">
                 {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Enter First Name</label>
                        <input type="text" name="subj_code" id="subj_code" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name</label>
                        <input type="text" name="subj_description" id="subj_description" class="form-control" />
                    </div>
    </div>
    <div class="modal-footer">
            <input type="hidden" name="subjt_id" id="subjt_id" value="" />
            <input type="hidden" name="button_action" id="button_action" value="insert" />
             <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />            
    </div>
	</form>
  </div>
@endsection
@section('script')
<link rel="stylesheet" href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}">
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}" ></script>
<script>
    $(document).ready(function () {
        $('#subject').DataTable({
            "processing": true,
            "serverSide": true,
          	"ajax": "{{route('allsubjects')}}",
          	"columns":[
          		{"data":"id"},
          		{"data":"subj_code"},
          		{"data":"subj_description"},
          		{"data":"subj_units"},
          		{"data":"sem"},
          		{"data":"year"},
          		{"data": "action", orderable:false,searchable:false }
          	]		 
        });

      $(document).on('click', '.edit', function(){
      	var id = $(this).attr("id");
      	$.ajax({
      		url:"{{route('ajaxdata.fetchdata')}}",
      		method: 'get',
      		data:{id:id},
      		dataType:'json',
      		success:function(data)
      		{
      			$('#subj_code').val(data.subj_code);
      			$('#subj_description').val(data.subj_description);
      			$('#subj_id').val(id);
      			$('#subjModal').modal('open');
      		}
      	})
      });
    });
</script>  
@endsection
