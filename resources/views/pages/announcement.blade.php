@extends('main')
@section('content')
<div class="container">
  <div class="section"></div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card">
        <div class="card-content z-depth-2">
          <div class="section white" id="undecided">
            <div class="container">
              <div class="row">
                <div class="col s12 m6">
                  <h3>ATTENTION!</h3>
                  <h5 class="start text-primarycolor"><span class="black-text">{{$announcement->title}}</span></h5> 
                  <p class="start-paragraph-text ">{{$announcement->description}}</p>
                  <p class="start-paragraph-text ">on {{$announcement->date}}</p><br>
                  <div class="chip">
                  Posted by : {{$announcement->campus->campus_name.' '.'Admin'}}
                   </div>
                </div>  
                <div class="col s12 m6">
                  <br><br><br>
                  <img src="{{route('socials.image',['filename'=>$announcement->filename])}}" class="responsive-img z-depth-5">
                </div>
                <div class="col s12 m12"> 
                  <p class="right-align">
                  <a href="{{route('announcements.more')}}" class="btn light-green darken-2 white-text">Read More</a></p>       
                </div>              
              </div>  
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
