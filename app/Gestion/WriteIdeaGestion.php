<?php

namespace App\Gestion;


class WriteIdeaGestion
{
	public function writeIdeaEvent($request)
	{
		$chemin = config('image.path');
		$extension = $request->file('image')->getClientOriginalExtension();

		do{
			$nom = str_random(10) . '.' . $extension;


		} while (file_exists($chemin . '/' . $nom));


		$request->file('image')->move($chemin, $nom); 
	}
	
}
?>