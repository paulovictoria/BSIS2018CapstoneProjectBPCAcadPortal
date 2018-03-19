<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Registrar;
use Auth;
class RegistrarRegisterController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function create() {
    	return view('auth.registrar-register');
    }

    public function register(Request $request) {
    	$this->validate($request,[
    		'eid' => 'required|unique:registrars',
    		'last_name' => 'required|string|max:255',
    		'first_name' => 'required|string|max:255',
    		'midle_name' => 'required|string|max:255',
            'gender' => 'required',
            'email' => 'required|string|email|max:255|unique:registrars',
            'password' => 'required|string|min:6|confirmed',
            'image'=>'required'
    	]);
       
        $file=$request->file('image');

        $fileName=time().'.'.$file->getClientOriginalExtension();
        $uploaded=Storage::disk('profiles')->put($fileName,file_get_contents($file->getRealPath()));
        if($uploaded){
    	$registrar=new Registrar;
    	$registrar->eid=$request->eid;
    	$registrar->last_name=$request->last_name;
    	$registrar->first_name=$request->first_name;
    	$registrar->midle_name=$request->midle_name;
        $registrar->gender=$request->gender;
        $registrar->campus_id=Auth::user()->campus_id;
    	$registrar->email=$request->email;
    	$registrar->password=bcrypt($request['password']);
        $registrar->filename=$fileName;
    	$registrar->save();
        }

        return redirect()->route('registrarIndex');
    }
}
