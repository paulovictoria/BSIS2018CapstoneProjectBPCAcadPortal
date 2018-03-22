<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use Response;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Registrar;
use App\Student;
use App\Course;
use App\Assign;
use App\Classroom;
use Auth;
use Session;
use PDF;
use DB;
use Illuminate\Support\Carbon;
class RegistrarDashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:registrar');
	}
	public function index() {
		return view('registrar');
	}

	public function profile() {
		return view('registrars.profile');
	}
	
	public function studentIndex(Request $request) {
        $courses=Course::all();
		$students=Student::where('course_id',request('course_id'))
        ->where('campus_id',Auth::user()->campus_id)->get();
		return view('registrars.studentIndex')->withStudents($students)->withCourses($courses);
	}

    public function studentShow($id) {
        $records=Student::find($id)->first()
        ->join('assign_student','students.id','=','assign_student.student_id')
        ->where('assign_student.student_id','=',$id)
        ->join('assigns','assign_student.assign_id','=','assigns.id')
        ->join('subjects','assigns.subject_id','=','subjects.id')
        ->orderBy('subj_code','asc')
        ->orderBy('sem','asc')
        ->get();
        return view('registrars.studentShow')->withRecords($records);
    }

    public function approvalIndex(){
        $registrar=Registrar::find(Auth::user()->campus_id);
        $registrar->unreadNotifications()->update(['read_at' => Carbon::now()]);
        $students=Student::where('approved','=',0)
        ->where('campus_id','=',Auth::user()->campus_id)
        ->get();
        return view('registrars.approvalIndex')->withStudents($students);

    }

    public function approval($id){
        $student=Student::where('id','=',$id)->first();
        return view('registrars.approval')->withStudent($student);

    }
    public function approved (Request $request, $id) {
         $student=Student::find($id);
         $student->approved = true;
         $student->save();
         $students=Student::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Approved Successfully');
         return redirect()->route('studentsApprovalIndex')->withStudents($students);
    }

    public function ajaxApproved(Request $request){
        $student=Student::find($request->id);
        $student->approved = 1;
        $student->save();
        $students=Student::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Approved Successfully');
        return redirect()->route('studentsApprovalIndex')->withStudents($students);
        
    }

     public function denied (Request $request, $id) {
         $student=Student::find($id);
         $student->delete();
        $students=Student::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Denied Successfully');
        return redirect()->route('studentsApprovalIndex')->withStudents($students);
    } 

    public function ajaxDenied(Request $request){
        $student=Student::find($request->id);
        $student->delete();
        $students=Student::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Denied Successfully');
        return redirect()->route('studentsApprovalIndex')->withStudents($students);
    }

    public function studentdownloadPDF($id) {
        $records=Student::find($id)->first()
        ->join('assign_student','students.id','=','assign_student.student_id')
        ->where('assign_student.student_id','=',$id)
        ->join('assigns','assign_student.assign_id','=','assigns.id')
        ->join('subjects','assigns.subject_id','=','subjects.id')
        ->orderBy('subj_code','asc')
        ->orderBy('sem','asc')
        ->get();
        $pdf = PDF::loadView('registrars.studentPDF',['records'=>$records]);
        return $pdf->download('studentRecords.pdf');
    }  

    public function shiftStudent($id) {
        $courses=Course::all();
        $student=Student::find($id);
        return view('registrars.shift')->withStudent($student)->withCourses($courses);
    }  

    public function shiftStore(Request $request, $id) {
        $student=Student::find($id);
        $student->course_id=$request->course_id;
        $student->save();
        Session::flash('success','Shifted to other course Successfully');
        return redirect()->route('shiftStudent',$student->id);
    }


}
