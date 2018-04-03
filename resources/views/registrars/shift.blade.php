@extends('registrar_template')
@section('title','My Profile')
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style type="text/css">
  .course{
    width: 70%;
  }
</style>
@endsection
@section('content')
<div class="col m12">       
  <div class="section">
    <div class="card z-depth-1">
      <div class="card-content">
        <div class="row">
          <div class="col s9 offset-s3 m9 offset-m3">
            <div class="section">
              @if(Session::has('success'))
                <div class="col s12 center">
                  <div class="yellow darken-3">
                    <p class="flow-text white-text">{{ Session::get('success')}}</p>
                  </div>
                </div>
              @endif
            </div>            
            <div class="defaultInfo center">
                {!! Form::model($student,['route'=>['shiftStore',$student->id], 'method' => 'PUT'])!!}
                <div class="row">
                <div class="col s6">
                {{ Form::text('sid', null, ["class" => 'form-control']) }}
                </div>
                <div class="col s6">
                <img src="{{route('user.image',['filename'=>$student->filename])}}" width="400" height="200">
                </div>  </div>
                <div class="row">              
                <div class=" col s4">
                {{ Form::text('last_name', null, ["class" => 'form-control']) }}
                {{ Form::label('last_name', 'Last Name') }}</div>
                <div class=" col s4">
                {{ Form::text('first_name', null, ["class" => 'form-control']) }}
                {{ Form::label('first_name', 'First Name') }}</div>
                <div class=" col s4">
                {{ Form::text('midle_name', null, ["class" => 'form-control']) }}
                {{ Form::label('midle_name', 'Midle Name') }}</div>
                </div>
            
                <select class="course" name="course_id">
                <option>Select Subject</option>
                @foreach($courses as $course)
                <option value="{{ $course->id }}">
                  {{$course->course_name}}
                </option>
                @endforeach
              </select>
              <br><div class="section"></div>
              <div class="col s12 right-align">
                  {{Form::submit('Update',['class'=>'btn'])}}
              </div>
                {!! Form::close() !!}
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
<script src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript">
  $('.course').select2();
</script>
@endsection