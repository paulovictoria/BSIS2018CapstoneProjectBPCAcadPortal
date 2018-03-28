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
use Excel;
use PDF;

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
            'eid'=>'required',
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
    ->get();        
    return view('professor.classrooms')->withAssigns($assigns);
    }

    public function classroomShow($id) {
    $assign=Assign::where('id','=',$id)->first();
    return view('professor.show')->withAssign($assign);
    }

    public function gradeIndex(){
    $assigns=Assign::where('professor_id','=',Auth::user()->id)
    ->get();     
    return view('professor.grades')->withAssigns($assigns);
    }
/*This is for show grading the students*/
    public function individualClassroom($id) {
        $assigns=Assign::where('id','=',$id)->first()
        ->where('assigns.id','=',$id)
        ->join('assign_student','assigns.id','=','assign_student.assign_id')
        ->where('assign_id','=',$id)
        ->join('students','assign_student.student_id','=','students.id')
        ->join('subjects','assigns.subject_id','=','subjects.id')
        ->orderBy('last_name','asc')
        ->get();
        return view('professor.individualClassroom')
        ->withAssigns($assigns);    
    }

    public function updateGrade(Request $request) {
        $rules=array(
        'student_id'=>'required',
        'assign_id'=>'required',
        'grade'=>'required|float'
        );

           $assign=Assign::find($request->assign_id);
           $student=Student::find($request->student_id);
           $assign->students()->detach($student);
           $assign->students()->attach($student,['grade'=>$request->grade]);
           return response()->json($assign);
    }

    public function exportExcelGrade($id) {
   $assigns = Assign::where('id','=',$id)->first()
   ->join('assign_student','assigns.id','=','assign_student.assign_id')
   ->where('assign_student.assign_id','=',$id)
   ->join('subjects','assigns.subject_id','=','subjects.id')
   ->join('students','assign_student.student_id','=','students.id')
   ->orderBy('last_name','asc')
   ->select(DB::raw("concat(last_name, ' ',first_name, ' ', midle_name)"),'grade')
   ->get();
   //This is the title
    $assignTitle=Assign::where('id','=',$id)->get();
    foreach ($assignTitle as $assignTit) {
         
         if($assignTit->classroom->year=='First Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'1'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;
         } 
         elseif($assignTit->classroom->year=='Second Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'2'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }
         elseif($assignTit->classroom->year=='Third Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'3'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }     
         else {
            $title=$assignTit->classroom->course->course_name.'_'.'4'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }    
         
         
    }

    // Initialize the array which will be passed into the Excel
    // generator.
    $assignsArray = []; 

    // Define the Excel spreadsheet headers
    $assignsArray[] = ['Name','Final Grade'];

    // Convert each member of the returned collection into an array,
    // and append it to the payments array.
    foreach ($assigns as $assign) {
        $assignsArray[] = $assign->toArray();
    }

    // Generate and return the spreadsheet
    Excel::create($title, function($excel) use ($assignsArray,$title) {

        // Set the spreadsheet title, creator, and description
        $excel->setTitle($title);
        $excel->setCreator('BPCPortal')->setCompany('Bulcan Polytechnic College');
        $excel->setDescription('Students List');

        // Build the spreadsheet, passing in the payments array
        $excel->sheet('sheet1', function($sheet) use ($assignsArray) {
            $sheet->fromArray($assignsArray, null, 'A1', false, false);
        });

    })->download('xlsx');

    } 
    

    public function exportPdfGrade($id) {

          $assigns = Assign::where('id','=',$id)->first()
           ->join('assign_student','assigns.id','=','assign_student.assign_id')
           ->where('assign_student.assign_id','=',$id)
           ->join('subjects','assigns.subject_id','=','subjects.id')
           ->join('students','assign_student.student_id','=','students.id')
           ->orderBy('last_name','asc')
           ->select('last_name','first_name','midle_name','grade')
           ->get();   

    $assignTitle=Assign::where('id','=',$id)->get();
    foreach ($assignTitle as $assignTit) {

         if($assignTit->classroom->year=='First Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'1'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;
         } 
         elseif($assignTit->classroom->year=='Second Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'2'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }
         elseif($assignTit->classroom->year=='Third Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'3'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }     
         else {
            $title=$assignTit->classroom->course->course_name.'_'.'4'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }

    }           

        $pdf = PDF::loadView('professor.pdfGrade',['assigns'=>$assigns]);
        return $pdf->download($title.'.pdf');

    }

    public function fileIndex() {
    $assigns=Assign::where('professor_id','=',Auth::user()->id)
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
        $classrooms=Classroom::all();

        $assigns=Assign::where('professor_id','=',Auth::user()->id)
        ->join('days','assigns.day_id','=','days.id')
        ->orderBy('day_id','asc')
        ->get();
        return view('professor.schedule')->withAssigns($assigns)->withClassrooms($classrooms);
    }

    public function exportProfessorSchedule(Request $request) {
      

        $assigns=Assign::where('professor_id','=',Auth::user()->id)
        ->join('days','assigns.day_id','=','days.id')
        ->join('rooms','rooms.id','=','assigns.room_id')
        ->join('subjects','subjects.id','=','assigns.subject_id')
        ->join('classrooms','classrooms.id','=','assigns.classroom_id')
        ->where('classrooms.academic_year','=',$request->academic_year)
        ->where('classrooms.sem','=',$request->sem)
        ->join('courses','courses.id','=','classrooms.course_id')       
        ->select('courses.course_name','classrooms.year','classrooms.section','rooms.room_code','days.name','assigns.startTime','assigns.endTime','subjects.subj_code')
        ->orderBy('day_id','asc')
        ->get(); 
        $title=$request->academic_year.'_'.$request->sem;    
        $pdf = PDF::loadView('professor.pdfSchedule',['assigns'=>$assigns,'title'=>$title]);
        return $pdf->download($title.'.pdf');
    }

    public function exportAssign($id){

   $assigns = Assign::where('id','=',$id)->first()
   ->join('assign_student','assigns.id','=','assign_student.assign_id')
   ->where('assign_student.assign_id','=',$id)
   ->join('subjects','assigns.subject_id','=','subjects.id')
   ->join('students','assign_student.student_id','=','students.id')
   ->orderBy('last_name','asc')
   ->select(DB::raw("concat(last_name, ' ',first_name, ' ', midle_name)"))
   ->get();
   //This is the title
    $assignTitle=Assign::where('id','=',$id)->get();
    foreach ($assignTitle as $assignTit) {

         if($assignTit->classroom->year=='First Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'1'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;
         } 
         elseif($assignTit->classroom->year=='Second Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'2'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }
         elseif($assignTit->classroom->year=='Third Year'){
            $title=$assignTit->classroom->course->course_name.'_'.'3'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }     
         else {
            $title=$assignTit->classroom->course->course_name.'_'.'4'.$assignTit->classroom->section.'_'.$assignTit->subject->subj_code;            
         }

    }

    // Initialize the array which will be passed into the Excel
    // generator.
    $assignsArray = []; 

    // Define the Excel spreadsheet headers
    $assignsArray[] = ['Name'];

    // Convert each member of the returned collection into an array,
    // and append it to the payments array.
    foreach ($assigns as $assign) {
        $assignsArray[] = $assign->toArray();
    }

    // Generate and return the spreadsheet
    Excel::create($title, function($excel) use ($assignsArray,$title) {

        // Set the spreadsheet title, creator, and description
        $excel->setTitle($title);
        $excel->setCreator('BPCPortal')->setCompany('Bulcan Polytechnic College');
        $excel->setDescription('Students List');

        // Build the spreadsheet, passing in the payments array
        $excel->sheet('sheet1', function($sheet) use ($assignsArray) {
            $sheet->fromArray($assignsArray, null, 'A1', false, false);
        });

    })->download('xlsx');
    } 


}

