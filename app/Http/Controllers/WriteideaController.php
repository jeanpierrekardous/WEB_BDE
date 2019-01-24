<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WriteideaRequest;

class WriteideaController extends Controller
{
    public function getFormIdea(){

    	return view('Idea/writeIdea');
    }

    public function postFormIdea(WriteideaRequest $request){

    	echo $request['nameEvents'];
    	echo $request['description'];
    	echo $request['picture'];

    }    
}
