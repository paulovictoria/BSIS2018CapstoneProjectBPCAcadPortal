@extends('student_template')
@section('title','Dashboard')
@section('content')
<div class="col m12">				
  <div class="row">
    <div class="col m9 offset-m3 l9 offset-l3">
      <div class="section"></div>
        <div class="row">
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image teal">
                <i class="material-icons white-text" >subject</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.subjects',Auth::user()->course_id)}}" class=" white-text"><span>Subjects</span></a></h5>
                </div>
              </div>
            </div>
          </div> 

          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image blue">
                <i class="material-icons white-text" >schedule</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.schedule')}}" class=" white-text"><span>Schedule</span></a></h5>
                </div>
              </div>
            </div>
          </div> 
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image orange darken-2">
                <i class="material-icons  white-text" >folder_open</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.files')}}" class=" white-text"><span>Files</span></a></h5>
                </div>
              </div>
            </div>
          </div> 
          <div class="col m3 col s12">
            <div class="card horizontal">
              <div class="card-image red darken-1">
                <i class="material-icons white-text" >library_books</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('student.grades')}}" class=" white-text"><span>Grades</span></a></h5>
                </div>
              </div>
            </div>        
          </div> 

          <div class="col m4 s12">
            <div class="card z-depth-2">
              <ul class="collection with-header">
                <li class="collection-header"><h5>Announcements</h5></li>
                @foreach($announcements as $announcement)
                <li class="collection-item"><div>{{$announcement->title}}<a href="{{route('announcement.single',$announcement->id)}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                @endforeach
              </ul>  
              <div class="card-action">
                <a href="{{route('announcement.more')}}">See More</a>
              </div>     
            </div>
          </div>

          <div class="col m4 s12">
            <div class="card z-depth-2">
              <ul class="collection with-header">
                <li class="collection-header"><h5>Events</h5></li>
                @foreach($events as $event)
                <li class="collection-item"><div>{{$event->title}}<a href="{{route('event.single',$event->id)}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                @endforeach
              </ul>  
              <div class="card-action">
                <a href="{{route('event.more')}}">See More</a>
              </div>     
            </div>
          </div>

          <div class="col m4 s12">
            <div class="card z-depth-2">
              <ul class="collection with-header">
                <li class="collection-header"><h5>News</h5></li>
                @foreach($newses as $news)
                <li class="collection-item"><div>{{$news->title}}<a href="{{route('news.single',$news->id)}}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                @endforeach
              </ul>  
              <div class="card-action">
                <a href="{{route('news.more')}}" >See More</a>
              </div>     
            </div>
          </div>                

        </div>
 
                    

		</div>		
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
	 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection