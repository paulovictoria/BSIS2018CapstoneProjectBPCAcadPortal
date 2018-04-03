@extends('admin_template')
@section('title','Registrar')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content center">
                <div class="row">
                    <div class="col s9 offset-s3 m9 offset-m3">
                      <div class="defaultInfo">
                        <div class="row"> 
                          <div class="col s12">
                            <div class="frofileImages">
                              <img class="activator" src={{route('user.image',['filename'=>$professor->filename])}}"" alt="user background" width="120" height="120">
                              <br>
                              <a class="btn-floating waves-effect waves-light light-green darken-1"><i class="icon-edit"></i></a>
                            </div>
                          </div>
                          <div class="col s12">
                            <div class="info">
                              <ul>
                                <li class="flow-text"><b>{{$professor->email}}</b></li>
                                <li class="">{{$professor->last_name.' '.$professor->first_name.' '.$professor->midle_name}}</li>
                              </ul>  
                            </div> 
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
