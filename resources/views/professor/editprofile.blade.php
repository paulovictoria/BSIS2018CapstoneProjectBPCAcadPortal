@extends('professor_template')
@section('title','Edit Profile')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                        <h3 class="light-green-text darken-2 card-title">Edit Profile</h3>
                    {!! Form::model($professor,['route'=>['professor.profileUpdate',$professor->id],'method'=>'PUT','files'=>'true' ]) !!}

                   {{ Form::label('eid','EID')}}
                   {{ Form::text('eid',null,['class'=>'form-control']) }}

                   {{ Form::label('last_name','Last Name')}}
                   {{ Form::text('last_name',null,['class'=>'form-control']) }}

                   {{ Form::label('first_name','first Name')}}
                   {{ Form::text('first_name',null,['class'=>'form-control']) }}

                   {{ Form::label('midle_name','midle Name')}}
                   {{ Form::text('midle_name',null,['class'=>'form-control']) }}   

                <div class="input-field col s4">
                    <select class="form-control" name="gender">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <label>Select Gender</label>  
                </div>

                 <div class="input-field col s12">
                  <div class="file-field input-field">  
                  <img class="activator" src="{{route('user.image',['filename'=>Auth::user()->filename])}}" alt="user background" width="120" height="120">
                      <div class="btn">
                          <span>Profile Picture</span>
                          <input type="file" id="image" name="image">
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                      </div>
                  </div> 
                </div> 
                <div class="col s12 right-align">                                  
                  {{Form::submit('Save Changes',['class'=>'btn light-green darken-2'])}}
                </div>  
                  {!! Form::close() !!}
                    </div>
                  
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>
@endsection
