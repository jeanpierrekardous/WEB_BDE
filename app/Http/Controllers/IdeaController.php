<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\IdeaGestion;


class IdeaController extends Controller
{
    public function getIdea(IdeaGestion $gestion){

    	$idea = $gestion->listEvents();

    	return view('Idea/idea')->withIdea($idea);
    }

    public function getLike($n, IdeaGestion $gestion){

    	$likes = $gestion->addLike($n);

    	return redirect('idea');
    }
}