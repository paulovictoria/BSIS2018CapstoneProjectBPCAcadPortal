<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style type="text/css">
div.background {
  background: url(https://www.bulacan.gov.ph/bpc//images/bpclogo.png);
  background-repeat: no-repeat;
  background-position: center 185px;
  background-size: 500px 500px;

}

div.transbox {
  margin: 0;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.tablefooter {
    width: 97%;
    margin-right: auto;
    margin-left: auto;
font-family: Verdana, sans-serif;
}
</style>
  </head>
  <body>
    <div class="background">
      <div class="transbox">
        <div class="section green darken-4 white-text center-align">
            <h5>Bulacan Polytechnic College<br><span>city of {{Auth::user()->campus->campus_name}} Bulacan</span></h5>
            <h6>First Semester Subjects</h6>
        </div>
            <table class="table bordered center-align black-text">
                <thead>
                    <tr>
                        <td>SUBJECT CODE</td>
                        <td>SUBJECT DESCRIPTION</td>
                        <td>GRADE</td>
                        <td>EVALUATION</td>
                        <td>SEMESTER</td>
                        <td>S.Y</td>
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
                                                <td>{{$record->academic_year}}</td>               
                                            </tr> 
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="section green darken-4 white-text">
                <div class="tablefooter">
                    <div class="col s12"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="col s12 right-align">
            _______________<br>
            <p>Signature</p>
        </div>
    </div>



    <div class="background">
      <div class="transbox">
        <div class="section green darken-4 white-text center-align">
            <h5>Bulacan Polytechnic College<br><span>city of {{Auth::user()->campus->campus_name}} Bulacan</span></h5>
            <h6>First Semester Subjects</h6>
        </div>
            <table class="table bordered center-align black-text">
                                             <thead>
                                                <tr>
                                                    <td>SUBJECT CODE</td>
                                                    <td>SUBJECT DESCRIPTION</td>
                                                    <td>GRADE</td>
                                                    <td>EVALUATION</td>
                                                    <td>SEMESTER</td>
                                                    <td>YEAR</td>
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
                                                <td>{{$record->academic_year}}</td>                
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
            </table>
            <div class="section green darken-4 white-text">
                <div class="tablefooter">
                    <div class="col s12"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="col s12 right-align">
            _______________<br>
            <p>Signature</p>
        </div>
    </div>



    <div class="background">
      <div class="transbox">
        <div class="section green darken-4 white-text center-align">
            <h5>Bulacan Polytechnic College<br><span>city of {{Auth::user()->campus->campus_name}} Bulacan</span></h5>
            <h6>First Semester Subjects</h6>
        </div>
            <table class="table bordered center-align black-text">
                                            <thead>
                                                <tr>
                                                    <td>SUBJECT CODE</td>
                                                    <td>SUBJECT DESCRIPTION</td>
                                                    <td>GRADE</td>
                                                    <td>EVALUATION</td>
                                                    <td>SEMESTER</td>
                                                    <td>YEAR</td>
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
                                                <td>{{$record->academic_year}}</td>                
                                            </tr>  
                                            @endif   
                                            @endforeach
                                            </tbody>
            </table>
            <div class="section green darken-4 white-text">
                <div class="tablefooter">
                    <div class="col s12"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="col s12 right-align">
            _______________<br>
            <p>Signature</p>
        </div>
    </div>


    <div class="background">
      <div class="transbox">
        <div class="section green darken-4 white-text center-align">
            <h5>Bulacan Polytechnic College<br><span>city of {{Auth::user()->campus->campus_name}} Bulacan</span></h5>
            <h6>First Semester Subjects</h6>
        </div>
            <table class="table bordered center-align black-text">
                                            <thead>
                                                <tr>
                                                    <td>SUBJECT CODE</td>
                                                    <td>SUBJECT DESCRIPTION</td>
                                                    <td>GRADE</td>
                                                    <td>EVALUATION</td>
                                                    <td>SEMESTER</td>
                                                    <td>YEAR</td>
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
                                                <td>{{$record->academic_year}}</td>                
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
            </table>
            <div class="section green darken-4 white-text">
                <div class="tablefooter">
                    <div class="col s12"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="col s12 right-align">
            _______________<br>
            <p>Signature</p>
        </div>
    </div>            
   <!--  <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  </body>
</html>