@extends('admin_template')
@section('title','| Dashboard')
@section('content')	
<div class="col m12">				
	<div class="row">
					<div class="col m9 offset-m3 ">
						
			<div class="section"></div>
			<div class="section"></div>
		<div class="row">
    	 <div class="col s12 m8">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 150px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">School</h4>
                  <h4><a href="{{ route('professor.indexClassroomsAssign')}}" class="white-text">Announcements</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m4">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 150px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">School</h4>
                  <h4><a href="{{ route('professor.indexClassroomsAssign')}}" class="white-text">News</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m4">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 150px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">School</h4>
                  <h4><a href="{{ route('professor.indexClassroomsAssign')}}" class="white-text">Events</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>          
	</div>
</div>
</div>
@endsection
