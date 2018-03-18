@extends('student_template')
@section('title','Dashboard')
@section('stylesheet')
<style type="text/css">
	.image{
  height: 270px;
}
</style>
@endsection
@section('content')
<div class="col m12">				
	<div class="row">
					<div class="col m9 offset-m3 ">
						
			<div class="section"></div>
			<div class="section"></div>
		<div class="row">

    	 <div class="col s12 m6">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons  white-text" style="font-size: 150px;">subject</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class=" white-text">My</h4>
                  <h4><a href="{{route('student.subjects',Auth::user()->course_id)}}" class=" white-text">SUBJECT</a></h4>
                </div>

                <div class="card-action  white-text">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m6">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons  white-text" style="font-size: 150px;">schedule</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class=" white-text">My</h4>
                  <h4><a href="{{route('student.schedule')}}" class=" white-text">SCHEDULE</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m6">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons  white-text" style="font-size: 150px;">folder_open</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class=" white-text">My</h4>
                  <h4><a href="{{route('student.files')}}" class=" white-text">FILES</h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m6">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons  white-text" style="font-size: 150px;">library_books</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class=" white-text">My</h4>
                  <h4><a href="{{route('student.grades')}}" class=" white-text">GRADES</a></h4>
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
    $('ul.tabs').tabs();
  });
</script>
@endsection