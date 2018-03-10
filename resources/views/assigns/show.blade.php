@extends('main')

@section('title','Assign')
@section('content')
<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card">
				<div class="card-content">
					<div class="card-title">
						<table class="bordered">
							<thead></thead>
							<tbody>
							<tr>
								<td>{{ $assign->classroom->course->course_name }}</td>
								<td>{{ $assign->classroom->year }}</td>
								<td>{{ $assign->classroom->section }}</td>
								<td>{{ $assign->professor->last_name}} {{ $assign->professor->first_name}}</td>
								<td>{{ $assign->subject ->subj_description}}</td>
								<td>{{ $assign->schedule }}</td>
							</tr>	
							</tbody>
						</table>
					</div>
				</div>	
			</div>
		</div>	
	</div>	
</div>		
@endsection