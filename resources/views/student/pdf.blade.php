<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
  
      <tr>
        <td>
    	@foreach($subjects as $subject)
    		{{$subject->subj_code}}
    	@endforeach
        </td>

      </tr>
    </table>
  </body>
</html>