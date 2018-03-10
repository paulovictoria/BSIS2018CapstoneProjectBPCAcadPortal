@extends('main')

@section('content')
<div class="container">
    <div class="section"></div>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <form class="col s12" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">User Login</span>
                        <div class="row">
                            <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                 <label for="email">Email Address</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif                             
                            </div>
                            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required>
                                 <label for="email">Email Address</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif                        
                            </div>   
                            <div class="input-field col s12">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">Remember Me</label>
                            </div>                   
                            <div class="input-field col s12">
            
                                    <button type="submit" class="btn blue-grey darken-1 right">
                                        Login
                                    </button>
                            </div>  
                            <div class="input-field col s12">
     
                                    <a class="link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a> 
                            </div>                                               
                        </div>     
                    </div> 
                    <div class="card-action">  
                    </div>    
                </div>
            </form>  
        </div>    
    </div>   
</div>
@endsection
