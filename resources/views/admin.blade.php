@extends('admin_template')
@section('title','Dashboard')
@section('stylesheets')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
@endsection
@section('content')
<div class="col m12">       
  <div class="row">
    <div class="col m9 offset-m3 l9 offset-l3">
      <div class="section"></div>
        <div class="row">
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image teal">
                <i class="material-icons white-text">palette</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.subjects',Auth::user()->course_id)}}" class=" white-text"><span>Courses</span></a></h5>
                </div>
              </div>
            </div>
          </div> 

          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image blue">
                <i class="material-icons white-text">assignment</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.schedule')}}" class=" white-text"><span>Assign</span></a></h5>
                </div>
              </div>
            </div>
          </div> 
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image orange darken-2">
                <i class="material-icons white-text">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.files')}}" class=" white-text"><span>Classrooms</span></a></h5>
                </div>
              </div>
            </div>
          </div> 
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image red darken-1">
                <i class="material-icons white-text">landscape</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.grades')}}" class=" white-text"><span>Rooms</span></a></h5>
                </div>
              </div>
            </div>        
          </div>   

        </div>
         <div class="col s6 m6">
            <div class="card">
              <div class="card-content">
          <div style="width:100%;">
              {!! $chartjs->render() !!}
          </div>
        </div>
      </div>
   
          </div>  
        <div class="col s6 m6">
            <div class="card">
              <div class="card-content">
          <div style="width:100%;">
              {!! $chartjspolararea->render() !!}
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