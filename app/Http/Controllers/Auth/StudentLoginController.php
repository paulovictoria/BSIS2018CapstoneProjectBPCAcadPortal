<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Student;
use Session;

class StudentLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:student',['except'=>['logout']]);
	}
  
    public function showLoginForm() {
 
    	return view('auth.student-login');
    }

    public function login(Request $request) {

    	$this->validate($request,[
    		'email'=>'required|email',
    		'password'=>'required|min:6'
    	]);
    
    	if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                $student=Student::where('email','=',$request->email)->first(); 
                if($student->approved == 1)
                {
                    return redirect()->intended(route('student.dashboard',$student->name));
                    
                }
                else{
                    Auth::guard('student')->logout();
                    Session::flash('alert','Thankyou for signing up,
                    Please wait while we validate your account or contact the school registrar');
                    return redirect()->route('student.login');
                    /*dd('Please Wait while Registrar Validating your Account');*/
                }
                
    	}

    	return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout() {
        Auth::guard('student')->logout();
        return redirect('/');
    }

}
