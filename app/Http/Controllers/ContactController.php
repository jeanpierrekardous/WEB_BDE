<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function getContact(){

    	return view('Contact/contact');
    }

    public function postContact(ContactRequest $request){

    	Mail::send('email_contact', $request->all(), function($message){
    		$message->to('corentin.brion@viacesi.fr');
    	});

    	return view('confirm');
    }
}
