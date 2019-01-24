<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteideaController extends Controller
{
    public function getFormIdea(){

    	return view('Idea/writeIdea');
    }

    
}
