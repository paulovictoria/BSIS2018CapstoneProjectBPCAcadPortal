<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
<link rel="stylesheet" href="{{ asset('css/materialize.css?v=' . env('ASSET_VERSION', 1)) }}">
<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
 <!--Let browser know website is optimized for mobile-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BPCAP | Upload</title>


 

</head>
<body>
<div class="section"><h4>UPLOAD FILES</h4></div>
<div class="divider"></div>

@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>	
@endif
<ul>
@foreach($files as $file)
	<li>{{$file}}</li>
@endforeach
</ul>
 {!! Form::open(array('url'=>'/handleUpload', 'files'=>true)) !!}
	{{ Form::file('file') }}
	{{ Form::token() }}
	{{ Form::submit('Upload')}}
{!!Form::close()!!}
<!--   <form method="POST" action="{{ route('handleUpload') }}" enctype="multipart/form-data">{{ csrf_field() }}
                     <div class="file-field input-field">
                          <div class="btn">
                            <span>File</span>
                            <input type="file" id="file" name="file">
                          </div>
                          <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                      </div>
                    </div>
                    <button type="submit" class="btn light-green darken-2 right">Upload</button>
    </form>       -->          

 
<script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/materialize.js') }}"></script>

</body>
</html>

