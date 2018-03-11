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
            <a href="{{route('registrar.dashboard')}}" class="collapsible-header"><i class="material-icons">dashboard</i>Dashboard</a>
          </li>
        </ul>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{ route('classrooms.index')}}" class="collapsible-header"><i class="material-icons">collections_bookmark</i>Classroom</a>
          </li>
        </ul>
      </li>     
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('registrar.studentIndex')}}" class="collapsible-header"><i class="material-icons">face</i>Students</a>
          </li>
        </ul>
      </li>  
      <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
          <li>
            <a href="{{route('studentsApprovalIndex')}}"  class="collapsible-header"><i class="material-icons">notifications{{ count(Auth::user()->unreadNotifications)}}</i>Approval</a>
          </li>
          </ul>
      </li>     
     <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a href="{{route('registrar.profile')}}" class="collapsible-header"><i class="material-icons">account_circle</i>Account</a>
            </li>
          </ul>
        </li> 
     <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header" href="{{ route('registrar.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">close</i>Logout</a>
     <form id="logout-form" action="{{ route('registrar.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>   
          </ul>
         
        </li> 
    </ul>
    <div class="navbar-fixed">
      <nav>
      <div class="nav-wrapper light-green darken-1">
        <a href="#" data-activates="admin-slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
 
      </div>
      </nav>
    </div>
