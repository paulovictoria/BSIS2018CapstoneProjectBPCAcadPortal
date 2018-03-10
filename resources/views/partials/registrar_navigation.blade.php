<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view ">
      <div class="background">
        <img class="right" src="{{asset('images/bgadmin.png')}}">
      </div>
        <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>Auth::user()->filename])}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->email}}</span></a>
        <a href="#!email"><span class="white-text email">Registrar</span></a>
        <div class="section"></div>
    </div>
  </li>
        <li class="no-padding">
        <ul>
          <li>
            <a href="{{route('registrar.dashboard')}}" class="collapsible-header"><i class="icon-home"></i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{ route('classrooms.index')}}" class="collapsible-header"><i class="icon-book"></i>Classroom</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="#" class="collapsible-header"><i class="icon-blackboard"></i>Courses</a>
          </li>
        </ul>
      </li>       
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('registrar.studentIndex')}}" class="collapsible-header"><i class="icon-head"></i>Students</a>
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
          <li><a href="{{route('studentsApprovalIndex')}}" ><i class="icon-bell"><span>{{ count(Auth::user()->unreadNotifications)}}</span></i></a></li>
          <li><a href="#" ><i class="icon-message"></i></a></li>
        </ul>
        <ul id="profile-setting" class="dropdown-content">
          <li><a href="{{route('registrar.profile')}}"><i class="icon-head"></i>My Profile</a></li>
          <li><a href="#"><i class="icon-signal"></i>Settings</a></li>
          <li><a class="collapsible-header" href="{{ route('registrar.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-log-out"></i>Logout</a>
          </li>                          
        <form id="logout-form" action="{{ route('registrar.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </ul>
      </div>
      </nav>
    </div>
