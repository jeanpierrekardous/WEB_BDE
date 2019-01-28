<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

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
}
?>