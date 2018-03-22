@extends('admin_template')
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
                <img class="right" src="{{asset('images/manager.png')}}" height="169px">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">{{Auth::user()->email}}</h5>
                  <h5><a href="#" class=" white-text">{{Auth::user()->campus->campus_name}}</a></h5>
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