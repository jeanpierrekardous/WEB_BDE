<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\SignupRequest;

class SignupController extends Controller
{
    public function getForm(){

    	return view('UsersConnect/sign_up');
    	
    }

    public function postForm(SignupRequest $request){

    }
}
