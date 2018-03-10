<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registrar;
use App\Student;
use App\Course;
use Auth;
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
		$students=Student::where('course_id',request('course_id'))->paginate(20);
		return view('registrars.studentIndex')->withStudents($students)->withCourses($courses);
	}

    public function studentShow($id) {
        $records=Student::find($id)
        ->join('assign_student','students.id','=','assign_student.student_id')
        ->where('assign_student.student_id','=',$id)
        ->join('assigns','assign_student.assign_id','=','assigns.id')
        ->join('subjects','assigns.subject_id','=','subjects.id')
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
         return redirect()->route('registrar.dashboard');
    }

     public function denied (Request $request, $id) {
         $student=Student::find($id);
         $student->delete();
        return redirect()->route('registrar.dashboard');
    } 

}
