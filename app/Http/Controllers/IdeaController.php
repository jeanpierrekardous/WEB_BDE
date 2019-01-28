<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\IdeaGestion;
use App\Http\Requests\AddeventRequest;


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

    public function getDelete($n, IdeaGestion $gestion){

    	$gestion->getDeleteIdea($n);

    	return redirect('idea');

    }

    public function getEventByIdea($n){

    	return view("Idea/addIdeaToEvent");

    }

    public function postEventByIdea($n, IdeaGestion $gestion, AddeventRequest $request){

    	$gestion->postEventByIdea($n, $request);

    	return redirect('events');

    }

    public function getSignal($n, IdeaGestion $gestion){

    	$gestion->sendMailSignal($n);

    	return redirect('idea');

    }
}