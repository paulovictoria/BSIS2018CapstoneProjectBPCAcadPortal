<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Session;
use App\Notifications\RepliedToRegister;
use App\User;
use App\Admin;
class CourseController extends Controller
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
        $courses=Course::all();
        return view('courses.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'course_code'=>'required|max:255',
            'course_name'=>'required|max:255',
            'course_description'=>'required|max:255',
            'degree'=>'required'
        ]);
        $course=new Course();
        $course->course_code=$request->course_code;
        $course->course_name=$request->course_name;
        $course->course_description=$request->course_description;
        $course->degree=$request->degree;
        $course->save();
        Session::flash('success','New Course created Successfully');
        $thread=$course;
        $admin=Admin::where('id','=',1)->first(); 
        $admin->notify(new RepliedToRegister($thread));
        return redirect()->route('courses.show',$course->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::find($id);
        return view('courses.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $course->delete();
        Session::flash('Success','Successfully Deleted');
        return redirect()->route('courses.index');
    }
}
