@extends('student_template')
@section('title','Dashboard')
@section('content')
<div class="col m12">				
  <div class="row">
    <div class="col m9 offset-m3 ">
      <div class="section"></div>
        <div class="row">
          <div class="col s12 m8">
            <div class="card horizontal z-depth-5 blue-grey darken-2">
              <div class="card-image">
                <img src="{{route('user.image',['filename'=>Auth::user()->filename ])}}" height="169px">
              </div>
              <div class="card-stacked">
                <div class="card-content" data-tooltip="I am a tooltip">
                  <h5 class=" white-text">{{Auth::user()->email}}</h5>
                  <h5><a href="#" class=" white-text">{{Auth::user()->course->course_name}}</a></h5>
                </div>
              <div class="card-action"></div>
              </div>
            </div>
          </div>  
    	    <div class="col s12 m4">
            <div class="card horizontal z-depth-5 teal">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 100px;">subject</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">My</h5>
                  <h5><a href="{{route('student.subjects',Auth::user()->course_id)}}" class=" white-text">SUBJECT</a></h5>
                </div>
                <div class="card-action  white-text"></div>
              </div>
            </div>
          </div>
    	    <div class="col s12 m4">
            <div class="card horizontal z-depth-5 blue lighten-1">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 100px;">schedule</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">My</h5>
                  <h5><a href="{{route('student.schedule')}}" class=" white-text">SCHEDULE</a></h5>
                </div>
                <div class="card-action"></div>
              </div>
            </div>
          </div>
    	    <div class="col s12 m4">
            <div class="card horizontal z-depth-5 orange darken-2">
              <div class="card-image">
                <i class="material-icons  white-text" style="font-size: 100px;">folder_open</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">My</h5>
                  <h5><a href="{{route('student.files')}}" class=" white-text">FILES</h5>
                </div>
                <div class="card-action"></div>
              </div>
            </div>
          </div>		
          <div class="col s12 m4">
            <div class="card horizontal z-depth-5 red darken-1">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 100px;">library_books</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5 class=" white-text">My</h5>
                  <h5><a href="{{route('student.grades')}}" class=" white-text">GRADES</a></h5>
                </div>
                <div class="card-action">
                </div>
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
    $('.tooltipped').tooltip();
  });
	 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection