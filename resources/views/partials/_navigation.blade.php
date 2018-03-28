<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view">
      <div class="background green darken-4">
        <img class="right" src="http://www.vactualpapers.com/web/wallpapers/modern-material-design-full-hd-wallpaper-no-205/thumbnail/lg.png">
      </div>
        <a href="#!user"><img class="circle" src="{{asset('images/manager.png')}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->email}}</span></a>
        <a href="#!email"><span class="white-text email">{{ Auth::user()->campus->campus_name}}</span></a>
<!--         <div class="section"></div> -->
    </div>
  </li>
  <li class="no-padding">
    <ul> 
      <li class="{{ Request::path() == 'admin/dashboard' ? 'active' : '' }}">
        <a href="{{route('admin.dashboard')}}" class="collapsible-header"><i class="material-icons">dashboard</i>Dashboard</a>
      </li>
    </ul>
  </li>

      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header"><i class="material-icons">supervisor_account</i>User</a>
            <div class="collapsible-body">
              <ul>
                <li class="{{ Request::path() == 'admin/registrarIndex' ? 'active' : '' }}"><a href="{{route('registrarIndex')}}">Registrar</a></li>
                <li class="{{ Request::path() == 'admin/professorIndex' ? 'active' : '' }}"><a href="{{route('professorIndex')}}">Instructor</a></li>
                @if(Auth::user()->campus->id==1)
                <li><a href="{{route('admin.adminIndex')}}">Admins</a></li>
                @endif
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
                <li class="{{ Request::path() == 'announcements' ? 'active' : '' }}"><a href="{{route('announcements.index')}}">Announcements</a></li>
                <li class="{{ Request::path() == 'events' ? 'active' : '' }}"><a href="{{route('events.index')}}">Events</a></li>
                 <li class="{{ Request::path() == 'news' ? 'active' : '' }}"><a href="{{route('news.index')}}">News</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="{{ Request::path() == 'admin/courses' ? 'active' : '' }}">
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
            <a href="{{route('assigns.index')}}" class="collapsible-header"><i class="material-icons">assignment</i>Assign</a>
          </li>
        </ul>
      </li> 
       <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('adminClassroomIndex')}}" class="collapsible-header"><i class="material-icons">collections_bookmark</i>Classrooms</a>
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
      <div class="nav-wrapper green darken-4">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        <ul class="right">
          <li><a class="admin-profileSetting" data-activates="profile-setting"><i class="material-icons">account_circle</i></a></li>
         <!--  <li class="blue-text text-darken-2"><a href="{{route('professorsApprovalIndex')}}" ><span>{{ count(Auth::user()->unreadNotifications)}}<i class="material-icons red-text">notifications</i></span></a></li> -->
     
              @if(!empty(count(Auth::user()->unreadNotifications)))
                  <li><a href="{{route('professorsApprovalIndex')}}" ><i class="material-icons yellow-text">notifications</i></a></li>
                  <li class="white-text">{{ count(Auth::user()->unreadNotifications)}}</li>
                @else
               <li> <a href="{{route('professorsApprovalIndex')}}" ><i class="material-icons">notifications</i></a></li>
              @endif

        </ul>
      </div>
      </nav>
    </div>
            <ul id="profile-setting" class="dropdown-content">
          <li><a href="{{route('admin.profile')}}"><i class="icon-head"></i>My Profile</a></li>
          <li><a href="#"><i class="icon-signal"></i>Settings</a></li>
          <li><a class="collapsible-header" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-log-out"></i>Logout</a>
          </li>                          
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </ul>