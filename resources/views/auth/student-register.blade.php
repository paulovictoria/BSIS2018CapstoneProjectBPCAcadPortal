@extends('main')
@section('content')
<div class="container">
  <div class="section"></div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card z-depth-5">
        <div class="card-content">
          <form class="form-horizontal" method="POST" action="{{ route('student.register.submit') }}" enctype="multipart/form-data">{{ csrf_field() }}
            <span class="card-title green-text darken-4">STUDENT REGISTRATION</span>
              <div class="row">
                <div class="input-field col s12">
                  <input id="sid" type="text" class="form-control" name="sid" data-mask="00-0000" placeholder="00-0000" />
                  <label for="sid">Student ID</label>
                    @if ($errors->has('sid'))
                      <span class="help-block">
                      <strong>{{ $errors->first('sid') }}</strong>
                      </span>
                    @endif                             
                </div>
                <div class="input-field col s4">
                  <input id="last_name" type="text" class="form-control" name="last_name">
                  <label for="last_name">Last Name</label>
                    @if ($errors->has('last_name'))
                      <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                    @endif  
                </div> 
                <div class="input-field col s4">
                  <input id="first_name" type="text" class="form-control" name="first_name">
                  <label for="first_name">First Name</label>
                    @if ($errors->has('first_name'))
                      <span class="help-block">
                      <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                    @endif  
                </div> 
                <div class="input-field col s4">
                  <input id="midle_name" type="text" class="form-control" name="midle_name">
                  <label for="midle_name">Midle Name</label>
                    @if ($errors->has('midle_name'))
                      <span class="help-block">
                      <strong>{{ $errors->first('midle_name') }}</strong>
                      </span>
                    @endif  
                </div> 
                <div class="input-field col s4">
                    <select class="form-control" name="campus_id">
                        @foreach($campuses as $campus)
                            <option value="{{ $campus->id }}">{{ $campus->campus_name }}</option>
                        @endforeach
                    </select>  
                    <label>Select Campus</label>  
                </div> 
                <div class="input-field col s4">
                    <select class="form-control" name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <label>Select Gender</label>  
                </div>
                <div class="input-field col s4">
                    <select class="form-control" name="course_id">
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                     <label>Select Course</label> 
                </div>
                <div class="input-field col s12">
                  <input id="email" type="email" class="form-control" name="email">
                  <label for="email">Email Address</label>
                    @if ($errors->has('email'))
                      <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif  
                </div>  
                <div class="input-field col s12">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    @if ($errors->has('password'))
                      <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                </div> 
                <div class="input-field col s12">
                  <label for="password-confirm">Confirm Password</label> 
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div> 
                <div class="input-field col s12">
                  <div class="file-field input-field">  
                      <div class="btn">
                          <span>Profile Picture</span>
                          <input type="file" id="image" name="image">
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                      </div>
                  </div> 
                </div> 
                <div class="right">
                 <button type="submit" class="btn green darken-3">Register</button>
                </div>
              </div>
          </form>
        </div> 
      </div>  
    </div>   
  </div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
    });
    $(document).ready(function(){ 
       $('#sid').mask('00-0000');
    });
</script>
@endsection
