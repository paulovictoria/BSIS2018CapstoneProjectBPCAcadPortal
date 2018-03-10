<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Notifications\ApprovedToProfessor;
use App\Professor;
use App\Admin;
use App\Campus;
class ProfessorRegisterController extends Controller
{
    
    public function create() {
        $campuses=Campus::all();
    	return view('auth.professor-register')->withCampuses($campuses);
    }

    public function register(Request $request) {
    	$this->validate($request,[
    		'eid' => 'required|integer',
    		'last_name' => 'required|string|max:255',
    		'first_name' => 'required|string|max:255',
    		'midle_name' => 'required|string|max:255',
            'gender' => 'required',
            'campus_id' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:professors',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'required'
    	]);
        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('profiles')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded){
    	$professor=new Professor;
    	$professor->eid=$request->eid;
    	$professor->last_name=$request->last_name;
    	$professor->first_name=$request->first_name;
    	$professor->midle_name=$request->midle_name;
    	$professor->email=$request->email;
        $professor->gender=$request->gender;
        $professor->campus_id=$request->campus_id;
    	$professor->password=bcrypt($request['password']);
        $professor->approved = false;
        $professor->filename=$fileName;
    	$professor->save();
        }

        $admin=Admin::where('campus_id','=',$request->campus_id)->first(); 
        $admin->notify(new ApprovedToProfessor($professor));


                $file=$request->file('image');
        $filename=$request['eid']. '-' .$professor->id. '.jpg';
        if($file){
            Storage::disk('local')->put($filename, File::get($file));
        }
        return redirect()->route('home');
    }
}
