<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class LoginGestion
{
	public function connect($request){

		$verif = DB::connection('mysql2')->select('CALL selectUser(?,?)', [$request['email'], $request['password']]);

		if (count($verif) == 1) {


			

			return true;
		}
		else{

			return false;
		}
	}
}
?>