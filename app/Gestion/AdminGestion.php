<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class AdminGestion
{
	public function manageAcc(){

		$allAccount = DB::connection('mysql2')->select('CALL getAccountAdmin()');

		return $allAccount;

	}

	public function deleteUser($request){
		
		DB::connection('mysql2')->select('CALL deleteUser(?)',[$request->id]);

		return true;
	}

	public function createUser($request){

		$verif = DB::connection('mysql2')->select('CALL verifInscri(?)', [$request['email']]);
		if(count($verif) == 0){
			DB::connection('mysql2')->statement('CALL insertUsers(?,?,?,?,?,?)', [$request['email'], $request['name'], $request['firstname'], $request['password'], $request['role'], $request['country']]);
			return true;
		}
	}
}
?>