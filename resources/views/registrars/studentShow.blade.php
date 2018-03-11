@extends('registrar_template')
@section('title','Student')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card transparent">
            <div class="card-content">
                <div class="row">
                    <div class="col l9 offset-l3">   
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card">
                                    <div class="card-content">
                                         <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th>Subject Code</th>
                                                    <th>Subject Description</th>
                                                    <th>Grade</th>
                                                    <th>Evaluation</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                            @foreach($records as $record)
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                <td>{{$record->grade}}</td>
                                                @if($record->grade==0)
                                                 <td class="green-text">No Grade</td>         
                                                 @elseif($record->grade==1)
                                                <td class="green-text">Passed</td>
                                                 @elseif($record->grade==2)
                                                <td class="light-green-text">Passed</td>
                                                @elseif($record->grade==3)
                                                <td class="light-green-text">Passed</td>
                                                 @elseif($record->grade==4)
                                                 <td class="orange-text">INC</td>
                                                @else
                                                 <td class="red-text">Failed</td>
                                                @endif 
                                            </tr>    
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
