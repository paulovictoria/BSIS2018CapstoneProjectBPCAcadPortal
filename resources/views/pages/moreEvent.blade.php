@extends('main')
@section('content')
<div class="container">
  <div class="section"></div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card">
        <div class="card-content z-depth-2">
          <div class="section white" id="undecided">
              <h5 class="start text-primarycolor center-align">More Events</h5> 
              <div class="divider"></div>
                <div class="row">
                @foreach($moreevents as $events)
                 <div class="col m3 event">
                      <span class="event-date center-block">
                          <span class="event-month">{{ date('M',strtotime($events->date)) }}</span>
                       
                          <span class="event-day">{{ date('d',strtotime($events->date)) }}</span>
                      </span>
                      <div class="event-info">
                          <h6 class="center">
                              <a href="{{route('event.single',$event->id)}}" class="green-text"{{route('event.single',$events->id)}}"">{{$event->title}}</a>
                          </h6>
                      </div>                
                  </div>  
                  @endforeach 
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
    $(document).ready(function() {
    $('select').material_select();
    });
</script>
@endsection
