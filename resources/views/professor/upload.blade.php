@extends('professor_template')
@section('title','Professor')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3">
                        <h3 class="light-green-text darken-2 card-title">Files</h3>
                        @if(count($errors))
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul> 
                        @endif                      
                        <form method="POST" action="{{ route('professor.fileupload',$assign->id) }}" enctype="multipart/form-data">{{csrf_field() }}
                           <div class="file-field input-field">
                              <div class="btn  light-green darken-2">
                                <span><i class="material-icons">attach_file</i></span>
                                  <input type="file" id="file" name="file">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                              </div>
                            </div>
                            <button type="submit" class="btn light-green darken-2 right"><i class="material-icons">cloud_upload</i></button>
                        </form>  
                        <table>
                          <thead>
                              <tr>
                                <th>File Name</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                               @foreach($files as $file)
                               <tr>
                                <td><i class="material-icons"></i> {{$file->filename}}</td>
                                <td>{!! Form::open(['route'=>['professor.deleteupload',$file->id],'method'=>'DELETE']) !!}
                                  <a href="{{route('download.file',$file->filename)}}" class="btn orange darken-2"><i class="material-icons">cloud_download</i> Download</a>
                                  <button class="btn red lighten-1"><i class="material-icons">delete_forever</i> Delete</button>
                                </td>
                                 {!! Form::close() !!}  
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                    </div>   
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>
@endsection
