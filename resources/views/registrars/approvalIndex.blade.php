@extends('registrar_template')
@section('title','Students')
@section('content')
<div class="col s12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3 m9 offset-m3">
                        <div class="section">
                            @if(Session::has('success'))
                                <div class="col s12 center">
                                    <div class="yellow darken-3">
                                        <p class="flow-text white-text">{{ Session::get('success')}}</p>
                                    </div>
                                </div>
                            @endif
                        </div>  
					<table class="table responsive-table" cellspacing="0">
						<thead>
							<tr class="green darken-3 white-text">
								<td>SID</td>
								<td>NAME</td>
								<td>EMAIL</td>
								<td>PROFILE</td>
                                <td>COR</td>
                                <td>VIEW</td>
								<td>APPROVE</td>
								<td>DENY</td>
							</tr>	
						</thead>
						<tbody>
							@foreach($students as $student)
							<tr class="light-green lighten-5">
								<td>{{$student->sid}}</td>
								<td>{{$student->last_name}}
								    {{$student->first_name}}
							        {{$student->midle_name}}</td>
								<td>{{$student->email}}</td>
								<td><a href="#!user"><img  src="{{route('user.image',['filename'=>$student->filename])}}" width="100px" height="100px"></a></td>
								<td><a href="#!user"><img src="{{route('user.image',['filename'=>$student->cor])}}" width="100px" height="100px"></a></td>

                                <td><a href="#modalView" id="viewButton" class="btn modal-trigger white orange-text darken-2 tooltipped" data-position="bottom" data-tooltip="View Information"><i class="material-icons">pageview</i>
                                <input type="hidden" id="studId" value="{{$student->id}}">
                                <input type="hidden" id="studSid" value="{{$student->sid}}">
                                <input type="hidden" id="studlastname" value="{{$student->last_name}}">
                                <input type="hidden" id="studFirstname" value="{{$student->last_name}}">
                                <input type="hidden" id="studlastname" value="{{$student->last_name}}">
                                <input type="hidden" id="studMidlename" value="{{$student->midle_name}}">
                                <input type="hidden" id="studEmail" value="{{$student->email}}">
                                <input type="hidden" id="studProfile" value="{{$student->filename}}">
                                <input type="hidden" id="studCor" value="{{$student->cor}}"></a>
                                </td>

								<td>{!! Form::model($student,['route'=>['studentsApproved',$student->id],'method'=>'PUT'])!!}
								<button class="btn white blue-text lighten-2 tooltipped" data-position="bottom" data-tooltip="Approve Request"><i class="material-icons">check_circle</i></button>
								{!! Form::close() !!}</td>

								<td>{!! Form::open(['route'=>['studentsDenied',$student->id],'method'=>'DELETE']) !!}
								<button class="btn white grey-text lighten-1 tooltipped" data-position="bottom" data-tooltip="Deny Request"><i class="material-icons">close</i></button>
								{!! Form::close() !!}</td>	
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
<div class="modal" id="modalView">
    <div class="modal-content">
        <form class="form-horizontal" role="form">{{ csrf_field() }}
        <div class="section">
            <div class="row">
                <div class="col s12 m12 right-align">
                    <a href="#" class="modal-close grey-text"><i class="material-icons">close</i></a>
                </div>
                <div class="col s6 m6">
                <h5>INFORMATION</h5>
                <div class="row">
                    <div class="col s6"><div class="section"></div>
                        <input type="hidden" id="id" name="id"></input>
                        <label for="sid">Student ID</label>
                        <input type="text" id="sid" class="sid"></input>
                    </div>
                    <div class="col s6">
                        <img  id="profile"  width="120px" height="100px">
                    </div>
            </div>
                <label for="last_name">Last Name:</label> 
                <input type="text" id="last_name" class="last_name"></input>
                <label for="first_name">First Name:</label> 
                <input type="text" id="first_name" class="first_name"></input>
                <label for="midle_name">Midle Name:</label> 
                <input type="text" id="midle_name" class="midle_name"></input>
                <label for="email">Email Address</label> 
                <input type="text" id="email" class="email"></input>
                </div>
                <div class="col s6 m6">
                 <h5>COR</h5>
                <img  id="cor"  width="400px" height="400px">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn white blue-text text-lighten-2 tooltipped"  data-position="bottom" data-tooltip="Approve Request" id="approveButton"><i class="material-icons">check_circle</i></button>
                <button class="btn white grey-text text-lighten-1 tooltipped" data-position="bottom" data-tooltip="Deny Request" id="denyButton"><i class="material-icons">close</i></button>
            </div>
        </div></form>
        </div>
    </div>
</div>
@endsection
@section('script')
<style type="text/css">
    .modal {
        width: 1000px;
        height: 900px;
    }
</style>
<script>
$(document).on('click','#viewButton',function(event){
    var id=$(this).find('#studId').val();
    var sid=$(this).find('#studSid').val();
    var last_name=$(this).find('#studlastname').val();
    var first_name=$(this).find('#studFirstname').val();
    var midle_name=$(this).find('#studMidlename').val();
    var email=$(this).find('#studEmail').val();
    var profile=$(this).find('#studProfile').val();
    var cor=$(this).find('#studCor').val();
    $('#id').val(id);
    $('#sid').val(sid);
    $('#last_name').val(last_name);
    $('#first_name').val(first_name);
    $('#midle_name').val(midle_name);
    $('#email').val(email);
    $('#profile').attr('src',
        "/userimage/".concat(profile));
    $('#cor').attr('src',
        "/userimage/".concat(cor));    
});

$('#approveButton').click(function(event){
    $.ajax({
        type:"POST",
        url: "{{route('ajax.Approved')}}",
        data:{
          '_token': $('input[name=_token]').val(),
          'id':$('#id').val(),
        },
    });
});

$('#denyButton').click(function(event){
    $.ajax({
        type:"POST",
        url: "{{route('ajax.Denied')}}",
        data:{
          '_token': $('input[name=_token]').val(),
          'id':$('#id').val(),
        },
    });
});


$(document).ready(function(){
    $('#modalView').modal();
});

</script>
@endsection
