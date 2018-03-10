@extends('main')
@section('title','| Grade')
@section('content')
<div class="row">
	<div class="col s12">
		<div class="card">
          <div class="card-content">
          <div class="card-title">
          <h5><span>{{$classroom->course->course_name}}</span> 
          <span>{{$classroom->year}}</span>
          <span>{{$classroom->section}}</span></h5> 
          </div>  
          <table>
              <thead>
                <tr>
                  <th>SID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Midle Name</th>
                  <th>Grade</th>
                </tr>
              </thead>
            @foreach($classroom->students as $studs)     
              <tbody>
                <tr>
                  <td>{{$studs->sid}}</td>
                  <td>{{$studs->last_name}}</td>
                  <td>{{$studs->first_name}}</td>
                  <td>{{$studs->midle_name}}</td>
                  <td>{!! Html::linkRoute('grades.create','Grade this',array($studs->id),array('class'=>'btn red darken-1')) !!}</td>
                </tr>   
              </tbody>
             @endforeach
          </table>
          </div>
          <div class="card-action">
           
          </div> 
    
      </div>
		</div>
	</div>	
</div>
@endsection
