<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\IdeaGestion;


class IdeaController extends Controller
{
    public function getIdea(IdeaGestion $gestion){

    	//$bool = $gestion->listEvents();

    	return view('Idea/idea');
    }
}