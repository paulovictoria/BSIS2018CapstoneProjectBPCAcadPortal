@extends('main')
@section('content')
<div class="container">
    <div class="section"></div>
    <div class="row">
        <div class="col s12 m4 push-m4">
            <div class="section">
                @if(Session::has('alert'))
                    <div class="light-green lighten-2 white-text">
                         <p class="flow-text">{{ Session::get('alert')}}</p>
                    </div>
                @endif
            </div>
            <form met
            <form method="POST" action="{{ route('professor.login.submit') }}">{{ csrf_field() }}
                <div class="card">
                    <div class="card-content z-depth-2">
                        <span class="card-title center light-green-text darken-1">INSTRUCTOR</span>
                        <div class="row">
                            <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                                 <label for="email">Email Address</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif                             
                            </div>
                            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password">
                                 <label for="email">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif                        
                            </div> 
                            <div class="input-field col s12">
                                    <button type="submit" class="btn light-green darken-2 right">
                                        Login
                                    </button>
                            </div>   
                            <div class="input-field col s12">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">Remember Me</label>        
                            </div>                                                                   
                        </div>     
                    </div> 
                    <div class="card-action">    
                     <a class="link" href="{{ route('professor.password.request') }}">Forgot Password?</a>  
                     <a class="link" href="{{ route('professor.registration') }}">No Account?</a>       
                    </div>    
                </div>
            </form>  
        </div>    
    </div>   
</div>
@endsection
