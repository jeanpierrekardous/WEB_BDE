<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class IdeaGestion
{
	public function listEvents(){

		$events = DB::connection('mysql3')->select('CALL readIdea()');

		return $events;
	}
}
?>