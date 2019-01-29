<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\EventsGestion;
use App\Http\Requests\CommentaryRequest;
use App\Http\Requests\PictureRequest;
use App\Http\Requests\EventRequest;

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

        $resultPicture = $resultPictures['1'];
        $resultAgree = $resultPictures['2'];

        return view('Events/eventPicture')->withResultPicture($resultPicture)->withResultAgree($resultAgree);
    }

    public function postPicture($n, EventsGestion $gestion, PictureRequest $request){

        $URL = $_SERVER['HTTP_REFERER'];
        $gestion->addPictureEvent($n, $request);

        return redirect($URL);

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

    public function deleteComment($n, EventsGestion $gestion){

        $gestion->deleteCom($n);

        return redirect($_SERVER['HTTP_REFERER']);

    }

    public function deletePicture($n, EventsGestion $gestion){

        $gestion->delPicture($n);

        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function deleteEvents($n, EventsGestion $gestion){

        $gestion->delEvents($n);

        return redirect($_SERVER['HTTP_REFERER']);

    }

    public function signalCommentary($n, EventsGestion $gestion){

        $gestion->signalCom($n);

        return redirect($_SERVER['HTTP_REFERER']);

    }

    public function signalPicture($n, EventsGestion $gestion){

        $gestion->signalPic($n);

        return redirect($_SERVER['HTTP_REFERER']);
    }

    public function signalEve($n, EventsGestion $gestion){

        $gestion->signalEve($n);

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
