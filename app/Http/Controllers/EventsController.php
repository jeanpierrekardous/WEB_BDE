<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\EventsGestion;
use App\Http\Requests\CommentaryRequest;

class EventsController extends Controller
{
    public function getEventPage(EventsGestion $gestion){

    	$resultEvent = $gestion->printEvents();

    	$resultEvents = $resultEvent['1'];
    	$resultSignupEvent = $resultEvent['2'];
    	
    	return view('Events/events')->withResultEvents($resultEvents)->withResultSignupEvent($resultSignupEvent);
    }

    public function getSignup($n, EventsGestion $gestion){

    	$gestion->addSignupEvent($n);

    	return redirect('events');

    }

    public function getPicture($n, EventsGestion $gestion){

        $resultPictures = $gestion->getPictureEvent($n);

        return view('Events/eventPicture')->withResultPictures($resultPictures);
    }

    public function getLikePictureEvent($n, EventsGestion $gestion){

        $URL = $_SERVER['HTTP_REFERER'];

        $resultLike = $gestion->addLikeEvent($n);

        return redirect($URL);
    }

    public function getComment($n, EventsGestion $gestion){

        $resurtAllInfo = $gestion->getCommentary($n);

        $linkPicture = $resurtAllInfo['2'];
        $comment = $resurtAllInfo['1'];

        return view('Events/commentary')->withComment($comment)->withLinkPicture($linkPicture);
    }

    public function postComment($n, EventsGestion $gestion, CommentaryRequest $request){

        $URL = $_SERVER['HTTP_REFERER'];
        $gestion->postCommentary($n, $request);

        return redirect($URL);

    }
}
