<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class SignupGestion
{
	public function analyse($request)
	{

		$verif = DB::connection('mysql2')->select('CALL verifInscri(?)', [$request['email']]);
		if(count($verif) == 0){
			DB::connection('mysql2')->statement('CALL insertUsers(?,?,?,?,?,?)', [$request['email'], $request['name'], $request['firstname'], $request['password'], 'visiteur', $request['country']]);
			return true;
		}
		else{
			return false;
		}
	}
}
?>