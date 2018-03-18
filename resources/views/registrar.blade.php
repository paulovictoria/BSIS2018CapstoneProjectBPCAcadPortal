@extends('registrar_template')
@section('title','| Dashboard')
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
                <i class="material-icons white-text" style="font-size: 150px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">The</h4>
                  <h4><a href="{{ route('classrooms.index')}}" class="white-text">Classrooms</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m6">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 150px;">face</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">The</h4>
                  <h4><a href="{{route('registrar.studentIndex')}}" class="white-text">Users</a></h4>
                </div>
                <div class="card-action">
        		</div>
              </div>
            </div>
          </div>
    	 <div class="col s12 m12">
            <div class="card horizontal z-depth-5 green darken-4">
              <div class="card-image">
                <i class="material-icons white-text" style="font-size: 150px;">notifications</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h4 class="white-text">The</h4>
                  <h4><a href="{{route('studentsApprovalIndex')}}" class="white-text">Notifications</a></h4><h3 class="yellow-text darken-4">{{ count(Auth::user()->unreadNotifications)}}</h3>
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