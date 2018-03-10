<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\File;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use App\Professor;
use App\Assign;
use App\Subject;
use App\Classroom;
use App\Student;
use App\FileUpload;
use Session;
use DB;
use Auth;
class ProfessorDashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:professor');
	}

	public function index() {
		return view('professor');
	}

	public function profile() {
	return view('professor.profile');
	}

    public function editProfile() {
        $professor=Professor::find(Auth::user()->id);
        return view('professor.editprofile')->withProfessor($professor);
    }

    public function profileUpdate(Request $request,$id) {

        $this->validate($request,[
            'eid'=>'required|integer',
            'last_name'=>'required',
            'first_name'=>'required',
            'midle_name'=>'required',
            'gender'=>'required'
        ]);

        $professor=Professor::find($id);
        if($request->hasFile('image')){
            $file=$request->file('image');
            $fileName=time().'.'.$file->getClientOriginalExtension();
            $uploaded=Storage::disk('profiles')->put($fileName,file_get_contents($file->getRealPath()));
            $delete=Storage::disk('profiles')->delete($professor->filename);
            $professor->eid=$request->eid;
            $professor->last_name=$request->last_name;
            $professor->first_name=$request->first_name;
            $professor->midle_name=$request->midle_name;
            $professor->gender=$request->gender;
            $professor->filename=$fileName;
        }
        else{
            $professor->eid=$request->eid;
            $professor->last_name=$request->last_name;
            $professor->first_name=$request->first_name;
            $professor->midle_name=$request->midle_name;
            $professor->gender=$request->gender;
        } 
        $professor->save();
        return redirect()->route('professor.profile');
    }    

	public function indexClassroom() {
	$assigns=Assign::where('professor_id','=',Auth::user()->id)
    ->join('classrooms','assigns.classroom_id','=','classrooms.id')
    ->get();		
	return view('professor.classrooms')->withAssigns($assigns);
	}

    public function classroomShow($id) {
    $assign=Assign::where('id','=',$id)->first();
    return view('professor.show')->withAssign($assign);
    }

    public function gradeIndex(){
    $assigns=Assign::where('professor_id','=',Auth::user()->id)
    ->join('classrooms','assigns.classroom_id','=','classrooms.id')
    ->get();     
    return view('professor.grades')->withAssigns($assigns);
    }
/*This is for show grading the students*/
	public function individualClassroom($id) {
		$assigns=Assign::where('id','=',$id)->first()
        ->join('assign_student','assigns.id','=','assign_student.assign_id')
        ->where('assign_id','=',$id)
        ->join('students','assign_student.student_id','=','students.id')
        ->orderBy('last_name','asc')
        ->get();
		return view('professor.individualClassroom')
        ->withAssigns($assigns);	
	}
/*End grading students*/

    public function addGrade(request $request) {
    	$rules=array(
	   	'grade'=>'required|integer',
	   	'student_id'=>'required',
	   	'subject_id'=>'required'
        );
        $validator = Validator::make (Input::all(), $rules);
        if($validator->fails())
            return response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        
        else {
		   $grade=new Grade();
		   $grade->grade=$request->grade;
		   $grade->student_id=$request->student_id;
		   $grade->subject_id=$request->subject_id;
		   $grade->assign_id=$request->assign_id;
		   $grade->save();
            return response()->json($grade);
        }
    }


    public function updateGrade(Request $request) {
    	$rules=array(
	   	'student_id'=>'required',
        'assign_id'=>'required',
        'grade'=>'required|integer'
        );

        $validator = Validator::make (input::all(), $rules);
        if($validator->fails())
            return response::json(array('errors'=> $validator->getMessageBag()->toarray()));
               
        else {
           $assign=Assign::find($request->assign_id);
           $student=Student::find($request->student_id);
           $assign->students()->detach($student);
           $assign->students()->attach($student,['grade'=>$request->grade]);
           return response()->json($assign);
        }
     
    }

    public function fileIndex() {
    $assigns=Assign::where('professor_id','=',Auth::user()->id)
    ->join('classrooms','assigns.classroom_id','=','classrooms.id')
    ->get();
    return view('professor.files')->withAssigns($assigns);
    }

    public function upload($id) {
         $assign=Assign::where('id','=',$id)
		->first();
    	 $directory = config('app.fileDestinationPath');
        //$files = Storage::files($directory);
      	$files = FileUpload::where('assign_id','=',$assign->id)
        ->orderBy('updated_at','desc')
        ->get();
    	return view('professor.upload')
    	->withAssign($assign)
    	->with(array('files' => $files));
    }
    public function fileUpload(Request $request,$id) {
    		$assign=Assign::where('id','=',$id)
			->first();
			$file=$request->file('file');
            $allowedFileTypes = config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');
            $rules = [
                'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
            ];
            $this->validate($request, $rules);
            $fileName=$file->getClientOriginalname();
            /*$fileName=time(). '.' .$file->getClientOriginalExtension();*/
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::disk('files')->put($fileName, file_get_contents($file->getRealPath()));

           if($uploaded){
           	$fileupload=new FileUpload();
           	$fileupload->filename=$fileName;
           	$fileupload->assign_id=$assign->id;
           	$fileupload->save();
        	}
        	return redirect()->route('uploadIndex',$assign->id);

    }

    public function fileDelete($id) {
            $file=FileUpload::find($id);
            $ass_id=$file->assign_id;
            Storage::disk('files')->delete($file);
            $file->delete();
            return redirect()->route('uploadIndex',$ass_id);
    }

    public function schedule() {
        $assigns=Assign::where('professor_id','=',Auth::user()->id)
        ->join('days','assigns.day','=','days.id')
        ->orderBy('day','asc')
        ->get();
        return view('professor.schedule')->withAssigns($assigns);
    }

        public function exportAssign($id){
        $type='csv';
        $assign = Assign::find($id)
        ->join('assign_student','assigns.id','=','assign_student.assign_id')
        ->where('assign_student.assign_id','=',$id)
        ->join('students','assign_student.student_id','=','students.id')
        ->select('students.last_name','students.first_name','students.midle_name')
        ->orderBy('last_name','asc')
        ->get()
        ->toArray();
        return \Excel::create('My_Class', function($excel) use ($assign) {
        $excel->sheet('sheet name', function($sheet) use ($assign) {
        $sheet->fromArray($assign);
        }); })->download($type);
    } 


}

