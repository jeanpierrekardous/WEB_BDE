<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\EventsGestion;

class EventsController extends Controller
{
    public function getEventPage(EventsGestion $gestion){

    	$resultEvents = $gestion->printEvents();
    	
    	return view('Events/events')->withResultEvents($resultEvents);
    }
}
