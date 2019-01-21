<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function getForm(){

    	return view('UsersConnect/sign_up');
    	
    }

    public function postForm(){

    }
}
