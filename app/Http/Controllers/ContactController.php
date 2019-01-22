<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Gestion\ContactGestion;

class ContactController extends Controller
{
    public function getContact(){

    	return view('Contact/contact');
    }

    public function postContact(ContactRequest $request, ContactGestion $gestion){

    	$result = $gestion->sendContact($request);

    	if ($result) {
    		return view('Contact/ContactGood');
    	}
    	else{
    		return view('Contact/ContactBad');
    	}
    }
}
