<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IdeaController extends Controller
{
    public function getIdea(){

    	return view('Idea/idea');
    }

    public function postIdea(){

    }
}