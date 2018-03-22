<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRegisterController extends Controller
{
    public function __construct() {
    	$this->middleware('auth:admin');
    }

    public function create() {
    	return view('auth.admin-register');
    }
    
}
