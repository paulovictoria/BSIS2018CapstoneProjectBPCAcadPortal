@extends('admin_template')
@section('title','| Instructor')
@section('content')
 <main>
    <section class="content">
      <div class="page-announce valign-wrapper light-green darken-1"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">menu</a><h1 class="page-announce-text valign">// Instructor</h1></div>
      	</section>
<div class="container">	
	<div class="row">
		<div class="col s12 ">
			<div class="card">
				<div class="card-content">
					          <div id="profile-page" class="section">
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card">

               
                <div class="card-content">
                  <div class="row">                    
                    <div class="col s12">                        
                        <h4 class="card-title grey-text text-darken-4">{{$professor->last_name}} {{$professor->first_name}} {{$professor->midle_name}}</h4>
                       
                    </div>
            
      
            </div>
    </div> 
    </div>   
</div>
				</div>	
			</div>	
		</div>	
	</div>
</div>
</main>
@endsection