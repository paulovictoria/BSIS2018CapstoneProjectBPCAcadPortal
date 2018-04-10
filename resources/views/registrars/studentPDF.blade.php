<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  </head>
  <body>
    <div class="section green darken-3 white-text center-align">
        <h5>Bulacan Polytechnic College</h5>
        <h6>First Year</h6>
    </div>
    <div class="divider"></div>
    <div class="card grey lighten-2">
        <div class="card-content">
            <table class="table bordered striped center-align">
                <thead>
                    <tr>
                        <td>SUBJECT CODE</td>
                        <td>SUBJECT DESCRIPTION</td>
                        <td>GRADE</td>
                        <td>EVALUATION</td>
                        <td>SEMESTER</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                     @if($record->year=="First Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                 @if($record->grade==6)
                                                <td>No Grade</td>
                                                 @else
                                                <td>{{$record->grade}}</td>
                                                 @endif
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @elseif($record->grade==6)
                                                <td class="red-text">DROPPED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>                 
                                            </tr> 
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="section green darken-3 white-text center-align">
        <h5>Bulacan Polytechnic College</h5>
        <h6>Second Year</h6>
    </div>
    <div class="divider"></div>
    <div class="card grey lighten-2">
        <div class="card-content">
            <table class="bordered">
                <thead>
                    <tr>
                        <td>SUBJECT CODE</td>
                        <td>SUBJECT DESCRIPTION</td>
                        <td>GRADE</td>
                        <td>EVALUATION</td>
                        <td>SEMESTER</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                     @if($record->year=="Second Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                 @if($record->grade==6)
                                                <td>No Grade</td>
                                                 @else
                                                <td>{{$record->grade}}</td>
                                                 @endif
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @elseif($record->grade==6)
                                                <td class="red-text">DROPPED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>                 
                                            </tr> 
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
     <div class="section green darken-3 white-text center-align">
        <h5>Bulacan Polytechnic College</h5>
        <h6>Third Year</h6>
    </div>
    <div class="divider"></div>
    <div class="card grey lighten-2">
        <div class="card-content">
            <table class="bordered">
                <thead>
                    <tr>
                        <td>SUBJECT CODE</td>
                        <td>SUBJECT DESCRIPTION</td>
                        <td>GRADE</td>
                        <td>EVALUATION</td>
                        <td>SEMESTER</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                     @if($record->year=="Third Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                 @if($record->grade==6)
                                                <td>No Grade</td>
                                                 @else
                                                <td>{{$record->grade}}</td>
                                                 @endif
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @elseif($record->grade==6)
                                                <td class="red-text">DROPPED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>                 
                                            </tr> 
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
     <div class="section green darken-3 white-text center-align">
        <h5>Bulacan Polytechnic College</h5>
        <h6>Fourth Year</h6>
    </div>
    <div class="divider"></div>
    <div class="card grey lighten-2">
        <div class="card-content">
            <table class="bordered">
                <thead>
                    <tr>
                        <td>SUBJECT CODE</td>
                        <td>SUBJECT DESCRIPTION</td>
                        <td>GRADE</td>
                        <td>EVALUATION</td>
                        <td>SEMESTER</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                     @if($record->year=="Fourth Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                 @if($record->grade==6)
                                                <td>No Grade</td>
                                                 @else
                                                <td>{{$record->grade}}</td>
                                                 @endif
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @elseif($record->grade==6)
                                                <td class="red-text">DROPPED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>                 
                                            </tr> 
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>      

   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>