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
use SmsGateway;

class RegistrarDashboardController extends Controller
{
	public function __construct() {
		$this->middleware('auth:registrar');
	}
	public function index() {

        $studentsBSIS=Student::where('course_id','=',1)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsBSOM=Student::where('course_id','=',2)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsCCM=Student::where('course_id','=',6)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsCES=Student::where('course_id','=',5)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsCS=Student::where('course_id','=',4)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsDTS=Student::where('course_id','=',7)->where('campus_id','=',Auth::user()->campus_id)->get();
        $studentsHRS=Student::where('course_id','=',3)->where('campus_id','=',Auth::user()->campus_id)->get();
        $chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('doughnut')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['BSIS','BSOM','CS','CES','CCM','DTS','HRS',])
        ->datasets([
            [   
                'backgroundColor' => ['#468499', '#d20e1c','#ffb6c1','#c1ffc1','#eedc82','#cb5404','#616f8c',],
                'hoverBackgroundColor' => ['#468499', '#d20e1c','#ffb6c1','#c1ffc1','#eedc82','#cb5404','#616f8c',],
                'data' => [$studentsBSIS->count(),$studentsBSOM->count(),$studentsCCM->count(),$studentsCES->count(),$studentsCS->count(),$studentsDTS->count(),$studentsHRS->count()]
            ]
        ])
        ->options([
            'title'=>['display'=>true,'text'=>'Students Chart Per Course','position'=>'bottom',],
            'legend'=>['display'=>true,'position'=>'bottom',]
        ]);

        $chartjsBar = app()->chartjs
         ->name('barChartTest')
         ->type('line')
         ->size(['width' => 400, 'height' => 200])
        ->labels(['BSIS','BSOM','CS','CES','CCM','DTS','HRS',])
         ->datasets([
            [
         
                'backgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1','#c1ffc1','#eedc82','#cb5404',],
                'hoverBackgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1','#c1ffc1','#eedc82','#cb5404',],
                'data' => [$studentsBSIS->count(),$studentsBSOM->count(),$studentsCCM->count(),$studentsCES->count(),$studentsCS->count(),$studentsDTS->count(),$studentsHRS->count()]
             ]

         ])
         ->options(['title'=>['display'=>true,'text'=>'Line of Students',]]);

                  return view('registrar', compact('chartjs','chartjsBar'));
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
        ->join('classrooms','assigns.classroom_id','=','assigns.id')
        ->join('subjects','assigns.subject_id','=','subjects.id')
        ->orderBy('subj_code','asc')
        ->orderBy('sem','asc')
        ->get();

        return view('registrars.studentShow')->withRecords($records);
    }

    public function approvalIndex() {
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
         $number =$student->mobile;
         $message = 'Your Registration in BPC Portal Has been Approved. Visit your account on bpciansportal.herokuapp.com';
         $sms = SmsGateway::to($number)
                 ->message($message)
                 ->send();

         $students=Student::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Approved Successfully');
         return redirect()->route('studentsApprovalIndex')->withStudents($students);
    }

    public function ajaxApproved(Request $request) {

        $student=Student::find($request->id);
        $student->approved = 1;
        $student->save();
        $number =$student->mobile;
        $message = 'Your Registration in BPC Portal Has been Approved. Visit your account on bpciansportal.herokuapp.com';
        $sms = SmsGateway::to($number)
                 ->message($message)
                 ->send();
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

    public function ajaxDenied(Request $request) {
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
