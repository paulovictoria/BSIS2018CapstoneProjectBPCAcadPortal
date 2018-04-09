<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classroom;
use App\Course;
use App\Student;
use Session;
use Auth;
use DB;
use Excel;
class ClassroomController extends Controller
{
    public function __construct() {
        $this->middleware('auth:registrar');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $classrooms=Classroom::where('campus_id','=',Auth::user()->campus_id)->orderBy('id','desc')->get();
        return view('classrooms.index')->withClassrooms($classrooms)->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('classrooms.create')
        ->withCourses($courses)
        ->withStudents($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
           'sem'=>'required',
           'academic_year'=>'required',
           'course_id'=>'required|integer',
           'year'=>'required',
           'section'=>'required' 
        ]);

        $classroom = new Classroom();
        $classroom->sem=$request->sem;
        $classroom->academic_year=$request->academic_year;
        $classroom->course_id=$request->course_id;
        $classroom->year=$request->year;
        $classroom->section=$request->section;
        $classroom->campus_id=Auth::user()->campus_id;
        $classroom->save();
        $classroom->students()->sync($request->students,false);
        Session::flash('success','Success Class Created Successfully');
        return redirect()->route('classrooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom=Classroom::find($id);
        return view('classrooms.show')->withClassroom($classroom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom=Classroom::find($id);    
        $courses = Course::all();

        $courses2 = array();
        foreach($courses as $course) {
            $courses2[$course->id]=$course->course_name;
        }

        $students=Student::all();
        $students2 = array();
        foreach($students as $student) {
            $students2[$student->id]=$student->sid.' '.$student->last_name.' '.$student->first_name.' '.$student->midle_name;
        }
        return view('classrooms.edit')
        ->withClassroom($classroom)
        ->withCourses($courses2)
        ->withStudents($students2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom=Classroom::find($id); 
        $classroom->sem=$request->sem;
        $classroom->academic_year=$request->academic_year;
        $classroom->course_id=$request->course_id;
        $classroom->year=$request->year;
        $classroom->section=$request->section;
        $classroom->campus_id=Auth::user()->campus_id;
        $classroom->save();
        if(isset($request->students)){
        $classroom->students()->sync($request->students);
        } else {
         $classroom->students()->sync(array());   
        }
        
        foreach ($classroom->assigns as $assign) {
            $assign->students()->sync($request->students);
        }

        Session::flash('success','Updated Successfully');
        return redirect()->route('classrooms.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $classroom=Classroom::find($id);
        $classroom->students()->detach();
        $classroom->delete();
        Session::flash('success','Deleted Successfully');
        return redirect()->route('classrooms.index');
    }


    public function byCourseCreate($id) {
        $course=Course::where('id','=',$id)->first();
        $students=Student::where('campus_id','=',Auth::user()->campus_id)
        ->where('course_id','=',$id)->get();
        return view('classrooms.byCourse')
        ->withCourse($course)
        ->withStudents($students);
    }



    public function exportExcelClassroom($id) {
    $classrooms = Classroom::where('id','=',$id)->first()
    ->join('classroom_student','classrooms.id','=','classroom_student.classroom_id')
    ->join('students','classroom_student.student_id','=','students.id')
    ->orderBy('last_name','asc')
    ->select(DB::raw("concat(last_name, ' ',first_name, ' ', midle_name)"))
    ->get();

   //This is the title
    $classroomTitle=Classroom::where('id','=',$id)->get();

    foreach ($classroomTitle as $classroomTit) {
         
         if($classroomTit->year=='First Year'){
            $title=$classroomTit->course->course_name.'_'.'1'.$classroomTit->section;
         } 
         elseif($classroomTit->year=='Second Year'){
            $title=$classroomTit->course->course_name.'_'.'2'.$classroomTit->section;            
         }
         elseif($classroomTit->year=='Third Year'){
            $title=$classroomTit->course->course_name.'_'.'3'.$classroomTit->section;            
         }     
         else {
            $title=$classroomTit->course->course_name.'_'.'4'.$classroomTit->section;            
         }    
         
    }


    // Initialize the array which will be passed into the Excel
    // generator.
    $classroomsArray = []; 

    // Define the Excel spreadsheet headers
    $classroomsArray[] = ['Name'];

    // Convert each member of the returned collection into an array,
    // and append it to the payments array.
    foreach ($classrooms as $classroom) {
        $classroomsArray[] = $classroom->toArray();
    }

    // Generate and return the spreadsheet
    Excel::create($title, function($excel) use ($classroomsArray,$title) {

        // Set the spreadsheet title, creator, and description
        $excel->setTitle($title);
        $excel->setCreator('BPCPortal')->setCompany('Bulcan Polytechnic College');
        $excel->setDescription('Students List');

        // Build the spreadsheet, passing in the payments array
        $excel->sheet('sheet1', function($sheet) use ($classroomsArray) {
            $sheet->fromArray($classroomsArray, null, 'A1', false, false);
        });

    })->download('xlsx');


    }
   
}
