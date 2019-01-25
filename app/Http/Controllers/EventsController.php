<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function getEventPage(){
    	
    	return view('Events/events');
    }
}
