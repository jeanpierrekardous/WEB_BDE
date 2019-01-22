<?php

namespace App\Gestion;

use Mail;

class ContactGestion
{
	public function sendContact($request)
	{
		$mail = $request['email'];
		$subject = $request['subject'];
		$bodies = $request['bodies'];

        Mail::send('Contact/contactReceive', $request->all(), function($message) use ($request){
            $message->to('elcoco.01@orange.fr')->subject($request['subject'])->from($request['email']);
		});

		Mail::send('Contact/contactResponse', $request->all(), function($message) use ($request){
            $message->to($request['email'])->subject('response');
		});

		return true;
	}
}
?>