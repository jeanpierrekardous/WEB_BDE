<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\AdminGestion;

class AdminController extends Controller
{
    public function manageAccount(AdminGestion $gestion){

    	$allAccount = $gestion->manageAcc();

    	return view('Admin/adminaccount')->withAllAccount($allAccount);

    }
}
