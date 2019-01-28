<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class AdminGestion
{
	public function manageAcc(){

		$allAccount = DB::connection('mysql2')->select('CALL getAccountAdmin()');

		return $allAccount;

	}
}
?>