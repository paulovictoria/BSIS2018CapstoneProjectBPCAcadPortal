<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Announcement;
use App\Student;
use App\Admin;
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
        $users=Admin::where('campus_id','=',Auth::user()->campus_id)->first()
        ->join('professors','admins.campus_id','=','professors.campus_id')
        ->join('students','admins.campus_id','=','students.campus_id')->get()
        ; 
        return view('announcements.create')->withUsers($users);
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
            'date'=>'required',
            'banner'=>'required'
          ]);
        $file=$request->file('banner');
        $fileName=time(). '.' .$file->getClientOriginalExtension();
        $uploaded = Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded){
        $announcement=new Announcement();
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->date=$request->date;
        $announcement->filename=$fileName;
        $announcement->campus_id=Auth::user()->campus_id;
        $announcement->save();

        $numbers =$request->users;
        $message = $request->title.'!'.' '.' '.$request->description.'.'.' '.$request->date.'From BPC';
        $sms = SmsGateway::to($numbers)
                 ->message($message)
                 ->send();

        }
     
        Session::flash('success','announcement Successfully Posted');
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
         $users=Admin::where('campus_id','=',Auth::user()->campus_id)->first()
        ->join('professors','admins.campus_id','=','professors.campus_id')
        ->join('students','admins.campus_id','=','students.campus_id')->get()
        ; 
        $announcement=Announcement::find($id);
        return view('announcements.edit')->withAnnouncement($announcement)->withUsers($users);
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
        ]);
        $announcement=Announcement::find($id);
        if($request->hasFile('banner')){
        $file=$request->file('banner');
        $fileName=time(). '.' .$file->getClientOriginalExtension();
        $uploaded = Storage::disk('socials')->put($fileName,file_get_contents($file->getRealPath()));
        $delete = Storage::disk('socials')->delete($announcement->filename);
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->date=$request->date;
        $announcement->filename=$fileName;
        $announcement->campus_id=Auth::user()->campus_id;

        }
        else {
        $announcement->title=$request->title;
        $announcement->description=$request->description;
        $announcement->date=$request->date;
        $announcement->campus_id=Auth::user()->campus_id;
          $numbers =$request->$users;
        }
        $announcement->save();

        $numbers =$request->users;
        $message = $request->title.'!'.' '.' '.$request->description.'.'.' '.$request->date.'From BPC';
        $sms = SmsGateway::to($numbers)
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
