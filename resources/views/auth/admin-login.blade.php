@extends('main')
@section('content')
<div class="container">
    <div class="section"></div>
    <div class="row">
        <div class="col s12 m4 push-m4">
            <form method="POST" action="{{ route('admin.login.submit') }}">{{ csrf_field() }}
                <div class="card z-depth-2">
                    <div class="card-content">
                        <span class="card-title center green-text darken-4">ADMIN</span>
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
                                    <button type="submit" class="btn green darken-4 right">
                                        Login
                                    </button>
                            </div>   
                            <div class="input-field col s12">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><label for="remember">Remember Me</label>        
                            </div>                                                                   
                        </div>     
                    </div> 
                    <div class="card-action center">    
                     <a class="link light-green-text" href="{{ route('admin.password.request') }}">Forgot Password?</a>        
                    </div>    
                </div>
            </form>  
        </div>    
    </div>   
</div>
@endsection
