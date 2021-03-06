@extends('admin_template')
@section('title','| Register')
@section('content')
<div class="col s12">           
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                        <h3 class="light-green-text darken-2 card-title">Registrars</h3>
                        <div class="section"></div>
                    <form class="form-horizontal" method="POST" action="{{ route('registrar.register.submit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('eid') ? ' has-error' : '' }}">
                            <label for="eid" class="col-md-4 control-label">EID</label>

                            <div class="col-md-6">
                                <input id="eid" type="text" class="form-control" name="eid" data-mask="00-0000" placeholder="00-0000" >

                                @if ($errors->has('eid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">last_name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                               <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">first_name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('midle_name') ? ' has-error' : '' }}">
                            <label for="midle_name" class="col-md-4 control-label">midle_name</label>

                            <div class="col-md-6">
                                <input id="midle_name" type="text" class="form-control" name="midle_name" value="{{ old('midle_name') }}" required autofocus>

                                @if ($errors->has('midle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('midle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <br>
                      <div class="input-field col s12">
                        <select class="form-control" name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <label>Select Gender</label>
                      </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="file-field input-field">
                          <div class="btn">
                            <span>Profile Picture</span>
                            <input type="file" id="image" name="image">
                          </div>
                          <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
             <div class="card-action">
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
       $('#eid').mask('00-0000');
    });
</script>
@endsection