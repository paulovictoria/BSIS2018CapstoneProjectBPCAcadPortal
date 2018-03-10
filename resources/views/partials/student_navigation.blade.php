<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view ">
      <div class="background">
        <img class="right" src="{{asset('images/bgadmin.png')}}">
      </div>
        <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>Auth::user()->filename ])}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->email}}</span></a>
        <a href="#!email"><span class="white-text email">{{ Auth::user()->course->course_name}}</span></a>
        <div class="section"></div>
    </div>
  </li>
        <li class="no-padding">
        <ul>
          <li>
            <a href="{{route('student.dashboard')}}" class="collapsible-header"><i class="icon-home"></i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.subjects',Auth::user()->course_id)}}" class="collapsible-header"><i class="icon-book"></i>Subject</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.schedule')}}" class="collapsible-header"><i class="icon-watch"></i>Schedule</a>
          </li>
        </ul>
      </li> 
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.files')}}" class="collapsible-header"><i class="icon-folder"></i>Files</a>
          </li>
        </ul>
      </li> 
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.grades')}}" class="collapsible-header"><i class="icon-blackboard"></i>Grades</a>
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
          <li><a href="{{route('student.profile')}}"><i class="icon-head"></i>My Profile</a></li>
          <li><a href="#"><i class="icon-signal"></i>Settings</a></li>
          <li><a class="collapsible-header" href="{{ route('registrar.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-log-out"></i>Logout</a>
          </li>                          
        <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </ul>
      </div>
      </nav>
    </div>
