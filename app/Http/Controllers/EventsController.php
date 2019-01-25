<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\EventsGestion;

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
}
