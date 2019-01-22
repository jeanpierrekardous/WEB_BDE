<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use App\Gestion\SignupGestion;

class SignupController extends Controller
{
    public function getForm(){

    	return view('UsersConnect/sign_up');
    	
    }

    public function postForm(SignupRequest $request, SignupGestion $gestion){

    	$result = $gestion->analyse($request);

    	if($result){
    		return redirect('/');
    	}
    	else{
    		return redirect('signup');
    	}
    }
}
