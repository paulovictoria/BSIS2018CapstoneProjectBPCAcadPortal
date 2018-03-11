<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view ">
      <div class="background">
        <img class="right" src="{{asset('images/bgadmin.png')}}">
      </div>
        <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>Auth::user()->filename])}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->email}}</span></a>
        <a href="#!email"><span class="white-text email">Instructor</span></a>
        <div class="section"></div>
    </div>
  </li>
        <li class="no-padding">
        <ul>
          <li>
            <a href="{{route('professor.dashboard')}}" class="collapsible-header"><i class="material-icons">dashboard</i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{ route('professor.indexClassroomsAssign')}}" class="collapsible-header"><i class="material-icons">collections_bookmark</i>Classroom</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.fileIndex')}}" class="collapsible-header"><i class="material-icons">folder_open</i>Files</a>
          </li>
        </ul>
      </li>  
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.gradeIndex')}}" class="collapsible-header"><i class="material-icons">library_books</i>Grade Book</a>
          </li>
        </ul>
      </li>           
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.schedule')}}" class="collapsible-header"><i class="material-icons">schedule</i>Schedule</a>
          </li>
        </ul>
      </li>      
   <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.profile')}}" class="collapsible-header"><i class="material-icons">account_circle</i>Account</a>
          </li>
        </ul>
      </li> 
   <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" href="{{ route('professor.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">close</i>Logout</a>
   <form id="logout-form" action="{{ route('professor.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </li>   
        </ul>

      </li>  
  
    </ul>
    <div class="navbar-fixed">
      <nav>
      <div class="nav-wrapper light-green darken-1">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
    
  
        </ul>
      </div>
      </nav>
    </div>
