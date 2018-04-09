<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Student;
use App\Registrar;
use App\Professor;
use App\Course;
use Auth;
use Session;
use Illuminate\Support\Carbon;
use SmsGateway;
class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        $registrars=Registrar::where('campus_id','=',Auth::user()->campus_id)->get();
        $admins=Admin::where('campus_id','=',Auth::user()->campus_id)->get();

        $studentsAll=Student::all();
        $professorsAll=Professor::all();
        $registrarsAll=Registrar::all();
        $adminsAll=Admin::all(); 

        $courses=Course::all();

        $chartjs = app()->chartjs
        ->name('pieChartTest')
        ->type('doughnut')
        ->size(['width' => 400, 'height' => 400])
        ->labels(['Students','Instructors','Registrars','Administrator'])
        ->datasets([
            [   
                'backgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1',],
                'hoverBackgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1',],
                'data' => [$students->count(),$professors->count(),$registrars->count(),$admins->count(),]
            ]
        ])
        ->options([
            'title'=>['display'=>true,'text'=>'Type of Users','position'=>'bottom',],
            'legend'=>['display'=>true,'position'=>'bottom',]
        ]);

        $chartjspolararea = app()->chartjs
        ->name('polarArea')
        ->type('polarArea')
        ->size(['width' => 400, 'height' => 400])
        ->labels(['Students','Instructors','Registrars','Administrator'])
        ->datasets([
            [   
                'backgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1',],
                'hoverBackgroundColor' => ['#468499', '#d20e1c','#616f8c','#ffb6c1',],
                'data' => [$studentsAll->count(),$professorsAll->count(),$registrarsAll->count(),$adminsAll->count(),]
            ]
        ])
        ->options([
            'title'=>['display'=>true,'text'=>'All Campus Type of Users','position'=>'bottom',],
            'legend'=>['display'=>true,'position'=>'bottom',]
        ]);

        return view('admin')
        ->withStudents($students)
        ->withProfessors($professors)
        ->withCourses($courses)
        ->withChartjs($chartjs)
        ->withChartjspolararea($chartjspolararea);
    }

    public function profile() {
        return view('admin.profile');
    }
  
    public function registrarIndex() {
        $registrars=Registrar::where('campus_id','=',Auth::user()->campus_id)->orderBy('id','desc')->paginate(5);
        return view('admin.registrarIndex')->withRegistrars($registrars);
        
    }

    public function registrarShow($id) {
        $registrar=Registrar::find($id);
        return view('admin.registrarShow')->withRegistrar($registrar);
    }

    public function professorIndex() {
        $professors=Professor::where('approved','=',true)->where('campus_id','=',Auth::user()->campus_id)->get();
        return view('admin.professorIndex')->withProfessors($professors);   
    }

    public function ProfessorShow($id) {
        $professor=Professor::find($id);
        return view('admin.professorShow')->withProfessor($professor);
    }

    public function professorEdit($id) {
        $professor=Professor::find($id);
        return view('admin.professorEdit')->withProfessor($professor);
    }

    public function approvalIndex(){
        $admin = Admin::find(Auth::user()->campus_id);
        $admin->unreadNotifications()->update(['read_at' => Carbon::now()]);
        
        $professors=Professor::where('approved','=',0)
        ->where('campus_id','=',Auth::user()->campus_id)
        ->get();
        return view('admin.approvalIndex')->withProfessors($professors);

    }

    public function approved (Request $request, $id) {
         $professor=Professor::find($id);
         $professor->approved = true;
         $professor->status = true;
         $professor->save();
        $number =$professor->mobile;
        $message = 'Your Registration in BPC Portal Has been Approved. Visit your account on bpciansportal.herokuapp.com';
        $sms = SmsGateway::to($number)
                 ->message($message)
                 ->send();
         $professors=Professor::where('approved','=',0)
         ->where('campus_id','=',Auth::user()->campus_id)
         ->get();
         Session::flash('success','Approved Successfully');
         return redirect()->route('professorsApprovalIndex')->withProfessors($professors);
    }

     public function denied (Request $request, $id) {
         $professor=Professor::find($id);
         $professor->delete();
        return redirect()->route('admin.dashboard');
    }    

    public function enableProfessor($id) {
        $professor=Professor::find($id);
        $professor->status = true;
        $professor->save();
        $professors=Professor::where('approved','=',true)->where('campus_id','=',Auth::user()->campus_id)->get();
        Session::flash('success','Enabled Successfully');
        return redirect()->route('professorIndex')->withProfessors($professors); 
    } 
    public function disableProfessor($id) {
        $professor=Professor::find($id);
        $professor->status = false;
        $professor->save();
        $professors=Professor::where('approved','=',true)->where('campus_id','=',Auth::user()->campus_id)->get();
        Session::flash('success','Disabled Successfully');
        return redirect()->route('professorIndex')->withProfessors($professors); 
    }

    public function adminIndex() {
        $admins=Admin::all();
        return view('admin.adminIndex')->withAdmins($admins);
    }

    public function adminEdit($id) {
        $admin=Admin::find($id);
        return view('admin.editAdmin')->withAdmin($admin);
    } 

    public function adminUpdate(Request $request,$id) {
        $admin=Admin::find($id);
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=bcrypt($request['newpassword']);
        $admin->save();
        $admins=Admin::all();
        Session::flash('success','Admin Updated Successfully');
        return redirect()->route('admin.adminIndex')->withAdmins($admins);
    }


}
