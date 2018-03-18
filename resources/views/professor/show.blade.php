@extends('professor_template')
@section('title','Show')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col m9 offset-m3">
                  <div class="card">
                            <div class="card-content">
                           <p class="flow-text"><span>Course: </span>{{$assign->classroom->course->course_name.' '.$assign->classroom->year.' '.$assign->classroom->section}}</p>
                            
                           <a href="{{ route('professor.exportAssign',$assign->id) }}" class="btn green darken-3">Download CSV</a>
                          </div>
                  </div>
                      	<div class="card-content">
                  
                      		<table class="bordered">
                      			<thead>
                      				<tr class="green darken-3 white-text">
                      					<th>SID</th>
                      					<th>NAME</th>
                      					<th>EMAIL</th>
                      					<th>GENDER</th>
                      				</tr>
                      			</thead>
                      			<tbody>
                      				@foreach($assign->classroom->students as $assStud)
                      					<tr class=" light-green lighten-5">
                      						<td>{{$assStud->sid}}</td>
                      						<td>{{$assStud->last_name.' '.$assStud->first_name.' '.$assStud->midle_name}}</td>
                      						<td>{{$assStud->email}}</td>
                      						<td>{{$assStud->gender}}</td>
                      					</tr>
                      				@endforeach
                      			</tbody>
                      		</table>
                      	</div>
                    </div>
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>
@endsection
