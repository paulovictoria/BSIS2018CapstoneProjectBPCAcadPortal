@extends('student_template')
@section('title','My Profile')
@section('content')
<div class="col m12">       
  <div class="section">
    <div class="card transparent">
      <div class="card-content">
        <div class="row">
          <div class="col s9 offset-s3 m9 offset-m3">
            <div class="defaultInfo center">
              <div class="row"> 
                <div class="col s12">
                  <div class="frofileImages">
                    <img class="activator" src="{{route('user.image',['filename'=>Auth::user()->filename])}}" alt="user background" width="120" height="120">
                    <br>
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
                    <a href="{{route('student.editProfile') }}" class="btn waves-effect waves-light light-blue darken-1"> <i class="material-icons">edit</i></a>
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