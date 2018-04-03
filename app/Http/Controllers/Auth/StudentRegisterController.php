<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Notifications\ApprovedToStudent;
use App\Student;
use App\Course;
use App\Registrar;
use App\Campus;
class StudentRegisterController extends Controller
{

    public function __construct() {
     
    }

    public function create() {
          $courses=Course::all();
          $campuses=Campus::all();
    	return view('auth.student-register')->withCourses($courses)->withCampuses($campuses);
    }
    public function register(Request $request) {
    	$this->validate($request,[
    		'sid' => 'required|unique:students',
            'course_id'=>'required|integer',
    		'last_name' => 'required|string|max:255',
    		'first_name' => 'required|string|max:255',
    		'midle_name' => 'required|string|max:255',
            'gender' => 'required',
            'campus_id' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:6|confirmed',
            'image'=>'required',
            'cor'=>'required',
            'mobile'=>'required'
    	]); 
        $file=$request->file('image');
        $fileName=$request->sid.time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('profiles')->put($fileName,file_get_contents($file->getRealPath()));
        $corfile=$request->file('cor');
        $corfileName='cor'.time().'.'.$file->getClientOriginalExtension();
        $corUploaded=Storage::disk('profiles')->put($corfileName,file_get_contents($corfile->getRealPath()));
        if($uploaded && $corUploaded){
    	$student=new Student;
    	$student->sid=$request->sid;
        $student->course_id=$request->course_id;
    	$student->last_name=$request->last_name;
    	$student->first_name=$request->first_name;
    	$student->midle_name=$request->midle_name;
        $student->gender=$request->gender;
        $student->campus_id=$request->campus_id;
        $student->mobile=$request->mobile;
    	$student->email=$request->email;
    	$student->password=bcrypt($request['password']);
    	$student->approved = false;
        $student->filename=$fileName;
        $student->cor=$corfileName;
    	$student->save();
        }
		$registrar=Registrar::where('campus_id','=',$request->campus_id)->first(); 
        $registrar->notify(new ApprovedToStudent($student));
        return redirect()->route('home');
    }



}
