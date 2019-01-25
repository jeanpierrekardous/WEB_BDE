<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class EventsGestion
{
	public function printEvents(){

		$resultEvents = DB::connection('mysql3')->select('CALL takeEvents()');

		return $resultEvents;
	}
}
?>