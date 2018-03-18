<ul id="admin-slide-out" class="side-nav fixed ">
  <li>
    <div class="user-view ">
      <div class="background green darken-4">
        <img class="right" src="http://www.vactualpapers.com/web/wallpapers/modern-material-design-full-hd-wallpaper-no-205/thumbnail/lg.png">
      </div>
        <a href="#!user"><img class="circle" src="{{route('user.image',['filename'=>Auth::user()->filename ])}}"></a>
        <a href="#!name"><span class="white-text name">{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</span></a>
        <a href="#!email"><span class="white-text email">{{ Auth::user()->course->course_name}}</span></a>
        <div class="section"></div>
    </div>
  </li>
        <li class="no-padding">
        <ul>
          <li>
            <a href="{{route('student.dashboard')}}" class="collapsible-header"><i class="material-icons">dashboard</i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.subjects',Auth::user()->course_id)}}" class="collapsible-header"><i class="material-icons">subject</i>Subject</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.schedule')}}" class="collapsible-header"><i class="material-icons">schedule</i>Schedule</a>
          </li>
        </ul>
      </li> 
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.files')}}" class="collapsible-header"><i class="material-icons">folder_open</i>Files</a>
          </li>
        </ul>
      </li> 
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.grades')}}" class="collapsible-header"><i class="material-icons">library_books</i>Grades</a>
          </li>
        </ul>
      </li>                  
   <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('student.profile')}}" class="collapsible-header"><i class="material-icons">account_circle</i>Account</a>
          </li>
        </ul>
      </li> 
   <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header" href="{{ route('student.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">close</i>Logout</a>
   <form id="logout-form" action="{{ route('student.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </li>   
        </ul>
       
      </li>       
    </ul>
    <div class="navbar-fixed">
      <nav>
      <div class="nav-wrapper green darken-4">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      </div>
      </nav>
    </div>
