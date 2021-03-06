@extends('registrar_template')
@section('title','| My Profile')
@section('content') 
<main>
    <div class="section light-green"><h4 class="center-align white-text">My Profile</h4></div>
    <br><br>
    <div class="divider"></div>   
      <div class="row">
        <div class="col l10 offset-l2">
         <div class="card">
          <div class="card-content center-align">
            <div class="defaultInfo">
              <div class="row"> 
                <div class="col s12">
                  <div class="frofileImages">
                              <img src="{{route('user.image',['filename'=>Auth::user()->filename])}}" alt="user background"  width="120" height="120"> 
                               <br>
                              <a class="btn-floating waves-effect waves-light light-green darken-1">
                                <i class="material-icons">edit</i>
                              </a>
                  </div>
                </div>
                <div class="col s12">
                  <div class="info">
                              <ul>
                                <li class="flow-text"><b>{{ Auth::user()->email}}</b></li>
                                <li class="">Registrar</li>
                              </ul>  
                            </div> 
                  </div> 
                </div>
              </div> 
          </div>
        </div>
      </div>
    </div>    
</main>       
@endsection
