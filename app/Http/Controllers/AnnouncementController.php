<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Announcement;
use App\Student;
use App\Admin;
use App\Professor;
use Session;
use Auth;
use SmsGateway;
use DB;
class AnnouncementController extends Controller
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
        $announcements=Announcement::where('campus_id','=',Auth::user()->campus_id)
        ->orderBy('id','desc')->get();
        return view('announcements.index')->withAnnouncements($announcements);
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
        return view('announcements.create')->withStudents($students)->withProfessors($professors);
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
            'title'=>'required|max:255',
            'description'=>'required',
            'banner'=>'required'
          ]);

        $file=$request->file('banner');
        $fileName=time(). '.' .$file->getClientOriginalExtension();
        $uploaded = Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded) {
        $announcement=new Announcement();
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->filename=$fileName;
        $announcement->campus_id=Auth::user()->campus_id;
        $announcement->save();

        $numbersStudent =$request->students;
        $message = strip_tags($request->title.' ! '.' '.' '.' '.' '.' '.' '.$request->description.'.'.' '.' '.' '.' '.' '.' '.' '.' From BPC');
        $sms = SmsGateway::to($numbersStudent)
                 ->message($message)
                 ->send();
        $numbersProfessor =$request->professors;
        $sms = SmsGateway::to($numbersProfessor)
                 ->message($message)
                 ->send();
        }
     
        Session::flash('success','Announcement Successfully Posted');
        return redirect()->route('announcements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement=Announcement::find($id);
        return view('announcements.show')->withAnnouncement($announcement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students=Student::where('campus_id','=',Auth::user()->campus_id)->get();
        $professors=Professor::where('campus_id','=',Auth::user()->campus_id)->get();

        $announcement=Announcement::find($id);
        return view('announcements.edit')->withAnnouncement($announcement)->withStudents($students)->withProfessors($professors);
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
            'description'=>'required'
        ]);
        $announcement=Announcement::find($id);
        if($request->hasFile('banner')){
        $file=$request->file('banner');
        $fileName=time(). '.' .$file->getClientOriginalExtension();
        $uploaded = Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        $delete = Storage::disk('socials')->delete($announcement->filename);
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->filename=$fileName;
        $announcement->campus_id=Auth::user()->campus_id;

        }
        else {
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->campus_id=Auth::user()->campus_id;
          $numbers =$request->$users;
        }
        $announcement->save();

        
        $numbersStudent =$request->students;
        $message = strip_tags($request->title.' ! '.' '.' '.' '.' '.' '.' '.$request->description.'.'.' '.' '.' '.' '.' '.' '.' '.' From BPC');
        $sms = SmsGateway::to($numbersStudent)
                 ->message($message)
                 ->send();
        $numbersProfessor =$request->professors;
        $sms = SmsGateway::to($numbersProfessor)
                 ->message($message)
                 ->send();
                       
        Session::flash('success','announcement Successfully Updated');
        return redirect()->route('announcements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $announcement=Announcement::find($id);
        $filename = $announcement->filename;
        $uploaded = Storage::disk('socials')->delete($filename);
        $announcement->delete();
        Session::flash('success','announcement Successfully Deleted');
        return redirect()->route('announcements.index');
    }

    public function deleteAnnouncement(Request $request) {
        $announcement=Announcement::find($request->id)->delete();
        return response()->json();
    }
}
