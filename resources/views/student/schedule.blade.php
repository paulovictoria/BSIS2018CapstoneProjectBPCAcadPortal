@extends('student_template')
@section('title','My Schedule')
@section('content')
<div class="col m12">       
  <div class="section">
    <div class="card transparent">
      <div class="card-content">
        <div class="row">
          <div class="col l9 offset-l3">
             <div class="row">
                <div class="col s6">  
                   <a class="dropdown-button btn light-green" href="#" data-activates="yearSelect">Academic Year</a>
                </div>
              </div>
           <!-- Dropdown Structure -->
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
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card">
                      <div class="card-content">
                        <span class="card-title center">First Semester</span>
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
                          </div>  
                        </div>
                      </div>
                    <div class="col s12 m12">
                      <div class="card">
                        <div class="card-content">
                          <span class="card-title center">Second Semester</span>
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
                      </div>        
           </div>
         </div>
        </div>
      <div class="card-action"></div>
    </div>
  </div>  
</div>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection