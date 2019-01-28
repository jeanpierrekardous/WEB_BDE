<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;
use Mail;

class IdeaGestion
{
	public function listEvents(){

		$events = DB::connection('mysql3')->select('CALL readIdea()');

		return $events;
	}

	public function addLike($n){

		$verif = DB::connection('mysql3')->select('CALL readLike(?,?)',[session('iduser'), $n]);

		if (count($verif) == 0) {
			
			DB::connection('mysql3')->statement('CALL addLike(?)',[$n]);
			DB::connection('mysql3')->statement('CALL addTableVoter(?,?)',[session('iduser'), $n]);

			return true;

		}
		else{

			return false;
		}
	}

	public function getDeleteIdea($n){

		DB::connection('mysql3')->statement('CALL getDeleteIdea(?)',[$n]);

		return true;
	}

	public function postEventByIdea($n, $request){

		$idea = DB::connection('mysql3')->select('CALL getIdea(?)',[$n]);

		print_r($idea);
		DB::connection('mysql3')->statement('CALL addEvent(?,?,?,?,?,?)',[$idea[0]->nom, $idea[0]->description, $request['date'], $request['type'], "Une seul fois", $idea[0]->image]);

		return true;

	}

	public function sendMailSignal($n){

		Mail::send('Idea/signal', array('n' => $n), function($message){
            $message->to('elcoco.01@orange.fr')->subject("Signalement")->from(session('email'));
		});

		return true;

	}
}
?>