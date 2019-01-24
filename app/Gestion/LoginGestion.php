<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class LoginGestion
{
	public function connect($request){

		$verif = DB::connection('mysql2')->select('CALL selectUser(?,?)', [$request['email'], $request['password']]);
		
		if (count($verif) == 1) {

			$sessioncreate = DB::connection('mysql2')->select('CALL createSession(?,?)', [$request['email'], $request['password']]);

			if (empty(session('email'))) {

				session(['email' => $request['email']]);
				session(['name' => $sessioncreate[0]->nom . " " . $sessioncreate[0]->prenom]);
				session(['role' => $sessioncreate[0]->role]);
				session(['local' => $sessioncreate[0]->localisation]);
				session(['iduser' => $sessioncreate[0]->id]);

			}

			return true;
		}
		else{

			return false;
		}
	}
}
?>