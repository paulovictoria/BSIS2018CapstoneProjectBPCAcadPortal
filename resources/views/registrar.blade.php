@extends('registrar_template')
@section('title','Dashboard')
@section('stylesheets')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
@endsection
@section('content')
<div class="col m12">       
  <div class="row">
    <div class="col m9 offset-m3 ">
      <div class="section"></div>
        <div class="row">
          <div class="col s12 m5">
            <div class="card">
              <div class="card-content">
            <div class="row">
           <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image teal">
               <i class="material-icons white-text" style="font-size: 100px;">collections_bookmark</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{ route('classrooms.index')}}" class=" white-text"><span>Classrooms</span></a></h5>
                </div>
              </div>
            </div>
          </div> 

          <div class="col s12 m12">
            <div class="card horizontal">
              <div class="card-image blue">
                <i class="material-icons white-text" style="font-size: 100px;">face</i>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h5><a href="{{route('registrar.studentIndex')}}" class=" white-text"><span>Students</span></a></h5>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
            </div>
          </div>           
          <div class="col s8 m7">
            <div class="card">
              <div class="card-content">
          <div style="width:100%;">
              {!! $chartjs->render() !!}
          </div>
        </div>
      </div>
   
          </div>  
          <div class="col s12">
                 <div class="divider"></div>
               </div>
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
        <div style="width:90%;">
              {!! $chartjsBar->render() !!}
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
   $(document).ready(function(){
    $('ul.tabs').tabs();
  });
</script>
@endsection