<a href="{{route('studentsApproval',$notification->data['student']['id'])}} ">
SID of {{ $notification->data['student']['sid']}}
Name {{ $notification->data['student']['last_name']}}
{{ $notification->data['student']['first_name']}}
{{ $notification->data['student']['midle_name']}}
Register to BPC Academic Portal
</a>
