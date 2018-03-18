@extends('student_template')
@section('title','My Files')
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
                    <li><a href="{{route('student.files')}}/?year=First Year">1st Year</a></li>
                    <li><a href="{{route('student.files')}}/?year=Second Year">2nd Year</a></li>
                    <li><a href="{{route('student.files')}}/?year=Third Year">3rd Year</a></li>  
                    <li><a href="{{route('student.files')}}/?year=Fourth Year">4th Year</a></li>
                  </ul>
                  @else
                  <ul id="yearSelect" class="dropdown-content">
                    <li><a href="{{route('student.files')}}/?year=First Year">1st Year</a></li>
                    <li><a href="{{route('student.files')}}/?year=Second Year">2nd Year</a></li>
                  </ul>
                  @endif
                <div class="row">
                  <div class="col s12 m12">
                     <div class="card">
                        <div class="card-content">
                          <span class="card-title center">FIRST SEMESTER</span>
                         <table class="bordered">
                                  <thead>
                                      <tr>
                                          <td>FILE NAME</td>
                                          <td>SUBJECT CODE</td>
                                          <td>UPLOADED BY</td>
                                          <td>ACTION</td>
                                      </tr>
                                  </thead>         
                                  <tbody>
                                      @foreach($files as $file)
                                        @if($file->sem=="1st Semester")
                                      <tr>
                                          <td>{{$file->filename}}</td>
                                          <td>{{$file->subj_code}}</td>
                                          <td>{{$file->last_name.' '.$file->first_name.' '.$file->midle_name}}</td>
                                           <td><a href="{{route('download.file',$file->filename)}}" class="btn orange lighten-1">Download</a></td>
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
                                  <span class="card-title center">SECOND SEMESTER</span>
                                 <table class="bordered">
                                    <thead>
                                        <tr>
                                          <td>FILE NAME</td>
                                          <td>SUBJECT CODE</td>
                                          <td>UPLOADED BY</td>
                                          <td>ACTION</td>
                                        </tr>
                                    </thead>         
                                    <tbody>
                                        @foreach($files as $file)
                                          @if($file->sem=="2nd Semester")
                                        <tr>
                                            <td>{{$file->filename}}</td>
                                            <td>{{$file->subj_code}}</td>
                                            <td>{{$file->last_name.' '.$file->first_name.' '.$file->midle_name}}</td>
                                             <td><a href="{{route('download.file',$file->filename)}}" class="btn orange lighten-1">Download</a></td>
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