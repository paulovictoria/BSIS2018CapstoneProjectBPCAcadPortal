<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Student;
use App\Registrar;
use App\Professor;
use App\Course;
use Auth;
use Illuminate\Support\Carbon;
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
        $courses=Course::all();
        return view('admin')
        ->withStudents($students)
        ->withProfessors($professors)
        ->withCourses($courses);
    }

    public function profile() {
        return view('admin.profile');
    }
  
    public function registrarIndex() {
        $registrars=Registrar::orderBy('id','desc')->paginate(5);
        return view('admin.registrarIndex')->withRegistrars($registrars);
        
    }

    public function registrarShow($id) {
        $registrar=Registrar::find($id);
        return view('admin.registrarShow')->withRegistrar($registrar);
    }

    public function professorIndex() {
        $professors=Professor::orderBy('id','desc')->paginate(5);
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
         $professor->save();
         return redirect()->route('admin.dashboard');
    }

     public function denied (Request $request, $id) {
         $professor=Professor::find($id);
         $professor->delete();
        return redirect()->route('admin.dashboard');
    }     



}
