<?php

namespace App\Gestion;


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

		$description = $request['description'];
		$name = $request['nameEvents'];
		
	}

}
?>