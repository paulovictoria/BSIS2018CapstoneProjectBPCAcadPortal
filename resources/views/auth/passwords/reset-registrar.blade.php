@extends('main')
@section('content')
<div class="container">
  <div class="section center">
           @if (session('status'))
                      <div class="light-green lighten-2 white-text">
                         <p class="flow-text">{{ Session('status')}}</p>
                    </div>
            @endif
  </div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card">
        <div class="card-content z-depth-2">
          <span class="card-title">Registrar Reset Password</span>  
          <form class="form-horizontal" role="form" method="POST" action="{{ route('registrar.password.request') }}">
                        {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="row">
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
                <div class="right">
                 <button type="submit" class="btn light-green darken-2">Reset Password</button>
                </div>
             </div>
          </form>
        </div> 
      </div>  
    </div>   
  </div>
</div>
@endsection

