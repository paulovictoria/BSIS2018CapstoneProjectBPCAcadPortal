@extends('registrar_template')
@section('title','Dashboard')
@section('content')
<div class="col m12">       
  <div class="row">
    <div class="col m9 offset-m3 ">
      <div class="section"></div>
        <div class="row">
          <div class="col s12 m12">
            <div class="card horizontal z-depth-5 blue-grey darken-2">
              <div class="card-image">
                <img src="{{route('user.image',['filename'=>Auth::user()->filename ])}}" height="169px">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">{{Auth::user()->email}}</h5>
                  <h5><a href="#" class=" white-text">BPC Registrar</a></h5>
                </div>
              <div class="card-action"></div>
              </div>
            </div>
          </div>  
          <div class="col s12 m6">
            <div class="card horizontal z-depth-5 teal">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 100px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">The</h5>
                  <h5><a href="{{ route('classrooms.index')}}" class="white-text">Classrooms</a></h5>
                </div>
                <div class="card-action  white-text"></div>
              </div>
            </div>
          </div>
          <div class="col s12 m6">
            <div class="card horizontal z-depth-5 red darken-1">
              <div class="card-image">
                 <i class="material-icons white-text" style="font-size: 100px;">face</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">The</h5>
                  <h5><a href="{{route('registrar.studentIndex')}}" class="white-text">Users</a></h5>
                </div>
                <div class="card-action"></div>
              </div>
            </div>
          </div>  
      </div>
    </div>    
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection