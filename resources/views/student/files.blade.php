@extends('student_template')
@section('title','My Files')
@section('content')
<div class="col s12">				
	<div class="section">
		<div class="card z-depth-1">
			<div class="card-content">
				<div class="row">
					<div class="col s9 offset-s3">
						<h3 class="light-green-text darken-2 card-title">Files</h3>
                  <!-- Dropdown Trigger -->
                  <a class="dropdown-button btn light-green" href="#" data-activates="yearSelect">Choose</a><br>
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
            			 <table class="bordered">
                            <thead>
                                <tr>
                                    <td>File Name</td>
                                    <td>Subject</td>
                                    <td>Uploaded by</td>
                                    <td>Action</td>
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
                         <table class="bordered">
                            <thead>
                                <tr>
                                    <td>File Name</td>
                                    <td>Subject</td>
                                    <td>Uploaded by</td>
                                    <td>Action</td>
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
					</div>
				</div>
			</div>
			<div class="card-action"></div>
		</div>
	</div>	
</div>
@endsection