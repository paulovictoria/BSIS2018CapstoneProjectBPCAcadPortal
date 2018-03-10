<a href="#" data-activates="slide-out" class="button-collapse"><i style="font-size:40px;" class="icon-menu black-text"></i></a>

  <ul id="slide-out" class="side-nav fixed"> 
    <li>
      <div class="user-view">
       <a href="#!user"><img class="circle" src="images/anonymous.jpg"></a>
        <a href="#!name"><span class="grey-text name">Admin Portal</span></a>
        <a href="#!email"><span class="grey-text email">Main Campus</span></a>
        
          <li><a href="{{ route('admin.dashboard') }}" style="font-size:120%;" class=" icon-home grey-text darken-1"> <span> Dashboard</span></a></li>
          <li><a  href="{{ route('assigns.index') }}" style="font-size:120%;" class="icon-head grey-text darken-1"> <span> Admin</span></a></li>
          <li><a href="#users" class="dropdown-button icon-man grey-text darken-1" style="font-size:120%;" data-activates="users"> <span> Users</span></a></li>
         <!--DROPDOWN-->
          <ul id="users" class="dropdown-content">
            <li><a  href="#" style="font-size:120%;" class="icon-man grey-text darken-1"> <span> Registrar</span></a></li>
            <li><a  href="{{ route('students.index') }}" style="font-size:120%;" class="icon-man grey-text darken-1"> <span> Students</span></a></li>
             <li><a  href="{{ route('professors.index') }}" style="font-size:120%;" class="icon-man grey-text darken-1"> <span> Instructors</span></a></li>
          </ul> 
          <!--END DROPDOWN--> 
      </div>
    </li> 
    <li><div class="divider"></div></li>
    <li><a href="#academic" class="dropdown-button icon-book grey-text darken-1" style="font-size:120%;" data-activates="academic"> <span> Social Media</span></a></li>
      <!--DROPDOWN-->
      <ul id="academic" class="dropdown-content">
        <li><a href="{{ route('announcements.index') }}" style="font-size:120%;" class="icon-paper grey-text darken-1"> <span> Announce</span></a></li>
        <li><a href="{{ route('events.index') }}" style="font-size:120%;" class="icon-file grey-text darken-1"> <span> Events</span></a></li>
        <li><a href="{{ route('news.index') }}" style="font-size:120%;" class="icon-watch grey-text darken-1"> <span> News</span></a></li>
     </ul> 
      <!--END DROPDOWN-->   
    <li><a  href="{{ route('courses.index') }}" style="font-size:120%;" class="icon-tools grey-text darken-1"> <span> Course</span></a></li>
    <li><a  href="{{ route('subjects.index') }}" style="font-size:120%;" class="icon-lab-flask grey-text darken-1"> <span> Subject</span></a></li>
    <li><a  href="{{ route('classrooms.index') }}" style="font-size:120%;" class="icon-clipboard grey-text darken-1"> <span> Classroom</span></a></li>
    <li><a  href="{{ route('assigns.index') }}" style="font-size:120%;" class="icon-pencil grey-text darken-1"> <span> Assign</span></a></li>
</ul>
