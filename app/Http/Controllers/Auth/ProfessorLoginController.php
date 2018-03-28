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
                  if($professor->status == 0){
                    Auth::guard('professor')->logout();
                    Session::flash('alert','Access Denied');
                    return redirect()->route('professor.login');
            }
            else {
    		return redirect()->intended(route('professor.dashboard',$professor->id));
        }
            }     
               else{
                    Auth::guard('professor')->logout();
                    Session::flash('alert','Thankyou for signing up,
                    Please wait while we validate your account or contact the school administrator');
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
