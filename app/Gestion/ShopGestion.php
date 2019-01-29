<?php

namespace App\Gestion;

use Illuminate\Support\Facades\DB;

class ShopGestion
{
	public function shopGet(){

		$article = $sessioncreate = DB::connection('mysql3')->select('CALL getArticle()');

		return $article;
	}
}
?>