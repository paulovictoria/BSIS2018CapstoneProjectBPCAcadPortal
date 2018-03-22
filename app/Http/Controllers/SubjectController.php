<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Course;
use Session;
class SubjectController extends Controller
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
       $subjects=Subject::all(); 
       return view('subjects.index')->withSubjects($subjects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
        return view('subjects.create')->withCourses($courses);
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
            'subj_code'=>'required|max:255',
            'subj_description'=>'required|max:255',
            'subj_units'=>'required',
            'sem'=>'required',
            'year'=>'required',
            'course_id'=> 'required|integer'
            ]);

        $subject=new Subject();
        $subject->subj_code=$request->subj_code;
        $subject->subj_description=$request->subj_description;
        $subject->subj_units=$request->subj_units;
        $subject->sem=$request->sem;
        $subject->year=$request->year;
        $subject->course_id=$request->course_id;
        $subject->save();
        Session::flash('success','New  Subject Created Successfully');
        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $courses=Course::all();
        $subject=Subject::find($id);
        return view('subjects.edit')->withSubject($subject)->withCourses($courses);
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
            'subj_code'=>'required|max:255',
            'subj_description'=>'required|max:255',
            'subj_units'=>'required',
            'sem'=>'required',
            'year'=>'required',
            'course_id'=> 'required|integer'
            ]);

        $subject=Subject::find($id);
        $subject->subj_code=$request->subj_code;
        $subject->subj_description=$request->subj_description;
        $subject->subj_units=$request->subj_units;
        $subject->sem=$request->sem;
        $subject->year=$request->year;
        $subject->course_id=$request->course_id;
        $subject->save();
        Session::flash('success','Subject Updated Successfully');
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
