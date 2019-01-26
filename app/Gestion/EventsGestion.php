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

	public function getPictureEvent($n){

		$resultSignupEvent = DB::connection('mysql3')->select('CALL getPictures(?)',[$n]);

		$resultAgreeToPost = DB::connection('mysql3')->select('CALL veriAgreeToPostPicture(?)',[$n]);

		$arrayTem = array('1' => $resultSignupEvent, $resultAgreeToPost);

		return $arrayTem;
	}

	public function addPictureEvent($n, $request){

		echo $request['images'];

		$chemin = config('image.pathEvents');
		$img = $request->file('images');
		$extension = $img->getClientOriginalExtension();

		do{
			$nom = str_random(10) . '.' . $extension;


		} while (file_exists($chemin . '/' . $nom));

		$img->move($chemin, $nom);
		$roadFull = $chemin.'/'.$nom;
		$vote = 0;

		DB::connection('mysql3')->statement('CALL addPictureEvent(?,?,?)', [$n, $roadFull, $vote]);

		return true;
	}

	public function addLikeEvent($n){

		$resultLikeEvent = DB::connection('mysql3')->select('CALL verifLikeEvent(?,?)',[session('iduser'), $n]);

		if(count($resultLikeEvent) == 0){

			DB::connection('mysql3')->statement('CALL insertUserPhoto(?,?)',[session('iduser'), $n]);
			DB::connection('mysql3')->statement('CALL addLikeEvent(?)',[$n]);

			return true;

		}
		else{

			return false;
		}
	}

	public function getCommentary($n){

		$resultListCommentary = DB::connection('mysql3')->select('CALL readCommentary(?)',[$n]);
		$resultPicture = DB::connection('mysql3')->select('CALL readPictureComment(?)',[$n]);

		$arrayTempo = array('1' => $resultListCommentary, $resultPicture);

		return $arrayTempo;
	}

	public function postCommentary($n, $request){

		DB::connection('mysql3')->statement('CALL addCommentary(?,?,?)',[$request['bodies'], $n, session('iduser')]);

		return true;
	}
}
?>