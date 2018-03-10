@extends('registrar_template')
@section('title','Students')
@section('content')
<div class="col m12">               
    <div class="section">
        <div class="card z-depth-1">
            <div class="card-content">
                <div class="row">
                    <div class="col m9 offset-m3">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="card">
                                    <div class="card-content">
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th>Subject Code</th>
                                                    <th>Subject Description</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                            @foreach($records as $record)
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                <td>{{$record->grade}}</td>
                                            </tr>    
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <div class="card">
                                    <div class="card-content">
                                       <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th>Subject Code</th>
                                                    <th>Subject Description</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                            @foreach($records as $record)
                                            <tr>
                                                <td>{{$record->subj_code}}</td>
                                                <td>{{$record->subj_description}}</td>
                                                <td>{{$record->grade}}</td>
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
        </div>
    </div>
</div>
@endsection
