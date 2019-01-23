<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Gestion\LoginGestion;

class LoginController extends Controller
{
    public function getLoginForm(){

    	return view('UsersConnect/login');

    }

    public function postLoginForm(LoginRequest $request, LoginGestion $gestion){

    	$result = $gestion->connect($request);

    	if ($result) {

    		return redirect('/');
    	}
    	else{
    		return view('UsersConnect/wrongLogin');
    	}

    }
}
