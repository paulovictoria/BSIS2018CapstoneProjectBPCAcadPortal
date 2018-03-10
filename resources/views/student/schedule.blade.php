@extends('student_template')
@section('title','My Schedule')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                        <h3 class="light-green-text darken-2 card-title">Schedule</h3>
                  <!-- Dropdown Trigger -->
                  <a class="dropdown-button btn light-green" href="#" data-activates="yearSelect">Choose</a><br>
                  @if(Auth::user()->course->degree==1)  
                  <ul id="yearSelect" class="dropdown-content">
                    <li><a href="{{route('student.schedule')}}/?year=First Year">1st Year</a></li>
                    <li><a href="{{route('student.schedule')}}/?year=Second Year">2nd Year</a></li>
                    <li><a href="{{route('student.schedule')}}/?year=Third Year">3rd Year</a></li>  
                    <li><a href="{{route('student.schedule')}}/?year=Fourth Year">4th Year</a></li>
                  </ul>
                  @else
                  <ul id="yearSelect" class="dropdown-content">
                    <li><a href="{{route('student.schedule')}}/?year=First Year">1st Year</a></li>
                    <li><a href="{{route('student.schedule')}}/?year=Second Year">2nd Year</a></li>
                  </ul>
                  @endif
            			<table class="table bordered" id="schedule">
            			    <thead>
                		        <tr>
                                     <th>Day</th>
                                     <th>Start</th>
                                     <th>End</th>
                                     <th>Room</th>
                                     <th>Subject</th>
                                     <th>Instructor</th>
            			        </tr>
            			    </thead>
            				<tbody>
                                @foreach($schedules as $schedule)
                                    @if($schedule->sem=="1st Semester")
                                <tr>
                                    <td>{{$schedule->name}}</td>
                                    <td>{{$schedule->startTime}}</td>
                                    <td>{{$schedule->endTime}}</td>
                                    <td>{{$schedule->room_code}}</td>
                                    <td>{{$schedule->subj_code}}</td>
                                    <td>{{$schedule->last_name.' '.$schedule->first_name.' '.$schedule->midle_name}}</td>
                                </tr>
                                @endif
                                  @endforeach
            				</tbody>
            			</table>
                        <table class="table bordered" id="schedule">
                            <thead>
                                <tr>
                                     <th>Day</th>
                                     <th>Start</th>
                                     <th>End</th>
                                     <th>Room</th>
                                     <th>Subject</th>
                                     <th>Instrcutor</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schedules as $schedule)
                                    @if($schedule->sem=="2nd Semester")
                                <tr>  
                                    <td>{{$schedule->name}}</td>
                                    <td>{{$schedule->startTime}}</td>
                                    <td>{{$schedule->endTime}}</td>
                                    <td>{{$schedule->room_code}}</td>
                                    <td>{{$schedule->subj_code}}</td>
                                    <td>{{$schedule->last_name.' '.$schedule->first_name.' '.$schedule->midle_name}}</td>
                                </tr>
                                @endif
                                  @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>
@endsection
