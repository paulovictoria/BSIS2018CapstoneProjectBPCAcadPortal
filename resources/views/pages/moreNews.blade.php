@extends('main')
@section('content')
<div class="container">
  <div class="section"></div>
  <div class="row">
    <div class="col s12 m10 push-m1">
      <div class="card">
        <div class="card-content z-depth-2">
          <div class="section white" id="undecided">
              <h5 class="start text-primarycolor center-align">Bpcians News</h5> 
              <div class="divider"></div>
                <div class="row">
                    @foreach($morenews as $news)
                    <div class="col s12 m12">
                      <div class="col s3 m3 l3">
                        <img width="75" height="75" src="{{route('socials.image',$news->filename)}}" class="circle">
                      </div>         
                      <div class="col s9 m8 l9">
                        <blockquote >
                          <p class="grey-text text-darken-3">   
                        <span style="font-weight:500;">{{$news->title}}</span>.
                        {{ substr($news->description,0,120)}}
                        {{strlen($news->description) > 150 ? "..." : ""}}
                        </p>
                        <p style="font-weight:300;"><a href="{{route('news.single',$news->id)}}" class="text-primarycolor">Continue Reading...</a></p>
                        <div class="divider"></div>
                        </blockquote>
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
