@extends('registrar_template')
@section('title','Student')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card transparent">
            <div class="card-content">
                <div class="row">
                    <div class="col s9 offset-s3 m9 offset-m3">   
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title center">FIRST YEAR</span>
                                         <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <td>SUBJECT CODE</td>
                                                    <td>SUBJECT DESCRIPTION</td>
                                                    <td>GRADE</td>
                                                    <td>EVALUATION</td>
                                                    <td>SEMESTER</td>
                                                    <td>GRADE AT</td>
                                                  
                                                </tr>
                                            </thead>    
                                            <tbody>
                                            @foreach($records as $record)
                                            @if($record->year=="First Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                <td>{{$record->grade}}</td>
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>                           
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div> 
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title center">SECOND YEAR</span>
                                         <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <td>SUBJECT CODE</td>
                                                    <td>SUBJECT DESCRIPTION</td>
                                                    <td>GRADE</td>
                                                    <td>EVALUATION</td>
                                                    <td>SEMESTER</td>
                                                    <td>GRADE AT</td>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                            @foreach($records as $record)
                                            @if($record->year=="Second Year")
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                <td>{{$record->grade}}</td>
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @endif 
                                                <td>{{$record->sem}}</td>
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div> 
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title center">THIRD YEAR</span>
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
                                                <td>{{$record->grade}}</td>
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title center">FOURTH YEAR</span>
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
                                                <td>{{$record->grade}}</td>
                                                @if($record->grade==0)
                                                <td class="grey-text">NO GRADE</td>
                                                @elseif($record->grade<=3)
                                                <td class="green-text">PASSED</td>
                                                @elseif($record->grade<=4.75)
                                                <td class="orange-text">INC</td>
                                                @elseif($record->grade==5)
                                                <td class="red-text">FAILED</td>
                                                @endif
                                                <td>{{$record->sem}}</td>
                                            </tr> 
                                            @endif   
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>                                                                                
                        </div>              
                    </div>
                </div>
            </div>
            <div class="card-action"></div>
        </div>
    </div>  
</div>
@endsection
