<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class EventsGestion
{
	public function printEvents(){

		$resultEvents = DB::connection('mysql3')->select('CALL takeEvents()');

		$resultSignupEvent = DB::connection('mysql3')->select('CALL readSignupEvent()');

		$arrayEvent = array('1' => $resultEvents, $resultSignupEvent);

		return $arrayEvent;
	}

	public function addSignupEvent($n){

		DB::connection('mysql3')->statement('CALL addSignupEvent(?,?)', [$n, session('iduser')]);

		return true;

	}
}
?>