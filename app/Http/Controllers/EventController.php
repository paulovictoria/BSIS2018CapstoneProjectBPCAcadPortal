<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;
use App\Student;
use App\Admin;
use App\Professor;
use SmsGateway;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $events=Event::where('campus_id','=',Auth::user()->campus_id)
        ->orderBy('id','desc')->get();
        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
         $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();
        return view('events.create')->withStudents($students)->withProfessors($professors);
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
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'place'=>'required',
            'banner'=>'required'
        ]);
        $file=$request->file('banner');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded = Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded){
        $event=new Event();
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->startTime=$request->startTime;
        $event->endTime=$request->endTime;
        $event->place=$request->place;
        $event->filename=$fileName;
        $event->campus_id=Auth::user()->campus_id;
        $event->save();

        $numbersStudent =$request->students;

        $message = strip_tags($request->title.' ! '.' '.$request->description.' '.'Date-'.' '.$request->date.' '.' '.'Start At:'.' '.$request->startTime.'End At'.$request->endTime.' Will be hold on:'.$request->place);
        
        $sms = SmsGateway::to($numbersStudent)
                 ->message($message)
                 ->send();
        $numbersProfessor =$request->professors;
        $sms = SmsGateway::to($numbersProfessor)
                 ->message($message)
                 ->send();

         }
        Session::flash('success','Event Successfully Posted');
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);
        return view('events.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         $users=Admin::where('campus_id','=',Auth::user()->campus_id)->first()
        ->join('professors','admins.campus_id','=','professors.campus_id')
        ->join('students','admins.campus_id','=','students.campus_id')->get()
        ; 
        $event=Event::find($id);
        return view('events.edit')->withEvent($event)->withUsers($users);
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
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'place'=>'required'
        ]);
        $event=Event::find($id);
        if($request->hasFile('banner')) {
        $file=$request->file('banner');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        $delete=Storage::disk('socials')->delete($event->filename);
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->startTime=$request->startTime;
        $event->endTime=$request->endTime;
        $event->place=$request->place;
        $event->filename=$fileName;
        $event->campus_id=Auth::user()->campus_id;
        }
        else {
        $event->title=$request->title;
        $event->description=$request->description;
        $event->date=$request->date;
        $event->startTime=$request->startTime;
        $event->endTime=$request->endTime;
        $event->place=$request->place;
        $event->campus_id=Auth::user()->campus_id;
        }
        $event->save();

        $numbersStudent =$request->students;

        $message = strip_tags($request->title.' ! '.' '.$request->description.' '.'Date-'.' '.$request->date.' '.' '.'Start At:'.' '.$request->startTime.'End At'.$request->endTime.' Will be hold on:'.$request->place);
        
        $sms = SmsGateway::to($numbersStudent)
                 ->message($message)
                 ->send();
        $numbersProfessor =$request->professors;
        $sms = SmsGateway::to($numbersProfessor)
                 ->message($message)
                 ->send();
                 
        Session::flash('success','Event Successfully Updated');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        Session::flash('success','Successfully Deleted');
        return redirect()->route('events.index');
    }

    public function getEventImage($filename) {
        
       $directories = Storage::directories($directory);
       dd($directories);
        $file=Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }
    
}
