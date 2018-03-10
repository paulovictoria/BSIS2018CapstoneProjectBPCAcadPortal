@extends('student_template')
@section('title','My Profile')
@section('content')
<div class="col m12">       
  <div class="section">
    <div class="card z-depth-1">
      <div class="card-content">
        <div class="row">
          <div class="col l9 offset-l3">
            <h3 class="light-green-text darken-2 card-title">Profile</h3>
            <div class="defaultInfo center">
              <div class="row"> 
                <div class="col s12">
                  <div class="frofileImages">
                    <img class="activator" src="{{route('user.image',['filename'=>Auth::user()->filename])}}" alt="user background" width="120" height="120">
                    <br>
                    <a href="{{route('student.editProfile') }}" class="btn-floating waves-effect waves-light light-green darken-1"><i class="icon-edit"></i></a>
                  </div>
                </div>
                <div class="col s12">
                  <div class="info">
                    <ul>
                      <li class="flow-text"><b>{{ Auth::user()->email}}</b></li>
                      <li class=""><b>{{ Auth::user()->last_name.' '.Auth::user()->first_name.' '.Auth::user()->midle_name}}</b></li>
                      <li class="">{{ Auth::user()->course->course_name}}</li>
                    </ul>  
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
