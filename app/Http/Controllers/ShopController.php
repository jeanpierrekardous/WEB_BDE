<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\ShopGestion;

class ShopController extends Controller
{
    public function getShop(ShopGestion $gestion)
    {
    	$article = $gestion->shopGet();

    	return view('Shop/shop')->withArticle($article);
    }
}
