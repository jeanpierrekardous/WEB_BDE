<?php

namespace App\Gestion;
use Illuminate\Support\Facades\DB;

class WriteIdeaGestion
{
	public function writeIdeaEvent($request)
	{
		$chemin = config('image.pathEvents');
		$extension = $request->file('image')->getClientOriginalExtension();

		do{
			$nom = str_random(10) . '.' . $extension;


		} while (file_exists($chemin . '/' . $nom));


		$request->file('image')->move($chemin, $nom);
		$roadFull = $chemin.'/'.$nom;
		$vote = 0;

		$description = $request['description'];
		$name = $request['nameEvents'];

		$insertinto = DB::connection('mysql3')->statement('CALL writeIdea(?,?,?,?)', [$name, $description, $roadFull, $vote]);
		
		return true;	
	}
}
?>