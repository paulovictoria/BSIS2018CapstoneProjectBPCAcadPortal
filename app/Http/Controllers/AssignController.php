<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;
use Response;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Select;
use App\Classroom;
use App\Professor;
use App\Subject;
use App\Room;
use App\Student;
use App\Day;
use App\Course;
use Auth;
use Session;

class AssignController extends Controller
{
       public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assigns=Assign::where('campus_id','=',Auth::user()->campus_id)->orderBy('id','desc')->get();
        return view('assigns.index')->withAssigns($assigns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $classrooms=Classroom::all();
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        $subjects=Subject::all();
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        $days=Day::all();
        $rooms=Room::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('assigns.create')
        ->withClassrooms($classrooms)
        ->withProfessors($professors)
        ->withSubjects($subjects)
        ->withRooms($rooms)
        ->withDays($days);

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
            'subject_id'=>'required|integer',
            'classroom_id'=>'required|integer',
            'professor_id'=>'required|integer',
            'day_id'=>'required|integer',
            'startTime'=>'required',
            'endTime'=>'required',
            'room_id'=>'required|integer',
        ]);      
        $assign=new Assign();
        $assign->subject_id=$request->subject_id;
        $assign->classroom_id=$request->classroom_id;
        $assign->professor_id=$request->professor_id;
        $assign->day_id=$request->day_id;
        $assign->startTime=$request->startTime;
        $assign->endTime=$request->endTime;
        $assign->room_id=$request->room_id;
        $assign->campus_id=Auth::user()->campus_id;
        //unique assigns
        $assign->class_subj=$request->classroom_id.'and'.$request->subject_id;
        $refer=Assign::where('class_subj','=',$assign->class_subj)->first();
        if(is_null($refer)){
        $assign->save();
        $assign->students()->sync($assign->classroom->students,false);
        Session::flash('success','Classroom Assign Successfully');
        return redirect()->route('assigns.index');
        }
        else{
            Session::flash('alert','The subject already assigned to this Classroom');
            return redirect()->route('assigns.create');
        }
     
             
      
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assign=Assign::find($id);
        return view('assigns.show')->withAssign($assign);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assign=Assign::find($id);
        $classrooms=Classroom::all();
        $classrooms2 = array();
        foreach($classrooms as $classroom) {
            $classrooms2[$classroom->id]=$classroom->academic_year.' '.$classroom->course->course_name.' '.$classroom->year.' '.$classroom->section;
        }
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        $professors2 = array();
        foreach($professors as $professor) {
            $professors2[$professor->id]=$professor->last_name.' '.$professor->first_name. ' '.$professor->midle_name;
        }
        $subjects=Subject::all();  
        $subjects2 = array();
        foreach($subjects as $subject) {
            $subjects2[$subject->id]=$subject->subj_code.' '.$subject->subj_description;
        }
        $days=Day::all();
        $days2=array();
        foreach ($days as $day) {
            $days2[$day->id]=$day->name;
        }

        $rooms=Room::all();
        $rooms2 = array();
        foreach($rooms as $room) {
            $rooms2[$room->id]=$room->room_code;
        }      
        return view('assigns.edit')
        ->withAssign($assign)
        ->withClassrooms($classrooms2)
        ->withProfessors($professors2)
        ->withSubjects($subjects2)
        ->withDays($days2)
        ->withRooms($rooms2);

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
        $this->validate($request,[
            'subject_id'=>'required|integer',
            'classroom_id'=>'required|integer',
            'professor_id'=>'required|integer',
            'day_id'=>'required|integer',
            'startTime'=>'required',
            'endTime'=>'required',
            'room_id'=>'required|integer'   
        ]);
        $assign=Assign::find($id);
        $assign->subject_id=$request->subject_id;
        $assign->classroom_id=$request->classroom_id;
        $assign->professor_id=$request->professor_id;
        $assign->day_id=$request->day_id;
        $assign->startTime=$request->startTime;
        $assign->endTime=$request->endTime;
        $assign->room_id=$request->room_id;
        $assign->campus_id=Auth::user()->campus_id;
        $assign->save();
        Session::flash('success','Updated Successfully');
        return redirect()->route('assigns.index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign=Assign::find($id);
        $assign->delete();
        Session::flash('success','Successfully Delete');
        return redirect()->route('assigns.index');
    }

    public function specialCreate() {
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        $assigns=Assign::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('assigns.special')->withStudents($students)->withAssigns($assigns);
    }

    public function specialStore(Request $request) {
        $this->validate($request,[
            'student_id'=>'required',
            'failed_assign'=>'required',
            'assign_id'=>'required'
        ]);
        $assign=Assign::find($request->failed_assign);
        $student=Student::find($request->student_id);
        $assign->assign_id=$request->assign_id;
        $assign->students()->detach($student);

        $newAssign=Assign::find($request->assign_id);
        $newAssign->students()->attach($student);
        
        Session::flash('success','Success');
        return redirect()->route('speacialAssign.create');
    }

    public function adminClassroomIndex() {
        $courses=Course::all();
        $classrooms=Classroom::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('admin.adminClassroomIndex')
        ->withCourses($courses)
        ->withClassrooms($classrooms);
    }

    public function byCourseIndex($id) {
        $classrooms=Classroom::where('campus_id','=',Auth::user()->campus_id)
        ->where('course_id','=',$id)
        ->orderBy('id','desc')->get();
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        $subjects=Subject::where('course_id','=',$id)->get();
        $days=Day::all();
        $rooms=Room::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('assigns.byCourse')
        ->withClassrooms($classrooms)
        ->withProfessors($professors)
        ->withSubjects($subjects)
        ->withRooms($rooms)
        ->withDays($days);
    }

    public function byCourseCreate($id) {
        $classroom=Classroom::where('id',$id)->first();
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        $subjects=Subject::where('course_id','=',$classroom->course_id)
        ->where('year','=',$classroom->year)
        ->where('sem','=',$classroom->sem)
        ->get();
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        $days=Day::all();
        $rooms=Room::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('assigns.byCourseCreate')
        ->withClassroom($classroom)
        ->withProfessors($professors)
        ->withSubjects($subjects)
        ->withRooms($rooms)
        ->withDays($days);
    }
   
}

