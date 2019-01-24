<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WriteideaRequest;
use App\Gestion\WriteIdeaGestion;

class WriteideaController extends Controller
{
    public function getFormIdea(){

    	return view('Idea/writeIdea');
    }

    public function postFormIdea(WriteideaRequest $request, WriteIdeaGestion $gestion){

    	$result = $gestion->writeIdeaEvent($request);

    	if($result){
    		return redirect('/');
    	}
    	else{
    		return view('Idea/wrongWriteIdea');
    	}
    }    
}
