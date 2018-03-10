<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Professor;
use Session;
class ProfessorLoginController extends Controller
{
    public function __construct() {
    	$this->middleware('guest:professor',['except'=>['logout']]);
    }

    public function showLoginForm() {
    	return view('auth.professor-login');
    }

    public function login(Request $request) {
    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6'
    	]);
    	if(Auth::guard('professor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		$professor=Professor::where('email','=',$request->email)->first();
            if($professor->approved == 1){
    		return redirect()->intended(route('professor.dashboard',$professor->id));
            }
                else{
                    Auth::guard('professor')->logout();
                    Session::flash('alert','Wait while the Admin Validating you Account it may took an hour or a day,
                    You may Contact your School Admin if the request is not yet approved');
                    return redirect()->route('professor.login');
                    /*dd('Please Wait while Registrar Validating your Account');*/
                }            
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout() {
        Auth::guard('professor')->logout();
        return redirect('/');
    }
}
