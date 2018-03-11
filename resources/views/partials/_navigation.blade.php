<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view">
      <div class="background">
        <img class="right" src="{{asset('images/bgadmin.png')}}">
      </div>
        <a href="#!user"><img class="circle" src="{{asset('images/bpclogo.png')}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->email}}</span></a>
        <a href="#!email"><span class="white-text email">{{ Auth::user()->campus->campus_name}}</span></a>
<!--         <div class="section"></div> -->
    </div>
  </li>
  <li class="no-padding">
    <ul>
      <li>
        <a href="{{route('admin.dashboard')}}" class="collapsible-header"><i class="material-icons">dashboard</i>Dashboard</a>
      </li>
    </ul>
  </li>

      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"><i class="material-icons">person</i>User</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{route('registrarIndex')}}">Registrar</a></li>
                <li><a href="{{route('professorIndex')}}">Instructor</a></li>
<!--                <li><a  href="{{route('studentsApprovalIndex')}}">Students</a></li> -->
  
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"><i class="material-icons">perm_media</i>Socials</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{route('announcements.index')}}">Announcements</a></li>
                <li><a href="{{route('events.index')}}">Events</a></li>
                 <li><a href="{{route('news.index')}}">News</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('courses.index')}}" class="collapsible-header"><i class="material-icons">palette</i>Courses</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('subjects.index')}}" class="collapsible-header"><i class="material-icons">subject</i>Subjects</a>
          </li>
        </ul>
      </li>      
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('classrooms.index')}}" class="collapsible-header"><i class="material-icons">class</i>Classes</a>
          </li>
        </ul>
      </li>
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('assigns.index')}}" class="collapsible-header"><i class="material-icons">assignment</i>Assign</a>
          </li>
        </ul>
      </li>      
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('rooms.index')}}" class="collapsible-header"><i class="material-icons">landscape</i>Rooms</a>
          </li>
        </ul>
      </li> 

    </ul>
    <div class="navbar-fixed white">
      <nav>
      <div class="nav-wrapper light-green">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <ul class="right">
          <li><a class="admin-profileSetting" href="#" data-activates="profile-setting"><i class="material-icons">account_circle</i></a></li>
          <li><a href="{{route('professorsApprovalIndex')}}" ><i class="material-icons">notifications</i>{{ count(Auth::user()->unreadNotifications)}}</a></li>
        </ul>
        <ul id="profile-setting" class="dropdown-content">
          <li><a href="{{route('admin.profile')}}"><i class="icon-head"></i>My Profile</a></li>
          <li><a href="#"><i class="icon-signal"></i>Settings</a></li>
          <li><a class="collapsible-header" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-log-out"></i>Logout</a>
          </li>                          
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </ul>
      </div>
      </nav>
    </div>
