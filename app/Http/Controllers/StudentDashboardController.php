<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use App\Course;
use App\Classroom;
use App\Announcement;
use App\Event;
use App\News;
use PDF;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;
class StudentDashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:student');
	}

	public function index() {
		$announcements=Announcement::where('campus_id','=',Auth::user()->campus_id)
		->orderBy('id','desc')->limit(5)->get();
		$newses=News::where('campus_id','=',Auth::user()->campus_id)
		->orderBy('id','desc')->limit(5)->get();
		$events=Event::where('campus_id','=',Auth::user()->campus_id)
		->orderBy('id','desc')->limit(5)->get();
		return view('student')
		->withAnnouncements($announcements)
		->withNewses($newses)
		->withEvents($events);
	}

	public function profile() {
		return view('student.profile');
	}

	public function editProfile() {
		$student=Student::find(Auth::user()->id);
		return view('student.editprofile')->withStudent($student);
	}

    public function profileUpdate(Request $request,$id) {

    	$this->validate($request,[
    		'last_name'=>'required',
    		'first_name'=>'required',
    		'midle_name'=>'required',
    		'gender'=>'required'
    	]);
    	$student=Student::find($id);
    	if($request->hasFile('image')){
    		$file=$request->file('image');
    		$fileName=time().'.'.$file->getClientOriginalExtension();
    		$uploaded=Storage::disk('profiles')->put($fileName,file_get_contents($file->getRealPath()));
    		$delete=Storage::disk('profiles')->delete($student->filename);
    		$student->last_name=$request->last_name;
    		$student->first_name=$request->first_name;
    		$student->midle_name=$request->midle_name;
    		$student->gender=$request->gender;
    		$student->mobile=$request->mobile;
    		$student->filename=$fileName;
    	}
    	else{
    		$student->last_name=$request->last_name;
    		$student->first_name=$request->first_name;
    		$student->midle_name=$request->midle_name;
    		$student->gender=$request->gender;
    		$student->mobile=$request->mobile;
    	} 
    	$student->save();

    			$student=Student::find(Auth::user()->id);
		return redirect()->route('student.editProfile')->withStudent($student);
    }
    
	public function subjects(Request $request) {
		$subjects=Subject::where('year',request('year'))
		->where('course_id','=',Auth::user()->course_id)
		->paginate(20)
		->appends('year',request('year'));
		return view('student.subjects')->withSubjects($subjects);
	}

	public function schedule(Request $request) {
	$schedules=Student::where('id','=',Auth::user()->id)->first()
	->join('assign_student','students.id','=','assign_student.student_id')
	->join('assigns','assign_student.assign_id','=','assigns.id')
	->where('assign_student.student_id','=',Auth::user()->id)
	->join('rooms','assigns.room_id','=','rooms.id')
	->join('days','assigns.day_id','=','days.id')
	->join('subjects','assigns.subject_id','=','subjects.id')
	->join('professors','assigns.professor_id','=','professors.id')
    ->orderBy('day_id','asc')
    ->where('year',request('year'))->paginate(10)
  	->appends('year',request('year'));
	 return view('student.schedule')->withSchedules($schedules);
	}

	public function grades(Request $request) {
	$grades=Student::where('id','=',Auth::user()->id)->first()
	->join('assign_student','students.id','=','assign_student.student_id')
	->join('assigns','assign_student.assign_id','=','assigns.id')
	->where('assign_student.student_id','=',Auth::user()->id)
	->join('subjects','assigns.subject_id','=','subjects.id')
	/*->where('subjects.course_id','=',Auth::user()->course_id)*/
   	->where('year',request('year'))->paginate(10)
  	->appends('year',request('year'));		
	return view('student.grades')->withGrades($grades);

	}

	public function files(Request $request) {
	$files=Student::where('id','=',Auth::user()->id)
	->select('id','course_id')
	->first()	
	->join('assign_student','students.id','=','assign_student.student_id')
	->where('assign_student.student_id','=',Auth::user()->id)
	->join('assigns','assign_student.assign_id','=','assigns.id')
	->join('subjects','assigns.subject_id','=','subjects.id')
	->join('professors','assigns.professor_id','=','professors.id')
	->join('fileuploads','assigns.id','=','fileuploads.assign_id')
   	->where('year',request('year'))->paginate(10)
  	->appends('year',request('year'));	
	return view('student.files')->withFiles($files);
	}

	public function downloadPDF(Request $request,$id) {
     	$subjects=Student::where('id','=',Auth::user()->id)->first()
     	->join('subjects','students.course_id','=','subjects.course_id')
     	->where('students.id','=',Auth::user()->id)
     	->where('year','=',$id)
  		->get();
		$pdf = PDF::loadView('student.pdf',['subjects'=>$subjects]);
		return $pdf->download('subject.pdf');
	}



	public function scheduledownloadPDF(Request $request,$id) {
	 $schedules=Student::where('id','=',Auth::user()->id)->first()
		->join('assign_student','students.id','=','assign_student.student_id')
		->join('assigns','assign_student.assign_id','=','assigns.id')
		->where('assign_student.student_id','=',Auth::user()->id)
		->join('rooms','assigns.room_id','=','rooms.id')
		->join('days','assigns.day_id','=','days.id')
		->join('subjects','assigns.subject_id','=','subjects.id')
		->join('professors','assigns.professor_id','=','professors.id')
	    ->orderBy('day_id','asc')
	    ->where('year','=',$id)
	  	->get();
		$pdf = PDF::loadView('student.schedulePdf',['schedules'=>$schedules]);
		return $pdf->download('schedule.pdf');
	}

	public function gradedownloadPDF(Request $request, $id) {
		$grades=Student::where('id','=',Auth::user()->id)->first()
		->join('assign_student','students.id','=','assign_student.student_id')
		->join('assigns','assign_student.assign_id','=','assigns.id')
		->where('assign_student.student_id','=',Auth::user()->id)
		->join('subjects','assigns.subject_id','=','subjects.id')
	/*	->where('subjects.course_id','=',Auth::user()->course_id)*/
	    ->where('year','=',$id)
	  	->get();	
		$pdf = PDF::loadView('student.gradePdf',['grades'=>$grades]);
		return $pdf->download('grades.pdf');
	}

}
