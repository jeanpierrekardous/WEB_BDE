<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function getIdea(){

    	return view('Contact/contact');
    }

    public function postIdea(){

    }
}