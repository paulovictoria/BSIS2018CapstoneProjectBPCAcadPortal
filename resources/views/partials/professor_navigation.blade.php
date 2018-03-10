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
            <a href="{{route('professor.dashboard')}}" class="collapsible-header"><i class="icon-home"></i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{ route('professor.indexClassroomsAssign')}}" class="collapsible-header"><i class="icon-list"></i>Classroom</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.fileIndex')}}" class="collapsible-header"><i class="icon-folder"></i>Files</a>
          </li>
        </ul>
      </li>  
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.gradeIndex')}}" class="collapsible-header"><i class="icon-book"></i>Grade Book</a>
          </li>
        </ul>
      </li>           
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('professor.schedule')}}" class="collapsible-header"><i class="icon-watch"></i>Schedule</a>
          </li>
        </ul>
      </li>      
 
    </ul>
    <div class="navbar-fixed">
      <nav>
      <div class="nav-wrapper light-green darken-1">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="icon-menu"></i></a>
        <ul class="right">
          <li><a class="admin-profileSetting" href="#" data-activates="profile-setting"><i class="icon-head"></i></a></li>
          <li><a href="#" ><i class="icon-message"></i></a></li>
        </ul>
        <ul id="profile-setting" class="dropdown-content">
          <li><a href="{{route('professor.profile')}}"><i class="icon-head"></i>My Profile</a></li>
          <li><a href="#"><i class="icon-signal"></i>Settings</a></li>
          <li><a class="collapsible-header" href="{{ route('professor.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-log-out"></i>Logout</a>
          </li>                          
        <form id="logout-form" action="{{ route('professor.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </ul>
      </div>
      </nav>
    </div>
